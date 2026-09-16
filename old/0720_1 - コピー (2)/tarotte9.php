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
  <title>大アルカナ2枚引きタロット占い｜相手と自分の心を読み解く無料診断 | 占いアルカノヴァ</title>
  <meta name="description"
    content="無料で楽しめる大アルカナ2枚引きタロット占い。相手の本音、あなた自身の心を示し、関係性を深く読み解きます。恋愛や対人関係で悩んでいる方に、今必要な気づきとアドバイスをお届けします。">
  <meta name="keywords" content="タロット占い, 無料占い, 大アルカナ, 2枚引き, 相手の気持ち, 恋愛診断, 自分の心, 関係性, タロットリーディング">
  <!-- Open Graph Protocol -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="大アルカナ2枚引きタロット占い｜相手と自分の心を読み解く無料診断" />
  <meta property="og:description"
    content="無料で楽しめる大アルカナ2枚引きタロット占い。相手の本音、あなた自身の心を示し、関係性を深く読み解きます。恋愛や対人関係で悩んでいる方に、今必要な気づきとアドバイスをお届けします。" />
  <meta property="og:url" content="https://evitadesignart.com/tarotte9.php" />
  <meta property="og:site_name" content="Evita Designart タロット占い" />

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
        "text": "はい、当サイトの大アルカナ2枚引きタロット占いは完全無料でご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "この占いはどのような悩みに向いていますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "恋愛や人間関係におけるすれ違いや、相手の気持ちと自分の気持ちの違いを読み解きたい方におすすめです。"
      }
    },
    {
      "@type": "Question",
      "name": "正位置と逆位置にはどんな意味がありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "正位置はカード本来の意味やポジティブな流れを示し、逆位置はブロック・葛藤・注意点などを意味します。"
      }
    },
    {
      "@type": "Question",
      "name": "この占いはスマホからも利用できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、スマートフォン・タブレット・PCすべてのデバイスに対応しています。"
      }
    },
    {
      "@type": "Question",
      "name": "カードの解釈はどのように表示されますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "選ばれた2枚のカードが「相手の気持ち」「自分の内面」として表示され、正位置か逆位置に応じた詳しい解釈がそれぞれ表示されます。"
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
      display: inline-block;
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
  <header><a href="https://evitadesignart.com/tarotte_list.php">
      <h1>大アルカナ2枚引きタロット占い<br>（相手と自分の心を読み解く）</h1>
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
    <img src="img/fv_tarotte9.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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

  <p>
    この占いでは、大アルカナ22枚の中から<br class="md:hidden"> <strong>ランダムに2枚のカード</strong>を引き、<br>
    <strong>1枚目は「相手の気持ち・状況」</strong>、<br class="md:hidden"> <strong>2枚目は「あなた自身の内面」</strong>を<br class="md:hidden">
    示します。<br>
    恋愛や対人関係での「すれ違い」や<br class="md:hidden"> 「気持ちのギャップ」を読み解き、<br class="md:hidden">
    <strong>相互理解と心の調和</strong>へと導きます。<br><br>
    カードの<strong>正位置</strong>は<br class="md:hidden"> ポジティブな流れや本質、<br class="md:hidden"> <strong>逆位置</strong>は<br
      class="md:hidden"> ブロック・葛藤・陰の面を意味します。<br>
    今、あなたと相手の間にある<br class="md:hidden"> “見えない心の距離”を、<br class="md:hidden"> カードを通じて照らしてみましょう。
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
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 相手の本音と自分の気持ちの<br class="md:hidden"> ギャップを知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 恋愛・人間関係のすれ違いを<br class="md:hidden"> 整理したい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 対立と調和のヒントを<br class="md:hidden"> 深く読み解きたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 心の整理をしたいけれど、<br class="md:hidden"> 何から始めていいか迷っている</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 2枚引きでカードのつながり・<br class="md:hidden"> 関係性を読みたい</li>
    </ul>
  </div>

  <button id="drawBtn"><span style="text-align: center; line-height: 1.2;">運勢を占う<br><span style="font-size: 0.8em; font-weight: normal;">（カードを引く）</span></span></button>


  <div class="cards" id="cardsContainer"></div>

  <div class="result" id="result">カードを引いてください。</div>

  <p>
    <a href="https://nano-design.booth.pm/">BOOTH</a>、<a href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a><br class="md:hidden"> にて販売中です。
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
        name: "愚者",
        img: "card4/00.jpg",
        upright: "新しい恋の始まりや、自由な関係への期待が高まる時期です。固定観念にとらわれず、直感に従って行動することで思わぬチャンスが訪れます。好奇心が恋愛の扉を開く鍵となります。",
        reversed: "無責任な言動や、気まぐれな態度が恋愛を混乱させる可能性があります。安易な関係や曖昧な立場に注意が必要です。誠実さを忘れずに、相手の気持ちにも配慮しましょう。"
      },
      {
        name: "魔術師",
        img: "card4/01.jpg",
        upright: "積極的なアプローチが恋の進展を後押しします。あなたの魅力が輝き、コミュニケーションを通じて恋が始まる可能性があります。タイミングと自信が成功のカギです。",
        reversed: "うわべだけの関係や、ごまかしが恋愛に悪影響を及ぼす可能性があります。自分の本音を隠していないか見直しましょう。誠実な姿勢が信頼を生みます。"
      },
      {
        name: "女教皇",
        img: "card4/02.jpg",
        upright: "精神的なつながりが深まる時期です。内面の魅力に惹かれる関係や、静かな愛の始まりが期待されます。直感を信じて行動しましょう。",
        reversed: "感情を抑えすぎて、相手との距離が広がる可能性があります。誤解やすれ違いにも注意。素直な気持ちを表現することが大切です。"
      },
      {
        name: "女帝",
        img: "card4/03.jpg",
        upright: "愛情に満ちた関係や、実りある恋の進展が期待できます。包容力や優しさが恋愛運を高め、家庭的な幸福にもつながるでしょう。",
        reversed: "甘えすぎや依存が関係のバランスを崩す可能性があります。自立心を持ち、相手に任せきりにしないようにしましょう。"
      },
      {
        name: "皇帝",
        img: "card4/04.jpg",
        upright: "安定した恋愛関係や、頼れるパートナーとの出会いがある時期です。責任感のある行動が信頼を生み、将来を見据えた関係に進展する可能性も。",
        reversed: "支配的になりすぎたり、相手に対して厳しすぎる態度が問題となるかもしれません。柔軟な姿勢が関係を救います。"
      },
      {
        name: "教皇",
        img: "card4/05.jpg",
        upright: "誠実で安心感のある恋愛が育まれる時期です。相手との信頼関係を大切にし、伝統的な価値観を共有することが絆を深めます。",
        reversed: "形式にとらわれすぎると、自由な愛の表現が妨げられるかもしれません。自分らしさを大切にした関係を意識しましょう。"
      },
      {
        name: "恋人",
        img: "card4/06.jpg",
        upright: "強い恋愛感情や相性の良い相手とのつながりが期待できます。選択の場面では心の声に従いましょう。真実の愛に出会える可能性も。",
        reversed: "迷いや浮気心が恋を不安定にさせる恐れがあります。自分の本心と向き合い、誠実な選択を心がけましょう。"
      },
      {
        name: "戦車",
        img: "card4/07.jpg",
        upright: "恋愛に対して積極的に行動することで、関係が一気に進展する時期です。勇気を出して気持ちを伝えると良い結果に。",
        reversed: "感情的になりすぎて関係がこじれる可能性があります。焦らず、相手のペースにも配慮しましょう。"
      },
      {
        name: "力",
        img: "card4/08.jpg",
        upright: "優しさと強さを兼ね備えた愛情が育まれます。思いやりのある対応が恋愛を安定させ、信頼を深める鍵となります。",
        reversed: "自信のなさや感情の不安定さが恋愛を妨げることがあります。まずは自分自身と向き合う時間を持ちましょう。"
      },
      {
        name: "隠者",
        img: "card4/09.jpg",
        upright: "一人の時間を通して、本当に求める恋の形が見えてくる時期です。静かな愛や精神的なつながりに価値を感じるでしょう。",
        reversed: "孤独感や、恋愛への閉鎖的な態度が続く可能性があります。少しずつでも心を開いてみる努力を。"
      },
      {
        name: "運命の輪",
        img: "card4/10.jpg",
        upright: "運命的な出会いや、恋愛の流れが好転するタイミングです。偶然の再会や奇跡的なチャンスにも恵まれるでしょう。",
        reversed: "チャンスを逃したり、恋愛の進展が思うようにいかない時期です。焦らず流れに身を任せることも大切です。"
      },
      {
        name: "正義",
        img: "card4/11.jpg",
        upright: "公平な関係が築かれる時期です。お互いに対する誠実な気持ちとバランスのとれた愛が安定をもたらします。",
        reversed: "一方的な関係や誤解がトラブルの原因になる可能性があります。冷静な話し合いと誠実な対応が必要です。"
      },
      {
        name: "吊るされた男",
        img: "card4/12.jpg",
        upright: "一時的に恋愛が停滞するかもしれませんが、相手を思いやる気持ちや忍耐が愛を深めます。状況を受け入れることが鍵です。",
        reversed: "報われない恋に悩んだり、犠牲的になりすぎている可能性があります。無理をせず自分を大切にしましょう。"
      },
      {
        name: "死神",
        img: "card4/13.jpg",
        upright: "恋の終わりや区切りを迎え、新しい恋の始まりへの準備が整う時期です。過去に執着せず前に進みましょう。",
        reversed: "関係の終わりを受け入れられず、停滞している可能性があります。変化を恐れず、新しい一歩を踏み出しましょう。"
      },
      {
        name: "節制",
        img: "card4/14.jpg",
        upright: "穏やかでバランスのとれた恋愛が進展します。自然な流れを大切にし、無理のない関係が築けます。",
        reversed: "すれ違いや感情の乱れによって、バランスを崩しやすい時期です。思いやりを持って接しましょう。"
      },
      {
        name: "悪魔",
        img: "card4/15.jpg",
        upright: "執着や依存、刺激的な恋に心を奪われる可能性があります。冷静な判断力を保つことが大切です。",
        reversed: "不健全な関係や執着から解放される兆しがあります。自立した恋愛を目指すチャンスです。"
      },
      {
        name: "塔",
        img: "card4/16.jpg",
        upright: "突然の別れや衝撃的な出来事が起こるかもしれません。恋愛の土台を見直す必要があります。",
        reversed: "トラブルを未然に防ぐチャンスが訪れます。関係修復に向けて、正直な対話を心がけましょう。"
      },
      {
        name: "星",
        img: "card4/17.jpg",
        upright: "恋愛に希望が生まれ、前向きな気持ちで未来に向かって進める時期です。理想の恋が現実になる兆しも。",
        reversed: "期待が裏切られたり、恋愛への自信を失う可能性があります。心の整理と癒しが必要です。"
      },
      {
        name: "月",
        img: "card4/18.jpg",
        upright: "不安や迷いが恋愛に影を落とすかもしれません。相手の本音が見えにくい時期です。直感を大切に。",
        reversed: "曖昧だった状況が少しずつ明確になっていきます。感情の整理が恋愛の前進を助けます。"
      },
      {
        name: "太陽",
        img: "card4/19.jpg",
        upright: "明るく前向きな恋愛が展開します。幸福感に満ちた関係や、恋が成就するチャンスにも恵まれます。",
        reversed: "過度な期待や自己中心的な態度が問題を招く恐れがあります。相手を尊重する姿勢が大切です。"
      },
      {
        name: "審判",
        img: "card4/20.jpg",
        upright: "復縁や再会など、過去の関係に新たな展開が生まれる時期です。心の成長を経て、新たな愛が始まります。",
        reversed: "過去に執着しすぎて、新しい恋愛に進めない状態かもしれません。気持ちの整理が鍵です。"
      },
      {
        name: "世界",
        img: "card4/21.jpg",
        upright: "恋愛が完成し、理想的な関係が築ける時期です。結婚や深い絆への進展が期待されます。",
        reversed: "関係の発展が途中で止まる可能性があります。妥協せず、最後まで誠実に向き合うことが必要です。"
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
    <h3>相手の気持ち: ${conflictCard.name}（${conflictPosition}）</h3>
    <p>${conflictMeaning}</p><hr>
    <h3>自分の状況: ${harmonyCard.name}（${harmonyPosition}）</h3>
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




