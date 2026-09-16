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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6729293840967461"
    crossorigin="anonymous"></script>
  <meta name="author" content="Evita Designart">
  <meta name="description" content="小アルカナの無料タロット占い。ワンド・カップ・ソード・ペンタクルのカードを通して、あなたの未来や現状を詳しく占います。詳細解説付き。">
  <title>無料小アルカナが導く今の運勢｜今のあなたに必要なカードは？ | 占いアルカノヴァ</title>
  <meta property="og:title" content="小アルカナで占う無料タロット｜今のあなたに必要なカードは？">
  <meta property="og:description" content="無料で占える本格タロット。小アルカナのカードが、あなたの運命や今の状況を教えてくれます。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://evitadesignart.com/tarotte3.php">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="小アルカナで占う無料タロット｜今のあなたに必要なカードは？">
  <meta name="twitter:description" content="無料で占える本格タロット。小アルカナのカードが、あなたの運命や今の状況を教えてくれます。">

  <link rel="icon" href="https://evitadesignart.com/favicon.ico" type="image/x-icon">
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "小アルカナとは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "小アルカナはタロットカードの56枚のカードで、日常的な出来事や感情、具体的な状況を表します。ワンド、カップ、ソード、ペンタクルの4つのスートに分類され、それぞれに数字札とコートカードがあります。"
      }
    },
    {
      "@type": "Question",
      "name": "正位置と逆位置の違いは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "正位置はカード本来の意味や力を示し、ポジティブなメッセージを伝えることが多いです。逆位置は障害や課題、内面的な側面を表し、注意すべき点を教えてくれます。"
      }
    },
    {
      "@type": "Question",
      "name": "この占いは無料ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、当サイトのタロット占いはすべて無料でご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "占い結果の画像や文章をシェアしてもいいですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "個人のSNSなどでシェアすることは可能です。"
      }
    },
    {
      "@type": "Question",
      "name": "カードの意味はどのように解釈されていますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "各カードには、長年の象徴的な意味と心理的な側面に基づいた解釈を採用しています。実際のリーディングでも使われる内容を元に構成されています。"
      }
    },
    {
      "@type": "Question",
      "name": "表示されるカードは毎回違いますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、カードは毎回ランダムに1枚選ばれます。正位置か逆位置かもランダムで表示されます。"
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
      color: #e0dede;
      text-align: center;
      padding-top: 160px;
      margin: 0;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      min-height: 100vh;
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

    #result img {
      width: 80%;
      max-width: 300px;
      margin-top: 20px;
      transition: transform 0.5s;
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .reversed {
      transform: rotate(180deg);
    }

    #result {
      margin-top: 30px;
    }

    .text {
      max-width: 500px;
      text-align: left;
      margin: 0 auto;
      padding: 2rem 0;
      line-height: 1.6;
      color: #dcd6f7;
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
      #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
    }
</style>
  <style>
    @media (min-width: 768px) {
      br[class*="md:hidden"] {
        display: none !important;
      }
    }
      #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
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
    <a href="https://evitadesignart.com/tarotte_list.php">
      <h1>小アルカナ<br>無料タロット占い</h1>
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
    
      #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
    }
</style>
  <div id="fv-wrapper" class="fv-wrapper-custom">
    <img src="img/fv_tarotte3.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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
    #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
    }
</style>
<div class="fv-buttons">
  <a href="https://evitadesignart.com/tarotte_list.php#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
  <a href="https://evitadesignart.com/tarotte_list.php#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
  <a href="https://evitadesignart.com/tarotte_list.php#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
</div>
  <p style="max-width: 720px; margin: 0 auto; font-size: 1rem; color: #e0dede;">
    小アルカナは、日常生活の出来事や感情、<br class="md:hidden">具体的な状況を表すカードです。<br>
  </p>
  <style>
    @media (max-width: 767px) {
      .sp-text-left {
        text-align: left !important;
      }
    }
      #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
    }
</style>
  <div class="sp-text-left" style="background:#112244; padding: 1em; border-radius: 8px; margin: 1.5em 0; line-height: 1.7;">
    <strong style="color:#aabbff;">こんな人におすすめ：</strong>
    <ul style="list-style: none; padding-left: 0; margin-top: 0.5em; margin-bottom: 0;">
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 日常の出来事や感情の流れを<br class="md:hidden">読み取りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ より具体的な状況に即した<br class="md:hidden">アドバイスが欲しい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ カップ・ソード・ワンド・<br class="md:hidden">ペンタクルの意味を知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 恋愛・仕事・金運など<br class="md:hidden">分野別に占いたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 正位置と逆位置の違いを<br class="md:hidden">深く理解したい</li>
    </ul>
  </div>


  <p>カードを引いてください。</p>
  <button id="drawBtn"><span style="text-align: center; line-height: 1.2;">運勢を占う<br><span style="font-size: 0.8em; font-weight: normal;">（カードを引く）</span></span></button>
  <div id="result"></div>

  <div style="background:#112244; padding: 1em; border-radius: 8px; margin: 1.5em 0; line-height: 1.7;">
    カードは4つのスート<br class="md:hidden">（<strong>カップ・ソード・ワンド・ペンタクル</strong>）<br class="md:hidden">に分かれ、<br
      class="md:hidden">それぞれが異なる分野を象徴します。<br><br>
    <p style="color: #07eeb2;"> <strong>カップ：</strong>愛情・感情・人間関係<br>
      <strong>ソード：</strong>思考・決断・困難や試練<br>
      <strong>ワンド：</strong>情熱・行動・目標・創造力<br>
      <strong>ペンタクル：</strong>お金・仕事・<br class="md:hidden">物質的な安定・現実性<br><br>
    </p>
    各スートには1～10の数字札と<br class="md:hidden">4枚のコートカード<br class="md:hidden">（小姓・騎士・女王・王）があり、<br
      class="md:hidden">それぞれに異なる意味があります。<br>
    今回の占いでは、あなたの今の状態や、<br class="md:hidden">近未来に向けてのアドバイスを<br class="md:hidden">小アルカナから読み解きます。<br>
    正位置はそのカードの本質的な力を、<br class="md:hidden">逆位置は障害や内面的な課題を表します。
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
    #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
    }
