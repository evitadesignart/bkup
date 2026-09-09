(function(){
  const HINT_TEMPLATES = [
    (a,b) => `「${a}」×「${b}」の手法＝？`,
    (a,b) => `「${a}」×「${b}」のルール＝？`,
    (a,b) => `「${a}」×「${b}」の解決策＝？`,
    (a,b) => `「${a}」×「${b}」の同時発生＝？`,
    (a,b) => `「${a}」好きが「${b}」に出会うと？`,
    (a,b) => `「${a}」の未来を「${b}」で変えると？`,
    (a,b) => `「${a}」へ「${b}」を移植すると？`,
    (a,b) => `「${b}」の常識で「${a}」を疑うと？`,
    (a,b) => `「${a}」を「${b}」で解決すると？`,
    (a,b) => `「${b}」を「${a}」に当てはめると？`,
  ];

  let cards = [];
  let currentUser = null;
  let currentMatch = null;

  function escapeHtml(s){
    return (s || '').replace(/[&<>"']/g, c => ({
      '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'
    }[c]));
  }

  function setStatus(id, msg, isError){
    const el = document.getElementById(id);
    el.textContent = msg || '';
    el.classList.toggle('error', !!isError);
  }

  async function api(path, options){
    const res = await fetch(path, {
      credentials: 'same-origin',
      headers: { 'Content-Type': 'application/json' },
      ...options,
    });
    let data = null;
    try { data = await res.json(); } catch(e) { /* no body */ }
    if(!res.ok){
      const err = new Error((data && data.error) || `リクエストに失敗しました (${res.status})`);
      err.status = res.status;
      throw err;
    }
    return data;
  }

  // ---------- Auth ----------
  async function initAuth(){
    try{
      const config = await api('./api/config.php');
      if(config.googleClientId && window.google && window.google.accounts){
        google.accounts.id.initialize({
          client_id: config.googleClientId,
          callback: handleCredentialResponse,
        });
        renderSignInButton();
      }
    }catch(e){
      console.error('Google auth config load failed', e);
    }
    await refreshUser();
  }

  function renderSignInButton(){
    const el = document.getElementById('g_id_signin');
    if(el) google.accounts.id.renderButton(el, { theme: 'outline', size: 'medium', text: 'signin_with' });
  }

  async function handleCredentialResponse(response){
    try{
      const user = await api('./api/auth.php?action=google', {
        method: 'POST',
        body: JSON.stringify({ credential: response.credential }),
      });
      currentUser = user;
      renderAuthBox();
      await loadIdeas();
    }catch(e){
      setStatus('idea-status', 'ログインに失敗しました。もう一度お試しください。', true);
    }
  }

  async function refreshUser(){
    try{
      const data = await api('./api/auth.php?action=me');
      currentUser = data.user;
    }catch(e){
      currentUser = null;
    }
    renderAuthBox();
    if(currentUser) await loadIdeas();
  }

  function renderAuthBox(){
    const box = document.getElementById('auth-box');
    const gate = document.getElementById('idea-log-gate');
    const log = document.getElementById('idea-log');

    if(currentUser){
      box.innerHTML = `
        <div class="user-chip">
          <span>${escapeHtml(currentUser.name)} としてログイン中</span>
          <span class="logout-link" id="logout-link">ログアウト</span>
        </div>
      `;
      document.getElementById('logout-link').addEventListener('click', async () => {
        await api('./api/auth.php?action=logout', { method: 'POST' });
        currentUser = null;
        renderAuthBox();
      });
      gate.style.display = 'none';
      log.style.display = 'flex';
    }else{
      box.innerHTML = `<div id="g_id_signin"></div>`;
      renderSignInButton();
      gate.style.display = 'block';
      log.style.display = 'none';
    }
  }

  // ---------- Cards ----------
  async function loadCards(){
    try{
      cards = await api('./api/cards.php');
    }catch(e){
      cards = [];
    }
    renderCardList();
  }

  function renderCardList(){
    const el = document.getElementById('card-list');
    if(cards.length === 0){
      el.innerHTML = '<div class="empty-note">まだ違和感が投稿されていません。最初のひとつを書き留めてみましょう。</div>';
      return;
    }
    el.innerHTML = cards.map(c => `
      <div class="mini-card">
        <div class="text">${escapeHtml(c.text)}</div>
        <div class="meta">${new Date(c.created_at).toLocaleDateString('ja-JP')}</div>
      </div>
    `).join('');
  }

  document.getElementById('submit-card').addEventListener('click', async () => {
    const text = document.getElementById('text-input').value.trim();
    const domain = "一般"; // 領域タグは廃止したため固定値

    if(!text){
      setStatus('submit-status', 'テキストを入力してください。', true);
      return;
    }

    const btn = document.getElementById('submit-card');
    btn.disabled = true;
    setStatus('submit-status', '保存しています…');

    try{
      await api('./api/cards.php', { method: 'POST', body: JSON.stringify({ text, domain }) });
      setStatus('submit-status', '書き留めました。');
      document.getElementById('text-input').value = '';
      await loadCards();
    }catch(e){
      setStatus('submit-status', e.message, true);
    }finally{
      btn.disabled = false;
    }
  });

  // ---------- Matching ----------
  function pickMatch(){
    if(cards.length < 2) return null;
    const domains = [...new Set(cards.map(c => c.domain))];
    if(domains.length >= 2){
      const shuffledDomains = [...domains].sort(() => Math.random() - 0.5);
      const dA = shuffledDomains[0], dB = shuffledDomains[1];
      const poolA = cards.filter(c => c.domain === dA);
      const poolB = cards.filter(c => c.domain === dB);
      const a = poolA[Math.floor(Math.random() * poolA.length)];
      const b = poolB[Math.floor(Math.random() * poolB.length)];
      return { a, b };
    }
    const shuffled = [...cards].sort(() => Math.random() - 0.5);
    return { a: shuffled[0], b: shuffled[1] };
  }

  function renderMatch(){
    const area = document.getElementById('match-area');
    if(!currentMatch){ area.innerHTML = ''; return; }
    const { a, b } = currentMatch;
    area.innerHTML = `
      <div class="match-row">
        <div class="match-card">
          <div class="text">${escapeHtml(a.text)}</div>
        </div>
        <div class="match-x">×</div>
        <div class="match-card">
          <div class="text">${escapeHtml(b.text)}</div>
        </div>
      </div>
    `;
  }

  function renderHints(){
    const el = document.getElementById('hints-area');
    if(!currentMatch){ el.innerHTML = ''; return; }
    const { a, b } = currentMatch;
    const shuffled = [...HINT_TEMPLATES].sort(() => Math.random() - 0.5).slice(0, 3);
    el.innerHTML = shuffled.map(fn => `<div class="hint-item">${escapeHtml(fn(a.text, b.text))}</div>`).join('');
  }

  document.getElementById('draw-match').addEventListener('click', () => {
    if(cards.length < 2){
      setStatus('match-status', '違和感が2件以上たまると掛け合わせできます。', true);
      return;
    }
    currentMatch = pickMatch();
    setStatus('match-status', '');
    renderMatch();
    renderHints();
    document.getElementById('shuffle-hints').disabled = false;
    document.getElementById('idea-panel').style.display = 'block';
  });

  document.getElementById('shuffle-hints').addEventListener('click', () => {
    if(currentMatch) renderHints();
  });

  // ---------- Ideas ----------
  async function loadIdeas(){
    if(!currentUser){
      document.getElementById('idea-log').innerHTML = '';
      return;
    }
    try{
      const ideas = await api('./api/ideas.php');
      renderIdeaLog(ideas);
    }catch(e){
      document.getElementById('idea-log').innerHTML = '<div class="empty-note">企画ログの読み込みに失敗しました。</div>';
    }
  }

  function renderIdeaLog(ideas){
    const el = document.getElementById('idea-log');
    if(!ideas || ideas.length === 0){
      el.innerHTML = '<div class="empty-note">まだ企画は残されていません。掛け合わせから何か生まれたら、ここに残せます（自分だけが見られます）。</div>';
      return;
    }
    el.innerHTML = ideas.map(i => `
      <div class="idea-entry">
        <div class="idea-text">${escapeHtml(i.text)}</div>
        <div class="idea-source">出発点：「${escapeHtml(i.a_domain)}」${escapeHtml(i.a_text)} × 「${escapeHtml(i.b_domain)}」${escapeHtml(i.b_text)}</div>
        <div class="idea-meta">
          <span>${new Date(i.created_at).toLocaleDateString('ja-JP')}</span>
        </div>
      </div>
    `).join('');
  }

  document.getElementById('save-idea').addEventListener('click', async () => {
    const text = document.getElementById('idea-input').value.trim();
    if(!text){
      setStatus('idea-status', '企画メモを入力してください。', true);
      return;
    }
    if(!currentMatch){
      setStatus('idea-status', '先に違和感を2つ引いてください。', true);
      return;
    }
    if(!currentUser){
      setStatus('idea-status', '企画ログを保存するにはGoogleでログインしてください。', true);
      return;
    }

    const btn = document.getElementById('save-idea');
    btn.disabled = true;
    setStatus('idea-status', '保存しています…');

    try{
      await api('./api/ideas.php', {
        method: 'POST',
        body: JSON.stringify({
          text,
          aText: currentMatch.a.text, aDomain: currentMatch.a.domain,
          bText: currentMatch.b.text, bDomain: currentMatch.b.domain,
        }),
      });
      setStatus('idea-status', '企画ログに残しました。');
      document.getElementById('idea-input').value = '';
      await loadIdeas();
    }catch(e){
      setStatus('idea-status', e.message, true);
    }finally{
      btn.disabled = false;
    }
  });

  // ---------- Backgrounds ----------
  async function loadBackgrounds(){
    let images = [];
    try {
      const res = await api('./api/backgrounds.php');
      // backgrounds.phpが {success: true, images: [...]} のような詳細データを返すように変更した場合の対応
      if(res && res.success && res.images){
        images = res.images;
      } else if (Array.isArray(res)) {
        images = res;
      } else {
        console.error('Backgrounds API Error:', res.error || 'Unknown format', 'Checked Path:', res.checked_paths);
      }
    } catch(e) {
      console.error('Backgrounds load failed. ネットワークエラーかファイルが存在しません。', e);
    }

    const container = document.getElementById('bg-container');
    
    // APIから画像が取得できた場合のみ、HTMLを上書きする
    if(images && images.length > 0) {
      container.innerHTML = ''; // デフォルトをクリア
      images.forEach((src, i) => {
        const div = document.createElement('div');
        div.className = 'bg-image' + (i === 0 ? ' active' : '');
        div.style.backgroundImage = `url('${src}')`;
        container.appendChild(div);
      });
    }

    // 背景切り替えのアニメーション開始（API取得画像、またはデフォルト画像のどちらでも動作）
    const bgs = document.querySelectorAll('.bg-image');
    if(bgs.length > 1) {
      let currentBg = 0;
      setInterval(() => {
        bgs[currentBg].classList.remove('active');
        currentBg = (currentBg + 1) % bgs.length;
        bgs[currentBg].classList.add('active');
      }, 12000);
    }
  }

  // ---------- Carousel Mouse Drag ----------
  function initCarouselDrag(){
    const slider = document.querySelector('.hint-carousel');
    if(!slider) return;
    let isDown = false;
    let startX;
    let scrollLeft;

    const snapBack = () => {
      isDown = false;
      slider.style.cursor = 'grab';
      slider.style.scrollSnapType = 'x mandatory'; // ドラッグ終了時にスナップを戻す
      slider.style.removeProperty('user-select');
    };

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.style.cursor = 'grabbing';
      slider.style.scrollSnapType = 'none'; // ドラッグ中はCSSの強制スナップを解除する
      slider.style.userSelect = 'none'; // テキスト選択を無効化
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', snapBack);
    slider.addEventListener('mouseup', snapBack);
    slider.addEventListener('mousemove', (e) => {
      if(!isDown) return;
      e.preventDefault(); // テキスト選択等のデフォルト動作を完全にブロック
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 2.5; // スクロール速度を少し速く
      slider.scrollLeft = scrollLeft - walk;
    });
  }

  // ---------- Page Top Button ----------
  function initPageTop(){
    const btn = document.getElementById('page-top');
    if(!btn) return;
    window.addEventListener('scroll', () => {
      if(window.scrollY > 300) {
        btn.style.opacity = '0.9';
        btn.style.pointerEvents = 'auto';
      } else {
        btn.style.opacity = '0';
        btn.style.pointerEvents = 'none';
      }
    });
    btn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    // 初期状態
    if(window.scrollY <= 300) {
      btn.style.opacity = '0';
      btn.style.pointerEvents = 'none';
    }
  }

  // ---------- Init ----------
  document.addEventListener('DOMContentLoaded', () => {
    initCarouselDrag();
    initPageTop();
  });
  window.addEventListener('load', () => {
    // Google script loads async; give it a brief moment, then init auth regardless
    setTimeout(initAuth, 300);
  });
  loadCards();
  loadBackgrounds();
})();
