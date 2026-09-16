<?php require_once 'counter.php'; track_page_view(basename(__FILE__, '.php')); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CX0Q57RVS9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-CX0Q57RVS9');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6729293840967461"
    crossorigin="anonymous"></script>
  <meta name="author" content="Evita Designart">

  
  <meta property="og:image" content="https://evitadesignart.com/horo/img/ogp.jpg">
  <meta name="description"
    content="大アルカナ22枚のカードから1枚を選び、正位置か逆位置でYESかNOの答えを導くワンオラクル占いです。あなたの未来の可能性をシンプルに読み解きます。無料でご利用いただけます。" />

  <!-- OGP設定 -->
  <meta property="og:title" content="YESNOワンオラクル占い | 大アルカナ22枚から未来をYESかNOで読み解く" />
  <meta property="og:description"
    content="大アルカナ22枚のカードから1枚を選び、正位置か逆位置でYESかNOの答えを導くワンオラクル占いです。あなたの未来の可能性をシンプルに読み解きます。" />
  <meta property="og:url" content="https://evitadesignart.com/horo/tarotte12.php" />
  <meta name="twitter:title" content="YESNOワンオラクル占い | 大アルカナ22枚から未来をYESかNOで読み解く" />
  <meta name="twitter:description"
    content="大アルカナ22枚のカードから1枚を選び、正位置か逆位置でYESかNOの答えを導くワンオラクル占いです。あなたの未来の可能性をシンプルに読み解きます。" />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "この占いは無料ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "はい、無料で何度でもご利用いただけます。"
        }
      },
      {
        "@type": "Question",
        "name": "1日に何回でも占えますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "はい、何度でも可能ですが、結果をじっくり受け止めるなら1日1回がおすすめです。"
        }
      },
      {
        "@type": "Question",
        "name": "正位置と逆位置の意味は？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "正位置はYESの可能性が高いことを示し、逆位置はNOの可能性が高いことを示します。"
        }
      },
      {
        "@type": "Question",
        "name": "大アルカナとは何ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "タロットカードの中で、人生の重要なテーマや運命を象徴する22枚のカードです。"
        }
      },
      {
        "@type": "Question",
        "name": "スマホでも利用できますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "はい、スマホやタブレット、PCなど様々な端末に対応しています。"
        }
      },
      {
        "@type": "Question",
        "name": "初心者でも使えますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "はい、カードの意味や結果が分かりやすく表示されるので初めての方でも安心です。"
        }
      }
    ]
  }
  </script>

  <style>
    html {
      background-image: url("img/sky010.png");
      background-repeat: repeat;
      background-size: 25%;
      background-color: rgba(0, 0, 0, 0.8);
      background-blend-mode: darken;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #1a1a2ee3;
      padding: 1rem;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #1a1a2ee3;
      color: #e0e0e0;
      text-align: center;
      padding-top: 180px;
      margin: 0;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
    }

    h1 {
      font-size: 2rem;
      display: inline-block;
      margin-bottom: 1rem;
      color: #c9a0dc;
      text-shadow: 0 0 6px #9b59b6;
    }

    button {
      padding: 1rem 2rem;
      width: 80%;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      background-color: #6f42c1;
      color: #f0e6f6;
      cursor: pointer;
      margin-bottom: 0.5rem;
      box-shadow: 0 0 10px #7d5fff;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #9b59b6;
      box-shadow: 0 0 15px #bb8fce;
    }

    #cards-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 30px 0;
    }

    @media (min-width: 768px) {
      .card {
        width: calc(12.5% - 10px) !important;
        margin: 5px !important;
      }
    }
    .card {
      width: calc(25% - 10px);
      height: auto;
      aspect-ratio: 2 / 3;
      margin: 5px;
      background-color: #333;
      border-radius: 10px;
      cursor: pointer;
      box-shadow: 0 0 10px rgba(155, 89, 182, 0.7);
      background-size: cover;
      background-position: center;
      background-image: url('card2/back.jpg');
      transition: transform 0.3s, box-shadow 0.3s;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .card:hover {
      transform: scale(1.1);
      box-shadow: 0 0 20px rgba(187, 143, 206, 0.9);
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1001;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      overflow-y: auto;
    }

    .modal-content {
      cursor: default;
      background-color: #2c2c54;
      margin: 5vh auto;
      padding: 30px;
      width: 80%;
      max-width: 500px;
      max-height: 85vh;
      overflow-y: auto;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 20px rgba(155, 89, 182, 0.8);
      box-sizing: border-box;
    }

    .close {
      color: #aaa;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: #fff;
    }

    #card-img {
      width: 50%;
      max-width: 200px;
      border-radius: 8px;
      margin-bottom: 20px;
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    #card-title {
      font-size: 24px;
      color: #dcd6f7;
      font-weight: bold;
      margin-bottom: 15px;
      text-shadow: 0 0 5px #4b3f72;
    }

    #card-description {
      font-size: 16px;
      color: #dcd6f7;
      line-height: 1.5;
      text-shadow: 0 0 5px #4b3f72;
    }

    a {
      color: yellow;
    }

    footer {
      margin-top: 2rem;
    }

    footer small {
      font-size: 12px;
      color: #aaa;
    }

    #card-img {
      transition: transform 0.4s ease;
    }
  </style>
  <style>
    @media (min-width: 768px) {
      br[class*="md:hidden"] {
        display: none !important;
      }
    }
  </style>