</style>
<div class="bottom-nav-buttons">
  <a href="https://evitadesignart.com/tarotte_list.php#menu-links" class="nav-btn-gold">星座＆タロット</a>
  <a href="https://evitadesignart.com/tarotte_list.php#tarot-menu" class="nav-btn-gold">タロット</a>
  <a href="https://evitadesignart.com/tarotte_list.php#zodiac-menu" class="nav-btn-gold">星座</a>
  <a href="https://evitadesignart.com/tarotte_list.php#color-menu" class="nav-btn-gold">その他</a>
  <a href="https://evitadesignart.com/tarotte_list.php#horoscope" class="nav-btn-gold">アセンダント診断</a>
</div>
<h2><a href="https://evitadesignart.com/tarotte_list.php" style="display: block; width: 100%; text-align: center;"><button style="width: 100%; max-width: 600px;">占い一覧はコチラ</button></a></h2>

  <footer>

    <div class="footer-added-section parallax-bg-section" style="background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; color: #fff; padding: 4rem 1rem; margin-bottom: 2rem; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); box-sizing: border-box;">
    <div class="footer-menu" style="text-align: center; max-width: 1000px; margin: 0 auto; padding: 0 1rem; box-sizing: border-box;">
            <div class="footer-link-grid" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; line-height: 1.5; font-size: 0.9rem;">
        <a href="https://evitadesignart.com/tarotte_list.php" title="占い一覧ページ" style="text-decoration: none; color: #fff;">TOP</a>
        <a href="https://evitadesignart.com/tarotte7.php" title="タロットと星座で今週の運勢" style="text-decoration: none; color: #fff;">今週の運勢(タロット&amp;星座)</a>
        <a href="https://evitadesignart.com/tarotte5.php" title="タロットと星座で今月の運勢" style="text-decoration: none; color: #fff;">今月の運勢(タロット&amp;星座)</a>
        <a href="https://evitadesignart.com/tarotte6.php" title="タロットと星座で今年の運勢" style="text-decoration: none; color: #fff;">今年の運勢(タロット&amp;星座)</a>
        <a href="https://evitadesignart.com/tarotte2.php" title="大アルカナ1枚占い" style="text-decoration: none; color: #fff;">タロット大アルカナ1枚占い</a>
        <a href="https://evitadesignart.com/tarotte4.php" title="大アルカナ2枚占い" style="text-decoration: none; color: #fff;">タロット大アルカナ2枚占い</a>
        <a href="https://evitadesignart.com/tarotte.php" title="大アルカナ3枚占い" style="text-decoration: none; color: #fff;">タロット大アルカナ3枚占い</a>
        <a href="https://evitadesignart.com/tarotte9.php" title="相手と自分の2枚占い" style="text-decoration: none; color: #fff;">タロット2枚相手と自分占い</a>
        <a href="https://evitadesignart.com/tarotte8.php" title="恋愛に特化した3枚占い" style="text-decoration: none; color: #fff;">タロット3枚恋愛占い</a>
        <a href="https://evitadesignart.com/tarotte3.php" title="小アルカナ占い" style="text-decoration: none; color: #fff;">タロット小アルカナ占い</a>
        <a href="https://evitadesignart.com/tarotte10.php" title="アルカナ診断" style="text-decoration: none; color: #fff;">あなたのアルカナ診断</a>
        <a href="https://evitadesignart.com/tarotte11.php" title="ターニングポイント占い" style="text-decoration: none; color: #fff;">ターニングポイント占い</a>
        <a href="https://evitadesignart.com/tarotte12.php" title="YESNOワンカード占い" style="text-decoration: none; color: #fff;">YES・NOワンカード占い</a>
        <a href="https://evitadesignart.com/zodiac.php" title="太陽星座の占い" style="text-decoration: none; color: #fff;">星座占い(太陽星座)</a>
        <a href="https://evitadesignart.com/zodiac2.php" title="月星座の占い" style="text-decoration: none; color: #fff;">星座占い(月星座)</a>
        <a href="https://evitadesignart.com/zodiac3.php" title="アセンダントの星座占い" style="text-decoration: none; color: #fff;">星座占い(アセンダント)</a>
        <a href="https://evitadesignart.com/color24.php" title="24色から占う性格診断" style="text-decoration: none; color: #fff;">24の色占い</a>
        <a href="https://evitadesignart.com/engel.php" title="エンジェルナンバーガイド" style="text-decoration: none; color: #fff;">エンジェルナンバーガイド</a>
      </div>
    </div>
