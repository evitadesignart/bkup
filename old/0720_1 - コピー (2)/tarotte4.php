<?php require_once 'counter.php'; track_page_view(basename(__FILE__, '.php')); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6729293840967461"
    crossorigin="anonymous"></script>
  <meta name="author" content="Evita Designart">
  <title>大アルカナ 2枚引きタロット占い｜対立と調和を知る無料診断 | 占いアルカノヴァ</title>
  <meta name="description" content="無料で楽しめる大アルカナの2枚引きタロット占い。今の対立する課題と解決のヒント（調和）を知り、人生や恋愛、仕事に役立つアドバイスを受け取れます。">
  <meta name="keywords" content="タロット占い, 無料占い, 大アルカナ, 2枚引き, 対立と調和, カード診断, Evita Designart">
  <!-- OGP（Open Graph Protocol） -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="大アルカナ 2枚引きタロット占い｜対立と調和を知る無料診断" />
  <meta property="og:description" content="無料で楽しめる大アルカナの2枚引きタロット占い。今の対立する課題と解決のヒント（調和）を知り、人生や恋愛、仕事に役立つアドバイスを受け取れます。" />
  <meta property="og:url" content="https://evitadesignart.com/tarotte4.php" />
  <meta property="og:site_name" content="Evita Designart" />

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
        "text": "はい、当サイトのタロット占いはすべて無料でご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "どんなテーマで占うことができますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "このページでは『対立と調和』というテーマで、現在の課題（対立）とその解決のヒント（調和）を2枚のカードで読み解く占いができます。"
      }
    },
    {
      "@type": "Question",
      "name": "カードの正位置と逆位置の違いは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "正位置はそのカードが持つ本来の意味やポジティブなエネルギー、逆位置はその裏側やブロックされた側面、注意点などを示します。"
      }
    },
    {
      "@type": "Question",
      "name": "結果は毎回変わりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。カードは毎回ランダムに2枚選ばれるため、何度でも新しい結果を楽しむことができます。"
      }
    },
    {
      "@type": "Question",
      "name": "スマートフォンでも利用できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。スマートフォン・タブレット・PCなど、どのデバイスからでも快適にご利用いただけます。"
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
      padding-top: 160px;
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
      width: 50%;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      background-color: #6f42c1;
      color: #f0e6f6;
      cursor: pointer;
      margin-bottom: 0.5rem;
      box-shadow: 0 0 10px #7d5fff;
      transition: background-color 0.3s ease;
      margin-top: 2rem;
    }

    button:hover {
      background-color: #9b59b6;
      box-shadow: 0 0 15px #bb8fce;
    }

    .cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
      flex-wrap: wrap;
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .card {
      width: 200px;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.7);
      transition: transform 0.5s;
    }

    .result {
      margin-top: 30px;
      text-align: left;
      max-width: 640px;
      margin-left: auto;
      margin-right: auto;
      background-color: #2c2c54;
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.8);
    }

    .result h3 {
      text-align: center;
      color: #dcd6f7;
    }

    .result p {
      color: #dcd6f7;
      line-height: 1.5;
      font-size: 1rem;
      text-shadow: 0 0 5px #4b3f72;
    }

    a {
      color: yellow;
    }

    footer {
      margin-top: 2rem;
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
      <h1>大アルカナ2枚占い<br class="md:hidden"> （対立と調和）</h1>
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
    <img src="img/fv_tarotte4.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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
  <p>
    この占いは、大アルカナ22枚から<br class="md:hidden"> ランダムに2枚を引き、<strong>「対立（現状）」</strong>と<br class="md:hidden">
    <strong>「調和（解決）」</strong>の<br class="md:hidden"> 意味を読み解きます。<br>
    1枚目のカードは、<br class="md:hidden"> あなたが現在直面している課題や迷い、<br class="md:hidden"> 内部的な葛藤を表します。<br>
    2枚目のカードは、<br class="md:hidden"> その対立をどう乗り越え、<br class="md:hidden"> どのような調和や<br class="md:hidden">
    ヒントが得られるかを示します。<br><br>
    正位置はそのカードの<br class="md:hidden"> 本来のエネルギー、<br class="md:hidden"> 逆位置はその裏側や<br class="md:hidden">
    ブロックされた側面を表現します。<br>
    カードを通じて、<br class="md:hidden"> あなた自身の内面にある<br class="md:hidden"> 「気づき」を得ることが<br class="md:hidden"> できるでしょう。
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
    <strong style="color:#aabbff;">こんな人におすすめ：</strong>
    <ul style="list-style: none; padding-left: 0; margin-top: 0.5em; margin-bottom: 0;">
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 問題や課題の「原因」と<br class="md:hidden"> 「解決策」を知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 内面的な葛藤と<br class="md:hidden"> バランスの取り方を探っている</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 恋愛や人間関係での<br class="md:hidden"> すれ違いにヒントが欲しい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 現在の状況に対して<br class="md:hidden"> 心の整理をつけたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 正位置・逆位置の<br class="md:hidden"> 深い読み取りを楽しみたい</li>
    </ul>
  </div>
  <button id="drawBtn"><span style="text-align: center; line-height: 1.2;">運勢を占う<br><span style="font-size: 0.8em; font-weight: normal;">（カードを引く）</span></span></button>

  <div class="cards" id="cardsContainer"></div>

  <div class="result" id="result">カードを引いてください。</div>

  <p>
    <a href="https://nano-design.booth.pm/">BOOTH</a>、<a href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a>にて<br
      class="md:hidden"> 販売中です。
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

  <script>
    const cards = [
      {
        name: "愚者",
        img: "card4/00.jpg",
        upright: "愚者は無限の可能性、自由、冒険心を象徴します。未知の世界に飛び込み、未来に対する不安よりも純粋な好奇心を優先する勇気を表します。常識にとらわれずに行動することで、新しいチャンスや学びを引き寄せるタイミングです。思い切った一歩が、新たな自分を発見するきっかけとなります。",
        reversed: "無計画さや軽率な判断によるリスクが高まることを示します。周囲の忠告を無視した行動がトラブルを引き起こし、信頼を失う可能性があります。慎重さを忘れると、大切なチャンスを逃す恐れもあります。立ち止まって考え、計画を整えた上で進む姿勢が重要です。"
      },
      {
        name: "魔術師",
        img: "card4/01.jpg",
        upright: "魔術師は意志と集中力を使い、自分の能力を最大限に活かす時期を示します。新たなアイデアやプロジェクトに対して自信を持ち、リーダーシップを発揮するタイミングです。積極的に行動することで、思い描いていた未来が現実になります。創造的な力が強まり、人間関係でもポジティブな影響を与えるでしょう。",
        reversed: "計画の不十分さや表面的な行動、欺瞞を意味します。本質を見失い、見せかけだけの成功に頼ると失敗に繋がります。自分の中にある弱さや不安に向き合い、誠実さを取り戻すことが求められます。信頼を築くために、目の前の課題に真摯に取り組むことが大切です。"
      },
      {
        name: "女教皇",
        img: "card4/02.jpg",
        upright: "女教皇は直感と内なる知恵、精神的な成長を象徴します。表面的な情報に惑わされず、自分の内面の声に耳を傾ける必要があります。落ち着いた視点から物事を見極める力が高まり、冷静さと洞察力を持って進める時期です。人との関わりの中で本当の意図を理解し、より深い絆を築けます。",
        reversed: "感情の混乱や秘密の露呈、誤解が起こりやすい時期です。自己不信に陥ったり、表面的な判断に流される危険性があります。焦らずに冷静さを取り戻し、自分自身の感覚を信じることが重要です。誤解を解消するために、オープンなコミュニケーションを心がけましょう。"
      },
      {
        name: "女帝",
        img: "card4/03.jpg",
        upright: "女帝は愛と豊かさ、創造力を象徴します。物質的・精神的に満たされ、周囲と調和した関係を築けるタイミングです。育む気持ちが強まり、人間関係や仕事、家庭において大きな実りが期待できます。自分の感性を信じて行動することで、さらに幸運を呼び込めます。",
        reversed: "過剰な依存や怠惰、感情の甘えを示します。バランスを崩すことで、関係性が停滞する恐れがあります。自立心を取り戻し、自分の足で立つ勇気を持つことが求められます。感情に流されず、冷静に現状を見つめる姿勢が大切です。"
      },
      {
        name: "皇帝",
        img: "card4/04.jpg",
        upright: "皇帝は秩序、安定、権威を象徴します。強い意志とリーダーシップを発揮することで、計画を着実に進める力が高まっています。責任感を持ち、周囲を引っ張る立場に立つ時期です。決断力と冷静さを持って進めば、大きな成果を得られるでしょう。",
        reversed: "支配的な態度や頑固さが問題を生む可能性があります。自分の意見に固執することで、周囲との摩擦が強まり孤立する恐れがあります。柔軟性を持ち、人の意見に耳を傾ける姿勢が必要です。過剰な自己主張を抑え、調和を大切にしましょう。"
      },
      {
        name: "教皇",
        img: "card4/05.jpg",
        upright: "教皇は伝統や精神性、信頼できる助言を象徴します。学びや信仰、師弟関係が強調される時期です。古い知恵を尊重し、集団の中で調和を図ることが大切です。ルールや倫理観に基づいた行動が信頼を築く鍵になります。",
        reversed: "古い価値観に縛られ、柔軟さを失うことを示します。周囲の期待や慣習に囚われ過ぎると、自分の道を見失う危険があります。既存の枠組みを見直し、新しい視点や自由な考えを取り入れることが大切です。"
      },
      {
        name: "恋人",
        img: "card4/06.jpg",
        upright: "恋人は愛、調和、重要な選択を象徴します。心の声に従うことで、真実の愛や深い信頼関係が築けます。人間関係において相手を理解し、共感する力が高まる時期です。人生の大きな決断を下す場面でも、誠実さが幸福を引き寄せます。",
        reversed: "優柔不断さや関係の不調和、誤った選択を示します。表面的な魅力や一時的な感情に流されると、後悔を招く可能性があります。自分の本当の気持ちと向き合い、冷静な判断を心がけることが重要です。"
      },
      {
        name: "戦車",
        img: "card4/07.jpg",
        upright: "戦車は強い意志、勝利、前進するエネルギーを象徴します。障害を乗り越え、自分の目標に向かって突き進む力があります。決断力と自己統制が高まるタイミングです。勢いに乗ることで、目標達成に大きく近づけるでしょう。",
        reversed: "暴走やコントロールの喪失、衝動的な行動を示します。焦りや強引さが原因で計画が崩れる可能性があります。冷静さと計画性を取り戻し、自分のペースを守ることが必要です。"
      },
      {
        name: "力",
        img: "card4/08.jpg",
        upright: "力は内面の強さ、勇気、優しさを象徴します。困難を穏やかに克服し、自分自身を信じる力が試される時期です。周囲に優しさを持って接することで、人間関係も円滑になります。穏やかながらも芯のある強さが大切です。",
        reversed: "弱さや自己不信、感情の暴走を示します。プレッシャーに負けたり、自分を過小評価する危険があります。自分を許し、受け入れることで本来の力を取り戻すことができます。"
      },
      {
        name: "隠者",
        img: "card4/09.jpg",
        upright: "隠者は内省、精神的成長、孤独の価値を象徴します。物事の本質を見極めるために一人の時間を大切にする時期です。静かに自分と向き合うことで、真の目標や答えが見つかります。焦らずに、ゆっくりと進む姿勢が重要です。",
        reversed: "孤立感や閉塞感、周囲との断絶を示します。過度な内向き思考が原因で前に進めなくなる恐れがあります。外とのつながりを大切にし、視野を広げることが大切です。"
      },
      {
        name: "運命の輪",
        img: "card4/10.jpg",
        upright: "運命の輪は予期せぬ幸運、チャンス、転機を象徴します。状況が大きく動く時期で、流れに逆らわず変化を受け入れることが重要です。過去の努力が報われる瞬間が訪れるかもしれません。積極的にチャンスを活かし、柔軟な心で新しい展開を楽しむべきタイミングです。",
        reversed: "計画通りに進まない予期せぬ停滞やトラブルを示します。変化への抵抗や流れに逆らうことで、問題が長引く恐れがあります。流れを見極め、冷静に対処する姿勢が求められます。執着を手放し、次の流れに乗る準備が必要です。"
      },
      {
        name: "正義",
        img: "card4/11.jpg",
        upright: "正義は公平さ、バランス、因果応報を象徴します。公正な判断と誠実な行動が求められる時期です。冷静な視点で物事を見極めることで、正しい結果が得られます。自分の行動が未来にどう影響するかを意識し、正しい選択を心がけることが重要です。",
        reversed: "不公平な扱いや誤った判断、責任回避を示します。自分にとって不利な状況や誤解が生じる恐れがあります。感情に左右されず、誠実さを取り戻す努力が必要です。冷静に現状を見直し、公正な態度を持つことが大切です。"
      },
      {
        name: "吊るされた男",
        img: "card4/12.jpg",
        upright: "吊るされた男は犠牲、視点の転換、忍耐を象徴します。今は前進するよりも、状況を受け入れて内面の変化に集中する時期です。逆境に見える状況が、実は新たな成長や気づきをもたらします。価値観を見直し、柔軟に物事を見ることで道が開けます。",
        reversed: "無駄な犠牲や停滞、頑なな態度を示します。変化を恐れて古い考えに固執すると、成長の機会を逃します。柔軟さを持ち、執着を手放すことで、新たな視野を得ることができます。"
      },
      {
        name: "死神",
        img: "card4/13.jpg",
        upright: "死神は終わりと再生、変容を象徴します。古い習慣や関係を手放し、新たなスタートを切るタイミングです。恐れずに変化を受け入れることで、人生に新たな活力と展望が生まれます。必要な変化が訪れ、再生のチャンスが広がります。",
        reversed: "変化への抵抗や執着を示します。不要なものを手放せず、停滞してしまう可能性があります。恐れに打ち勝ち、自ら新たな方向へ踏み出す勇気が必要です。"
      },
      {
        name: "節制",
        img: "card4/14.jpg",
        upright: "節制は調和、バランス、調整を象徴します。感情や行動を穏やかに整えることで、物事が円滑に進みます。無理のない計画やペース配分を意識し、心身のバランスを整える時期です。協調性を重視し、周囲との調和を大切にしましょう。",
        reversed: "感情の不安定さや極端な行動を示します。周囲との不調和が生じやすく、焦りがトラブルを招く恐れがあります。冷静にペースを整え、自分の立ち位置を見直すことが必要です。"
      },
      {
        name: "悪魔",
        img: "card4/15.jpg",
        upright: "悪魔は束縛、依存、誘惑を象徴します。欲望に支配され、自由を失う危険性があります。現状に甘んじたり、短期的な快楽を優先すると大きな代償を払うことになります。自分を見つめ直し、真の自由を取り戻すための気づきが求められます。",
        reversed: "束縛からの解放、依存からの脱却を示します。制約を超え、自分自身を取り戻すタイミングです。恐れずに新たな一歩を踏み出すことで、心の自由を取り戻せます。"
      },
      {
        name: "塔",
        img: "card4/16.jpg",
        upright: "塔は崩壊、突然の変化、解放を象徴します。予期せぬ出来事により古い価値観や安定が壊されますが、それは新たな可能性を開くための試練です。混乱の中に隠されたチャンスを見つける視点が必要です。",
        reversed: "崩壊を避けるために問題を先送りしている状態を示します。根本的な解決を避けると、結果的に問題が深刻化します。勇気を持って変化を受け入れることが必要です。"
      },
      {
        name: "星",
        img: "card4/17.jpg",
        upright: "星は希望、癒し、未来への展望を象徴します。心が解放され、新しい夢やビジョンに向けて進むタイミングです。直感に従い、信念を持って進むことで願いが実現へと近づきます。ポジティブな気持ちが新たな光を呼び込みます。",
        reversed: "失望、無気力、目標を見失うことを示します。期待が裏切られたり、未来への不安が強まる可能性があります。小さな喜びや希望を見つけ、心のバランスを取り戻すことが大切です。"
      },
      {
        name: "月",
        img: "card4/18.jpg",
        upright: "月は直感、幻想、潜在意識を象徴します。現実と幻想の間で迷う状況を示し、見えない真実を探る必要があります。内面の不安や恐れを認め、感情を整理することで、進むべき道が見えてきます。夢や無意識のメッセージを大切にしましょう。",
        reversed: "混乱や誤解からの解放を示します。隠されていた真実が明らかになり、霧が晴れるように状況がクリアになります。冷静な視点で現実を受け入れることが大切です。"
      },
      {
        name: "太陽",
        img: "card4/19.jpg",
        upright: "太陽は成功、喜び、活力、達成感を象徴します。ポジティブなエネルギーに満ち、物事が順調に進むタイミングです。自信を持って前進することで、多くの祝福と成果が訪れます。心からの幸福感を味わうことができるでしょう。",
        reversed: "過信や楽観視しすぎることを警告します。物事を軽視すると、失敗や人間関係のトラブルが生じる恐れがあります。謙虚さを忘れず、冷静に状況を見極める姿勢が求められます。"
      },
      {
        name: "審判",
        img: "card4/20.jpg",
        upright: "審判は覚醒、再生、新たな決断を象徴します。過去の経験や試練を通じて成長し、今までの自分を超えるタイミングです。人生の転機が訪れ、新しい可能性が開かれます。自分自身を信じて進むことが重要です。",
        reversed: "再出発の失敗や決断の迷いを示します。過去の行いに囚われすぎると、新しい一歩を踏み出せなくなります。過去を見直し、不要な執着を手放すことで前進できます。"
      },
      {
        name: "世界",
        img: "card4/21.jpg",
        upright: "世界は完成、統合、達成を象徴します。努力が実り、一つのサイクルが完成する時期です。新たな始まりを迎える準備が整い、達成感と調和に満ちた状態を味わえます。全てが一つに繋がる感覚を得ることができます。",
        reversed: "達成の停滞や未完成を示します。目標に対する意欲の低下や、最終段階での障害が生じる恐れがあります。もう一度計画を見直し、必要な改善を加えることで完成に近づけます。"
      }

    ];

    document.getElementById("drawBtn").addEventListener("click", () => {
      const shuffled = [...cards].sort(() => Math.random() - 0.5);
      const [conflictCard, harmonyCard] = shuffled.slice(0, 2);

      const conflictPosition = Math.random() < 0.5 ? "正位置" : "逆位置";
      const harmonyPosition = Math.random() < 0.5 ? "正位置" : "逆位置";

      const conflictMeaning = conflictPosition === "正位置" ? conflictCard.upright : conflictCard.reversed;
      const harmonyMeaning = harmonyPosition === "正位置" ? harmonyCard.upright : harmonyCard.reversed;

      const conflictRotation = conflictPosition === "逆位置" ? "rotate(180deg)" : "rotate(0deg)";
      const harmonyRotation = harmonyPosition === "逆位置" ? "rotate(180deg)" : "rotate(0deg)";

      document.getElementById("cardsContainer").innerHTML = `
    <div class="card">
      <img src="${conflictCard.img}" alt="${conflictCard.name}" style="transform: ${conflictRotation};">
      <p><b>ー対立(現状)ー</b><br>${conflictCard.name}（${conflictPosition}）</p>
    </div>
    <div class="card">
      <img src="${harmonyCard.img}" alt="${harmonyCard.name}" style="transform: ${harmonyRotation};">
      <p><b>ー調和(解決)ー</b><br>${harmonyCard.name}（${harmonyPosition}）</p>
    </div>
  `;

      document.getElementById("result").innerHTML = `
    <h3>対立（現状）: ${conflictCard.name}（${conflictPosition}）</h3>
    <p>${conflictMeaning}</p><hr>
    <h3>調和（解決）: ${harmonyCard.name}（${harmonyPosition}）</h3>
    <p>${harmonyMeaning}</p>
  `;
      document.getElementById("cardsContainer").scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
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

    <small>&copy;2016 -
      <script>document.write(new Date().getFullYear());</script> Evita Designart.
    </small>
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