<style>
  .parallax-bg-section, .nav-parallax-bg {
    
  }
  @media screen and (max-width: 768px) {
    .parallax-bg-section, .nav-parallax-bg {
      
    }
    .footer-link-grid {
      flex-direction: column !important;
      align-items: center !important;
    }
  }
</style>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "xpag8axifh");
</script>
</head>

<body>
  <header>
    <a href="https://evitadesignart.com/horo/">
      <h1>YES・NO<br>ワンカード占い</h1>
    </a>

        <?php include("nav.php"); ?>
  </header>
  <style>
    .fv-wrapper-custom {
      width: 100vw;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
      margin-bottom: 40px;
      line-height: 0;
      z-index: 0;
    }

    .badge-container {
      position: absolute;
      bottom: 8px;
      /* body max-width:1000px の見える左端に合わせる（全幅FVのはみ出し対策） */
      left: max(8px, calc(50% - 500px + 8px));
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
      pointer-events: none;
      z-index: 10;
      line-height: 1.2;
    }

    .badge-type {
      background: linear-gradient(135deg, #dfa32a 0%, #fbe8a1 30%, #dfa32a 50%, #c48b1a 80%, #fbe8a1 100%);
      color: #3e2723;
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 0.85rem;
      font-weight: 700;
      font-family: "Noto Serif JP", "Yu Mincho", "MS PMincho", serif;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5), inset 0 1px 2px rgba(255, 255, 255, 0.8), inset 0 -1px 2px rgba(0, 0, 0, 0.3);
      border: 1px solid #a37213;
      text-shadow: 0 1px 1px rgba(255, 255, 255, 0.6);
    }
  </style>
  <div id="fv-wrapper" class="fv-wrapper-custom">
    <img src="img/fv_tarotte12.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
    <div class="badge-container"><span class="badge-type">タロット占い</span><span class="badge-type">二択</span><span class="badge-type">YES</span><span class="badge-type">NO</span></div>
  </div>
  <script>
    (function(){
      var header = document.querySelector("header");
      var fv = document.getElementById("fv-wrapper");
      if (header && fv) {
        var adjust = function() {
          fv.style.marginTop = "0px";
          var baseTop = fv.getBoundingClientRect().top + window.scrollY;
          var diff = baseTop - header.offsetHeight;
          fv.style.marginTop = "-" + diff + "px";
        };
        adjust();
        window.addEventListener("resize", adjust);
        window.addEventListener("load", adjust);
      }
    })();
  </script>
<style>
.fv-buttons {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.5rem;
  margin-top: 1rem;
  margin-bottom: 2rem;
  position: relative;
  z-index: 10;
  width: 100%;
  box-sizing: border-box;
  padding: 0 0.5rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}
