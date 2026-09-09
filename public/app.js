(function(){
  const HINT_TEMPLATES = [
    (a,b) => `「${a}」を、「${b}」のやり方で解決するとしたら、どんな企画になる？`,
    (a,b) => `「${a}」で起きていることを、「${b}」のルールに置き換えて考えると何が生まれる？`,
    (a,b) => `「${a}」を解消する仕組みを、「${b}」の世界からひとつ借りてくるとしたら？`,
    (a,b) => `「${a}」と「${b}」が同じ場所・同じ瞬間に起きたら、どんな矛盾や発見がある？`,
    (a,b) => `「${a}」をおもしろがっている人が、「${b}」に出会ったら何をしたくなる？`,
    (a,b) => `「${a}」を放っておいた5年後と、「${b}」のやり方で先に手を打った5年後、何が違う？`,
    (a,b) => `「${a}」のいちばん奇妙なディテールだけを取り出して、「${b}」の文脈にそのまま移植すると？`,
    (a,b) => `「${b}」では当たり前のことを疑ってみて、同じ疑いを「${a}」にもかけてみると何が見える？`,
    (a,b) => `「${a}」に困っている人が「${b}」に出会ったら、何を思いつく？`,
    (a,b) => `「${b}」が解決策だとしたら、それが効きそうな別の困りごとに「${a}」はなり得る？`,
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
      const config = await api('../api/config.php');
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
      const user = await api('../api/auth.php?action=google', {
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
      const data = await api('../api/auth.php?action=me');
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
        await api('../api/auth.php?action=logout', { method: 'POST' });
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
      cards = await api('../api/cards.php');
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
        <span class="tag">${escapeHtml(c.domain)}</span>
        <div class="text">${escapeHtml(c.text)}</div>
        <div class="meta">${escapeHtml(c.author || '名無し')} ・ ${new Date(c.created_at).toLocaleDateString('ja-JP')}</div>
      </div>
    `).join('');
  }

  document.getElementById('submit-card').addEventListener('click', async () => {
    const text = document.getElementById('text-input').value.trim();
    const domain = document.getElementById('domain-input').value.trim();
    const author = document.getElementById('author-input').value.trim();

    if(!text || !domain){
      setStatus('submit-status', 'テキストと領域タグは両方入力してください。', true);
      return;
    }

    const btn = document.getElementById('submit-card');
    btn.disabled = true;
    setStatus('submit-status', '保存しています…');

    try{
      await api('../api/cards.php', { method: 'POST', body: JSON.stringify({ text, domain, author }) });
      setStatus('submit-status', '書き留めました。');
      document.getElementById('text-input').value = '';
      document.getElementById('domain-input').value = '';
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
          <span class="letter">A</span>
          <div class="tag">${escapeHtml(a.domain)}</div>
          <div class="text">${escapeHtml(a.text)}</div>
        </div>
        <div class="match-x">×</div>
        <div class="match-card">
          <span class="letter">B</span>
          <div class="tag">${escapeHtml(b.domain)}</div>
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
      const ideas = await api('../api/ideas.php');
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
      await api('../api/ideas.php', {
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

  // ---------- Init ----------
  window.addEventListener('load', () => {
    // Google script loads async; give it a brief moment, then init auth regardless
    setTimeout(initAuth, 300);
  });
  loadCards();
})();
