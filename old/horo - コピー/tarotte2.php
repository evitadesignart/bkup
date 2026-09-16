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
  <meta name="description" content="無料で楽しめる1枚引きタロット占い。大アルカナ22枚から1枚を引き、あなたの現在や未来、課題、チャンスを詳細に解説します。">
  <!-- OGP設定 -->
  <meta property="og:title" content="無料1枚引きタロット占い | 大アルカナ22枚で運命を占う">
  <meta property="og:description" content="無料で楽しめる1枚引きタロット占い。大アルカナ22枚から1枚を引き、あなたの現在や未来、課題、チャンスを詳細に解説します。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://evitadesignart.com/horo/tarotte2.php">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="無料1枚引きタロット占い | 大アルカナ22枚で運命を占う">
  <meta name="twitter:description" content="無料で楽しめる1枚引きタロット占い。大アルカナ22枚から1枚を引き、あなたの現在や未来、課題、チャンスを詳細に解説します。">

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "このタロット占いは無料ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、すべて無料でご利用いただけます。何度でもお試しいただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "1日に何回でも占っても大丈夫ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、大丈夫です。ただし、結果をより深く受け取りたい場合は、1日に1回の利用をおすすめします。"
      }
    },
    {
      "@type": "Question",
      "name": "正位置と逆位置の違いは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "正位置はカードの意味がそのまま表れる状態、逆位置は注意点や内面的な課題を表すことがあります。"
      }
    },
    {
      "@type": "Question",
      "name": "大アルカナとは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "タロットカードの中でも、大アルカナは22枚で構成され、人生の重要なテーマや運命の流れを象徴します。"
      }
    },
    {
      "@type": "Question",
      "name": "スマートフォンでも使えますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。スマートフォン、タブレット、PCのすべてに対応しています。"
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
      padding-top: 140px;
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
      <h1>無料1枚引きタロット占い</h1>
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
    <img src="img/fv_tarotte2.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
    <div class="badge-container"><span class="badge-type">タロット占い</span><span class="badge-type">メッセージ</span></div>
  </div>
  <script>
    (function () {
      var header = document.querySelector("header");
      var fv = document.getElementById("fv-wrapper");
      if (header && fv) {
        var adjust = function () {
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
  <p style="max-width: 720px; margin: 0 auto; font-size: 1rem; color: #e0dede;">
    タロットカードの中でも<strong>大アルカナ22枚</strong>は、<br class="md:hidden"> 人生における重要な<br class="md:hidden"> テーマや運命的な流れを象徴します。<br>
    この1枚引き占いでは、<strong><br class="md:hidden"> 今のあなたに最も必要なメッセージ</strong>を、<br class="md:hidden">
    大アルカナの中から1枚で受け取ります。<br><br>
    引いたカードの「<strong>正位置</strong>」は<br class="md:hidden"> そのエネルギーが素直に表れている状態、<br class="md:hidden">
    「<strong>逆位置</strong>」は注意点や、<br class="md:hidden"> 無意識の課題を示すことがあります。<br><br>
    今の自分と向き合い、<br class="md:hidden"> 心に浮かんだことと照らし合わせながら<br class="md:hidden"> カードの意味を感じてみましょう。
  </p>
  <style>
    @media (max-width: 767px) {
      .sp-text-left {
        text-align: left !important;
      }
    }
  </style>
  <div class="sp-text-left"
    style="background:#112244; padding: 1em; border-radius: 8px; margin: 1.5em 0; line-height: 1.7;">
    <strong style="color:#aabbff;">こんな人におすすめ：</strong>
    <ul style="list-style: none; padding-left: 0; margin-top: 0.5em; margin-bottom: 0;">
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 今の気持ちや状況に合った<br class="md:hidden"> メッセージが欲しい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 今日の運勢や心の指針を簡単に知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 恋愛・仕事・健康のヒントを得たい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 大アルカナの意味を深く学びたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ タロット初心者として<br class="md:hidden"> 気軽に試してみたい</li>
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
      class="md:hidden">素材販売中です。
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
        "img": "card2/00.jpg",
        "description": "今のあなたには、未知なる世界へと踏み出す勇気と可能性が秘められています。過去の枠や常識にとらわれず、自分の直感を信じて自由に行動することで、思いがけない出会いやチャンスが訪れるでしょう。純粋で無垢な心が、あなたを新たな冒険へと導いてくれます。恐れず一歩を踏み出すことが、未来への大きな成長の鍵となるでしょう。制限を外した自由な発想と、今この瞬間を楽しむ姿勢が重要です。",
        "reversed": "無計画な行動や軽率な選択が、思わぬトラブルを引き起こす恐れがあります。夢中になって突き進むあまり、周囲の状況やリスクを見落としてしまう可能性も。今は立ち止まり、目の前の状況を冷静に分析することが必要です。軽率さは誤解や失敗を招きます。自由と無謀の違いを理解し、慎重さと準備を忘れずに進むことで、本来のポテンシャルを活かすことができるでしょう。"
      },
      {
        "name": "魔術師",
        "img": "card2/01.jpg",
        "description": "あなたの中にある才能や知識が活性化され、新たなスタートを切る絶好のタイミングです。創造性と行動力が結びつき、頭に描いたアイデアを現実へと変える力が湧いています。言葉や技術、道具など、必要なものはすでに手の中に揃っているはずです。自分の能力を信じて、計画的に物事を進めることで、大きな成果が期待できます。何事も最初の一歩が大切です。迷わず踏み出してみましょう。",
        "reversed": "表面的な知識や自信過剰な態度が、周囲との信頼関係を損なう原因になるかもしれません。見せかけだけの行動や、真意のない言動に注意が必要です。また、焦って結果を出そうとすると、かえって状況を悪化させてしまう可能性も。まずは自分の実力を冷静に見つめ直し、地に足をつけた行動を心がけましょう。誠実さと努力こそが、真の実力を引き出す鍵となります。"
      },
      {
        "name": "女教皇",
        "img": "card2/02.jpg",
        "description": "内なる静けさに耳を傾け、直感と精神性を重視すべき時期です。外界の喧騒から一歩離れ、自分自身の深い意識と対話することで、真の答えにたどり着くでしょう。理性と感性が融合し、より本質的な理解力が高まります。すぐに結論を出すよりも、物事の背後にある意味を静かに見つめることが大切です。知識や経験よりも、心の奥底から湧き上がる“気づき”を信じてください。",
        "reversed": "表面的な情報や周囲の意見に流されやすく、自分の直感や本心が曇っている状態かもしれません。思考が過剰になり、感情とのバランスを欠いてしまうことで、判断が鈍る可能性もあります。また、自分の内側に目を向けることを避けて、外側ばかりに答えを求めていると、核心には辿り着けません。静かな時間を取り戻し、自分自身の本音ともう一度向き合うことが必要です。"
      },
      {
        "name": "女帝",
        "img": "card2/03.jpg",
        "description": "この時期のあなたは、愛や美しさ、豊かさといったエネルギーに包まれています。心に余裕が生まれ、周囲の人々にも優しさを分け与えることができるでしょう。人間関係では思いやりに満ちた交流が深まり、信頼や絆を築ける好機となります。また、創造性が高まり、芸術的な活動や家庭的なことに集中するのにも良い時期です。育むことに喜びを感じる時なので、植物を育てたり、子どもやパートナーとの時間を大切にすると運気がさらに上昇していきます。",
        "reversed": "過度な甘やかしや依存が関係性に影を落とすかもしれません。自分の気持ちばかりを優先したり、他者からの愛情を一方的に求めすぎてはいませんか？また、物質的な豊かさに執着しすぎると、精神的な満足感を得にくくなる恐れがあります。内面の充実を心がけ、相手への思いやりや自立心とのバランスを取ることが必要です。見返りを期待するよりも、純粋な気持ちで関わることで本来の豊かさが戻ってくるでしょう。"
      },
      {
        "name": "皇帝",
        "img": "card2/04.jpg",
        "description": "責任と統率力が問われる時期です。あなたの行動力と決断力が周囲に影響を与え、物事を前に進める中心的存在となるでしょう。明確なビジョンを持ち、秩序を保つ力が今こそ発揮されます。目標に向けてしっかりと計画を立て、それを着実に実行していくことが大切です。リーダーシップを取る機会があれば、自信を持ってその役割を果たしてください。安定を築くための土台が整うタイミングです。",
        "reversed": "権威やルールにこだわりすぎて、周囲との摩擦を生む危険性があります。自分の意見に固執しすぎると、周囲の協力を得られなくなる可能性も。あるいは、自信のなさから責任を回避してしまうような態度が、信頼を損なう原因になることもあります。今は柔軟性を持ち、他者の意見に耳を傾ける姿勢が求められています。権力よりも信頼を築くことが、真のリーダーシップにつながることを忘れないでください。"
      },
      {
        "name": "法王",
        "img": "card2/05.jpg",
        "description": "精神的な安定と信頼に満ちた時期です。知識や経験を持つ人との関わりや、信頼できるグループとのつながりの中で、あなたは多くの学びを得るでしょう。形式や伝統を重んじることで、安心感と秩序が保たれます。人生の指針となるような教えを受け取ることがあるかもしれません。また、自分自身が誰かにとっての指導的立場になる可能性も。信頼関係を大切にしながら、真摯に向き合う姿勢が成功への鍵です。",
        "reversed": "古い価値観や習慣に固執するあまり、変化を受け入れられずに停滞してしまう恐れがあります。また、自分の考えや信念が正しいと信じすぎて、他者の意見を受け入れられない状態になっているかもしれません。盲目的にルールや常識に従うのではなく、今の時代や自分自身にとって何が本当に必要なのかを見つめ直すことが求められています。内なる声を信じて、柔軟な視点を持ちましょう。"
      },
      {
        "name": "恋人",
        "img": "card2/06.jpg",
        "description": "愛と調和のエネルギーに満ちた時期です。心から共鳴できる相手との深い絆が生まれたり、人とのつながりの中で喜びを実感できる瞬間が増えるでしょう。また、人生の大きな選択を迫られるような場面に出くわす可能性もあります。その際は、表面的な損得ではなく、自分の心が本当に求めているものを優先して決断を下しましょう。直感を信じて選んだ道は、あなたにとってかけがえのないものをもたらしてくれます。",
        "reversed": "心が揺れ動き、選択に迷いが生じやすい時期です。感情に流されてしまうと、大切な判断を誤る恐れがあります。また、人間関係では優柔不断な態度が誤解や不信感を生みやすく、すれ違いやトラブルの原因になることも。自分にとって本当に必要なものが何か、改めて問い直す必要があります。選択を恐れず、心から納得できる答えを見つけることが、未来を切り開く第一歩となるでしょう。"
      },
      {
        "name": "戦車",
        "img": "card2/07.jpg",
        "description": "今は勢いと行動力に満ちた時期です。目的意識を明確に持ち、強い意志で突き進むことで障害を乗り越える力が宿っています。自信を持って自分の道を進めば、成功へと導かれるでしょう。周囲の意見に惑わされず、自らの選択を信じて行動することがカギです。集中力と冷静な判断を保ちつつ、スピード感のある決断が功を奏します。今こそ、あなたの内なる力を発揮するタイミングです。",
        "reversed": "衝動的な行動や感情のコントロールの欠如が、計画を台無しにしてしまう恐れがあります。目的を見失いがちで、焦りから間違った方向に進んでしまう可能性もあります。今は一度立ち止まり、自分の意志や方向性を見直す必要があります。周囲との摩擦にも注意し、強引な態度にならないよう心がけましょう。冷静さと柔軟性を取り戻すことが、再び軌道に乗る鍵となります。"
      },
      {
        "name": "力",
        "img": "card2/08.jpg",
        "description": "内面の強さと優しさが試される時です。力でねじ伏せるのではなく、愛と信念によって困難を乗り越えることができるでしょう。穏やかでありながらも揺るがない姿勢が、周囲に安心感と信頼を与えます。焦らず、地に足をつけた行動を心がけることで、目の前の課題にも冷静に対応できます。今は外に向かって力を誇示するよりも、自分自身と向き合い、心の強さを磨くことが何よりも大切な時期です。",
        "reversed": "自信を喪失していたり、感情のコントロールが難しくなっている可能性があります。怒りや不安に飲まれてしまうことで、状況を悪化させてしまうかもしれません。また、自分を過小評価し、必要以上に我慢を重ねている傾向も見られます。まずは自分の内面に目を向け、自己受容と自己肯定感を取り戻すことが求められています。心の強さは外に示すものではなく、内に築くものなのです。"
      },
      {
        "name": "隠者",
        "img": "card2/09.jpg",
        "description": "静かな時間を大切にし、自分自身の内面と向き合うべき時期です。外の世界に答えを求めるのではなく、内なる声に耳を澄ますことで、本当に大切な気づきが得られるでしょう。今は焦って行動するよりも、心を落ち着けてじっくり考えることが重要です。深い洞察力と知恵が育まれ、精神的な成熟へとつながります。ひとりで過ごす時間を恐れず、内省を通じて自己理解を深めていくことが、次のステージへの準備となるでしょう。",
        "reversed": "孤独を感じやすくなっていたり、周囲との関係を避ける傾向が強くなっているかもしれません。自分の殻に閉じこもりすぎることで、視野が狭くなり、正しい判断がしづらくなる恐れがあります。また、無理に自立しようとしすぎて助けを求められない状態に陥っている可能性も。バランスを意識し、必要に応じて他者と心を通わせることも大切です。孤独と自立の違いを見極めて、柔軟な姿勢を取り戻しましょう。"
      },
      {
        "name": "運命の輪",
        "img": "card2/10.jpg",
        "description": "運命の流れが大きく動き出す時期です。今まで停滞していた状況が思わぬ展開を迎えたり、偶然のような出来事が未来を切り開くきっかけになるかもしれません。変化は避けられないものであり、抗うよりもその波に乗ることが最良の選択です。チャンスが訪れたときには、迷わず行動に移す勇気を持ちましょう。過去の流れが一区切りし、新しいサイクルが始まろうとしています。運命を信じて前進してください。",
        "reversed": "物事が思うように進まないと感じたり、予期せぬ障害に直面するかもしれません。しかし、それは運命が一時的にペースを調整しているサインです。無理に進もうとするよりも、状況を受け入れ、冷静にタイミングを待つことが大切です。焦りや不安から逃げるように行動すると、チャンスを逃す可能性もあります。今は変化を急ぐのではなく、流れの中にある意味を見出し、準備を整える時と捉えましょう。"
      },
      {
        "name": "正義",
        "img": "card2/11.jpg",
        "description": "公平さとバランスを重視すべき時期です。冷静な判断力を持って物事を見極め、感情に流されずに行動することが求められます。正直さと誠実さがあなたの信頼を築き、問題解決へとつながっていくでしょう。周囲との関係においても、公平な姿勢を持つことで信頼関係が深まります。また、過去の行動や選択に対しての結果が現れるタイミングでもあります。自分の信念に基づいて、堂々と向き合いましょう。",
        "reversed": "感情的になりやすく、偏った判断をしてしまう恐れがあります。また、自分に都合の良いように物事を捉えがちになり、対人関係において不信感を招く可能性も。公正さを欠いた言動は、後々トラブルの原因となるため注意が必要です。誠実さとバランス感覚を取り戻すことが課題です。今は自己中心的な視点を改め、第三者的な視野で物事を見ることを意識すると、流れが好転していくでしょう。"
      },
      {
        "name": "吊るされた男",
        "img": "card2/12.jpg",
        "description": "現状を打破するためには、あえて立ち止まり、視点を変えることが求められる時です。自分の願望や計画を一時的に保留することで、新たな気づきや価値観が得られるでしょう。犠牲や忍耐を必要とする場面もあるかもしれませんが、その経験があなたを大きく成長させます。今は結果を焦るよりも、内面を磨くことに集中すべきタイミングです。流れが変わるのを信じ、柔軟な心で受け止めましょう。",
        "reversed": "無意味な我慢や自己犠牲が続いているかもしれません。報われない状況に執着しすぎて、抜け出すチャンスを見失っている可能性があります。また、自分の考えに固執し、視点を変えられずにいることで、状況が停滞してしまうことも。今は一歩引いて、自分の置かれた環境や考え方を客観的に見つめ直す必要があります。変化を恐れず、不要な負担を手放すことが再生への道となります。"
      },
      {
        "name": "死神",
        "img": "card2/13.jpg",
        "description": "大きな終わりと新たな始まりの象徴です。何かを手放すことで、次の可能性が開かれていきます。変化は時に怖く感じられるものですが、それを受け入れることで人生は新しい段階へと進んでいきます。過去にしがみつくのではなく、未来に向けて意識を切り替えることが必要です。終わりは決してネガティブなものではなく、再生のためのプロセスなのです。潔く次の一歩を踏み出すことで、再出発が力強く始まります。",
        "reversed": "変化を拒み、過去や古い習慣に執着してしまう傾向があります。終わらせるべきことに対して決断できず、前に進む力を奪われているかもしれません。現状を維持することがかえって苦しみを長引かせる結果となる場合もあります。今は勇気を持って不要なものを手放す時です。変化を恐れず、未来に目を向けて行動することで、停滞していた運気が再び動き出すでしょう。"
      },
      {
        "name": "節制",
        "img": "card2/14.jpg",
        "description": "心と体、物質と精神、さまざまな要素の調和が求められる時期です。極端な行動や感情に偏るのではなく、バランスを取りながら物事を進めることで安定した成果が得られるでしょう。自分と他者、過去と未来との間に調和を見出すことが、長期的な成功へとつながっていきます。焦らず自然な流れに身を任せる姿勢が大切です。節度ある判断が、あなたの人生に静かな充実感をもたらしてくれるでしょう。",
        "reversed": "感情の起伏が激しく、冷静さを保つのが難しくなっている可能性があります。周囲との関係においても極端な態度が問題を引き起こすことがあるでしょう。過剰な期待や執着は、心の安定を損なう原因となります。今はまず深呼吸して、心のバランスを取り戻すことを意識してください。中庸を保つことが、状況を円滑に運ぶ鍵となります。"
      },
      {
        "name": "悪魔",
        "img": "card2/15.jpg",
        "description": "欲望や執着、依存といったテーマが浮上しやすい時期です。自分を縛っているものに気づき、それを手放すことで解放への道が開かれます。快楽や誘惑に身を委ねたくなるかもしれませんが、本当に自分に必要なものかを見極める目を持つことが重要です。心の奥にある恐れや不安に向き合うことで、隠れていた力が目覚めるでしょう。内なる闇と正直に対話することが、あなたの成長につながっていきます。",
        "reversed": "欲望や執着に飲み込まれ、自分を見失ってしまっているかもしれません。依存的な関係や習慣から抜け出せず、苦しみを抱えている可能性もあります。冷静な視点を持ち、自分を客観的に見つめることが必要です。不健全な関係や環境から距離を置く勇気が、再生への第一歩となります。真の自由を手に入れるためには、まず自らを解放することが求められます。"
      },
      {
        "name": "塔",
        "img": "card2/16.jpg",
        "description": "予想外の出来事や変化が突然訪れる可能性があります。これまで積み上げてきたものが一時的に崩れることで、大切な真実が浮かび上がってくるでしょう。衝撃的な展開に見舞われるかもしれませんが、それは新しい価値観や視点を得るための必要なプロセスです。古い枠組みを手放し、新たな土台を築くチャンスと捉えることで、人生はより本質的な方向へと進んでいきます。",
        "reversed": "変化や崩壊を恐れて、問題の本質から目を背けている可能性があります。現状にしがみつきすぎることで、さらに大きな混乱を招く恐れもあります。現実を直視する勇気が、再構築の第一歩となります。壊れることを避けるよりも、壊すべきものを自ら見極めることが重要です。崩壊のあとには、新しい希望が待っています。"
      },
      {
        "name": "星",
        "img": "card2/17.jpg",
        "description": "希望と癒しの光があなたを包む時期です。未来に対する信頼が回復し、心の中に穏やかな安心感が広がっていくでしょう。困難な状況にあっても、あなたの中には再び立ち上がる力が宿っています。インスピレーションや夢が現実へと近づいていく感覚を得られるかもしれません。優しさと感謝の気持ちを大切にしながら、静かに進むことが幸福への道を照らします。",
        "reversed": "希望を見失い、将来に対する不安が大きくなっているかもしれません。状況に悲観的になりすぎて、前進する気力が失われている可能性があります。今は小さな喜びや癒しを見つけて、自分を励ますことが必要です。どんなに暗く感じても、希望の光は必ずどこかにあります。まずは心の中にその光を取り戻すことを意識しましょう。"
      },
      {
        "name": "月",
        "img": "card2/18.jpg",
        "description": "感情や無意識が強く影響する時期です。直感が高まりやすい一方で、不安や幻想に惑わされることもあるでしょう。目に見えないものへの恐れが増して、判断力が鈍る可能性があります。夢や直感に従うことは大切ですが、現実的な視点も忘れないようにしてください。内なる混乱に対しては、静かな場所で心を整えることが効果的です。感情の波を超えた先に、明確な道が見えてくるはずです。",
        "reversed": "不安や幻想が増幅し、混乱した状態に陥っている可能性があります。現実を直視する勇気を持たず、曖昧なままの状況に流されてしまっているかもしれません。情報や感情に振り回されず、冷静さを取り戻すことが必要です。心を落ち着けて、事実と向き合いましょう。恐れを越えた先にこそ、あなたの進むべき道があります。"
      },
      {
        "name": "太陽",
        "img": "card2/19.jpg",
        "description": "喜びや成功、活力に満ちたポジティブなエネルギーがあなたを包みます。人間関係も良好で、努力が報われるタイミングが訪れるでしょう。物事がスムーズに進み、前向きな気持ちで毎日を過ごすことができます。自分を信じることが、大きな成果へとつながるでしょう。周囲の人と喜びを分かち合いながら、笑顔と感謝の気持ちを大切にしてください。",
        "reversed": "表面的には明るく見えても、内面に不安や虚しさを抱えているかもしれません。過剰な期待や楽観が裏目に出る可能性もあります。今は一度立ち止まり、本当に自分が求めているものを見つめ直すことが大切です。見せかけの成功に満足せず、内なる喜びに目を向けてください。心の太陽が輝けば、再び前向きなエネルギーが戻ってくるでしょう。"
      },
      {
        "name": "審判",
        "img": "card2/20.jpg",
        "description": "過去の経験が再評価され、新たな目覚めの時が訪れます。これまでの努力が報われ、人生における重要な転機となるでしょう。過去の過ちも赦され、未来への扉が開かれています。心を新たにして、自分の進むべき方向に向き合うことで、成長と再生が始まります。古い自分を手放し、新しい自分として歩み出すタイミングです。",
        "reversed": "過去に囚われすぎて、前に進むことができなくなっているかもしれません。変化を恐れて判断を先延ばしにしていると、チャンスを逃す恐れがあります。自分を赦し、過去の経験から学ぶことが、再生の鍵となります。心を軽くして、今この瞬間に意識を向けてください。"
      },
      {
        "name": "世界",
        "img": "card2/21.jpg",
        "description": "大きな目標の達成や人生の一区切りを迎える時期です。これまでの努力が実を結び、心からの満足感と達成感が得られるでしょう。完成の象徴でもあるこのカードは、あなたが人生の重要なステージを一つ乗り越えたことを示しています。次のステップに進む準備も整っており、新しい可能性が目の前に広がっています。喜びと感謝を胸に、未来へ向かって堂々と歩き出しましょう。",
        "reversed": "努力の結果が思うように実らず、達成感を得られないまま停滞しているかもしれません。完了させるべきことを先延ばしにしていることで、成長の機会を逃している可能性もあります。今は細部まで丁寧に見直し、やり残しのないようにしましょう。達成はもうすぐそこまで来ています。"
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

      cardTitle.textContent = `${card.name}（${isReversed ? "逆位置" : "正位置"}）`;
      cardImg.src = card.img;
      cardImg.style.transform = isReversed ? "rotate(180deg)" : "rotate(0deg)";
      cardDescription.textContent = isReversed ? card.reversed : card.description;

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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
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
  <script type="text/javascript"
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script>
    (function () {
      function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
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

      document.getElementById('langToggle').addEventListener('click', function (e) {
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