@media (min-width: 768px) {
  .fv-buttons {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    padding: 0;
  }
}
@keyframes floatCard {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-8px); }
  100% { transform: translateY(0px); }
}
.tarot-btn {
  background: linear-gradient(145deg, #2e2e3a, #1a1a2e);
  border: 2px solid #9a6282;
  border-radius: 12px;
  width: 100%;
  aspect-ratio: 0.7;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  transition: all 0.3s ease;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
  position: relative;
  animation: floatCard 4s ease-in-out infinite;
  font-size: 0.75rem;
  text-align: center;
  padding: 0.2rem;
  box-sizing: border-box;
}
@media (min-width: 768px) {
  .tarot-btn {
    width: calc(33.333% - 15px);
    height: auto;
    aspect-ratio: 0.7;
    max-width: 200px;
    font-size: 1rem;
    padding: 0;
    box-sizing: border-box;
  }
}
.tarot-btn:nth-child(1) { animation-delay: 0s; }
.tarot-btn:nth-child(2) { animation-delay: 0.8s; }
.tarot-btn:nth-child(3) { animation-delay: 1.6s; }
.tarot-btn::before {
  content: ''; position: absolute;
  top: 4px; left: 4px; right: 4px; bottom: 4px;
  border: 1px dashed #9a6282; border-radius: 8px; pointer-events: none;
}
@media (min-width: 768px) {
  .tarot-btn::before { top: 6px; left: 6px; right: 6px; bottom: 6px; }
}
.tarot-btn:hover {
  animation-play-state: paused; transform: translateY(-10px) scale(1.05);
  border-color: #d4af37; box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
  color: #ffd; z-index: 20;
}
.tarot-btn:hover::before { border-color: #d4af37; }
.tarot-btn i { font-size: 1.5rem; margin-bottom: 0.5rem; color: #bbd9e6; transition: color 0.3s ease; }
@media (min-width: 768px) {
  .tarot-btn i { font-size: 2.5rem; margin-bottom: 1rem; }
}
.tarot-btn:hover i { color: #d4af37; }
</style>
<div class="fv-buttons">
  <a href="https://evitadesignart.com/horo/#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
  <a href="https://evitadesignart.com/horo/#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
  <a href="https://evitadesignart.com/horo/#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
</div>
  <p style="max-width: 720px; margin: 0 auto; font-size: 1rem; color: #e0dede; line-height: 1.6;">
    タロットの<strong>大アルカナ22枚</strong>から1枚を引き、<br>
    <strong>「YES」か「NO」</strong>で答える<br class="md:hidden">シンプルなワンオラクル占いです。<br><br>
    カードの向き（正位置・逆位置）によって<br class="md:hidden">意味が変わり、<br>
    正位置でも逆位置でも<br class="md:hidden"><strong>YES・NOのどちらかの答え</strong>を示します。<br><br>
    占い結果は状況やカードごとに変わるため、<br>
    柔軟にご自身の直感や状況に<br class="md:hidden">照らし合わせてお使いください。
  </p>

  <style>
    @media (max-width: 767px) {
      .sp-text-left {
        text-align: left !important;
      }
    }
  </style>
  <div class="sp-text-left"
    style="background:#112244; padding: 1em 1.2em; border-radius: 8px; margin: 1.5em 0; line-height: 1.7; color:#aabbff;">
    <strong>こんな方におすすめ：</strong>
    <ul style="list-style: none; padding-left: 0; margin-top: 0.5em; margin-bottom: 0;">
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・迷いごとにシンプルな<br class="md:hidden">答えを求めたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・YESかNOの<br class="md:hidden">ヒントを知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・選択の<br class="md:hidden">後押しがほしい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・自分の直感を信じるための<br class="md:hidden">サポートが欲しい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・複雑な悩みを<br class="md:hidden">一歩引いて見たい</li>
    </ul>
  </div>


  <div id="cards-container"></div>

  <!-- モーダル -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span id="close" class="close">&times;</span>
      <h2 id="card-title"></h2>
      <img id="card-img" src="" alt="カード">
      <p id="card-description"></p>
    </div>
  </div>


  <p>
    イラストなどは<a href="https://nano-design.booth.pm/">BOOTH</a>、<a
      href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a>にて<br
      class="md:hidden">販売中です。
    <br><br>

  </p>

  <style>
    /* Bottom Navigation Buttons */
    .bottom-nav-buttons {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
      max-width: 600px;
      margin: 3rem auto;
      padding: 0 15px;
    }
    .bottom-nav-buttons .nav-btn-gold {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723 !important;
      text-decoration: none !important;
      padding: 12px 5px !important;
      border-radius: 30px !important;
      font-weight: 800 !important;
      font-size: 0.9rem !important;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.5), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6) !important;
      border: 1px solid #ffeaa7 !important;
      text-shadow: 0 1px 1px rgba(255, 255, 255, 0.8) !important;
      transition: all 0.3s ease !important;
      display: flex !important;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      font-family: 'Noto Sans JP', sans-serif !important;
      margin: 0 !important;
      width: 100% !important;
      box-sizing: border-box !important;
    }
    .bottom-nav-buttons .nav-btn-gold::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.7) 50%, rgba(255,255,255,0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    @keyframes gold-shine {
      0% { left: -100%; }
      20% { left: 200%; }
      100% { left: 200%; }
    }
    .bottom-nav-buttons .nav-btn-gold:hover {
      transform: translateY(-4px) !important;
      box-shadow: 0 8px 20px rgba(212, 175, 55, 0.6), inset 0 2px 2px rgba(255, 255, 255, 0.9) !important;
      background-position: right center !important;
    }
    .bottom-nav-buttons .nav-btn-gold:nth-child(5) {
      grid-column: span 2;
    }
    @media (min-width: 768px) {
      .bottom-nav-buttons {
        grid-template-columns: repeat(5, 1fr);
        max-width: 1000px;
        gap: 15px;
      }
      .bottom-nav-buttons .nav-btn-gold:nth-child(5) {
        grid-column: span 1;
      }
      .bottom-nav-buttons .nav-btn-gold {
        font-size: 1rem !important;
        padding: 15px 10px !important;
      }
    }
</style>
<div class="bottom-nav-buttons">
  <a href="https://evitadesignart.com/horo/#menu-links" class="nav-btn-gold">星座＆タロット</a>
  <a href="https://evitadesignart.com/horo/#tarot-menu" class="nav-btn-gold">タロット</a>
  <a href="https://evitadesignart.com/horo/#zodiac-menu" class="nav-btn-gold">星座</a>
  <a href="https://evitadesignart.com/horo/#color-menu" class="nav-btn-gold">その他</a>
  <a href="https://evitadesignart.com/horo/#horoscope" class="nav-btn-gold">アセンダント診断</a>
</div>
<h2><a href="https://evitadesignart.com/horo/" style="display: block; width: 100%; text-align: center;"><button style="width: 100%; max-width: 600px;">占い一覧はコチラ</button></a></h2>
  <footer>

    <div class="footer-added-section parallax-bg-section" style="background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; color: #fff; padding: 4rem 1rem; margin-bottom: 2rem; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); box-sizing: border-box;">
    <div class="footer-menu" style="text-align: center; max-width: 1000px; margin: 0 auto; padding: 0 1rem; box-sizing: border-box;">
            <div class="footer-link-grid" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; line-height: 1.5; font-size: 0.9rem;">
        <a href="https://evitadesignart.com/horo/" title="占い一覧ページ" style="text-decoration: none; color: #fff;">TOP</a>
        <a href="https://evitadesignart.com/horo/tarotte7.php" title="タロットと星座で今週の運勢" style="text-decoration: none; color: #fff;">今週の運勢(タロット&amp;星座)</a>
        <a href="https://evitadesignart.com/horo/tarotte5.php" title="タロットと星座で今月の運勢" style="text-decoration: none; color: #fff;">今月の運勢(タロット&amp;星座)</a>
        <a href="https://evitadesignart.com/horo/tarotte6.php" title="タロットと星座で今年の運勢" style="text-decoration: none; color: #fff;">今年の運勢(タロット&amp;星座)</a>
        <a href="https://evitadesignart.com/horo/tarotte2.php" title="大アルカナ1枚占い" style="text-decoration: none; color: #fff;">タロット大アルカナ1枚占い</a>
        <a href="https://evitadesignart.com/horo/tarotte4.php" title="大アルカナ2枚占い" style="text-decoration: none; color: #fff;">タロット大アルカナ2枚占い</a>
        <a href="https://evitadesignart.com/horo/tarotte.php" title="大アルカナ3枚占い" style="text-decoration: none; color: #fff;">タロット大アルカナ3枚占い</a>
        <a href="https://evitadesignart.com/horo/tarotte9.php" title="相手と自分の2枚占い" style="text-decoration: none; color: #fff;">タロット2枚相手と自分占い</a>
        <a href="https://evitadesignart.com/horo/tarotte8.php" title="恋愛に特化した3枚占い" style="text-decoration: none; color: #fff;">タロット3枚恋愛占い</a>
        <a href="https://evitadesignart.com/horo/tarotte3.php" title="小アルカナ占い" style="text-decoration: none; color: #fff;">タロット小アルカナ占い</a>
        <a href="https://evitadesignart.com/horo/tarotte10.php" title="アルカナ診断" style="text-decoration: none; color: #fff;">あなたのアルカナ診断</a>
        <a href="https://evitadesignart.com/horo/tarotte11.php" title="ターニングポイント占い" style="text-decoration: none; color: #fff;">ターニングポイント占い</a>
        <a href="https://evitadesignart.com/horo/tarotte12.php" title="YESNOワンカード占い" style="text-decoration: none; color: #fff;">YES・NOワンカード占い</a>
        <a href="https://evitadesignart.com/horo/zodiac.php" title="太陽星座の占い" style="text-decoration: none; color: #fff;">星座占い(太陽星座)</a>
        <a href="https://evitadesignart.com/horo/zodiac2.php" title="月星座の占い" style="text-decoration: none; color: #fff;">星座占い(月星座)</a>
        <a href="https://evitadesignart.com/horo/zodiac3.php" title="アセンダントの星座占い" style="text-decoration: none; color: #fff;">星座占い(アセンダント)</a>
        <a href="https://evitadesignart.com/horo/color24.php" title="24色から占う性格診断" style="text-decoration: none; color: #fff;">24の色占い</a>
        <a href="https://evitadesignart.com/horo/engel.php" title="エンジェルナンバーガイド" style="text-decoration: none; color: #fff;">エンジェルナンバーガイド</a>
      </div>
    </div>
</div>
    <div class="footer-brand" style="text-align: center; margin-bottom: 2rem;">
      <a href="https://evitadesignart.com/horo/" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.5rem; text-decoration: none; color: inherit;">占いアルカノヴァ</a><br>
      <small style="display: block; margin-top: 0.5rem; font-size: 0.8rem; color: #ccc;">運営 <a href="https://evitadesignart.com/" style="text-decoration: none; color: inherit;">EvitaDesignart</a></small>
    </div>

    <small>&copy;2016 -
      <script>document.write(new Date().getFullYear());</script> Evita Designart.
    </small>
  </footer>

  <script>
    const cardsData = [
      {
        "name": "愚者",
        "img": "card4/00.jpg",
        "description": "これから新たな扉が開こうとしています。あなたの前には未知の世界が広がり...",
        "reversed": "変化への衝動が強まる一方で、慎重さを欠いている可能性があります...",
        "result": "YES",
        "resultDescription": {
          "YES": "新しいことに挑戦する準備ができています。今の一歩は吉となるでしょう。",
          "NO": "焦りは禁物です。準備を整えることでより良い結果が期待できます。"
        }
      },
      {
        "name": "魔術師",
        "img": "card4/01.jpg",
        "description": "あなたが長く温めてきたアイデアや力が、今こそ現実化のタイミングを迎えています。",
        "reversed": "準備や自信が追いついていないかもしれません。焦らず土台を整えましょう。",
        "result": "YES",
        "resultDescription": {
          "YES": "あなたの持つ力を活かして成功へ進むチャンスです。",
          "NO": "自信を持つことが鍵です。焦らず土台を固めて。"
        }
      },
      {
        "name": "女教皇",
        "img": "card4/02.jpg",
        "description": "静かな直感に耳を傾けることで、転機を乗り越える鍵となります。",
        "reversed": "思考と感情のバランスを崩しやすい状態です。自分の軸を見つめ直しましょう。",
        "result": "NO",
        "resultDescription": {
          "YES": "内なる声があなたを正しい方向へ導いています。",
          "NO": "今は内面の調整が必要です。焦らず自分と向き合いましょう。"
        }
      },
      {
        "name": "女帝",
        "img": "card4/03.jpg",
        "description": "創造性や愛情が人生の次なるステージへと導きます。",
        "reversed": "過度な依存が成長を妨げているかもしれません。自立を意識しましょう。",
        "result": "YES",
        "resultDescription": {
          "YES": "豊かさと愛に満ちた転機が訪れています。",
          "NO": "依存心を手放し、自分の力で歩む時です。"
        }
      },
      {
        "name": "皇帝",
        "img": "card4/04.jpg",
        "description": "リーダーシップと決断力が人生の基盤を固めます。",
        "reversed": "頑固さが障害になっています。柔軟な姿勢が必要です。",
        "result": "YES",
        "resultDescription": {
          "YES": "あなたの意思が周囲を動かし、道を開きます。",
          "NO": "頑なな態度を緩めることで、新たな可能性が見えます。"
        }
      },
      {
        "name": "法王",
        "img": "card4/05.jpg",
        "description": "伝統や信頼の中で学びを深め、方向性が整います。",
        "reversed": "形式に縛られ過ぎて本来の意志を見失いかけています。",
        "result": "NO",
        "resultDescription": {
          "YES": "既存の枠組みの中で安定と成長が望めます。",
          "NO": "型にはまらず、自分の価値観を大切にしましょう。"
        }
      },
      {
        "name": "恋人",
        "img": "card4/06.jpg",
        "description": "重要な選択の時。心が導く道を選びましょう。",
        "reversed": "迷いが決断を妨げています。内なる声に耳を澄ませて。",
        "result": "YES",
        "resultDescription": {
          "YES": "愛や絆が人生の新たな段階を切り開きます。",
          "NO": "迷いを受け入れ、焦らず本音を探る時期です。"
        }
      },
      {
        "name": "戦車",
        "img": "card4/07.jpg",
        "description": "強い意志で状況を打開する時です。集中力が勝利を導く。",
        "reversed": "焦りが失敗を招きます。方向性を見直しましょう。",
        "result": "YES",
        "resultDescription": {
          "YES": "勝利への道が開けています。勇気を持って進みましょう。",
          "NO": "冷静さを取り戻し、進む道を再考することが必要です。"
        }
      },
      {
        "name": "力",
        "img": "card4/08.jpg",
        "description": "内なる強さと優しさが変化を乗り越えさせます。",
        "reversed": "感情の乱れに注意。心の芯を取り戻す必要があります。",
        "result": "YES",
        "resultDescription": {
          "YES": "自分の力を信じて穏やかに進む時です。",
          "NO": "感情の波に飲まれず、心を落ち着けましょう。"
        }
      },
      {
        "name": "隠者",
        "img": "card4/09.jpg",
        "description": "内省の時間が新たな価値観や方向性を示します。",
        "reversed": "孤独を恐れて本来必要な内省ができていません。",
        "result": "NO",
        "resultDescription": {
          "YES": "静かな時間があなたの答えを導きます。",
          "NO": "他者との繋がりも大切に、孤立しすぎないように。"
        }
      },
      {
        "name": "運命の輪",
        "img": "card4/10.jpg",
        "description": "人生の大きな変化のタイミング。前向きな一歩を。",
        "reversed": "慎重な判断が必要。見直しで再出発のチャンスが。",
        "result": "YES",
        "resultDescription": {
          "YES": "幸運な変化が訪れています。積極的に動きましょう。",
          "NO": "状況をよく見て判断し、慎重に進むことが大切です。"
        }
      },
      {
        "name": "正義",
        "img": "card4/11.jpg",
        "description": "公平な判断が人生の節目を作ります。正直さが鍵。",
        "reversed": "判断ミスに注意。冷静な再評価が必要です。",
        "result": "YES",
        "resultDescription": {
          "YES": "真実と向き合い、公正な道を歩めます。",
          "NO": "感情に流されず冷静に再考しましょう。"
        }
      },
      {
        "name": "吊るされた男",
        "img": "card4/12.jpg",
        "description": "一時的な停滞が視点の転換と成長をもたらします。",
        "reversed": "変化を恐れて停滞。不要な負担を手放すことが必要。",
        "result": "NO",
        "resultDescription": {
          "YES": "忍耐が実り、新たな視点が開けます。",
          "NO": "変化を受け入れ、負担を減らす決断を。"
        }
      },
      {
        "name": "死神",
        "img": "card4/13.jpg",
        "description": "古いものを手放し、新たなサイクルの始まりです。",
        "reversed": "変化を拒んで停滞。切り替えの勇気が必要です。",
        "result": "YES",
        "resultDescription": {
          "YES": "終わりは新たな始まり。変化を受け入れましょう。",
          "NO": "過去に囚われず、勇気を持って前に進んで。"
        }
      },
      {
        "name": "節制",
        "img": "card4/14.jpg",
        "description": "バランスを取り調和の中で変化を受け入れます。",
        "reversed": "偏りやすい今、慎重な再調整が必要です。",
        "result": "YES",
        "resultDescription": {
          "YES": "調和の力でスムーズな変化が期待できます。",
          "NO": "バランスを見直し、感情と行動を整えましょう。"
        }
      },
      {
        "name": "悪魔",
        "img": "card4/15.jpg",
        "description": "依存や執着に気づき、本当の自由へ進みます。",
        "reversed": "不健全な関係からの解放が進んでいます。",
        "result": "NO",
        "resultDescription": {
          "YES": "自分の縛りを断ち切り、新しい自由を掴みましょう。",
          "NO": "解放への準備が整い、変化の兆しがあります。"
        }
      },
      {
        "name": "塔",
        "img": "card4/16.jpg",
        "description": "突然の変化が新しい真実と基盤をもたらします。",
        "reversed": "変化を拒み、より大きな衝撃を招く恐れがあります。",
        "result": "NO",
        "resultDescription": {
          "YES": "古い価値観が壊れ、新たな始まりが待っています。",
          "NO": "早めの見直しがダメージを軽減します。"
        }
      },
      {
        "name": "星",
        "img": "card4/17.jpg",
        "description": "希望の光が未来への確信を育みます。",
        "reversed": "希望を見失いがちですが、小さな光を探しましょう。",
        "result": "YES",
        "resultDescription": {
          "YES": "夢や理想に向かう道が開かれています。",
          "NO": "小さな信頼から心の回復を始めましょう。"
        }
      },
      {
        "name": "月",
        "img": "card4/18.jpg",
        "description": "内なる直感が導きを与えます。焦らず進みましょう。",
        "reversed": "混乱や疑念に惑わされず、冷静に見極めてください。",
        "result": "NO",
        "resultDescription": {
          "YES": "直感が正しい道を示しています。",
          "NO": "疑念を払拭し、事実に基づいた判断が必要です。"
        }
      },
      {
        "name": "太陽",
        "img": "card4/19.jpg",
        "description": "喜びと祝福のエネルギーに包まれています。",
        "reversed": "内面の真実に向き合い、感情を大切にしましょう。",
        "result": "YES",
        "resultDescription": {
          "YES": "成功と幸福が訪れる転機です。",
          "NO": "素直な感情を認め、次のステップへ準備しましょう。"
        }
      },
      {
        "name": "審判",
        "img": "card4/20.jpg",
        "description": "過去の経験が新たな目覚めをもたらします。",
        "reversed": "過去への執着を手放し、赦しと決意が必要です。",
        "result": "YES",
        "resultDescription": {
          "YES": "再出発のチャンス。使命に目を向けましょう。",
          "NO": "前に進むために自分を赦し、心を軽くしましょう。"
        }
      },
      {
        "name": "世界",
        "img": "card4/21.jpg",
        "description": "人生の章の完結と新たなステージの始まりです。",
        "reversed": "未完の課題に目を向け、しっかり完結させましょう。",
        "result": "YES",
        "resultDescription": {
          "YES": "達成感と充実の転機。安心して進みましょう。",
          "NO": "完結させることで真の満足が得られます。"
        }
      }
    ];


    const cardsContainer = document.getElementById("cards-container");
    const modal = document.getElementById("modal");
    const closeModal = document.getElementById("close");
    const cardImg = document.getElementById("card-img");
    const cardTitle = document.getElementById("card-title");
    const cardDescription = document.getElementById("card-description");

    function shuffleCards() {
      const shuffledCards = cardsData.sort(() => Math.random() - 0.5);
      shuffledCards.forEach(card => {
        const cardElement = document.createElement("div");
        cardElement.className = "card";
        cardElement.style.backgroundImage = `url('card2/back.jpg')`;
        cardElement.onclick = () => showCardDetails(card);
        cardsContainer.appendChild(cardElement);
      });
    }

    function showCardDetails(card) {
      const isReversed = Math.random() < 0.5;

      // 正位置の結果
      let baseResult = card.result.toUpperCase();

      // 逆位置ならYES/NOを逆転させる
      let resultText;
      if (isReversed) {
        resultText = (baseResult === "YES") ? "NO" : "YES";
      } else {
        resultText = baseResult;
      }

      // 結果に対応する説明を取得
      const explanation = card.resultDescription[resultText];

      cardTitle.textContent = `${card.name}（${isReversed ? "逆位置" : "正位置"}） - 結果: ${resultText}`;
      cardImg.src = card.img;
      cardImg.style.transform = isReversed ? "rotate(180deg)" : "rotate(0deg)";
      cardDescription.innerHTML = `
    <p>${explanation}</p>
    <p style="margin-top:1em; font-size:0.9em; color:#ccc;">
      ${isReversed ? card.reversed : card.description}
    </p>
  `;

      modal.style.display = "block";
    }


    closeModal.onclick = () => {
      modal.style.display = "none";
    };

    window.onclick = (event) => {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    };

    // iOS Safari Modal Fix v2
    if (typeof modal !== 'undefined' && modal) {
      modal.addEventListener('click', function(e){
        if(e.target === modal) modal.style.display = "none";
      });
      modal.addEventListener('touchend', function(e){
        if(e.target === modal) {
          e.preventDefault(); // これで裏側へのクリック貫通(ゴーストクリック)を防ぐ
          modal.style.display = "none";
        }
      });
    }


    shuffleCards();
  </script>


  <script>
    document.addEventListener("contextmenu", function (e) {
      e.preventDefault();
    });
  </script>

  <!-- Back to Top Button -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const backToTopBtn = document.createElement('a');
      backToTopBtn.href = '#';
      backToTopBtn.id = 'back-to-top';
      backToTopBtn.title = 'TOPへ戻る';
      backToTopBtn.innerHTML = '▲';
      document.body.appendChild(backToTopBtn);

      const style = document.createElement('style');
      style.innerHTML = `
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #6f42c1;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s, background-color 0.3s;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        #back-to-top:hover {
            background-color: #9b59b6;
        }
    `;
      document.head.appendChild(style);

      window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
          backToTopBtn.classList.add('show');
        } else {
          backToTopBtn.classList.remove('show');
        }
      });

      backToTopBtn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });
  </script>