</div>
    <div class="footer-brand" style="text-align: center; margin-bottom: 2rem;">
      <a href="https://evitadesignart.com/tarotte_list.php" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.5rem; text-decoration: none; color: inherit;">占いアルカノヴァ</a><br>
      <small style="display: block; margin-top: 0.5rem; font-size: 0.8rem; color: #ccc;">運営 <a href="https://evitadesignart.com/" style="text-decoration: none; color: inherit;">EvitaDesignart</a></small>
    </div>

    <small>&copy;2016 -
      <script>document.write(new Date().getFullYear());</script> Evita Designart.
    </small>
  </footer>

  <script>

    const cards = [
      {
        name: "ワンドのエース",
        img: "card3/w01.jpg",
        upright: "情熱に満ちあふれた新しい始まりを示し、今までの停滞感を吹き飛ばすような強力なエネルギーを感じる時期です。<br>あなたの中で眠っていたアイデアがついに形になり、夢を現実に変えるタイミングが訪れています。<br>周囲の人との関わりや予期せぬチャンスが重なり、積極的に進むほど未来が広がります。<br>ここで踏み出す一歩が、大きな成功へと繋がるでしょう。<br>",
        reversed: "気持ちは前向きでも、計画不足や準備不足が目立ち、思い通りに進みにくい状態です。<br>焦りや周囲とのすれ違いがストレスを生み、心身に負担をかけることもあります。<br>無理に前進するより、冷静に現状を分析し、計画を練り直す時間を持つことが大切です。<br>休息と内面の整理によって再び情熱を取り戻せるでしょう。<br>"
      },
      {
        name: "ワンドの2",
        img: "card3/w02.jpg",
        upright: "将来の計画をじっくり考え、慎重に選択肢を見極めるタイミングです。<br>今は全体像を見渡し、理想を現実にするための具体的な戦略を立てることが大切です。<br>あなたの中にある不安や迷いを整理し、自信を持って行動を始めることで、長期的な成長が期待できます。<br>信念を持ちつつ柔軟に対応する姿勢が成功の鍵になります。<br>",
        reversed: "目の前の選択に対して決断できず、迷いや不安が強まる傾向があります。<br>周囲の意見に流されて自分の意志が見えなくなる可能性もあるでしょう。<br>今は無理に進めるより、一度立ち止まり、自分の心としっかり向き合う時間を持つことが大切です。<br>内面の整理を終えた後、自然と道は見えてくるでしょう。<br>"
      },
      {
        name: "ワンドの3",
        img: "card3/w03.jpg",
        upright: "これまでの努力が徐々に報われ、協力者やパートナーの存在が力強い支えとなります。<br>新しいチャンスが訪れ、あなたの計画が一歩進む兆しがあります。<br>周囲の信頼を得ながら進めることで、より大きな目標に到達できるでしょう。<br>思い描いていた未来に向かって、確かな自信を持って歩みを進めてください。<br>",
        reversed: "期待していた結果が思うように進まなかったり、周囲とのコミュニケーションの誤解が生じる可能性があります。<br>計画の甘さが表面化し、進行が滞ることもあるでしょう。<br>今は焦らずに計画を見直し、周囲としっかり意見を共有することが重要です。<br>冷静に修正を加えることで、再スタートのチャンスが訪れます。<br>"
      },
      {
        name: "ワンドの4",
        img: "card3/w04.jpg",
        upright: "努力の成果が形となり、安定と喜びを感じられる時期です。<br>仲間や家族と祝福を分かち合い、心からの安心感に包まれるでしょう。<br>今は人間関係を深める絶好のタイミングでもあります。<br>築いてきた基盤をさらに強化することで、今後の未来がより豊かになります。<br>",
        reversed: "表面的には安定して見えても、内面には不安や隙が生まれやすい時期です。<br>人間関係で誤解や疎遠が生じやすいため、信頼関係の再確認が求められます。<br>見た目の安心感に甘えず、心の奥にある本音に向き合うことで真の調和が得られるでしょう。<br>"
      },
      {
        name: "ワンドの5",
        img: "card3/w05.jpg",
        upright: "競争や挑戦の中で、あなたの成長が加速するタイミングです。<br>周囲との意見のぶつかり合いは、あなた自身の価値観を磨くチャンスになります。<br>困難を恐れず、自分の意見をしっかりと持ち、堂々と表現することで新たな信頼を得られるでしょう。<br>",
        reversed: "無益な争いや衝突に巻き込まれ、気力や集中力が低下しやすい時期です。<br>周囲の意見に左右されすぎることで、エネルギーを消耗してしまう恐れがあります。<br>感情的になる前に一度冷静になり、必要のない対立を避ける知恵が重要です。<br>"
      },
      {
        name: "ワンドの6",
        img: "card3/w06.jpg",
        upright: "これまでの努力が周囲から認められ、称賛や評価を受ける喜びを感じるでしょう。<br>達成感とともに、次のステージへ進むための自信が湧いてきます。<br>この好機を活かし、さらなる高みを目指す準備を始めるタイミングです。<br>あなたの魅力とリーダーシップが輝きを増します。<br>",
        reversed: "成功に慢心しすぎると、予想外の失敗を招く恐れがあります。<br>思い上がりや過信は周囲との溝を生み、信頼を失う原因になるかもしれません。<br>謙虚さを忘れずに感謝の気持ちを持ち続けることが、今後の運気を安定させる鍵です。<br>"
      },
      {
        name: "ワンドの7",
        img: "card3/w07.jpg",
        upright: "立場を守るために戦う必要がある時期です。<br>自分の信念を貫く強さが試される状況ですが、それを乗り越えることで大きな成長が期待できます。<br>ライバルとの競争はあなたをより強くし、確固たる自信を育てるでしょう。<br>周囲の支援を受けながら挑戦を続けることが大切です。<br>",
        reversed: "気力が低下し、抵抗する力が弱まっている状態です。<br>孤独感や疲労感に苛まれやすく、思わぬ壁に心が折れてしまうこともあるでしょう。<br>自分だけで抱え込まず、信頼できる人に助けを求める勇気を持ちましょう。<br>"
      },
      {
        name: "ワンドの8",
        img: "card3/w08.jpg",
        upright: "スピーディーな展開が訪れる時期です。<br>物事が一気に進み、あらゆる方向にチャンスが広がります。<br>流れに乗って積極的に行動することで、目標達成までの時間が大幅に短縮されるでしょう。<br>迷わずに決断する勇気が、成功の鍵となります。<br>",
        reversed: "進展の遅れや予期せぬ混乱が生じやすい時期です。<br>焦って行動すると、思わぬ障害にぶつかる可能性があります。<br>今は一度立ち止まり、状況を整理して計画を練り直すことが重要です。<br>冷静な判断が未来を切り開くカギとなるでしょう。<br>"
      },
      {
        name: "ワンドの9",
        img: "card3/w09.jpg",
        upright: "これまでの経験と忍耐があなたを守る武器になります。<br>最後まで諦めず、しっかりと防御を固めることが重要です。<br>過去の苦労が糧となり、今の困難を乗り越える強さを発揮できるでしょう。<br>乗り越えた先には、大きな達成感と成長があります。<br>",
        reversed: "精神的にも肉体的にも疲れが溜まりやすい時期です。<br>不信感が強まり、物事をネガティブに捉えがちになるかもしれません。<br>無理をせず、適切に休養を取り、周囲のサポートを受けることが大切です。<br>"
      },
      {
        name: "ワンドの10",
        img: "card3/w10.jpg",
        upright: "責任の重さが増すものの、その先に確かな達成感が待っています。<br>今は苦しくても、努力を続けることで結果が実ります。<br>最後の一押しを意識し、乗り越える意志を持つことで、将来に大きな収穫を得ることができるでしょう。<br>",
        reversed: "過剰な負担があなたを圧迫し、心身ともに限界に近づいています。<br>抱え込まず、周囲に助けを求めることが重要です。<br>タスクの優先順位を見直し、無駄を削ることが再起のきっかけとなるでしょう。<br>"
      },
      {
        name: "ワンドのペイジ",
        img: "card3/w11.jpg",
        upright: "新しい挑戦に対する強い情熱が芽生え、未来への期待が高まる時期です。<br>純粋な気持ちで物事に取り組むことで、思わぬ発展やチャンスが広がります。<br>柔軟さを持ち続けることで、大きな成長を遂げるでしょう。<br>",
        reversed: "準備不足や思慮の浅さが原因で、計画が崩れやすい時期です。<br>焦らず基礎を固め、慎重に行動することが大切です。<br>目先の成果にとらわれず、長期的な視点を持つことが必要です。<br>"
      },
      {
        name: "ワンドのナイト",
        img: "card3/w12.jpg",
        upright: "情熱と行動力が高まり、前進するスピードが加速するタイミングです。<br>大胆な決断が求められる場面もありますが、その勢いが大きな突破口を開くでしょう。<br>周囲を巻き込みながら進めることで、新たな可能性が広がります。<br>",
        reversed: "衝動的な行動がトラブルを引き起こす恐れがあります。<br>冷静さを失うと、周囲との摩擦が増える可能性が高いです。<br>協調性を意識し、慎重に行動することが問題回避の鍵です。<br>"
      },
      {
        name: "ワンドのクイーン",
        img: "card3/w13.jpg",
        upright: "強いカリスマ性と指導力を発揮できる時期です。<br>周囲を引きつけ、ポジティブな影響を与える存在となるでしょう。<br>内なる情熱を信じ、仲間とともに目標に向かう姿勢が成功を導きます。<br>",
        reversed: "過度に支配的になったり、独善的な振る舞いが周囲に不信感を与える恐れがあります。<br>相手の立場や意見を尊重し、柔軟な対応を心がけることが大切です。<br>"
      },
      {
        name: "ワンドのキング",
        img: "card3/w14.jpg",
        upright: "優れた統率力とビジョンを持ち、計画を着実に現実へと導ける力を発揮する時期です。<br>周囲からの信頼を得て、リーダーとしての役割を全うできるでしょう。<br>先を見据えた行動が大きな成果を生み出します。<br>",
        reversed: "強引さや支配的な態度が周囲にストレスを与え、反感を買いやすい状況です。<br>謙虚な姿勢と他者への思いやりが、信頼を維持するための大切な要素となります。<br>"
      },
      {
        name: "カップのエース",
        img: "card3/c01.jpg",
        upright: "新しい感情や恋愛の芽生えを象徴するカードです。<br>心が温かく満たされるような喜びが訪れ、誰かとの深い絆を感じる瞬間が増えるでしょう。<br>今は自分の気持ちに素直になり、愛や優しさを周囲と分かち合うことが大切です。<br>恋愛だけでなく、人間関係全体においてポジティブな変化が期待できます。<br>",
        reversed: "感情が不安定になりやすく、思い込みや誤解から人間関係に摩擦が生じる可能性があります。<br>気持ちの整理がつかず、進むべき方向が見えにくい時期です。<br>焦らずに心のバランスを整え、慎重に言動を選ぶことが重要です。<br>内面を見つめ直すことで、再び穏やかな気持ちを取り戻せるでしょう。<br>"
      },
      {
        name: "カップの2",
        img: "card3/c02.jpg",
        upright: "相互理解と調和を象徴するカードです。<br>大切な人との関係が深まり、信頼が強まる素晴らしいタイミングです。<br>恋愛面では新たな進展があったり、パートナーとの心の結びつきがより強固になる予感があります。<br>互いに支え合い、尊重し合う関係を築くことで幸福が大きく広がります。<br>",
        reversed: "すれ違いや誤解が生じやすく、気持ちがうまく伝わらない状態です。<br>小さな不安が大きな溝を作り出してしまう可能性もあります。<br>無理に理解を求めず、一度距離を置く冷静さも大切です。<br>相手と向き合うためには、まず自分自身の心を整理しましょう。<br>"
      },
      {
        name: "カップの3",
        img: "card3/c03.jpg",
        upright: "喜びや祝福、友情の深まりを意味します。<br>友人や家族と楽しい時間を過ごすことで、心の充実感を味わえる時期です。<br>人間関係が円滑に進み、周囲の人々から愛され、支えられている実感を得られるでしょう。<br>自分の気持ちを素直に表現することで、さらに絆が強まります。<br>",
        reversed: "楽しさを求めるあまり、度を越した行動や依存心が生まれる恐れがあります。<br>周囲の期待に応えようとしすぎて、自分を見失わないよう注意が必要です。<br>節度を守り、バランスの取れた付き合い方を意識することでトラブルを回避できます。<br>"
      },
      {
        name: "カップの4",
        img: "card3/c04.jpg",
        upright: "心が一時的に閉じこもり、内省が必要な時期を示しています。<br>現状に満足できず、漠然とした退屈感や倦怠感を覚えることがあるでしょう。<br>しかし、この時間は新しい気づきを得る大切な機会でもあります。<br>気分転換や新たな視点を取り入れることで、活力を取り戻せます。<br>",
        reversed: "せっかくのチャンスを無意識に拒んでしまい、重要な機会を逃す可能性があります。<br>周囲の人や出来事に無関心になりがちですが、少しの勇気を持って心を開くことが大切です。<br>新たな刺激に飛び込むことで、停滞感から解放されるでしょう。<br>"
      },
      {
        name: "カップの5",
        img: "card3/c05.jpg",
        upright: "喪失感や後悔がテーマのカードです。<br>過去の出来事に対して悲しみを感じる時期ですが、その中にも未来へ繋がるヒントが隠されています。<br>失ったものばかりに目を向けるのではなく、残されている希望を見つけることで新たな一歩を踏み出せます。<br>",
        reversed: "心の整理が進み、徐々に再出発する準備が整ってきています。<br>苦しみを乗り越えた後に訪れる癒しと成長が、あなたを新しい未来へと導きます。<br>今は小さな希望を大切にし、未来に目を向ける勇気を持つことが重要です。<br>"
      },
      {
        name: "カップの6",
        img: "card3/c06.jpg",
        upright: "過去の思い出や懐かしい気持ちがよみがえり、温かい感情に包まれる時期です。<br>昔の友人や家族との再会、原点に戻るような体験が心に安らぎをもたらします。<br>初心を思い出すことで、これからの自分の在り方を再確認できます。<br>",
        reversed: "過去の思いにとらわれすぎて、前に進めない状態に陥りやすいです。<br>未練や後悔が足を引っ張り、未来を見失う危険があります。<br>新しい視点を持ち、過去を受け入れて乗り越える決断が必要です。<br>"
      },
      {
        name: "カップの7",
        img: "card3/c07.jpg",
        upright: "夢や理想が膨らむ時期ですが、選択肢が多すぎて決断が難しい状態です。<br>目の前の誘惑や幻想に惑わされず、本当に必要なものを見極める冷静さが試されます。<br>内面の声に耳を傾け、現実とのバランスを取りながら進むことが成功の鍵です。<br>",
        reversed: "現実逃避や混乱に陥りやすい時期です。<br>夢を追いかけすぎるあまり、現実的な判断が鈍る可能性があります。<br>一度立ち止まり、目標を再設定することで、進むべき方向性がはっきりと見えてくるでしょう。<br>"
      },
      {
        name: "カップの8",
        img: "card3/c08.jpg",
        upright: "これまでの状況や関係性に区切りをつけ、新しいステージへと進む決断をする時期です。<br>感情の整理を経て、自分自身の成長を追求する強い意志が求められます。<br>勇気を出して手放すことで、新しい可能性が広がります。<br>",
        reversed: "執着心や未練に縛られ、前に進めない状態が続きやすいです。<br>変化を恐れる気持ちが強く、現状に甘んじてしまう傾向があります。<br>離れる勇気を持ち、未来への一歩を踏み出す準備をしましょう。<br>"
      },
      {
        name: "カップの9",
        img: "card3/c09.jpg",
        upright: "願いが叶い、心からの満足感と幸せを味わえるタイミングです。<br>努力や祈りが実を結び、安心と豊かさに包まれるでしょう。<br>この幸福感を周囲と分かち合うことで、さらに喜びが広がります。<br>感謝の気持ちを忘れずに過ごすことが、幸運を呼び込みます。<br>",
        reversed: "欲望が過剰になり、周囲との調和を欠いてしまう恐れがあります。<br>満足感が一時的なもので終わり、後悔が残ることも。<br>節度を守り、真の満足とは何かを考えることで、心の豊かさを取り戻せるでしょう。<br>"
      },
      {
        name: "カップの10",
        img: "card3/c10.jpg",
        upright: "家庭や人間関係における究極の幸福と安定を示すカードです。<br>信頼関係が深まり、長期的な絆や安心感が築かれるでしょう。<br>心からの喜びと感謝に包まれた毎日を過ごすことで、未来への大きな希望が育まれます。<br>",
        reversed: "表面的な幸福感にとどまり、内面的には不安や空虚感を抱えることがあります。<br>関係性の見直しや心の声に耳を傾けることで、本当の幸せを取り戻すヒントが見つかるでしょう。<br>"
      },
      {
        name: "カップのペイジ",
        img: "card3/c11.jpg",
        upright: "新たな愛情や感情の芽生えが訪れるタイミングです。<br>感受性が高まり、周囲の小さな変化や人の気持ちに敏感になれるでしょう。<br>素直な気持ちを大切にすることで、新しい人間関係や恋のチャンスが生まれます。<br>",
        reversed: "感情が不安定で、衝動的な行動に走りやすい時期です。<br>感情のコントロールが難しく、後悔するような選択をしてしまう可能性があります。<br>慎重さと冷静さを意識し、自分の気持ちを見つめ直す時間を持ちましょう。<br>"
      },
      {
        name: "カップのナイト",
        img: "card3/c12.jpg",
        upright: "情熱的でロマンチックな行動が際立つ時期です。<br>理想に向かって一直線に進む強い意志があり、恋愛や夢に積極的にアプローチできるでしょう。<br>周囲の人々に魅力的に映り、注目を集めることが増えます。<br>",
        reversed: "感情に流されやすく、軽率な行動を取りがちな時期です。<br>相手の気持ちを考えずに動いてしまい、トラブルを引き起こす可能性があります。<br>感情を整理し、バランスを保つことが大切です。<br>"
      },
      {
        name: "カップのクイーン",
        img: "card3/c13.jpg",
        upright: "深い愛情と共感を象徴し、周囲を癒す力を持つ存在となれる時期です。<br>優しさと理解力が高まり、人に寄り添うことで大きな信頼を得られるでしょう。<br>相手の気持ちを尊重することで、より豊かな関係を築けます。<br>",
        reversed: "優しさが過度に働き、自己犠牲的になりがちです。<br>周囲に依存されすぎたり、感情に巻き込まれる恐れがあります。<br>自分の気持ちを見失わないように、心の境界をしっかり保つことが必要です。<br>"
      },
      {
        name: "カップのキング",
        img: "card3/c14.jpg",
        upright: "感情の成熟と落ち着きを示し、周囲の人間関係を調整する役割を果たせる時期です。<br>冷静で公正な判断ができ、信頼される存在として活躍できます。<br>安定感ある姿勢が、周囲に安心感を与えるでしょう。<br>",
        reversed: "感情を押し殺してしまい、本当の思いを表に出せずに苦しむ可能性があります。<br>支配的な態度や感情の操作も問題となる恐れがあります。<br>誠実なコミュニケーションを心がけることで、周囲との関係が改善されるでしょう。<br>"
      },
      {
        name: "ソードのエース",
        img: "card3/s01.jpg",
        upright: "新たなアイデアや明確な意志が湧き上がり、迷いなく目標に向かって進める時期です。<br>頭が冴え、問題解決のための突破口を見つけやすいでしょう。<br>論理的思考と冷静な判断があなたの武器となり、周囲の信頼を得ることができます。<br>行動に移すことで大きな進展を引き寄せられます。<br>",
        reversed: "混乱や誤解が重なり、正しい判断ができない状態に陥りやすい時期です。<br>思い込みや過剰な自己主張がトラブルを招く可能性もあります。<br>一度立ち止まり、情報を整理し直す冷静さが必要です。<br>焦らず慎重な対応を心がけることで、再び道が開けてくるでしょう。<br>"
      },
      {
        name: "ソードの2",
        img: "card3/s02.jpg",
        upright: "冷静さを保ちつつ、周囲とのバランスを取りながら状況を見極めるタイミングです。<br>直感よりも理性を優先させることが求められ、感情を抑えて公平に判断できます。<br>自分にとっての最善を選ぶために、一時的な静寂が必要かもしれません。<br>",
        reversed: "優柔不断や決断の先延ばしによって、物事が進まず停滞しやすい時期です。<br>選択を恐れるあまり、チャンスを逃す危険もあります。<br>小さな決断から始めることで、状況を動かすヒントが得られるでしょう。<br>"
      },
      {
        name: "ソードの3",
        img: "card3/s03.jpg",
        upright: "心の痛みや失望が表面化する時期です。<br>思わぬ裏切りや別れによって苦しむこともありますが、この経験が成長と新たな気づきをもたらします。<br>悲しみを受け入れ、自分自身と向き合うことで、強さを身につけることができるでしょう。<br>",
        reversed: "過去の傷が少しずつ癒え、新たな希望が見え始めます。<br>痛みを乗り越えることで得た学びが、これからの人生に大きな力を与えるでしょう。<br>自分を許し、未来を信じる心を育てることが大切です。<br>"
      },
      {
        name: "ソードの4",
        img: "card3/s04.jpg",
        upright: "一度立ち止まり、心身を休める必要がある時期です。<br>無理に動くよりも、静かな時間を持ち、自分自身の気持ちや状況を見つめ直すことで回復が進みます。<br>リセットすることで、再び前進するエネルギーが湧き出てくるでしょう。<br>",
        reversed: "焦りや不安から落ち着けず、休息がうまく取れない状態です。<br>無理に進もうとすると心身のバランスが崩れる可能性があります。<br>休息を恐れず、リフレッシュする勇気を持つことで、再び活力を取り戻せます。<br>"
      },
      {
        name: "ソードの5",
        img: "card3/s05.jpg",
        upright: "勝ち負けに執着しすぎるあまり、周囲との関係に亀裂が生まれやすい時期です。<br>勝利のための戦略が裏目に出る可能性もあります。<br>状況を冷静に見極め、必要な時は引く勇気を持つことが、長い目で見て大切です。<br>",
        reversed: "争いや対立が和らぎ、妥協や和解の兆しが見えてきます。<br>相手との溝を埋めるために、自分から歩み寄る姿勢が必要です。<br>過去の執着を手放すことで、新たな信頼関係が築かれます。<br>"
      },
      {
        name: "ソードの6",
        img: "card3/s06.jpg",
        upright: "困難な状況から離れ、心が解放されるタイミングです。<br>新たな環境や考え方を取り入れることで、精神的にも前進できます。<br>旅立ちや移動に関する良い知らせも期待でき、変化が未来への一歩となります。<br>",
        reversed: "過去の出来事に縛られ、前に進めない状態です。<br>変化を恐れる気持ちが強く、新しい可能性を閉ざしてしまうことがあります。<br>思い切って行動する勇気が未来を切り開くカギとなります。<br>"
      },
      {
        name: "ソードの7",
        img: "card3/s07.jpg",
        upright: "策略や計画的な行動が求められる時期です。<br>秘密を抱えることや慎重な立ち回りが有効ですが、道徳的な葛藤も伴う可能性があります。<br>誠実さを忘れずに行動することが、最終的には信頼を守るポイントです。<br>",
        reversed: "隠し事や嘘が表面化しやすく、トラブルに繋がる恐れがあります。<br>誤魔化しが効かなくなるため、素直さと誠実さが重要になります。<br>勇気を持って真実を伝えることで、状況が改善に向かうでしょう。<br>"
      },
      {
        name: "ソードの8",
        img: "card3/s08.jpg",
        upright: "制限や束縛を強く感じる状況に置かれ、自由を奪われたような感覚に陥りやすいです。<br>出口が見えず、無力感を抱きがちですが、自分の意識次第で状況を変えられる可能性が秘められています。<br>",
        reversed: "思い込みや不安から解放され、再び自由を取り戻せる兆しです。<br>閉塞感から抜け出すためには、自分自身の内面に向き合う必要があります。<br>勇気ある一歩が、新たな世界を開くきっかけになります。<br>"
      },
      {
        name: "ソードの9",
        img: "card3/s09.jpg",
        upright: "不安や恐れが心を支配し、精神的なプレッシャーがピークに達する時期です。<br>眠れない夜や過度な心配が続くかもしれませんが、原因を見つめ直し、少しずつ問題を整理することが求められます。<br>",
        reversed: "徐々に心の重荷が軽くなり、希望が見え始めます。<br>暗闇の中にも光を見出せるようになり、再生への道が開けるでしょう。<br>自分を許し、少しずつ前向きになることが回復の鍵です。<br>"
      },
      {
        name: "ソードの10",
        img: "card3/s10.jpg",
        upright: "大きな苦難や終焉を示すカードです。<br>一見絶望的に思える状況でも、再生の可能性が潜んでいます。<br>これまでの痛みを手放し、ゼロから再スタートする強い決意が必要です。<br>",
        reversed: "絶望的に思えた状況から回復の兆しが見えます。<br>再生と再出発に向けて準備が整いつつあり、前に進む力を取り戻せるでしょう。<br>終わりは新たな始まりの合図です。<br>"
      },
      {
        name: "ソードのペイジ",
        img: "card3/s11.jpg",
        upright: "新しい情報や知識を吸収するのに最適な時期です。<br>好奇心が高まり、積極的に学び行動することで多くの気づきを得られます。<br>柔軟な思考を大切にし、周囲とのコミュニケーションを楽しむ姿勢が鍵となります。<br>",
        reversed: "表面的な知識に惑わされ、誤解やトラブルを招きやすい状態です。<br>根拠のない噂に流されず、情報をしっかりと見極めることが重要です。<br>冷静さを保ちながら学ぶ姿勢が求められます。<br>"
      },
      {
        name: "ソードのナイト",
        img: "card3/s12.jpg",
        upright: "行動力と決断力が高まるタイミングです。<br>勢いに乗って物事を進めるパワーがありますが、勢い余って周囲を巻き込む恐れもあります。<br>冷静な判断を忘れず、バランスを意識した行動が成功の鍵です。<br>",
        reversed: "焦りや衝動に任せて行動しやすく、トラブルを引き起こしやすい時期です。<br>計画性を欠いた行動は、後悔を招く原因となります。<br>落ち着きを持ち、一歩ずつ進む意識が大切です。<br>"
      },
      {
        name: "ソードのクイーン",
        img: "card3/s13.jpg",
        upright: "知性と冷静さが際立ち、公平な判断ができる時期です。<br>感情に流されず、客観的に物事を見極める力が高まり、周囲から頼られる存在になります。<br>言葉の選び方に注意することで、より良い人間関係を築けます。<br>",
        reversed: "厳しさが強く出すぎてしまい、周囲を傷つけやすい状態です。<br>批判的になりすぎず、相手の立場や感情を理解する柔軟さが求められます。<br>心の余裕を持つことが重要です。<br>"
      },
      {
        name: "ソードのキング",
        img: "card3/s14.jpg",
        upright: "卓越した判断力と論理性を発揮できる時期です。<br>リーダーシップを発揮し、周囲を導く存在として信頼されます。<br>公正さと誠実さを大切にすることで、大きな成果を上げることができるでしょう。<br>",
        reversed: "権威的になりすぎるあまり、柔軟さを欠いてしまう傾向があります。<br>相手をコントロールしようとする態度は、反発を招く恐れがあります。<br>相互理解と歩み寄りの姿勢が改善の鍵です。<br>"
      },
      {
        name: "ペンタクルのエース",
        img: "card3/p01.jpg",
        upright: "新たな収入源やプロジェクト、金銭面でのチャンスが訪れる兆しです。<br>これまでの努力が実を結び、現実的な成果が期待できます。<br>現実的な基盤をしっかりと築くことで、長期的な安定と成功への道が開かれるでしょう。<br>",
        reversed: "期待していた収益やチャンスが思うように進まず、失望感が強まるかもしれません。<br>投資や契約には慎重さが求められます。<br>地に足をつけて計画を見直し、無理のない範囲でリスクを抑えることが重要です。<br>"
      },
      {
        name: "ペンタクルの2",
        img: "card3/p02.jpg",
        upright: "バランス感覚が問われる時期です。<br>仕事とプライベート、収支など、さまざまな要素を器用にこなす柔軟さが求められます。<br>状況の変化に応じて臨機応変に動けることで、安定と成長を同時に手に入れることができるでしょう。<br>",
        reversed: "優柔不断や不安定な状況に振り回され、決断ができない状態に陥りがちです。<br>選択肢を整理し、何を優先すべきか明確にする必要があります。<br>焦らずに、自分のペースを取り戻すことが大切です。<br>"
      },
      {
        name: "ペンタクルの3",
        img: "card3/p03.jpg",
        upright: "周囲との協力関係が強まり、チームとしての目標達成に向けて大きく前進できる時期です。<br>専門性を発揮しながら共同作業に取り組むことで、評価や信頼を得ることができます。<br>努力の積み重ねが未来の飛躍につながります。<br>",
        reversed: "意見の対立やチーム内の不一致により、計画が停滞する恐れがあります。<br>周囲との意思疎通を見直し、相互理解を深めることが必要です。<br>調和を意識することで、状況の改善が期待できます。<br>"
      },
      {
        name: "ペンタクルの4",
        img: "card3/p04.jpg",
        upright: "現状を維持したいという気持ちが強くなり、保守的な姿勢が強調される時期です。<br>財産や地位を守る意識が高まる反面、新しい可能性に対して慎重になりがちです。<br>大切なものを守るために、自分の価値観を再確認することが大切です。<br>",
        reversed: "過度な執着や物質的な不安が、自由な発想や新たなチャンスを妨げます。<br>恐れを手放し、変化を受け入れる柔軟性を持つことで、閉塞感から解放されるでしょう。<br>"
      },
      {
        name: "ペンタクルの5",
        img: "card3/p05.jpg",
        upright: "経済的な不安や孤立感を抱えやすい時期ですが、同時に助けを求めることの大切さに気づくチャンスでもあります。<br>自分の弱さを認め、信頼できる人に支援を求めることで、新たな光が見えてくるでしょう。<br>",
        reversed: "困難な状況からの回復の兆しが見え始めています。<br>支援を受けることで、徐々に希望と活力を取り戻せるでしょう。<br>ポジティブな気持ちを大切にして、再スタートの準備を整えましょう。<br>"
      },
      {
        name: "ペンタクルの6",
        img: "card3/p06.jpg",
        upright: "人との助け合いや分かち合いを通じて、心の豊かさを感じられる時期です。<br>支援を受けたり与えたりする中で、信頼関係が強まります。<br>見返りを求めない純粋な善意が、周囲からの評価や感謝を呼び込み、あなた自身の精神的な成長につながるでしょう。<br>",
        reversed: "与えることと受け取ることのバランスが崩れ、不公平感が強まる恐れがあります。<br>周囲に期待しすぎたり、自分ばかりが負担を背負ってしまうかもしれません。<br>自分自身の価値を見失わないように、境界線を見直すことが必要です。<br>"
      },
      {
        name: "ペンタクルの7",
        img: "card3/p07.jpg",
        upright: "努力の成果が徐々に見え始め、成長の実感を得られる時期です。<br>すぐに結果が出なくても、着実に積み重ねたものがやがて花開く兆しがあります。<br>忍耐強く自分の進む道を信じることが大切で、焦らず腰を据える姿勢が将来の大きな成功を呼び込みます。<br>",
        reversed: "進展が遅いと感じ、焦りや不満が生じやすい状況です。<br>努力の方向性や方法を再確認する必要があります。<br>時には立ち止まって戦略を練り直すことで、無駄な消耗を避け、より効率的に進めるヒントが見えてくるでしょう。<br>"
      },
      {
        name: "ペンタクルの8",
        img: "card3/p08.jpg",
        upright: "集中力と情熱が高まり、スキルや知識の向上に力を注げる時期です。<br>細部にまでこだわる姿勢が評価され、仕事や趣味での成果が大きく飛躍します。<br>周囲からも信頼され、あなたの成長を後押しする環境が整うでしょう。<br>",
        reversed: "単調さに退屈したり、集中力が散漫になりやすい時期です。<br>作業へのモチベーションが下がり、質を落としてしまう恐れもあります。<br>今一度目標を見直し、自分にとっての意義を再確認することで、情熱を取り戻せるでしょう。<br>"
      },
      {
        name: "ペンタクルの9",
        img: "card3/p09.jpg",
        upright: "物質的にも精神的にも豊かさを享受できる時期です。<br>これまでの努力が報われ、自信と誇りを感じられるでしょう。<br>独立心が高まり、自分らしさを大切にしながら暮らす喜びを味わえます。<br>周囲からの尊敬や羨望のまなざしも集まりそうです。<br>",
        reversed: "表面的な豊かさに満足してしまい、内面の充実が伴わない可能性があります。<br>過度な贅沢や虚栄心が強まり、周囲との距離が広がる恐れも。<br>真の幸せを見つめ直し、心の豊かさを育むことが大切です。<br>"
      },
      {
        name: "ペンタクルの10",
        img: "card3/p10.jpg",
        upright: "家庭や家系、財産など長期的な安定と繁栄を象徴します。<br>家族との絆が深まり、世代を超えて築かれてきた基盤を実感できる時期です。<br>伝統や価値観を守りながら、自分自身も未来を見据えた選択ができるでしょう。<br>",
        reversed: "表面上は安定して見えても、内側では不安定さや価値観のずれが生じやすいです。<br>家族や身近な人との関係を再確認し、誤解やわだかまりを解消することが必要です。<br>本当の意味での安心を取り戻すための努力が求められます。<br>"
      },
      {
        name: "ペンタクルのペイジ",
        img: "card3/p11.jpg",
        upright: "新たな学びや挑戦に前向きに取り組める時期です。<br>小さな一歩を踏み出すことで、将来の大きな可能性が開けるでしょう。<br>好奇心が高まり、知識や経験を吸収するチャンスが広がっています。<br>慎重さを忘れず、着実に進めることが大切です。<br>",
        reversed: "目先の利益や表面的な魅力にとらわれ、地に足がつかない行動を取りがちです。<br>浅い知識や甘い見通しによって期待外れの結果に終わる可能性があります。<br>基礎を固める意識と、真面目な姿勢が必要です。<br>"
      },
      {
        name: "ペンタクルのナイト",
        img: "card3/p12.jpg",
        upright: "地道な努力を積み重ね、着実に目標に向かって進む時期です。<br>誠実さと粘り強さが評価され、周囲から信頼を得られるでしょう。<br>途中で投げ出さず、最後までやり抜く強い意志が大きな成果を呼び込みます。<br>",
        reversed: "保守的になりすぎるあまり、新しいチャンスを逃してしまう恐れがあります。<br>頑固さや融通のきかなさが障害となり、前進を妨げます。<br>柔軟な発想と変化を受け入れる姿勢が、状況を改善する鍵になります。<br>"
      },
      {
        name: "ペンタクルのクイーン",
        img: "card3/p13.jpg",
        upright: "思いやりと現実的な感覚が融合し、周囲に安心感を与える存在となります。<br>物質面だけでなく心の豊かさも重視し、家族や仲間を支える力が高まる時期です。<br>現実的な視点で物事を捉えながら、人々に愛と調和をもたらします。<br>",
        reversed: "過剰な世話や干渉が、相手の自立心を奪ってしまう可能性があります。<br>自分の思い通りにしようとする気持ちが強まり、依存を助長しやすいです。<br>相手を尊重し、適切な距離感を保つことが必要です。<br>"
      },
      {
        name: "ペンタクルのキング",
        img: "card3/p14.jpg",
        upright: "経済的な成功と現実的なリーダーシップを発揮できる時期です。<br>責任感と冷静さを兼ね備え、周囲からの信頼を得るでしょう。<br>安定した基盤の上で堅実な成果を上げることができ、長期的な繁栄を築く準備が整っています。<br>",
        reversed: "物質的な成功にとらわれすぎるあまり、柔軟さや周囲への配慮を失いやすいです。<br>支配的な態度や独善的な行動が、信頼関係に亀裂を生む可能性があります。<br>思いやりと寛容さを意識することで、バランスを取り戻せるでしょう。<br>"
      }

    ];

    document.getElementById("drawBtn").addEventListener("click", () => {
      const card = cards[Math.floor(Math.random() * cards.length)];
      const isUpright = Math.random() < 0.5;

      // GA4 トラッキング
      if (typeof gtag === 'function') {
        gtag('event', 'select_tarot', {
          'card_name': card.name,
          'position': isUpright ? '正位置' : '逆位置'
        });
      }

      let resultHtml = `<h2>${card.name}（${isUpright ? "正位置" : "逆位置"}）</h2>`;
      resultHtml += `<img src="${card.img}" class="${isUpright ? "" : "reversed"}">`;
      resultHtml += `<p class="text">${isUpright ? card.upright : card.reversed}</p>`;

      document.getElementById("result").innerHTML = resultHtml;
document.getElementById("result").scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
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
    #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
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
    #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
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
      #drawButton, #drawBtn {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      font-size: 1.4rem;
      font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', 'Hiragino Mincho ProN', 'Hiragino Mincho Pro', serif;
      font-weight: 900;
      padding: 1.2rem 2rem;
      border-radius: 50px;
      border: 2px solid #ffeaa7;
      box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      margin: 3rem auto;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 90%;
      max-width: 400px;
      animation: draw-pulse 2s infinite;
      transition: all 0.1s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }
    #drawButton::after, #drawBtn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
      transform: skewX(-25deg);
      animation: gold-shine 3s infinite;
    }
    #drawButton:hover, #drawBtn:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active, #drawBtn:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
    }
    @keyframes draw-pulse {
      0% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
      50% { transform: scale(1.03); box-shadow: 0 8px 0 #b38b22, 0 20px 25px rgba(212, 175, 55, 0.9), inset 0 2px 2px rgba(255,255,255,0.8); border-color: #fff; }
      100% { transform: scale(1); box-shadow: 0 8px 0 #b38b22, 0 15px 15px rgba(212, 175, 55, 0.4), inset 0 2px 2px rgba(255,255,255,0.8); }
    }
</style>
  <div class="fixed-sns-share">
        <a href="https://twitter.com/intent/tweet?url=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>&text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ'); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-x" title="X (Twitter)でシェア">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>" target="_blank" rel="noopener noreferrer" class="sns-fb" title="Facebookでシェア">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
        <a href="https://line.me/R/msg/text/?<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/' . basename($_SERVER['PHP_SELF'])); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-line" title="LINEでシェア">
      <i class="fa-brands fa-line"></i>
    </a>
        <a href="https://bsky.app/intent/compose?text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/' . basename($_SERVER['PHP_SELF'])); ?>"
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




