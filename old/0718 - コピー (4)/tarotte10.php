<?php require_once 'counter.php'; track_page_view(basename(__FILE__, '.php')); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="無料で当たる誕生日タロット占い！生年月日から導かれるバースタロットで「自分のアルカナ」を診断します。22枚の大アルカナに対応し、あなたの運命や本質を読み解くアルカナ診断です。" />
  <meta name="keywords" content="自分のアルカナ, アルカナ診断, 誕生日タロット, バースタロット, タロット占い, 大アルカナ, 無料診断" />
  <meta name="author" content="Evita Designart" />
  <link rel="canonical" href="https://evitadesignart.com/tarotte10.php" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="自分のアルカナ診断｜誕生日タロットで導くバースタロット（無料）" />
  <meta property="og:description" content="無料で当たる誕生日タロット占い！生年月日から導かれるバースタロットで「自分のアルカナ」を診断します。22枚の大アルカナに対応し、あなたの運命や本質を読み解くアルカナ診断です。" />
  <meta property="og:url" content="https://evitadesignart.com/tarotte10.php" />
  <meta property="og:site_name" content="Evita Designart" />

  <title>自分のアルカナ診断｜誕生日タロットで導くバースタロット（無料）</title>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "自分のアルカナ診断｜誕生日タロットで導くバースタロット（無料）",
    "description": "無料で当たる誕生日タロット占い！生年月日から導かれるバースタロットで「自分のアルカナ」を診断します。22枚の大アルカナに対応し、あなたの運命や本質を読み解くアルカナ診断です。",
    "url": "https://evitadesignart.com/tarotte10.php"
  }
  </script>
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "バースタロットとは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "バースタロットとは、生年月日から導かれるタロットカード（大アルカナ）を使って、あなたの本質や運命のテーマを知るための診断です。"
      }
    },
    {
      "@type": "Question",
      "name": "この診断は無料ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、バースタロット診断は完全無料でご利用いただけます。生年月日を入力するだけですぐに結果が表示されます。"
      }
    },
    {
      "@type": "Question",
      "name": "診断結果は毎回同じですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "生年月日をもとに診断するため、同じ日付を入力した場合は毎回同じ結果が表示されます。"
      }
    },
    {
      "@type": "Question",
      "name": "占い結果はどのように解釈すればよいですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "診断結果に表示されるカードの意味を、自分の性格や人生の傾向と照らし合わせて参考にしてください。気づきや自己理解のヒントになります。"
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

    #drawButton {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723;
      padding: 18px 40px;
      font-size: 1.4rem;
      border: 2px solid #ffeaa7;
      border-radius: 50px;
      cursor: pointer;
      margin-bottom: 2rem;
      margin-top: 1rem;
      font-weight: 800;
      box-shadow: 0 5px 15px rgba(0,0,0,0.5), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      text-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      font-family: 'Noto Serif JP', serif;
      width: 80%;
      max-width: 300px;
    }
    @keyframes gold-shine {
      0% { left: -100%; }
      20% { left: 200%; }
      100% { left: 200%; }
    }
    #drawButton::after {
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
    #drawButton:hover {
      box-shadow: 0 8px 0 #b38b22, 0 15px 30px rgba(212, 175, 55, 0.8), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
    }
    #drawButton:active {
      transform: translateY(8px) !important;
      box-shadow: 0 0 0 #b38b22, 0 5px 10px rgba(0, 0, 0, 0.4), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 5px rgba(139, 87, 0, 0.6) !important;
      animation: none !important;
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
      width: 350px;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.7);
      transition: transform 0.5s;
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
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

    img {
      width: 50%;
      margin-top: 1em;
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .result {
      margin-top: 1.5em;
      text-align: center;
      padding: 1em;
      background: #222;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    #birthForm {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      box-sizing: border-box;
      overflow: hidden;
    }
    input {
      padding: 0.8rem;
      border-radius: 8px;
      font-size: 1rem;
      width: 100%;
      max-width: 100%;
      box-sizing: border-box;
      -webkit-appearance: none;
      display: block;
      margin: 0 auto;
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
</head>

<body>
  <header><a href="https://evitadesignart.com/tarotte_list.php">
      <h1>自分のアルカナ診断<br>誕生日タロット(無料)</h1>
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
  </style>
  <div id="fv-wrapper" class="fv-wrapper-custom">
    <img src="img/fv_tarotte10.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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
  <a href="https://evitadesignart.com/tarotte_list.php#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
  <a href="https://evitadesignart.com/tarotte_list.php#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
  <a href="https://evitadesignart.com/tarotte_list.php#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
</div>

  <h2>タロットカードで<br class="md:hidden">導かれる、<br class="md:hidden">あなたの人生のテーマ</h2>
  <p>生年月日を入力してください</p>


  <form id="birthForm">
    <input type="date" value="2018-01-11" id="birthdate" required><br>
    <button type="submit" id="drawButton">バースタロットを<br>診断する</button>
  </form>
  <div class="result" id="result" style="display:none"></div>

  <p>
    この占いでは、生年月日をもとに<br class="md:hidden"><strong>大アルカナ22枚から導かれた<br class="md:hidden">1枚のカード</strong>を割り出し、<br>
    あなたが生まれながらに持つ<br class="md:hidden"><strong>本質的なテーマや使命</strong>を<br class="md:hidden">読み解きます。<br>
    バースタロットは、<br class="md:hidden">生涯を通じて影響を与える<br class="md:hidden">あなたの“魂の設計図”<br
      class="md:hidden">ともいえるカードです。<br><br>
    カードの持つ意味は、<br class="md:hidden"><strong>ポジティブな面だけでなく<br class="md:hidden">課題や成長のヒント</strong>も<br
      class="md:hidden">含まれています。<br>
    生年月日から<br class="md:hidden">導かれるその1枚は、<br class="md:hidden">あなたの人生の鍵を<br class="md:hidden">照らしてくれるでしょう。
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
    <strong style="color:#aabbff;">こんな方におすすめ：</strong>
    <ul style="list-style: none; padding-left: 0; margin-top: 0.5em; margin-bottom: 0;">
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 自分の本質や性格を<br class="md:hidden">深く知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 自分の運命やテーマを<br class="md:hidden">タロットで見てみたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 長期的な視点での<br class="md:hidden">自己理解に興味がある</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 自分に合うタロットカード<br class="md:hidden">（守護カード）を知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 生年月日を使った<br class="md:hidden">占いが好きな方</li>
    </ul>
  </div>


  <p>
    <a href="https://nano-design.booth.pm/">BOOTH</a>、<a href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a>にて<br
      class="md:hidden">販売中です。
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
    const arcana = [
      "愚者", "魔術師", "女教皇", "女帝", "皇帝", "教皇", "恋人", "戦車",
      "力", "隠者", "運命の輪", "正義", "吊るされた男", "死神", "節制", "悪魔",
      "塔", "星", "月", "太陽", "審判", "世界"
    ];

    const meanings = [
      "愚者：自由、冒険、純粋さを象徴するカードです。固定概念や社会的な制約から解き放たれ、自分の直感や衝動に従って新たな世界へ踏み出す勇気を示しています。未知の道を進むその姿勢は、可能性に満ちた人生の始まりを表しています。変化を恐れず、失敗を恐れずに動くことが、未来の幸運への鍵となるでしょう。",
      "魔術師：創造性と可能性の始まりを示すカードです。思考と行動を結びつけ、目に見えないアイデアを現実に変える力を持っています。才能と直感に優れ、多彩な手段を自在に使いこなせるタイプです。チャンスをつかむためには、まず自分自身を信じ、最初の一歩を踏み出す勇気が求められています。",
      "女教皇：静かな知恵と深い直感を象徴します。外側よりも内面に目を向け、目に見えない真理や精神的な理解を重んじるタイプです。感情を安易に表に出すのではなく、自分自身の内なる声に耳を傾け、慎重に判断を下すことで、より大きな気づきを得られるでしょう。神秘的で品格ある存在です。",
      "女帝：豊かさ、母性、創造力の象徴です。物質的にも精神的にも満ち足りた状態を意味し、人や自然に対する深い愛情と育む力を備えています。芸術性や感性も豊かで、愛と美を周囲に広げることができる人物です。感情のままに動くのではなく、包容力と優しさで関係を育てていくことが大切です。",
      "皇帝：強い意志と統率力を持つリーダーの象徴です。論理的な思考と責任感を持ち、物事を計画的に進めていく能力に優れています。秩序と安定を求め、家庭や仕事などの組織をまとめあげる力があります。自信と信頼を持って指針を示し、周囲を導いていく存在といえるでしょう。",
      "教皇：信念、道徳、伝統を重んじる賢者の象徴です。人々を導く知識や精神性を持ち、優しさと落ち着きで周囲に安心感を与えます。自己の価値観に基づいて行動しながらも、他者を尊重する態度が特徴です。学びや導きに関わる職業、教育や宗教的な分野にも関連があります。",
      "恋人：愛情、選択、調和を象徴するカードです。感情のつながりや恋愛関係だけでなく、人生の重要な選択にも関わる意味を持っています。直感や心の声に従い、愛をベースに決断することで、本当の幸福に近づけるでしょう。愛の試練を通じて自己成長も促されるカードです。",
      "戦車：強い意志と行動力で困難を突き進む象徴です。目標に向かって自信を持って突き進み、障害を乗り越えて成功を収める力があります。ただし、感情を抑えきれないと暴走につながることもあるため、自制心と集中力を持つことが重要です。勝利への道は、信念と努力によって開かれます。",
      "力：内面の強さと優しさを兼ね備えた人物の象徴です。外見的な強さではなく、心の穏やかさや信念の深さからくる本当の強さを意味します。周囲に対しても寛容で、共感力や粘り強さによって人々を導いていくことができるタイプです。思いやりが力となり、困難を克服できるでしょう。",
      "隠者：内省と精神的探求を意味するカードです。人混みや喧騒から距離を置き、静けさの中で自己と向き合う時間を持つことを勧めています。答えは外にあるのではなく、内なる自分自身の中に見出すもの。独りの時間を大切にすることで、深い気づきや真理への洞察が得られるでしょう。",
      "運命の輪：人生の転機やチャンスの到来を意味します。物事が大きく動くタイミングであり、好機を逃さず柔軟に対応することが重要です。運命の流れを受け入れることで、今後の展開が開けていきます。過去に固執せず、新しい流れに乗ることで変化を味方につけられるカードです。",
      "正義：公平さとバランス、真実を重んじる姿勢を示します。冷静な判断力に優れ、感情に流されずに物事の本質を見極める力があります。誠実な行動と公正な視点で判断を下すことで、信頼と尊敬を集めるでしょう。偏りなく物事を見て、調和と安定をもたらすカードです。",
      "吊るされた男：試練と忍耐、視点の転換を象徴します。自らの意志で一時停止を受け入れ、成長のための内的な変化を経験している状態を意味します。一見すると停滞に見える状況も、実は新しい価値観や学びを得る貴重な時間。犠牲を通して得られる知恵があります。",
      "死神：終焉と新しい始まりの象徴です。何かが終わることで、新しい道が開かれようとしています。古い習慣や関係を手放し、再生の準備をすることが求められています。変化を恐れず、流れに身を委ねることで、人生に新しい風が吹き込んでくるでしょう。",
      "節制：調和と中庸、柔軟さを大切にするカードです。極端に走らず、物事のバランスを保つことで、安定した結果が得られることを示しています。感情や環境を冷静に観察しながら、自然な流れに身を任せることが最善の選択となるでしょう。無理のない調整がカギです。",
      "悪魔：欲望や依存、執着からの解放を促すカードです。目先の快楽や物質的な執着に囚われることで、本来の自由を見失っている状態を表します。自分を制限しているものに気づき、意識的に離れることが成長への第一歩。誘惑や依存を断ち切る勇気が必要です。",
      "塔：突然の変化や崩壊、目覚めを象徴します。築き上げてきた価値観や安定が揺さぶられ、根本からの再構築を迫られる出来事が起こる可能性を示しています。激しいショックを通じて、真の自分や必要なものを見つけていく過程でもあります。破壊は再生への入口です。",
      "星：希望、癒し、インスピレーションを象徴するポジティブなカードです。未来に向かって信じる気持ちが強まり、困難な状況にも希望の光が差し込んでくる兆しです。自分の信念や理想を信じることで、前進する勇気と癒しの力が得られるでしょう。直感も冴える時です。",
      "月：幻想、迷い、無意識の象徴です。はっきりとしない状況の中で、不安や疑念に揺れる時期を意味します。感情や潜在意識の影響を強く受けるため、冷静な判断が求められます。内面と向き合いながら、直感を信じて真実を探る姿勢が必要です。目に見えないものを感じる力を大切に。",
      "太陽：成功、喜び、成長の象徴です。ポジティブなエネルギーが溢れ、周囲との調和も取れやすい好調期を示します。目標達成や人間関係の好転など、あらゆる面で明るい展望が期待できます。率直で素直な態度がさらに運気を引き寄せるでしょう。輝く笑顔があなたの力に。",
      "審判：目覚め、再生、過去との決着を象徴するカードです。これまでの経験や過ちに向き合いながら、自分自身を深く理解し、次のステージに進む準備が整っていることを示します。自分を許し、新たな価値観をもって再出発するタイミングです。大きな成長の兆しがあります。",
      "世界：完成、統合、成功の象徴です。長く続いていた物事が一段落し、努力が実を結ぶ節目を迎えることを表しています。精神的にも成熟し、周囲と調和を保ちながら自分らしい生き方を実現できる時です。すべてがつながり、循環していく大いなる完結のエネルギーを持っています。",
    ];


    document.getElementById("birthForm").addEventListener("submit", function (event) {
      event.preventDefault();
      const date = document.getElementById("birthdate").value;
      if (!date) return;

      const [year, month, day] = date.split("-");
      const digits = (year + month + day).split('').map(Number);
      let sum = digits.reduce((a, b) => a + b, 0);
      while (sum > 22) {
        sum = String(sum).split('').map(Number).reduce((a, b) => a + b, 0);
      }

      const cardIndex = sum === 22 ? 0 : sum;
      const resultDiv = document.getElementById("result");
      resultDiv.style.display = "block";
      resultDiv.innerHTML = `
        <h2>あなたのバースタロットは「${arcana[cardIndex]}」</h2>
        <img src="card8/${String(cardIndex).padStart(2, '0')}.jpg" alt="${arcana[cardIndex]}">
        <p>${meanings[cardIndex]}</p>
      `;
      resultDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  </script>



  <footer>

    <div class="footer-added-section parallax-bg-section" style="background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; color: #fff; padding: 4rem 1rem; margin-bottom: 2rem; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); box-sizing: border-box;">
    <div class="footer-menu" style="text-align: center;">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
    <a href="https://twitter.com/share?url=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>&text=<?php echo urlencode('無料占い｜Evita Designart'); ?>" target="_blank" rel="noopener noreferrer" class="sns-x" title="X (Twitter)でシェア">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>" target="_blank" rel="noopener noreferrer" class="sns-fb" title="Facebookでシェア">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
    <a href="https://social-plugins.line.me/lineit/share?url=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>" target="_blank" rel="noopener noreferrer" class="sns-line" title="LINEでシェア">
      <i class="fa-brands fa-line"></i>
    </a>
  </div>
  <!-- SNS Share Buttons End -->
</body>

</html>