<!-- Translation Button Start -->
<style>
  .lang-toggle-wrapper {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background: rgba(255, 255, 255, 0.95);
    border: 2px solid #ddd;
    border-radius: 30px;
    display: flex;
    align-items: center;
    padding: 4px;
    z-index: 99999;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }
  .lang-option {
    padding: 6px 16px;
    font-size: 14px;
    font-weight: 900;
    font-family: 'Arial', sans-serif;
    border-radius: 20px;
    cursor: pointer;
    color: #aaa;
    transition: all 0.3s ease;
    user-select: none;
  }
  .lang-option:hover:not(.active) {
    color: #666;
  }
  .lang-option.active {
    background: #2e2e3a;
    color: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  }
  .skiptranslate iframe,
  .goog-te-banner-frame {
    display: none !important;
  }
  body {
    top: 0px !important;
  }
  #google_translate_element {
    display: none !important;
  }
</style>
<div class="lang-toggle-wrapper notranslate" id="langToggle" translate="no">
  <div class="lang-option" id="lang-jp">JP</div>
  <div class="lang-option" id="lang-en">EN</div>
</div>
<div id="google_translate_element"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'ja',
      includedLanguages: 'en,ja',
      autoDisplay: false
    }, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
  (function(){
    function getCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }

    function clearCookie(name) {
      var domains = window.location.hostname.split('.');
      var d = [];
      for (var i = 0; i < domains.length; i++) {
        d.push(domains.slice(i).join('.'));
      }
      d.push('');
      for (var i = 0; i < d.length; i++) {
        var domainStr = d[i] ? "; domain=" + d[i] : "";
        document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/" + domainStr;
        document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/" + (d[i] ? "; domain=." + d[i] : "");
      }
    }

    function setLangCookie(lang) {
      var val = "/ja/" + lang;
      var host = window.location.hostname;
      document.cookie = "googtrans=" + val + "; path=/";
      document.cookie = "googtrans=" + val + "; path=/; domain=" + host;
      document.cookie = "googtrans=" + val + "; path=/; domain=." + host;
    }

    var currentLang = getCookie('googtrans');
    var isEnglish = (currentLang && currentLang.indexOf('/en') !== -1);

    var jpBtn = document.getElementById('lang-jp');
    var enBtn = document.getElementById('lang-en');
    
    if (isEnglish) {
      enBtn.classList.add('active');
    } else {
      jpBtn.classList.add('active');
    }

    document.getElementById('langToggle').addEventListener('click', function(e) {
      var target = e.target.closest ? e.target.closest('.lang-option') : e.target;
      if (!target) return;
      if (target.id === 'lang-jp' && isEnglish) {
        clearCookie('googtrans');
        location.reload();
      } else if (target.id === 'lang-en' && !isEnglish) {
        setLangCookie('en');
        location.reload();
      }
    });
  })();
