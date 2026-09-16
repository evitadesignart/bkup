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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6729293840967461"
    crossorigin="anonymous"></script>
  <meta name="author" content="Evita Designart">
  <title>【無料】タロット占い｜3枚引きで占う恋愛と未来の行方 | 占いアルカノヴァ</title>
  <meta name="description" content="完全無料の3枚引きタロット占い。過去・現在・未来のカードから、あなたの恋愛の行方や相手の気持ちを深く読み解きます。片思いや復縁、新しい出会いなど、恋の未来に悩む方におすすめの恋愛特化タロットです。">
  <meta property="og:title" content="【無料】タロット占い｜3枚引きで占う恋愛と未来の行方">
  <meta property="og:description" content="完全無料の3枚引きタロット占い。過去・現在・未来のカードから、あなたの恋愛の行方や相手の気持ちを深く読み解きます。恋の未来に悩む方におすすめの恋愛特化タロットです。">
  <meta property="og:url" content="https://evitadesignart.com/tarotte8.php">
  <meta property="og:type" content="website">

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "【無料】タロット占い｜3枚引きで占う恋愛と未来の行方",
  "url": "https://evitadesignart.com/tarotte8.php",
  "description": "完全無料の3枚引きタロット占い。過去・現在・未来のカードから、あなたの恋愛の行方や相手の気持ちを深く読み解きます。片思いや復縁、新しい出会いなど、恋の未来に悩む方におすすめの恋愛特化タロットです。",
  "inLanguage": "ja",
  "isPartOf": {
    "@type": "WebSite",
    "name": "Evita Designart 占いサイト",
    "url": "https://evitadesignart.com/"
  },
  "author": {
    "@type": "Organization",
    "name": "Evita Designart",
    "url": "https://evitadesignart.com/"
  },
  "mainEntity": {
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "3枚引き恋愛タロット占いとは？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "3枚のカードがそれぞれ恋愛における過去・現在・未来を象徴し、恋の流れや変化を読み解くことができます。"
        }
      },
      {
        "@type": "Question",
        "name": "恋愛だけに特化していますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "はい。この占いは恋愛運に特化しており、片思い、出会い、復縁、進展など、恋に関するさまざまなテーマに対応しています。"
        }
      },
      {
        "@type": "Question",
        "name": "正位置・逆位置とは？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "カードの向きにより、ポジティブな意味（正位置）とネガティブな意味（逆位置）が分かれます。恋愛における心構えや注意点を読み取るヒントになります。"
        }
      }
    ]
  }
}
</script>

  <style>
    html {
      background-image: url("img/flower_pattern043.jpg");
      background-repeat: repeat;
      background-size: 25%;
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
      min-height: 100vh;
      color: #e0dede;
      text-align: center;
      padding: 2rem;
      padding-top: 180px;
      /* 調整 */
    }

    h1 {
      font-size: 2rem;
      display: inline-block;
      margin-bottom: 1rem;
      color: #c9a0dc;
      text-shadow: 0 0 6px #9b59b6;
    }

    h2 {
      font-size: 1.5rem;
      margin-top: 2rem;
      color: #c9a0dc;
      text-shadow: 0 0 5px #7f3fbf;
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

    #overview,
    #overview2 {
      max-width: 600px;
      margin: 0 auto 1.5rem auto;
      font-size: 1.1rem;
      color: #d3c7e0;
      line-height: 1.5;
      user-select: none;
    }

    #overview2 {
      font-size: small;
    }

    #shuffle-status {
      font-size: 1rem;
      color: yellow;
      margin-bottom: 1rem;
      height: 1.5rem;
      user-select: none;
    }

    .cards-wrapper {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
      margin-bottom: 2rem;
    }

    .card-container {
      width: 220px;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 1rem;
    }

    .card {
      width: 100%;
      height: 400px;
      border-radius: 10px;
      transition: transform 0.8s;
      transform-style: preserve-3d;
      pointer-events: none;
      position: relative;
      background-color: #2c2c54;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.7);
      background-size: cover;
      background-position: center;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .card.flip {
      transform: rotateY(180deg);
    }

    .card-face {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.8);
    }

    .card-back {
      background-image: url('card/back.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(0.4);
    }

    .card-front {
      transform: rotateY(180deg);
      background-size: cover;
      background-position: center;
      filter: drop-shadow(0 0 8px #9b59b6);
    }

    .card-front.reversed {
      transform: rotateY(180deg) rotate(180deg);
    }

    .reversed-label {
      position: absolute;
      bottom: 4px;
      right: 4px;
      background-color: rgba(155, 89, 182, 0.8);
      color: #fff;
      padding: 2px 6px;
      font-size: 0.8rem;
      border-radius: 4px;
      user-select: none;
      transform: rotate(180deg);
      text-shadow: 0 0 4px #5e3a7d;
    }

    .description {
      font-size: small;
      min-height: 6rem;
      color: #dcd6f7;
      text-align: left;
      padding: 0 0.5rem;
      width: 100%;
      box-sizing: border-box;
      user-select: text;
      text-shadow: 0 0 5px #4b3f72;
    }

    .status {
      text-align: center;
    }

    .card_status {
      background-color: #210026;
      color: yellow;
      border-radius: 50%;
      line-height: 3rem;
    }

    #overall-interpretation {
      margin-top: 2rem;
      padding: 1rem;
      border: 2px solid #6f42c1;
      border-radius: 10px;
      background-color: #2c2c54;
      max-width: 640px;
      margin-left: auto;
      margin-right: auto;
      font-size: 1.1rem;
      color: #d3c7e0;
      white-space: pre-wrap;
      min-height: 3rem;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.8);
    }

    a {
      color: yellow;
    }

    button a {
      color: white;
      text-decolation: none;
    }

    button {
      margin: 5rem;
      width: 50%;
      max-width: 500px;
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
</head>

<body>
  <header>
    <a href="https://evitadesignart.com/tarotte_list.php">
      <h1>無料3枚引き恋愛タロット占い<br>過去・現在・未来の恋の行方</h1>
    </a>
        <?php include("nav.php"); ?>
  </header>
  <style>
    .fv-wrapper-custom {
      width: 100vw;
      margin-left: calc(50% - 50vw);
      margin-bottom: 40px;
      line-height: 0;
      position: relative;
      z-index: 0;
    }
    @media (min-width: 769px) {
      .fv-wrapper-custom {
        width: 100%;
        margin-left: 0;
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
  <div id="fv-wrapper" class="fv-wrapper-custom">
    <img src="img/fv_tarotte8.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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

  <p id="overview">
    3枚のカードは<br class="md:hidden"> 「過去」「現在」「未来」を象徴し、<br class="md:hidden"> それぞれがあなたの<br class="md:hidden">
    恋愛の流れを示します。<br>片思い・復縁・新しい出会いなど、<br class="md:hidden"> 恋の進展を<br class="md:hidden"> 占いましょう。
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
  <div class="sp-text-left"
    style="background:#112244; padding: 1em; border-radius: 8px; margin: 1.5em 0; line-height: 1.7;">
    <strong style="color:#aabbff;">こんな方におすすめ：</strong>
    <ul style="list-style: none; padding-left: 0; margin-top: 0.5em; margin-bottom: 0;">
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 恋の未来や相手の<br class="md:hidden"> 気持ちを知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 過去の恋愛が今に<br class="md:hidden">どう影響しているのか知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 出会い、片思い、復縁、<br class="md:hidden">関係進展のヒントが欲しい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 正位置・逆位置の<br class="md:hidden">恋愛メッセージを読みたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ タロット初心者でも<br class="md:hidden">安心して占いたい</li>
    </ul>
  </div>

  <button id="drawButton"><span style="text-align: center; line-height: 1.2;">運勢を占う<br><span style="font-size: 0.8em; font-weight: normal;">（カードを引く）</span></span></button>
  <div id="shuffle-status"></div>
  <div class="cards-wrapper" id="cards-wrapper"></div>

  <h2>過去・現在・未来の<br class="md:hidden"> 恋愛メッセージ</h2>
  <p id="overview2">
    過去のカードはあなたの恋愛経験や影響、<br class="md:hidden"> 現在のカードは今の想いや状況、<br class="md:hidden">
    未来のカードはこれからの恋の展開を示します。<br>恋の流れを読み解き、<br class="md:hidden"> あなたの心の指針にしてください。
  </p>



  <div id="overall-interpretation">カードを引いてください</div>



  <p id="overview2">
    イラストなどは<a href="https://nano-design.booth.pm/">BOOTH</a>、<a
      href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a>にて<br
      class="md:hidden"> 素材販売中です。
    <br>
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
  </p>




  <script>const cards = [
      {
        "name": "愚者（The Fool）",
        "upright": {
          "love": "自由でのびのびとした恋愛が始まる時期です。無邪気さや好奇心が恋のきっかけを作り、新しい出会いに心が弾みます。肩の力を抜いて自然体で楽しみましょう。あなたの魅力が自然と伝わる時です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "無責任な言動や軽率な行動が恋愛に悪影響を及ぼす恐れがあります。感情のコントロールを心がけ、相手への配慮を忘れないようにしましょう。軽はずみな選択には注意が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/00.jpg"
      },
      {
        "name": "魔術師（The Magician）",
        "upright": {
          "love": "あなたの魅力が増し、新しい出会いや恋愛の主導権を握る時期です。自信を持って積極的にコミュニケーションをとりましょう。恋のチャンスを逃さないように行動を。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "誠実さに欠ける行動やごまかしが関係に悪影響を与えます。信頼関係を大切にしましょう。不誠実な態度は避け、正直な気持ちを示すことが大切です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/01.jpg"
      },
      {
        "name": "吊るされた男（The Hanged Man）",
        "upright": {
          "love": "忍耐と自己犠牲が求められる時期です。相手の立場や気持ちを理解しようと努めましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "報われない関係や我慢の限界を感じることがあります。今後の方向性を考えましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/12.jpg"
      },
      {
        "name": "死神（Death）",
        "upright": {
          "love": "古い関係や過去を手放し、新たな恋愛の始まりを迎えます。変化を恐れず受け入れましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "別れや変化を拒む気持ちが関係の停滞を招きます。前向きな決断が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/13.jpg"
      },
      {
        "name": "節制（Temperance）",
        "upright": {
          "love": "調和とバランスのとれた恋愛関係が育まれます。相手との歩み寄りが進む時期です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "不均衡な関係や感情のすれ違いが起こることがあります。コミュニケーションの改善が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/14.jpg"
      },
      {
        "name": "悪魔（The Devil）",
        "upright": {
          "love": "束縛や依存が強くなりやすい時期です。関係のバランスを崩さないよう注意しましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "束縛からの解放や自己認識の進展が見られます。新しい自分を受け入れる時期です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/15.jpg"
      },
      {
        "name": "塔（The Tower）",
        "upright": {
          "love": "突然の衝撃的な変化や破局の可能性があります。現状の見直しと覚悟が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "混乱や破局の回避ができる可能性があります。問題解決に向けて努力しましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/16.jpg"
      },
      {
        "name": "星（The Star）",
        "upright": {
          "love": "希望と癒しに満ちた恋愛です。未来に期待を持ち、ポジティブに進みましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "失望や迷いが生じやすい時期です。焦らず自己を見つめ直しましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/17.jpg"
      },
      {
        "name": "月（The Moon）",
        "upright": {
          "love": "秘密や直感が恋愛に影響します。曖昧さや不安が混じるため、相手との信頼関係を深める努力が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "混乱や誤解が関係を複雑にします。コミュニケーションの改善が急務です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/18.jpg"
      },
      {
        "name": "太陽（The Sun）",
        "upright": {
          "love": "喜びと成功に満ちた恋愛関係です。明るく開放的な気持ちで相手と接しましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "過剰な期待や自己中心的な態度が問題を生みます。現実的な視点が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/19.jpg"
      },
      {
        "name": "審判（Judgement）",
        "upright": {
          "love": "過去の関係を再評価し、新たな決断ができる時期です。成長と変化を受け入れましょう。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "過去のしがらみに縛られ、前に進めない状態です。自己否定を手放す努力が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/20.jpg"
      },
      {
        "name": "世界（The World）",
        "upright": {
          "love": "完成された関係が築かれ、安定と幸福が訪れます。互いの絆が強まる時期です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "reversed": {
          "love": "関係の未完成感や停滞が見られます。改善のための努力が必要です。 心を開いて素直な気持ちを伝えることが、恋愛において重要な鍵となります。状況に応じた対応を心がけましょう。"
        },
        "img": "card/21.jpg"
      }
    ];



    const positions = ["過去", "現在", "未来"]; // ラベル名


    const additionalPatterns = {
      "愚者-節制-星": "自由な心と調和が希望の光を呼び込みます。新たな始まりに期待しましょう。",
      "魔術師-恋人-隠者": "才能と愛の選択が内省を促し、深い洞察へと導きます。",
      "女教皇-戦車-正義": "直感を活かした行動が公平な判断と成功をもたらします。",
      "女帝-力-死神": "愛情の力で古いものを手放し、新たな変化を迎え入れます。",
      "皇帝-隠者-節制": "安定した基盤の上に自己探求とバランスが調和します。",
      "法王-運命の輪-月": "伝統の中で運命の波に乗り、不確かな未来も受け入れましょう。",
      "恋人-正義-太陽": "愛と公正が明るい成功と幸福をもたらします。",
      "戦車-吊るされた男-愚者": "挑戦と忍耐の後、新しい自由な旅が始まります。",
      "力-死神-女教皇": "強さと終わりが直感と知恵へと繋がります。",
      "隠者-節制-魔術師": "内省と調和を通じて創造力が開花します。",
      "運命の輪-悪魔-恋人": "運命の波に乗りつつも誘惑に注意し、真実の愛を見つけましょう。",
      "正義-塔-星": "公正さが試される変化の中で希望が輝きます。",
      "吊るされた男-星-力": "忍耐の中に希望を持ち続け、力強く未来を切り開きます。",
      "死神-月-節制": "終わりの不安を乗り越え、心身のバランスが戻ります。",
      "節制-太陽-審判": "調和の中で成功と再生が訪れます。",
      "悪魔-審判-世界": "誘惑と解放の先に完全な成就があります。",
      "塔-愚者-魔術師": "衝撃的な変化が自由な発想と創造力を促します。",
      "星-魔術師-恋人": "希望が才能を後押しし、愛が未来を明るく照らします。",
      "月-女教皇-戦車": "不確かな状況でも直感と行動で乗り越えます。",
      "太陽-女帝-隠者": "明るい成功の中で愛と内省が深まります。",
      "審判-皇帝-正義": "復活の時に責任と公平さが未来を築きます。",
      "世界-法王-吊るされた男": "完成と伝統が忍耐の価値を教えます。",
      "愚者-恋人-死神": "自由な心が愛の終わりを経て新たな始まりを迎えます。",
      "魔術師-戦車-節制": "技術と行動力がバランスよく未来を切り開きます。",
      "女教皇-力-悪魔": "直感と内なる強さが誘惑と戦う力になります。",
      "女帝-隠者-塔": "愛情と自己探求の間に衝撃的な変化が訪れます。",
      "皇帝-運命の輪-星": "確固たる基盤の上に運命の希望が輝きます。",
      "法王-正義-月": "伝統と公正が迷いを乗り越える光となります。",
      "恋人-吊るされた男-太陽": "愛の試練を越えた先に輝かしい未来が待っています。",
      "戦車-死神-審判": "行動と終焉を経て新たな復活が訪れます。",
      "力-節制-世界": "強さと調和が完全な成就へと導きます。",
      "隠者-悪魔-愚者": "孤独と誘惑の中で自由な旅が始まります。",
      "運命の輪-塔-魔術師": "運命の激変が新たな創造を生み出します。",
      "正義-星-女教皇": "公正と希望が直感を高めます。",
      "吊るされた男-月-女帝": "忍耐と不安の中で愛情が育まれます。",
      "死神-太陽-皇帝": "終わりと明るい未来が安定を築きます。",
      "節制-審判-法王": "調和の復活が伝統を強化します。",
      "悪魔-世界-恋人": "束縛からの解放が豊かな愛をもたらします。",
      "塔-愚者-戦車": "突然の変化が自由な冒険を力強く進めます。",
      "星-魔術師-力": "希望が創造力と強さを支えます。",
      "月-女教皇-隠者": "迷いの中でも深い洞察と内省が光ります。",
      "太陽-女帝-運命の輪": "成功の愛情が運命の変化を後押しします。",
      "審判-皇帝-正義": "再生の中で責任と公平さが未来を築きます。",
      "世界-法王-恋人": "完成した世界に伝統と愛の調和が訪れます。",
      "愚者-魔術師-女教皇": "新しい旅が才能と直感によって支えられます。",
      "魔術師-女帝-皇帝": "創造力が安定した基盤と強さをもたらします。",
      "女教皇-皇帝-法王": "直感と安定、伝統が調和します。",
      "女帝-法王-恋人": "愛と伝統が調和し、豊かな関係を築きます。",
      "皇帝-恋人-戦車": "責任ある愛が力強い前進を可能にします。",
      "法王-戦車-力": "伝統に根ざした行動力と強さが試練を越えます。",
      "恋人-力-隠者": "情熱と強さが内省と知恵に導かれます。",
      "戦車-隠者-運命の輪": "行動と内省が運命の波に乗るカギとなります。",
      "力-運命の輪-正義": "強さと運命が公平な判断で結実します。",
      "隠者-正義-吊るされた男": "深い洞察と公正が忍耐をもたらします。",
      "運命の輪-吊るされた男-死神": "運命の変化と忍耐が終わりと再生へと繋がります。",
      "正義-死神-節制": "公正な終焉が調和と再生を促します。",
      "吊るされた男-節制-悪魔": "忍耐と調和が誘惑に打ち勝つ力となります。",
      "死神-悪魔-塔": "終わりと誘惑が衝撃的な変化を引き起こします。",
      "節制-塔-星": "調和の崩れが新たな希望の始まりとなります。",
      "悪魔-星-月": "誘惑の中に希望と不安が共存します。",
      "塔-星-太陽": "激変の後に希望が明るい未来を約束します。",
      "星-太陽-審判": "希望と成功が復活の力を高めます。",
      "月-審判-世界": "迷いから目覚め、完成へと至ります。",
      "太陽-世界-愚者": "成功と完成が新たな自由な旅立ちを促します。",
      "審判-愚者-魔術師": "復活の旅が才能と冒険をもたらします。",
      "愚者-恋人-女教皇": "自由な愛が直感と知恵を高めます。",
      "魔術師-戦車-女帝": "才能と行動力が愛情豊かな未来を築きます。",
      "女教皇-力-皇帝": "直感と強さが安定と責任に繋がります。",
      "女帝-隠者-法王": "愛情と内省が伝統的価値を支えます。",
      "皇帝-運命の輪-恋人": "安定した基盤が運命の愛を引き寄せます。",
      "法王-正義-戦車": "伝統と公正が行動を導き成功を呼びます。",
      "恋人-吊るされた男-力": "愛の試練が内なる強さを鍛えます。",
      "戦車-死神-隠者": "行動と終焉が自己探求の時期をもたらします。",
      "力-節制-運命の輪": "強さと調和が運命の変化を好転させます。",
      "隠者-悪魔-正義": "内省と誘惑が公正な選択を促します。",
      "運命の輪-塔-死神": "運命の激変が終焉と新たな始まりを告げます。",
      "正義-星-節制": "公正と希望が調和をもたらします。",
      "吊るされた男-月-悪魔": "忍耐の中で不安と誘惑が試されます。",
      "死神-太陽-塔": "終わりと成功が衝撃的な変化を伴います。",
      "節制-審判-愚者": "調和と復活が新たな旅を促します。",
      "悪魔-世界-魔術師": "誘惑からの解放が創造力を引き出します。",
      "塔-愚者-女教皇": "変化が自由な直感を目覚めさせます。",
      "星-魔術師-皇帝": "希望と才能が強固な基盤を築きます。",
      "月-女教皇-法王": "不安の中でも直感が伝統を支えます。",
      "太陽-女帝-恋人": "成功と愛情が豊かな関係を育てます。",
      "審判-皇帝-戦車": "復活と責任が力強い前進をもたらします。",
      "世界-法王-力": "完成と伝統が内なる強さを引き出します。",
      "世界-愚者-魔術師": "人生の完成から新たな旅立ちへ。好奇心が未来を切り開きます。",
      "愚者-女教皇-女帝": "自由な精神と深い洞察が実り豊かな成果に繋がります。",
      "女帝-皇帝-法王": "愛情と安定、伝統の三重奏が心身の調和を促します。",
      "恋人-戦車-力": "情熱と決意が行動力を高め、目標達成へと導きます。",
      "隠者-運命の輪-正義": "内省からの変化が公平な判断を可能にし、問題解決に繋がります。",
      "正義-吊るされた男-死神": "試練を受け入れ変容を遂げ、新たな段階に進みます。",
      "死神-節制-悪魔": "終わりと調和が誘惑を断ち切り、自己管理の力が増します。",
      "塔-星-月": "崩壊の後の希望が迷いを払い、新たな光をもたらします。",
      "星-月-太陽": "願望と不安の狭間で努力し、輝かしい成功を掴みます。",
      "太陽-審判-世界": "明るい再生が完成へと繋がり、満足感をもたらします。",
      "魔術師-女教皇-皇帝": "スキルと直感が力強い安定を築きます。",
      "女教皇-女帝-恋人": "内なる声と愛情が深い繋がりを形成します。",
      "法王-恋人-戦車": "伝統の中で愛が燃え、行動が勝利を掴みます。",
      "戦車-力-隠者": "強さと忍耐が成熟した知恵をもたらします。",
      "力-隠者-運命の輪": "勇気と洞察が運命の波に乗る鍵となります。",
      "隠者-運命の輪-正義": "内省と変化が正義を導き、バランスを保ちます。",
      "正義-吊るされた男-死神": "公平さと忍耐が大きな変化を受け入れます。",
      "吊るされた男-死神-節制": "苦難を乗り越え調和を取り戻す時期です。",
      "死神-節制-悪魔": "変化の中で自己管理と解放が重要です。",
      "節制-悪魔-塔": "バランスを崩しながらも再生へ向かう試練です。",
      "default": "過去・現在・未来の流れを大切にし、変化を受け入れながら自分のペースで進みましょう。新しい気づきと成長が待っています。"
    };

    function getOverallInterpretation(names) {
      // 連結キーで特別パターンがあれば返す
      const key = names.join("-");
      if (additionalPatterns[key]) {
        return additionalPatterns[key];
      }

      // デフォルト文章（カード名3枚を文章に自動挿入）
      return `${names[0]}の影響が${names[1]}を経て${names[2]}へと繋がります。過去・現在・未来の流れを大切にし、変化を受け入れながら自分のペースで進みましょう。新しい気づきと成長が待っています。`;
    }

    async function shuffleAnimation(wrapper, count = 15, interval = 100) {
      wrapper.innerHTML = "";
      for (let i = 0; i < 3; i++) {
        const container = document.createElement("div");
        container.className = "card-container";

        const cardDiv = document.createElement("div");
        cardDiv.className = "card";

        const back = document.createElement("div");
        back.className = "card-face card-back";

        cardDiv.appendChild(back);
        container.appendChild(cardDiv);
        wrapper.appendChild(container);
      }

      for (let i = 0; i < count; i++) {
        await new Promise(r => setTimeout(r, interval));
      }
    }


    async function drawCards() {
      const wrapper = document.getElementById("cards-wrapper");
      const overallBox = document.getElementById("overall-interpretation");
      const shuffleStatus = document.getElementById("shuffle-status");

      overallBox.textContent = "";
      shuffleStatus.textContent = "シャッフル中...";
      shuffleStatus.scrollIntoView({ behavior: 'smooth', block: 'center' });
      wrapper.innerHTML = "";

      await shuffleAnimation(wrapper, 20, 80);

      shuffleStatus.textContent = "";

      const selected = [];
      while (selected.length < 3) {
        const randomIndex = Math.floor(Math.random() * cards.length);
        const card = cards[randomIndex];
        if (!selected.find(c => c.name === card.name)) {
          selected.push({ ...card, isReversed: Math.random() < 0.5 });
        }
      }

      wrapper.innerHTML = "";
      selected.forEach(card => {
        const container = document.createElement("div");
        container.className = "card-container";

        const cardEl = document.createElement("div");
        cardEl.className = "card";

        const back = document.createElement("div");
        back.className = "card-face card-back";

        const front = document.createElement("div");
        front.className = "card-face card-front";
        front.style.backgroundImage = `url(${card.img})`;
        if (card.isReversed) {
          front.classList.add("reversed");
          const reversedLabel = document.createElement("div");
          reversedLabel.className = "reversed-label";
          reversedLabel.textContent = "逆位置";
          front.appendChild(reversedLabel);
        }

        cardEl.appendChild(back);
        cardEl.appendChild(front);
        container.appendChild(cardEl);

        const desc = document.createElement("div");
        desc.className = "description";
        container.appendChild(desc);

        wrapper.appendChild(container);

        card.el = cardEl;
        card.desc = desc;
      });

      for (let i = 0; i < selected.length; i++) {
        const card = selected[i];
        await new Promise(resolve => {
          setTimeout(() => {
            card.el.classList.add("flip");
            resolve();
          }, i === 0 ? 300 : 700);
        });

        const label = positions[i];
        const orientation = card.isReversed ? "逆位置" : "正位置";
        const meaning = card.isReversed ? card.reversed : card.upright;

        card.desc.innerHTML = `<div class="status"><strong><div class="card_status">${label}</div>${card.name}<br>-${orientation}-</strong></div><hr>
  &#10084;&#65039; 愛：${meaning.love}`;
      }

      const names = selected.map(c => c.name.replace(/（.*$/, ""));
      overallBox.textContent = getOverallInterpretation(names);
    }

    document.getElementById("drawButton").addEventListener("click", drawCards);
  </script>
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

    <small>&copy;2016 - <?php echo date("Y"); ?> Evita Designart.</small>
  </footer>
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
</body>

</html>




