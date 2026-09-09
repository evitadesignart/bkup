(function(){
  const HINT_TEMPLATES = [
    (a,b) => `「${a}」と「${b}」をくっつけて、新しい商品を作るとしたら？`,
    (a,b) => `もし「${a}」の隣に「${b}」が突然現れたら、何が起きる？`,
    (a,b) => `「${a}」の特徴をヒントにして、「${b}」をアレンジするとしたら？`,
    (a,b) => `「${a}」と「${b}」の共通点から、新しい企画を一つ考えてみて。`,
    (a,b) => `「${a}」と「${b}」がコラボレーションするイベントを開くとしたら？`,
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
    if(el) {
      const btnWidth = window.innerWidth < 400 ? 200 : 250;
      google.accounts.id.renderButton(el, { theme: 'outline', size: 'large', text: 'signin_with', width: btnWidth });
    }
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

  window.appLogout = async function(){
    await api('./api/auth.php?action=logout', { method: 'POST' });
    currentUser = null;
    renderAuthBox();
  }

  function renderAuthBox(){
    const box = document.getElementById('auth-box');
    const promptArea = document.getElementById('login-prompt-area');
    const workspaceArea = document.getElementById('idea-workspace');

    if(currentUser){
      if(box) box.innerHTML = `
        <div class="user-chip">
          <i class="fa-solid fa-user"></i> ${escapeHtml(currentUser.email)}
          <a class="logout-link" onclick="appLogout()">ログアウト</a>
        </div>
      `;
      if(promptArea) promptArea.style.display = 'none';
      if(workspaceArea) workspaceArea.style.display = 'block';
    }else{
      if(box) box.innerHTML = ``; // 未ログイン時は何も表示しない
      if(promptArea) promptArea.style.display = 'block';
      if(workspaceArea) workspaceArea.style.display = 'none';
      renderSignInButton();
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
    const shuffled = [...HINT_TEMPLATES].sort(() => Math.random() - 0.5).slice(0, 1);
    el.innerHTML = shuffled.map(fn => `<div class="hint-item" style="font-weight:700; color:var(--text-main); background: #fdfcf9; padding: 12px 16px; border-left: 4px solid var(--accent-secondary); border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">${escapeHtml(fn(a.text, b.text))}</div>`).join('');
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
    document.getElementById('hints-container').style.display = 'block';
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
      <div class="idea-entry" style="position:relative;">
        <div class="idea-text">${escapeHtml(i.text).replace(/\n/g, '<br>')}</div>
        <div class="idea-source">タネ: 「${escapeHtml(i.a_text)}」 × 「${escapeHtml(i.b_text)}」</div>
        <div class="idea-meta">
          <span>${new Date(i.created_at).toLocaleDateString('ja-JP')}</span>
        </div>
        <button onclick="appDeleteIdea('${i.id}')" style="position:absolute; top:15px; right:15px; background:none; border:none; color:#e74c3c; cursor:pointer; font-size:16px;" title="削除"><i class="fa-solid fa-trash"></i></button>
      </div>
    `).join('');
  }

  window.appDeleteIdea = async function(id) {
    if(!confirm('この企画を削除しますか？')) return;
    try {
      await api('./api/ideas.php?action=delete', { method: 'POST', body: JSON.stringify({ id }) });
      await loadIdeas();
    } catch(e) {
      alert('削除に失敗しました: ' + e.message);
    }
  };

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

  // ---------- PWA Installation ----------
  let deferredPrompt;
  const installBtn = document.getElementById('install-app-btn');

  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent default prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    // Update UI to notify the user they can install the PWA
    if(installBtn) {
      installBtn.style.display = 'inline-block';
    }
  });

  if(installBtn) {
    installBtn.addEventListener('click', async () => {
      if(deferredPrompt) {
        deferredPrompt.prompt();
        const { outcome } = await deferredPrompt.userChoice;
        if(outcome === 'accepted') {
          console.log('User accepted the install prompt');
        } else {
          console.log('User dismissed the install prompt');
        }
        deferredPrompt = null;
        installBtn.style.display = 'none';
      }
    });
  }

  // Register Service Worker
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('./sw.js').then((registration) => {
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, (err) => {
        console.log('ServiceWorker registration failed: ', err);
      });
    });
  }
})();