</script>
<!-- Translation Button End -->
<!-- SP Button Width Alignment Start -->
<style>
  @media (max-width: 767px) {
    body {
      padding-left: 1em !important;
      padding-right: 1em !important;
      box-sizing: border-box !important;
    }
    input:not([type="radio"]):not([type="checkbox"]), select, textarea {
      width: 100% !important;
      box-sizing: border-box !important;
      max-width: 100% !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
    }
    button:not(.lang-option) {
      width: 100% !important;
      box-sizing: border-box !important;
      max-width: 100% !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
      white-space: normal !important;
      word-break: break-word !important;
    }
  }
</style>
<!-- SP Button Width Alignment End -->
  <!-- SNS Share Buttons Start -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    .fixed-sns-share {
      position: fixed;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      flex-direction: column;
      gap: 12px;
      z-index: 9999;
    }
    .fixed-sns-share a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      transition: transform 0.2s;
      text-decoration: none;
      color: #fff !important;
      font-size: 22px;
    }
    .fixed-sns-share a:hover {
      transform: scale(1.1);
      color: #fff !important;
    }
    .sns-x { background: #000; border: 1px solid #333; }
    .sns-fb { background: #1877F2; }
    .sns-line { background: #06C755; }
    .sns-bsky {
      background-color: #0085ff;
      color: #fff;
    }
    @media (max-width: 768px) {
      .fixed-sns-share {
        right: 10px;
      }
      .fixed-sns-share a {
        width: 40px;
        height: 40px;
        font-size: 20px;
      }
    }
  </style>
  <div class="fixed-sns-share">
        <a href="https://twitter.com/intent/tweet?url=https://evitadesignart.com/horo/<?php echo basename($_SERVER['PHP_SELF']); ?>&text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ'); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-x" title="X (Twitter)でシェア">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/horo/<?php echo basename($_SERVER['PHP_SELF']); ?>" target="_blank" rel="noopener noreferrer" class="sns-fb" title="Facebookでシェア">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
        <a href="https://line.me/R/msg/text/?<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/' . basename($_SERVER['PHP_SELF'])); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-line" title="LINEでシェア">
      <i class="fa-brands fa-line"></i>
    </a>
        <a href="https://bsky.app/intent/compose?text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/' . basename($_SERVER['PHP_SELF'])); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-bsky" title="Blueskyでシェア">
      <i class="fa-brands fa-bluesky"></i>
    </a>
  </div>
  <!-- SNS Share Buttons End -->
<!-- GA4 Share & Translate Tracking -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  var snsLinks = document.querySelectorAll('.fixed-sns-share a');
  for (var i = 0; i < snsLinks.length; i++) {
    snsLinks[i].addEventListener('click', function() {
      var platform = 'unknown';
      if (this.classList.contains('sns-x')) platform = 'X (Twitter)';
      else if (this.classList.contains('sns-fb')) platform = 'Facebook';
      else if (this.classList.contains('sns-line')) platform = 'LINE';
      else if (this.classList.contains('sns-bsky')) platform = 'Bluesky';
      
      if (typeof gtag === 'function') {
        gtag('event', 'share', {
          'method': platform,
          'content_id': window.location.pathname,
          'content_type': 'page'
        });
      }
    });
  }

  var langToggle = document.getElementById('langToggle');
  if (langToggle) {
    langToggle.addEventListener('click', function(e) {
      var target = e.target.closest ? e.target.closest('.lang-option') : e.target;
      if (!target) return;
      var selectedLang = (target.id === 'lang-en') ? 'English' : 'Japanese';
      if (typeof gtag === 'function') {
        gtag('event', 'select_language', {
          'language': selectedLang,
          'page_path': window.location.pathname
        });
      }
    }, true);
  }
});
</script>
</body>

</html>




