<?php require_once 'counter.php'; track_page_view(basename(__FILE__, '.php')); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>【無料】12星座占い｜今日の運勢を毎日更新！恋愛・仕事・健康を診断 | 占いアルカノヴァ</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CX0Q57RVS9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-CX0Q57RVS9');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6729293840967461"
    crossorigin="anonymous"></script>
  <meta name="author" content="Evita Designart">
  
  <meta property="og:image" content="https://evitadesignart.com/horo/img/ogp.jpg">
  <meta name="description" content="無料12星座占いサイト。恋愛運・仕事運・健康運の3項目であなたの今日の運勢をチェック！牡羊座から魚座まで、かわいい星座アイコン付きで直感的に選べます。" />
  <!-- OGP（Open Graph Protocol） -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="【無料】12星座占い｜今日の運勢を毎日更新！恋愛・仕事・健康を診断" />
  <meta property="og:description"
    content="無料12星座占いサイト。恋愛運・仕事運・健康運の3項目であなたの今日の運勢をチェック！牡羊座から魚座まで、かわいい星座アイコン付きで直感的に選べます。" />
  <meta property="og:url" content="https://evitadesignart.com/horo/zodiac.php" />
  <meta property="og:site_name" content="Evita Designart" />

  <!-- Twitter Card（画像なし） -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="【無料】12星座占い｜今日の運勢を毎日更新！恋愛・仕事・健康を診断" />
  <meta name="twitter:description" content="恋愛・仕事・健康の3項目で毎日チェック。かわいい星座アイコン付きで選びやすい無料の星座占いサイトです。" />

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "【無料】12星座占い｜今日の運勢を毎日更新！恋愛・仕事・健康を診断",
  "url": "https://evitadesignart.com/horo/zodiac.php",  
  "description": "無料で楽しめる12星座占いサイト。恋愛運・仕事運・健康運の3項目から、あなたの今日の運勢を星座別に毎日チェック。かわいいアイコン付きで直感的に選べます。",
  "inLanguage": "ja",
  "author": {
    "@type": "Organization",
    "name": "Evita Designart"
  },
  "mainEntity": {
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "太陽星座とは何ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "太陽星座は、生まれた瞬間に太陽が位置していた星座のこと。本質的な性格や人生の方向性、社会的な役割を表します。一般的な星占いのベースになる要素です。"
        }
      },
      {
        "@type": "Question",
        "name": "12星座占いはどんな人におすすめですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "今日の運勢を知りたい人、恋愛・仕事・健康を総合的にチェックしたい人、占い初心者、気軽に星占いを楽しみたい人におすすめです。"
        }
      }
    ]
  }
}
</script>

  <style>
    a h1 {
      color: white;
    }
    html {
      background-image: url("img/flower_pattern043.jpg");
      background-repeat: repeat;
      background-size: 25%;
      background-attachment: fixed;
    }

body {
      font-family: Arial, sans-serif;
      margin-top: 5rem;
      background: #1a1a2ee3;
      color: #e0e7ff;
      min-height: 100vh;
      position: relative;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
    }

    h1 {
      text-align: center;
      text-shadow: 0 0 6px #aabbffcc;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      text-align: center;
      background-color: #2e2e3a;
      padding: 1rem 0;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
      z-index: 1000;
    }

    header h1 {
      margin: 0;
      display: inline-block;
      font-size: 1.8rem;
      color: #c5f8ff;
      text-align: center;
    }

    .zodiac-buttons {
      /* display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      margin: 20px 0;*/
    }

    .zodiac-button {
      background-color: #1a234d;
      border: 2px solid transparent;
      border-radius: 8px;
      padding: 12px 8px;
      cursor: pointer;
      color: #cdd6f4;
      font-weight: bold;
      text-align: center;
      transition: border-color 0.3s, background-color 0.3s;
      user-select: none;
    }

    .zodiac-button:hover {
      background-color: #33447a;
    }

    .zodiac-button.selected {
      border-color: #aabbff;
      background-color: #2a3575;
      box-shadow: 0 0 10px #99aaffaa;
    }

    .zodiac-button img {
      display: block;
      margin: 0 auto 6px;
      width: 48px;
      height: 48px;
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .result {
      margin-top: 20px;
      border: 1px solid #4455aa;
      padding: 15px;
      border-radius: 10px;
      background-color: rgba(10, 18, 40, 0.8);
      box-shadow: 0 0 15px #334477aa;
      color: #e0e7ff;
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .zodiac-buttons {
      text-align: center;
    }

    .zodiac-img {
      width: 100%;
      max-width: 300px;
      margin: 20px auto;
      display: block;
      border-radius: 12px;
      /* box-shadow: 0 0 12px #6677ccaa;*/
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .fortune-section {
      margin-top: 10px;
    }

    .fortune-section strong {
      display: inline-block;
      width: 80px;
      color: #aabbff;
      text-shadow: 0 0 4px #aabbffbb;
    }

    #overview2 {
      text-align: center;
    }

    #overview2 a {
      color: yellow;
    }

    footer {
      text-align: center;
    }

    button {
      display: inline-block;
      padding: 1rem 2rem;
      min-width: 200px;
      font-size: 1rem;
      border-radius: 12px;
      background: linear-gradient(145deg, #544e4b, #000000);
      color: white;
      border: none;
      box-shadow: 0 6px 15px rgb(0 0 0 / 40%);
      text-decoration: none;
      transition: all 0.3s ease;
      margin: 1rem;
      font-weight: bold;
    }

    button:hover {
      background: linear-gradient(145deg, #ffa500, #ffd700);
      color: #000;
      box-shadow: 0 8px 20px rgba(255, 215, 0, 0.6);
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
      <h1>12星座占い<br>今日の運勢</h1>
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
    <img src="img/fv_zodiac.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
    <div class="badge-container"><span class="badge-type">占星術</span><span class="badge-type">星占い</span><span class="badge-type">太陽星座</span></div>
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
<div class="main-content-wrapper" style="max-width: 800px; margin: 0 auto; padding: 20px; box-sizing: border-box;">
<div class="fv-buttons">
  <a href="https://evitadesignart.com/horo/#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
  <a href="https://evitadesignart.com/horo/#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
  <a href="https://evitadesignart.com/horo/#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
</div>
  <p style="text-align:center;">下の星座ボタンから選んで<br class="md:hidden">占い結果をチェック！<br>
    <a href="https://evitadesignart.com/horo/#horoscope"><button>生年月日から<br class="md:hidden"> 太陽星座を調べる</button></a>
  </p>

  <div class="zodiac-buttons" id="zodiacButtons">
    <!-- ボタンはJSで生成します -->
  </div>




  <div id="result" class="result">太陽星座を選んでください。</div>


  <!-- 太陽星座とは？ -->
  <div style="max-width: 640px; margin: 1.5em auto; line-height: 1.6;">
    <strong style="color:#aabbff;">太陽星座とは？</strong><br>
    太陽星座とは、あなたが生まれた瞬間に「太陽」が位置していた星座のこと。<br>
    生まれた日付から簡単にわかり、<strong>「本質的な性格」「人生の方向性」「社会的な役割」</strong>を表します。<br>
    雑誌やテレビでよく紹介されている星座占いは、ほとんどがこの太陽星座を基にしています。
  </div>

  <!-- こんな人におすすめ -->
  <div style="background:#112244;padding:1em;border-radius:8px;margin-bottom:1em;">
    <strong style="color:#aabbff;">こんな人におすすめ：</strong><br>
    <ul style="list-style:none; padding:0; margin:0;">
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 今日の運勢を手軽に知りたい</li>
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 恋愛・仕事・健康のバランスを<br class="md:hidden">見直したい</li>
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ どの星座占いが<br class="md:hidden">自分に合っているか確かめたい</li>
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 星占い初心者でもわかりやすく<br class="md:hidden">楽しみたい</li>
    </ul>
  </div>

  <p id="overview2">
    イラスト等は<a href="https://nano-design.booth.pm/">BOOTH</a>、<a
      href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a>にて<br
      class="md:hidden">販売中です。
    <style>
    /* Bottom Navigation Buttons */
    
    .bottom-nav-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin: 2rem auto;
      max-width: 1000px;
    }
    .bottom-nav-buttons .nav-btn-gold {
      background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
      background-size: 200% auto;
      color: #3e2723 !important;
      text-decoration: none !important;
      padding: 15px 25px !important;
      border-radius: 8px !important;
      font-weight: 800 !important;
      font-size: 1rem !important;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.5), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6) !important;
      border: 1px solid #ffeaa7 !important;
      text-shadow: 0 1px 1px rgba(255, 255, 255, 0.8) !important;
      transition: all 0.3s ease !important;
      display: inline-block !important;
      position: relative !important;
      overflow: hidden !important;
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
    .bottom-nav-buttons .nav-btn-gold:hover {
      transform: translateY(-4px) !important;
      box-shadow: 0 8px 20px rgba(212, 175, 55, 0.6), inset 0 2px 2px rgba(255, 255, 255, 0.9) !important;
      background-position: right center !important;
    }
    @media (max-width: 768px) {
      .bottom-nav-buttons .nav-btn-gold {
        width: calc(50% - 15px);
        box-sizing: border-box;
        padding: 12px 10px !important;
        font-size: 0.9rem !important;
      }
      .bottom-nav-buttons .nav-btn-gold:nth-child(5) {
        width: 100% !important;
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
<br><a href="https://evitadesignart.com/horo/" style="display: block; width: 100%; text-align: center;"><button style="width: 100%; max-width: 600px;">占い一覧はコチラ</button></a>
  </p>

  <script>
    const zodiacData = {
      aries: {
        name: "牡羊座",
        images: ["zodiac/aries.png"],
        fortunes: [
          { love: "恋の始まりに最適な日。自分から声をかけてみて。出会いのチャンスを大切にし、素直な気持ちを表現することで、新たな関係が育まれる可能性があります。", work: "リーダーシップが求められる場面がありそう。率先して行動することで、周囲の信頼を得られ、チーム全体を良い方向へ導けるでしょう。", health: "エネルギッシュに動ける日。軽い運動を取り入れて。積極的に体を動かすことで、気持ちも前向きになり、心身ともに充実した一日が過ごせます。" },
          { love: "過去の恋に区切りを。新しい出会いに目を向けて。思い出に感謝しながら、次のステージへと心を切り替えることで、新たな恋の扉が開かれます。", work: "集中力が続かない時は短時間に区切って取り組んで。小さな目標を設定することで、効率よく作業が進み、達成感も得られるはずです。", health: "疲れが溜まりやすい日。睡眠をしっかり取って。心と体のバランスを整えるために、休息を優先することが回復への近道になります。" },
          { love: "相手に思いやりを持って接すると絆が深まります。小さな気配りや優しい言葉が、関係性をより穏やかで信頼に満ちたものへと導いてくれるでしょう。", work: "細かい確認を怠らず、慎重に進めましょう。丁寧な姿勢が評価され、トラブル回避にもつながるため、今日は特に注意深く行動することが大切です。", health: "体調は安定。食事バランスを意識して。栄養をしっかり摂ることで、疲労回復にもつながり、日々の健康を維持しやすくなります。" },
          { love: "新しい出会いに期待。積極的な行動が吉。自分からアプローチすることで運気が動き出し、素敵な縁につながるチャンスが訪れやすい日です。", work: "創造的なアイデアが認められそう。自由な発想で提案してみることで、新たな可能性が広がり、周囲からの評価も上がるかもしれません。", health: "体力が充実。外での運動が効果的。自然の中でリフレッシュすると、心身のバランスが整い、さらなる活力を取り戻せるでしょう。" },
          { love: "誤解が解ける日。素直な気持ちを伝えて。冷静に話し合うことで関係が改善し、信頼が深まっていくきっかけとなる一日です。", work: "チームワークが仕事の鍵に。協調を心掛けて。相手の意見に耳を傾けることで、円滑な人間関係が築かれ、成果にもつながりやすくなります。", health: "ストレスが溜まりやすいのでリラックスを。意識的に深呼吸をしたり、音楽や香りで癒される時間を持つと良いでしょう。" },
          { love: "自分磨きに力を入れると恋愛運アップ。新しいことに挑戦したり、自分の魅力を高めることで、自然と出会いの運気も上昇していきます。", work: "新しいスキル習得に挑戦してみて。学びの姿勢が周囲に良い印象を与え、自信にもつながる大切なステップとなります。", health: "軽いストレッチで体調を整えましょう。無理なく続けることで、体の巡りが良くなり、気分転換にもつながります。" },
          { love: "控えめな優しさが相手の心を打つ日。目立たない気配りが相手に響き、信頼や好意を得るチャンスとなるでしょう。", work: "慎重な判断が信頼を生む。周囲の意見を聞きながらも、自分の軸を保つことで、安定した結果を導くことができます。", health: "温かい飲み物で内側から整えて。体の冷えを防ぎ、心にも安らぎを与えるため、リラックスタイムを大切にしましょう。" },
          { love: "思いがけない誘いに心が揺れる日。直感に従って動くことで、素敵な出会いや新たな展開が生まれる可能性があります。", work: "突発的な仕事にも柔軟に対応を。冷静に対処する姿勢が信頼を呼び、今後の評価にも良い影響を与えるでしょう。", health: "肩こり対策を意識して過ごそう。定期的にストレッチを取り入れ、姿勢にも気をつけると疲れが軽減されます。" },
          { love: "些細なやさしさが恋のきっかけに。自然体の思いやりが相手の心に響き、穏やかな関係が始まる兆しがあります。", work: "地道な作業が実を結ぶ。焦らず丁寧に取り組む姿勢が評価され、信頼と成果の両方を得られるでしょう。", health: "体を冷やさないように注意。衣類や飲食に気を配ることで、体調を安定させやすくなります。" },
          { love: "感情を整理してから言葉にすると吉。落ち着いた心で伝えることで、誤解を防ぎ、相手との絆を深めることができるでしょう。", work: "資料の見直しでミスを防げる日。細部に注意を払うことで、仕事の完成度が高まり、信頼につながります。", health: "水分補給をこまめに。体内バランスを整えるだけでなく、集中力や疲労回復にも良い影響を与えてくれます。" },
          { love: "新しい環境に恋の予感あり。自分を開放して積極的に関わることで、新たなご縁が自然と引き寄せられます。", work: "周囲との連携で大きな成果を。助け合いの精神が結果に繋がり、仕事の満足度も高まるでしょう。", health: "適度な運動が効果を発揮する日。ウォーキングや軽い体操など、無理なく続けられる運動を取り入れてみましょう。" },
          { love: "素直な言葉が関係を深めるカギ。自分の気持ちを率直に伝えることで、相手との信頼関係が強まりそうです。", work: "交渉ごとがスムーズに進む。相手の立場を理解しながら進めることで、双方にとって良い結果が得られます。", health: "呼吸を整えることでリフレッシュ。深呼吸や瞑想を取り入れると、心身ともに落ち着きが取り戻せるでしょう。" },
          { love: "些細な気遣いが恋のチャンスを広げる日。自然体で接することが好印象につながります。", work: "小さな工夫が作業効率を大きく高めてくれる日です。", health: "冷たい飲み物を控え、内臓を温めることで体調が安定します。" },
          { love: "心をオープンにすることで、長く続く関係が芽生える可能性があります。", work: "苦手意識を持っていたことが、今日は驚くほどスムーズに進みそうです。", health: "天気による体調変化に備えて、服装選びを工夫すると良いでしょう。" },
          { love: "今日は過去の恋愛を振り返りながら、自分にとって大切なものに気づけそうです。", work: "忙しさの中にも冷静さを忘れずに。判断力が冴える日です。", health: "軽いヨガやストレッチで心身のバランスを整えると吉です。" },
          { love: "笑顔と感謝の言葉が恋の運気を引き寄せる鍵になります。", work: "周囲のサポートに恵まれやすい日。協力を素直に受け入れて。", health: "無理な運動よりも、リズムのある生活を意識して。" },
          { love: "相手の話をよく聞く姿勢が、信頼を築く第一歩となります。", work: "アイデアが次々と浮かびやすく、発想力が活かされるでしょう。", health: "深い呼吸を心がけることで自律神経が整いやすくなります。" },
          { love: "自分の気持ちを丁寧に表現することで、距離がぐっと縮まる日です。", work: "丁寧な作業が信頼を集める鍵になります。スピードより正確さを。", health: "今日はゆっくり湯船に浸かることで、溜まった疲れを癒せそうです。" },
          { love: "新しい場所や環境で、偶然の出会いが起こるかもしれません。", work: "ルーチンワークに集中することで、予想外の成果が得られます。", health: "目や手首の使いすぎに注意。短時間の休憩をこまめに取りましょう。" },
          { love: "好奇心を持って人と接すると、思わぬご縁につながりやすくなります。", work: "今日は無理に目立つより、陰で支える姿勢が評価されます。", health: "体を冷やさないように意識することで、疲れにくくなります。" },
          { love: "今日は恋愛よりも自己愛を高めることが、未来の良縁を呼びます。", work: "優先順位をつけて行動することで、効率よく成果を出せます。", health: "食事の時間を一定に保つと、体内リズムが安定しやすいです。" },
          { love: "共通点を見つけることが関係をスムーズにする鍵になります。", work: "報告・連絡・相談を意識することで、トラブルを未然に防げるでしょう。", health: "口にするものの質を高めることで、体も心も整います。" },
          { love: "素直な謝罪や感謝の言葉が、関係修復のきっかけになります。", work: "今までの努力が実を結びやすい日。成果を実感できそうです。", health: "睡眠前のスマホ断ちが、より良い休息をもたらしてくれます。" },
          { love: "愛情表現に工夫を加えると、相手に深く伝わりやすくなります。", work: "スケジュールの見直しが新たな時間の使い方を生み出すでしょう。", health: "今日はカフェインの量を控えめにすると落ち着いて過ごせそうです。" }
        ]


      },
      taurus: {
        name: "牡牛座",
        images: ["zodiac/taurus.png"],
        fortunes: [
          { love: "穏やかで安定した関係を築ける日。共通の趣味や好みを通じて、心の距離が一気に縮まりそうです。", work: "地道な努力が認められるチャンス。マイペースでも確実に進めば、信頼を勝ち取れる日です。", health: "ゆったりとした時間を持つことで心と体のバランスが整い、安心感が広がっていきます。" },
          { love: "相手の立場に立って寄り添うことで、相手からの信頼と好印象を得られやすくなります。", work: "新しいスキルの習得が自信に直結。積極的に挑戦するとキャリアの幅が広がります。", health: "乾燥や刺激による肌荒れに注意。日中もこまめな保湿ケアを忘れずに行いましょう。" },
          { love: "言葉に頼らず、日頃の行動や態度で愛情を示すことが信頼を深める鍵になります。", work: "整理整頓やスケジュール調整に最適。作業環境を整えると集中力が増します。", health: "体が冷えやすい一日。白湯やハーブティーなど温かい飲み物で体調を整えて。" },
          { love: "思わぬタイミングで気持ちが通じ合い、深い絆が芽生えるような瞬間に出会える日。", work: "計画を立てて作業を進めると、効率よく結果に結びつきやすくなります。", health: "偏った食事を避けて、ビタミンやミネラルを意識したバランスの良い食生活を心がけて。" },
          { love: "ささいなことでも感謝の気持ちを言葉にすることで、関係がより深まっていきます。", work: "焦ってミスをするよりも、確実に丁寧に取り組む姿勢が周囲の信頼を集めます。", health: "体調を崩しやすい日。無理せず自分のペースを守って適度な休息を取りましょう。" },
          { love: "新たな恋の兆しを感じる日。自分の魅力を自然に出すことで好印象を与えられます。", work: "これまでの経験が生きる場面がありそう。リーダーとしての資質を試されるかも。", health: "軽いウォーキングやストレッチなどの運動が気分転換になり、集中力もアップします。" },
          { love: "さりげない気配りや心配りが、相手に安心感や好印象を与える効果的な日。", work: "同じ作業を続けることで確実に成果が現れ、自信につながります。", health: "静かな空間で自分と向き合う時間を作ると、心が安定しやすくなります。" },
          { love: "頼りすぎると負担に思われる可能性も。距離感を意識して自立した姿勢を保とう。", work: "ミスのない丁寧な作業が周囲の信頼を得る大きな要因になります。", health: "姿勢を正すだけでも疲れ方が大きく変化。背筋を伸ばして過ごしてみてください。" },
          { love: "思っていることを正直に伝えることで、相手との理解が一段と深まりそうです。", work: "小さな見落としに注意して、細部まで丁寧なチェックを。", health: "悩みや不安は抱え込まず、上手に気分転換する方法を見つけてみて。" },
          { love: "一歩ずつ確実に行動することで、信頼や好感度が自然と積み重なっていきます。", work: "これまでの努力が形になる兆し。地道な積み重ねが今、成果を生み出します。", health: "早めの睡眠と規則正しい生活で、体力と気力が回復してきます。" },
          { love: "相手の感情に寄り添うことが、恋愛をスムーズに進める重要なポイントになります。", work: "チームワークが求められる場面で協調性を発揮すると良い方向へ進展します。", health: "リフレッシュのために、自然の中での散歩などもおすすめです。" },
          { love: "過去の出来事や思い出が恋の進展に影響を与えるかもしれません。", work: "以前の経験や知識が今の仕事に役立ち、新たな成果に結びつく可能性大。", health: "体を芯から温めるスープなどを取り入れると、心身のバランスが整います。" },
          { love: "落ち着いた対応が好感を呼ぶ日。焦らず誠実な姿勢を大切にしましょう。", work: "コツコツ続けてきた努力が形になる兆しがあります。", health: "五感を満たすことで心も体も癒される一日になりそうです。" },
          { love: "身近な人との絆が深まります。小さな思いやりが恋を温かく育ててくれます。", work: "丁寧な仕事ぶりが上司や同僚から信頼を集める日です。", health: "運動不足を感じたら、まずはストレッチから始めてみて。" },
          { love: "恋愛の価値観を共有できる相手との出会いが期待できそうです。", work: "新しい知識の吸収に最適な日。学ぶ姿勢が今後の成長につながります。", health: "今日は身体を冷やさない工夫をすると、調子が整いやすくなります。" },
          { love: "今日は無理に距離を縮めず、信頼をじっくり築くことを意識して。", work: "周囲の人と協力することで、大きな成果を得られそうです。", health: "食事内容を見直すことで、体調が徐々に改善していくでしょう。" },
          { love: "自分の気持ちを言葉にすることで、相手との関係が進展しやすくなります。", work: "業務の見直しをすることで、より効率的に動けるヒントが見つかります。", health: "無理のない範囲で軽い運動を取り入れると効果的です。" },
          { love: "共通の趣味が出会いのきっかけになる予感。好奇心を大切に。", work: "時間管理を意識することで、タスクがスムーズに進行します。", health: "自然の中で過ごす時間が心身のバランスを整えてくれます。" },
          { love: "優しい気配りが恋愛運を引き上げる一日です。", work: "ルールを守る姿勢が評価につながりやすい日です。", health: "疲労が溜まりやすい日。栄養と休息のバランスを意識しましょう。" },
          { love: "今まで気づかなかった相手の魅力に惹かれる出来事があるかもしれません。", work: "信頼を築くには、安定した行動と真面目な姿勢が効果的です。", health: "自律神経を整えるには、ゆったりとした音楽を聴くのがおすすめです。" },
          { love: "恋に対して理想を高く持つことで、自分に合った相手と巡り合えるでしょう。", work: "今日は目立たずとも、着実に実績を積むことが運気アップの鍵。", health: "早寝早起きを意識することで、生活リズムが整いやすくなります。" },
          { love: "穏やかな時間を共有することで、関係が一歩深まります。", work: "新しい環境への適応力が求められる日。柔軟に対応して。", health: "目の疲れを感じたら、温めたタオルで癒してあげましょう。" },
          { love: "会話のテンポが合う人との出会いが、良縁へとつながるかもしれません。", work: "報連相をしっかり行うことで、周囲との連携がスムーズになります。", health: "軽いマッサージやツボ押しで、肩こりや腰痛が和らぐかもしれません。" },
          { love: "あえて一人の時間を楽しむことで、自分にとって必要な愛が見えてきます。", work: "集中力が高まるので、難しい仕事にも挑戦してみましょう。", health: "温かい飲み物で体を内側から温めると、リラックスできます。" }
        ]


      },
      gemini: {
        name: "双子座",
        images: ["zodiac/gemini.png"],
        fortunes: [
          { love: "会話が弾む日。自分でも気づかなかった感情に気づくことで、新たな関係性の可能性が見えてくるかもしれません。", work: "情報収集がカギ。その努力はやがて実を結び、次のステージへと進むきっかけとなるでしょう。", health: "呼吸を意識して。意識して整えることで、今よりもずっと健やかな日々が過ごせるようになります。" },
          { love: "気になる相手と距離を縮めるチャンス。心の余白が生まれることで、恋愛の運気が穏やかに上昇していくでしょう。", work: "新しいプロジェクトに取り組む好機。今こそスキルを発揮し、周囲にあなたの存在感を印象づけましょう。", health: "スマホの見過ぎに注意。気になるところがあれば無理せず、医師や専門家に相談するのも一つの手です。" },
          { love: "複数の選択肢が出てきそう。距離を詰めようとするよりも、まず理解しようとする姿勢が大切です。", work: "プレゼンや説明に向いている日。目標に向かうその姿勢が、職場に良い影響を与えるはずです。", health: "手先の使いすぎに注意して休憩を。健康的な習慣を続けることが、将来の安心感につながります。" },
          { love: "軽快な会話が関係を深める助けに。小さな共感が積み重なることで、深い絆が生まれてくるはずです。", work: "チームワークが良好。小さな工夫が、大きな成果へとつながることを忘れずに。", health: "睡眠時間を確保すると調子良し。身体をいたわる気持ちが、日々の充実度を底上げしてくれるでしょう。" },
          { love: "相手の気持ちに敏感になれる日。自分の気持ちに正直になったとき、想像以上の展開が待っているでしょう。", work: "計画的な仕事で評価アップ。周囲との連携を強めることで、想像以上の結果が得られるかもしれません。", health: "リラックスする時間を作って。無理をせず、できる範囲で整えていくことが大切です。" },
          { love: "新しい出会いに期待。目の前の相手との関係性が、これまでと違った意味を持ち始めるかもしれません。", work: "アイデアを積極的に提案して。与えられた役割以上の行動が、信頼へとつながります。", health: "軽い運動で体をリフレッシュ。些細な違和感も見逃さず、早めの対処が体調維持につながります。" },
          { love: "ユーモアが恋愛運を引き寄せる鍵に。言葉ではなく態度で示すことが、信頼を育む鍵となるでしょう。", work: "変化に強いあなたの力が試される日。素直な姿勢でアドバイスを受け入れると、さらなる成長が期待できます。", health: "首や肩のこりに注意してストレッチを。睡眠の質を見直すだけでも、コンディションが大きく変わってくるでしょう。" },
          { love: "偶然の再会が恋のきっかけになるかも。思い切った行動が、相手の心を大きく動かすことになりそうです。", work: "思い切った決断が好転を呼ぶ。チャンスは一瞬なので、タイミングを逃さず掴みにいきましょう。", health: "目の疲れには蒸しタオルが効果的。疲れが取れないときは、気候や食生活の見直しが効果的かもしれません。" },
          { love: "軽やかなフットワークが恋を引き寄せる。感情の機微に敏感になることで、恋の芽が育ち始めます。", work: "臨機応変な対応が求められる日。一つひとつ丁寧にこなすことで、未来のステップアップに結びつきます。", health: "呼吸法を取り入れてリフレッシュ。健康を意識した選択が、あなたの生活全体を整えてくれます。" },
          { love: "情報交換の中に恋のヒントが隠れている日。今は進展が見えなくても、その土台は着実に築かれている最中です。", work: "仲間とアイデアを出し合うと成果が出やすい。苦手意識を克服することで、新たな自信が芽生えるでしょう。", health: "カフェインの摂りすぎに注意。小さなケアを怠らないことで、将来のリスクを減らせる可能性があります。" },
          { love: "好奇心が恋愛を前進させるきっかけに。安心感を与える存在になることで、自然と相手の心が開かれるでしょう。", work: "複数の作業を同時にこなせる日。今の努力が半年後のあなたを支える力となります。", health: "軽い散歩でリズムを整えよう。普段の姿勢や癖を意識することが、快調な日々への第一歩です。" },
          { love: "言葉選びが大切な日。自分らしさを大切にすることで、理想に近い関係が築けそうです。", work: "対話を通して信頼を深められる。目先の成果よりも、長期的な視点を意識することが成功の鍵です。", health: "水分をしっかりとって頭をすっきりさせて。意識して休息を取ることで、余裕をもって日々に向き合えるようになります。" },
          { love: "好奇心が恋のきっかけに。会話を楽しむことで心の距離が縮まりそうです。", work: "マルチタスクがうまくいく日。要領よくこなせそうです。", health: "脳の疲れを感じたらスマホやPCから離れて目を休めて。" },
          { love: "今日は自然体でいることが恋愛運を高めるカギ。無理に合わせる必要はありません。", work: "コミュニケーション能力が活かされ、周囲との連携がスムーズに。", health: "軽い運動とリズムある生活で体調が整いやすくなります。" },
          { love: "軽やかなコミュニケーションが新たなご縁を引き寄せてくれます。", work: "アイデアがどんどん湧いてくるので、企画や提案に最適なタイミングです。", health: "気分転換に散歩するだけでも、思考がスッキリするでしょう。" },
          { love: "少しの冒険心が恋に刺激を与えてくれる一日です。", work: "フットワーク軽く動けるため、急な依頼にも柔軟に対応できます。", health: "呼吸を深く意識してみると、精神的にも落ち着きます。" },
          { love: "フットワークの軽さが出会いのチャンスを広げてくれます。", work: "飽きやすさを克服することで、大きな成果に結びつきます。", health: "睡眠の質を高める工夫が、心身の回復につながります。" },
          { love: "興味のあることを共有することで、相手との共感が生まれやすい日です。", work: "情報収集がカギとなる日。新しい知識が仕事に役立ちます。", health: "姿勢を整えることで集中力も上がります。デスク周りを見直して。" },
          { love: "言葉の選び方に気をつけると、誤解を防ぎ関係がスムーズになります。", work: "人との対話の中からヒントを得られる可能性があります。", health: "おしゃべりや笑顔がストレス発散につながる日です。" },
          { love: "今日の出会いは予想外の場所に潜んでいるかもしれません。", work: "書類やメールなど言葉を扱う作業に集中すると精度が高まります。", health: "好奇心を刺激する読書や創作が心に良い影響を与えるでしょう。" },
          { love: "軽い冗談がきっかけで意外な相手と距離が縮まるかも。", work: "スピード感を意識すると仕事の効率が大幅にアップします。", health: "新しいことに触れることで、前向きな気持ちになれそうです。" },
          { love: "短時間でも相手のことを思いやる言葉が響く日です。", work: "一つの仕事に集中するより、複数の業務を切り替えて進めるのが吉。", health: "軽めのストレッチやダンスが身体を活性化させます。" },
          { love: "自分の素直な感情を言葉にして伝えることが良い方向に導きます。", work: "社内外の連絡役として活躍できるチャンスが巡ってきそうです。", health: "食事の内容に変化を加えると、内面から元気になれます。" },
          { love: "テンポの合う人とのやり取りが、心地よい関係の第一歩になりそうです。", work: "打ち合わせや会議での発言が周囲に良い影響を与えるでしょう。", health: "風通しの良い場所で過ごすと、気分が明るくなるでしょう。" }
        ]


      },
      cancer: {
        name: "蟹座",
        images: ["zodiac/cancer.png"],
        fortunes: [
          { love: "家族や恋人との絆を再確認できる日。普段は言えない気持ちを丁寧な言葉で伝えると、より深い愛情が育まれるでしょう。", work: "周囲との連携が鍵となる日。仲間との協力によって、単独では得られなかった成果が期待できます。", health: "胃腸の不調に注意。身体を冷やさず、消化の良い温かい食事を意識して体調を整えましょう。" },
          { love: "ふとした瞬間に思い出す過去の出来事が、今の恋愛に影響を及ぼす可能性あり。気持ちの整理が前進のヒントに。", work: "些細な気遣いや配慮が高く評価されやすい日。地味な作業でも丁寧に取り組むことで信頼が深まります。", health: "体力的にも精神的にも負担が出やすい時。早めに休息を取ることで回復力を高めましょう。" },
          { love: "少し勇気を出して行動することで、相手との距離が縮まりそう。素直な気持ちを伝えることが進展の鍵です。", work: "責任の重い役割が回ってくるかも。プレッシャーを感じても、誠実な対応が信頼につながります。", health: "疲労が徐々に蓄積している兆し。短時間でもこまめな休憩が、コンディション維持に効果的です。" },
          { love: "心の内を伝えることで、誤解やすれ違いが解消へ向かうかも。素直な表現が関係を温かくします。", work: "職場でのバランス役として期待される日。周囲の調整役に徹することで、チームの信頼が高まるでしょう。", health: "溜まったストレスを解放するには、自然の中を歩くことやリズム運動が効果的です。" },
          { love: "言葉を交わすたびに、心のつながりが強まる感覚を得られそう。大切な人との対話を大事にすると吉。", work: "新たな挑戦に対して前向きに取り組める日。失敗を恐れず取り組むことで自信につながるでしょう。", health: "睡眠環境の見直しが重要な時。寝具や生活リズムを整えることで、より質の高い休息が得られます。" },
          { love: "穏やかな空気に包まれ、心地よい関係を築きやすい一日。無理に言葉を探すより、自然な態度が好印象に。", work: "事前の計画が功を奏しやすいタイミング。スケジュール通りに進めることで成果が出やすくなります。", health: "栄養バランスの整った食事が、体調を安定させるカギ。偏った食生活には注意を。" },
          { love: "思いやりに満ちた言葉が、相手の心に深く届きやすい日。日頃の感謝を素直に伝えてみてください。", work: "地道に取り組んできた努力が実を結び、上司や同僚からの信頼が厚くなっていく時期です。", health: "湯船にしっかり浸かることで、身体だけでなく心もリラックスできる一日になりそうです。" },
          { love: "久しぶりの連絡や偶然の再会が恋の火種になる可能性も。過去の縁を大切にすると良い展開が期待できます。", work: "一つひとつ丁寧にこなすことで信頼が高まり、周囲との関係性も円滑になります。", health: "冷たい飲み物や食事を避け、体の内側から温める工夫が健康維持に役立ちます。" },
          { love: "相手の話を丁寧に聞くことで、あなたへの信頼が増していきます。理解しようとする姿勢が愛情を育てる鍵に。", work: "表に立つよりも支える役割で力を発揮できる日。縁の下の力持ちとして評価されやすいタイミングです。", health: "手足の冷えやお腹の冷えに要注意。温かい飲み物や重ね着で防寒を心がけてください。" },
          { love: "住まいや家庭での出来事に喜びが見つかる日。パートナーとの時間をゆっくり楽しんでみて。", work: "落ち着いて取り組むことで集中力が発揮され、作業効率も良くなる一日となるでしょう。", health: "規則正しい生活リズムを意識することで、心身ともに安定して過ごせそうです。" },
          { love: "未練を断ち切り、前に進むための心の準備が整ってきたようです。過去を整理することで視界が開けていきます。", work: "原点に立ち返ることで、やるべきことが見えてきそう。初心を思い出すことがヒントになります。", health: "小さな不調を放置せず、こまめな休養で心身のリセットを心がけましょう。" },
          { love: "心の奥底にある本当の気持ちと向き合う時間が持てそう。素直さが関係を一歩前へと進めてくれます。", work: "物事を慎重に見極めながら進めることが成功の鍵。焦らず丁寧に判断しましょう。", health: "気持ちが落ち着かない時は深呼吸を。ゆっくりとした呼吸で心を静めると良い効果が得られます。" },
          { love: "家庭的な一面が魅力として伝わりやすい日。穏やかな関係が築けそうです。", work: "サポート役に徹すると周囲からの信頼が高まりやすい日です。", health: "ぬるめのお風呂にゆっくり浸かると心身の疲れが癒されます。" },
          { love: "感情を素直に表現することで、距離がぐっと縮まりやすくなります。", work: "細やかな気配りが職場の雰囲気を和らげ、評価にもつながります。", health: "家でのリラックスタイムを重視すると体調が安定しやすくなります。" },
          { love: "守ってあげたいと思われるような優しさが恋愛運を高めてくれます。", work: "丁寧な対応が好印象を残しやすく、今後のチャンスにもつながるでしょう。", health: "消化の良い食事を心がけると胃腸の調子が整います。" },
          { love: "思いやりを持って接すると、相手の心に響く瞬間がありそうです。", work: "人とのつながりが業務を円滑に進めるポイントになります。", health: "心配事は紙に書き出して整理すると気持ちが軽くなります。" },
          { love: "安心感を与える言動が、相手との信頼関係を深めるカギになります。", work: "感情をコントロールすることで、冷静な判断ができるようになります。", health: "温かい飲み物で気分がほっと落ち着く時間を取りましょう。" },
          { love: "大切な人との時間を丁寧に過ごすことで、絆が強まる一日です。", work: "後輩や部下に優しく接すると、思わぬ感謝を得られるかも。", health: "睡眠のリズムを整えると、朝の目覚めがすっきりします。" },
          { love: "過去の恋を手放すことで、前向きな出会いが生まれやすくなります。", work: "誰かのフォローに回ることで、自分の存在価値が再認識されそうです。", health: "無理をせず、自分のペースで動くことが健康を保つ秘訣です。" },
          { love: "今日は誰かに気持ちを打ち明けることで、新たな関係性が芽生えるかも。", work: "チームワークを意識することで、大きな成果が生まれるかもしれません。", health: "心を落ち着ける音楽やアロマが癒しの効果をもたらします。" },
          { love: "相手の変化に敏感になると、恋の流れをつかみやすくなります。", work: "聞き役に徹すると、職場での信頼感が一層高まりそうです。", health: "水分補給を意識することで体内バランスが整いやすくなります。" },
          { love: "自分の心に正直になることで、想いが届くきっかけが生まれます。", work: "地道な作業が最終的に大きな成果へとつながります。", health: "身体の冷えに注意して、首や足元を温めるよう意識してみて。" },
          { love: "心の支えになれるような存在を目指すと恋愛運が高まります。", work: "感情に流されず、計画通りに進めることが成功の秘訣です。", health: "軽いストレッチで筋肉のこわばりをほぐすと血行が良くなります。" },
          { love: "身近な人の優しさに気づき、心が温まるような出来事があるかもしれません。", work: "穏やかな対話を心がけると、周囲との関係がさらに良好に保てます。", health: "ゆっくりとした呼吸を意識することで、気持ちも安定します。" }
        ]


      },
      leo: {
        name: "獅子座",
        images: ["zodiac/leo.png"],
        fortunes: [
          { love: "あなたの内側から放たれる魅力が周囲を惹きつける日。思い切ったアプローチが相手の心に響くでしょう。", work: "リーダーとしての資質が発揮される場面に出会いそう。迷わず自信を持って判断してみてください。", health: "気力・体力ともに満ちている日。趣味の時間がより充実感を与えてくれるでしょう。" },
          { love: "注目を集めることで恋のチャンスが巡ってきそう。自分らしさを表現することで好印象に繋がります。", work: "大胆な発想が周囲を惹きつけ、高評価を得やすい日。思い切って発言することがカギとなります。", health: "活力があふれる日なので、軽い運動を取り入れることで心身のバランスがさらに整います。" },
          { love: "飾らない素直な想いが相手に届きやすい日。自分の気持ちを正直に伝えることで恋が進展するかもしれません。", work: "これまでの努力が結果として見えてくる日。やりがいを感じながら集中できる時間が続きそうです。", health: "気温の変化に注意。水分をこまめに摂ることで熱中症対策にもなります。" },
          { love: "心から楽しむ時間が、恋愛運を底上げしてくれる一日。無理をせず自然体で接することが好印象に。", work: "新しい取り組みへのチャレンジが吉。勇気を持って踏み出すことで、思わぬ成果に繋がるかもしれません。", health: "身体と心を休める時間を意識的に設けて。静かな環境でのリラックスが効果的です。" },
          { love: "小さな感謝の言葉が、相手との絆を強めるきっかけになります。照れずに想いを伝えてみてください。", work: "仲間との喜びを分かち合える日。チームでの連携が功を奏して結果に繋がるでしょう。", health: "ビタミンやたんぱく質などを意識した食事を心がけ、体調管理に努めて。" },
          { love: "自分らしくいることで恋愛運が安定。無理せず自然体で接することで、より良い関係へと発展しそうです。", work: "集中力が増すタイミング。時間の使い方を工夫すると、効率的に物事が進むでしょう。", health: "頑張りすぎず、時には立ち止まって深呼吸を。こまめな休憩が心身のリセットに役立ちます。" },
          { love: "大胆で情熱的な言動が、相手の心に火を灯すかも。主導権を握って進めると好結果に繋がりやすいです。", work: "目標へ真っ直ぐに突き進む姿勢が周囲に良い刺激を与えます。結果にも結びつきやすい一日。", health: "睡眠時間をしっかり確保することで、翌日のエネルギーが倍増します。快適な寝具環境も見直して。" },
          { love: "隠していた気持ちを素直に伝えることで、相手との距離が一気に縮まりそう。タイミングを大切に。", work: "堂々とした立ち振る舞いが周囲の信頼を集め、チャンスが巡ってくる可能性があります。", health: "運動後のストレッチを丁寧に行うことで、翌日の疲労感を軽減できます。" },
          { love: "人としての魅力が高まり、尊敬の眼差しを向けられることも。自然体での振る舞いが愛情を引き寄せます。", work: "自信に満ちた態度が、周囲の信頼とリーダーシップを確固たるものにします。", health: "気分転換に趣味に没頭する時間を持つと、心がリフレッシュされるでしょう。" },
          { love: "あなたが主役になれる日。明るい笑顔と魅力が、恋のステージを盛り上げてくれそうです。", work: "表現力が高まり、発表や提案が成功しやすい日。自信を持ってプレゼンに臨んで。", health: "背筋を伸ばすことで集中力や思考力が高まり、仕事や学びの効率もアップします。" },
          { love: "笑顔が自然と周囲の心を和ませ、良い印象を与えます。身近な人との関係にポジティブな変化が起きるかも。", work: "ひらめきや創造性が活かされやすい日。アイデアを出すことに臆せず挑戦してみてください。", health: "普段の食生活を見直して、偏りがないよう意識すると、体の調子が整ってきます。" },
          { love: "相手の良いところを素直に褒めることで、距離が自然と縮まります。言葉の力を信じて伝えてみましょう。", work: "前向きな言葉が職場全体に良いムードをもたらします。積極的な発言が好影響を与えます。", health: "のどの渇きを感じる前に水分補給を心がけると、体のバランスが保たれやすくなります。" },
          { love: "自信あふれる態度が魅力となり、注目を集めやすい一日です。", work: "リーダーシップを発揮する場面が訪れそう。自信を持って進めましょう。", health: "太陽の光を浴びることで元気が湧いてくる日です。" },
          { love: "ストレートな愛情表現が相手の心に響くでしょう。", work: "発言力が高まり、会議やプレゼンで注目を集める可能性があります。", health: "思いきり体を動かすとストレス発散になりそうです。" },
          { love: "堂々と自分の思いを伝えることで、恋が進展しやすくなります。", work: "周囲を鼓舞するような言動が、チームの士気を高めてくれるでしょう。", health: "有酸素運動が効果的。心拍数を意識して取り入れてみて。" },
          { love: "主導権を握ることで恋の流れがスムーズになるかもしれません。", work: "目標を明確に掲げることで、周囲も自然と協力してくれます。", health: "エネルギッシュな一方で、休息も意識してバランスを取りましょう。" },
          { love: "クリエイティブな誘い方が良い印象につながります。", work: "主体的な行動が成果につながる日。迷わず動いて正解です。", health: "声を出して笑うことで心がすっきりと軽くなります。" },
          { love: "情熱的なアプローチが功を奏し、関係が一歩深まりそうです。", work: "あなたの存在感が場を引き締め、良い緊張感を生み出します。", health: "活力がある日だからこそ、怪我には注意を。" },
          { love: "あなたの明るさが相手を惹きつける日。積極性がカギになります。", work: "堂々とした態度が信頼につながります。遠慮は不要です。", health: "好きな音楽を聴きながらの運動がモチベーションを高めてくれます。" },
          { love: "デートの計画はあなたがリードすると好印象につながります。", work: "思い切った提案が評価されやすい日。積極的にアイデアを出して。", health: "燃えるような情熱をクールダウンする時間を意識しましょう。" },
          { love: "堂々とした態度が恋の場面でも安心感を与えます。", work: "後輩や部下に頼られる場面が増え、頼もしさが光る一日です。", health: "体の中心（腹部・背中）を温めると集中力が高まりやすくなります。" },
          { love: "表現力豊かな言葉が、相手との距離を縮めてくれるでしょう。", work: "目立つ仕事を任されたらチャンスと捉えて全力で取り組みましょう。", health: "水分補給とミネラルのバランスに気を配ると疲れにくくなります。" },
          { love: "誰かのサポートが恋を後押ししてくれる場面があるかもしれません。", work: "表舞台に立つ役割が巡ってきたら、自信を持って臨んでください。", health: "目立つことを意識することで、自然と姿勢も整いやすくなります。" },
          { love: "ライバルが現れても焦らず、自分らしさを大切にすると吉です。", work: "人前で話すことにツキあり。説得力ある言葉が周囲を動かします。", health: "体力に自信があっても無理は禁物。適度なケアを忘れずに。" }
        ]


      },
      virgo: {
        name: "乙女座",
        images: ["zodiac/virgo.png"],
        fortunes: [
          { love: "さりげない気遣いや小さな優しさが、相手の心に深く響く日です。丁寧なコミュニケーションを心がけてみて。", work: "書類やデータの整理整頓が大きな成果につながるタイミング。見落としも減って効率的に進められそう。", health: "体調管理を意識した食生活が重要です。胃腸にやさしいメニューを選ぶと内側から整っていきます。" },
          { love: "誠実な気持ちが伝わることで、信頼関係が一層深まる日。焦らず丁寧に向き合う姿勢が大切です。", work: "プレゼン資料や提案書の作成に最適な日。細部へのこだわりが高評価に繋がります。", health: "猫背や前かがみになりやすい日。正しい姿勢を保つことで体調にも良い変化が見られるでしょう。" },
          { love: "今日は自分のペースを最優先に。無理をして相手に合わせようとせず、心の余裕を保つことがポイントです。", work: "一見地味な作業にも意味があります。コツコツ続ける姿勢が将来の成功への布石となります。", health: "目の疲労が出やすいので、こまめな休憩とまばたきの意識でコンディションを整えましょう。" },
          { love: "あらかじめ計画を立てて行動すると、恋愛の流れがスムーズに。準備が気持ちの安定にもつながります。", work: "ひとつひとつの作業を丁寧に仕上げることが評価されやすい日。信頼が厚くなるチャンスです。", health: "体を温める食事や入浴を意識して、冷えからくる不調を予防しましょう。" },
          { love: "相手への思いやりがそのまま愛情として返ってくるような日。小さな優しさが大きな信頼を育てます。", work: "新しい分野への挑戦が功を奏しそう。失敗を恐れず、積極的な姿勢で取り組んでみましょう。", health: "疲労がたまっているなら、無理をせず心身のリカバリーに時間を使いましょう。" },
          { love: "周囲からの支えに気づくことで、心があたたかくなる日。感謝の気持ちを伝えると関係が深まります。", work: "集中力が高まって作業が捗る日。やりかけの仕事を一気に仕上げるのも良さそうです。", health: "長時間の作業には適度な休憩を。ストレッチや水分補給を忘れずに取り入れてください。" },
          { love: "目立たないけれど心のこもった優しさが、相手の心に残る日です。控えめな態度が好印象を与えるでしょう。", work: "身の回りの整理が運気を上げる鍵。作業スペースを整えると集中力がぐっと高まります。", health: "無理を重ねると体調を崩しやすくなる日。こまめに体調チェックをしてペース配分を。" },
          { love: "細やかな気配りが愛情として伝わる日。普段言えない気持ちを少しだけ表現してみましょう。", work: "集中力を保ちやすく、細かい作業にぴったりの日。こだわりを活かして結果につなげて。", health: "ビタミンや鉄分などの栄養バランスを意識すると、体力の回復もスムーズに進みます。" },
          { love: "相手の話にしっかり耳を傾けることで、信頼と安心感を得られる日。聞き上手になることで好感度アップ。", work: "状況を冷静に分析することで問題解決の糸口が見えてきそう。客観性を大切にして。", health: "寒暖差が影響しやすいので、冷え対策はしっかりと。衣類や飲み物の温度に気を配って。" },
          { love: "相手に対して控えめな姿勢を保つことで、かえって関係が安定します。無理に動かず、静観が吉。", work: "裏方としての役割にスポットが当たりそう。陰ながらの貢献が評価に繋がるタイミングです。", health: "PC作業が続くなら、目の疲労に注意して意識的に休憩を取りましょう。" },
          { love: "心の中を整理整頓することで、恋愛に対する迷いや不安が少しずつ消えていく日。", work: "過去のミスや抜け漏れがないかを再確認すると、全体の精度がグッと上がります。", health: "早めに就寝し、睡眠の質を高めることで、体調の維持につながります。" },
          { love: "飾らない誠実な気持ちが相手に伝わりやすい日。素直な表現が二人の距離を縮めてくれます。", work: "あなたの努力が認められやすい日。これまでの積み重ねに自信を持って臨んで。", health: "深い呼吸を意識すると、緊張が和らぎ集中力も回復しやすくなります。" },
          { love: "細やかな気遣いが恋愛運を高めるカギとなる一日です。", work: "計画性が光る日。段取りよく進めることで効率もアップします。", health: "生活リズムを整えることで、体調が安定しやすくなります。" },
          { love: "相手の話を丁寧に聞くことで、信頼が深まりやすくなります。", work: "細部への配慮が評価される場面がありそうです。", health: "消化の良い食事が身体に優しく働きかけてくれます。" },
          { love: "礼儀正しい対応が好印象を与え、距離が縮まりそうです。", work: "資料の整理やチェックが成果を生むカギになります。", health: "デスク周りの整理整頓が気分のリフレッシュにつながります。" },
          { love: "慎重な行動が安心感を生み、関係が安定していきます。", work: "冷静な分析力が周囲に頼られる要素となります。", health: "軽い運動を習慣づけることで心身のバランスが取れます。" },
          { love: "誠実な気持ちを伝えることで、相手の心に響きやすくなります。", work: "慎重に物事を進める姿勢が信頼につながります。", health: "目の疲れに気づいたら、早めのケアを心がけましょう。" },
          { love: "整理された身だしなみが、異性からの好感度を上げてくれるでしょう。", work: "ルールや手順を丁寧に守ると良い結果を招きます。", health: "体調管理を見直すことで小さな不調が改善されやすくなります。" },
          { love: "小さな気遣いが、大きな信頼につながる場面があります。", work: "現状の見直しが成功への第一歩となる日です。", health: "ハーブティーや自然素材が心身を穏やかに整えてくれます。" },
          { love: "相手をサポートする姿勢が恋の発展を後押しします。", work: "実直な働きぶりが周囲から高く評価されるでしょう。", health: "無理のないスケジュールを意識して心にゆとりを持ちましょう。" },
          { love: "冷静な判断ができることで、恋のトラブルを未然に防げます。", work: "問題点の洗い出しに集中することで改善策が見えてきます。", health: "適度な睡眠が今日のコンディションを左右します。" },
          { love: "落ち着いた会話が良い関係を築くきっかけになります。", work: "効率化に取り組むと、作業全体がスムーズになります。", health: "朝の深呼吸が一日の集中力を高める助けとなります。" },
          { love: "自分の本音を言葉にすることで距離が縮まりそうです。", work: "誰かのフォローを丁寧に行うことで信頼が厚くなります。", health: "丁寧なスキンケアが心にも良い影響を与えるでしょう。" },
          { love: "相手の立場を思いやる言動が、好感を引き寄せます。", work: "細かい仕事でも手を抜かないことで、結果につながる日です。", health: "体を温めることで血流が改善し、疲れにくくなります。" }
        ]


      },
      libra: {
        name: "天秤座",
        images: ["zodiac/libra.png"],
        fortunes: [
          { love: "バランス感覚が活きる日。相手との対等な関係を大切にすると、自然と信頼が深まっていくでしょう。", work: "周囲との調整役として活躍できる日。冷静さと柔軟さが評価される場面が増えそうです。", health: "生活リズムを整えることで心も体も安定し、全体的に調子が上向いていきます。" },
          { love: "選択に迷いやすい日。自分一人で抱え込まず、信頼できる友人に相談するのが良い結果を導きます。", work: "対話や交渉が円滑に進みやすく、思いがけず良い条件を引き出せるかもしれません。", health: "肌の調子が気になる時。丁寧なスキンケアを取り入れると効果を実感できそうです。" },
          { love: "人間関係の調和を保てる力が働く日。些細なことも受け入れる柔軟さが恋愛運を後押ししてくれます。", work: "公正な判断が周囲に安心感を与え、信頼を得るきっかけとなるでしょう。", health: "凝り固まった体をストレッチなどでやわらげると、気分もリフレッシュできます。" },
          { love: "思いやりのある行動が好印象に繋がり、恋愛面でも前向きな変化が起こりやすくなります。", work: "チームでの協力がスムーズに進み、目標に向けた成果が出やすい一日です。", health: "生活習慣を見直し、規則正しい行動を意識することで体調が整いやすくなります。" },
          { love: "会話の中での気づきが、相手との関係をより深いものにしていくでしょう。", work: "公平な態度や姿勢が周囲に良い印象を与え、あなたの評価を高めてくれます。", health: "落ち着ける時間をつくって、ストレスを軽減させる工夫が運気の安定に繋がります。" },
          { love: "思いがけない出会いに恵まれる予感。柔軟な受け答えが良い流れを呼び込むでしょう。", work: "自由な発想での提案が評価される日。遠慮せず意見を出してみましょう。", health: "ウォーキングやストレッチなどの軽い運動が心身のバランスを整えてくれます。" },
          { love: "対等な関係性を意識することで、恋愛の波が落ち着き、安定した関係が築けそうです。", work: "交渉や相談ごとに強く、話の流れをうまく導くことができる日です。", health: "正しい姿勢を意識することで、心身の調和がとれ、集中力も上がります。" },
          { love: "ふとした会話の中に、恋愛に発展するきっかけや気づきが隠れていそうです。", work: "協力体制がスムーズに整い、チームとしての力が発揮できるチャンスです。", health: "睡眠の質を意識することで、翌日のパフォーマンスが大きく変わってきます。" },
          { love: "優しい言葉が相手の心に響き、恋愛運を高める助けとなる日です。", work: "公正な判断が職場で評価され、信頼度がアップするかもしれません。", health: "日光を浴びることで気分が明るくなり、内面からの活力も得られます。" },
          { love: "遠慮や曖昧な態度は誤解を招くかも。自分の意志はきちんと伝えることが大切です。", work: "調整役としての能力を発揮し、場を円滑に進める重要な役割を果たせそうです。", health: "軽い運動で血行を促進し、疲れが取れやすい体づくりを心がけましょう。" },
          { love: "冷静さを保つことで、恋愛のバランスを上手に維持することができそうです。", work: "情報をしっかり整理してから動くと、効率よく成果を出すことができます。", health: "パソコンやスマホの使用が多い日は、目薬や遠くを見る習慣でケアを忘れずに。" },
          { love: "慎重な言葉選びが、恋愛面でのトラブルを回避する鍵になります。", work: "対話を重ねる中で、新しい視点やアイデアに気づくことができるでしょう。", health: "静かな場所でゆっくり過ごす時間が、心身の疲れを癒してくれます。" },
          { love: "バランスの取れた対応が恋愛関係に安定感をもたらします。", work: "チームの潤滑油として活躍できる日。調整役に適しています。", health: "身体の左右バランスを整えるストレッチが効果的です。" },
          { love: "穏やかな微笑みが、周囲を惹きつける魅力となるでしょう。", work: "客観的な判断力が評価されやすい日です。", health: "姿勢を意識して行動することで体調も安定します。" },
          { love: "公平な視点で接することで、相手からの信頼を得られそうです。", work: "交渉ごとや仲裁役としての手腕が発揮されそうです。", health: "音楽やアートなど感性を刺激することでリフレッシュできます。" },
          { love: "優柔不断を脱して意志を伝えることが、恋の展開を促します。", work: "感情に流されず冷静な行動を取ることで成果につながります。", health: "人との調和を意識することが心の安定に寄与します。" },
          { love: "ロマンチックな演出が恋を加速させるカギになるかもしれません。", work: "美意識が問われる仕事で高評価を得られるかもしれません。", health: "部屋のインテリアを整えると精神的な充実感が得られそうです。" },
          { love: "周囲との調和を大切にする姿勢が、恋愛運を後押しします。", work: "公平な姿勢が周囲からの信頼につながります。", health: "深呼吸を意識して緊張を和らげましょう。" },
          { love: "意見のすれ違いも、冷静な対話が解決への近道となるでしょう。", work: "対人関係での気遣いが仕事のスムーズさを生み出します。", health: "穏やかな時間を過ごすことで回復力が高まります。" },
          { love: "一歩引いて相手を立てることで、関係性がより深まります。", work: "バランスのとれた進行管理が今日の成功のカギになります。", health: "目と耳のケアを意識することで感覚の疲れを防げます。" },
          { love: "パートナーとの価値観の共有が、今後の絆を強くします。", work: "複数の意見を調和させることで、良い方向へ導けるでしょう。", health: "軽いウォーキングが心身のリズムを整える助けになります。" },
          { love: "相手の話に耳を傾けるだけで関係が円滑になりそうです。", work: "礼儀正しい対応が取引先との関係を良好に保ちます。", health: "自然の音に触れることでストレスが軽減されやすくなります。" },
          { love: "美的センスを活かした装いが恋愛運を引き寄せてくれます。", work: "資料整理や美的プレゼン作成に力を入れると評価が高まります。", health: "優しい香りを取り入れると心身が癒されるでしょう。" },
          { love: "優しさとユーモアが恋の距離感を縮める力になります。", work: "誰かの相談に乗ることで、自身の仕事にも好影響がありそうです。", health: "体を冷やさない工夫が健康を守るポイントになります。" }
        ]


      },
      scorpio: {
        name: "蠍座",
        images: ["zodiac/scorpio.png"],
        fortunes: [
          { love: "深い絆が育まれる予感。真剣な会話を通じて、心の奥にある想いを分かち合えるタイミングです。", work: "集中力が高まり、難題にも果敢に立ち向かえる日。粘り強さが成果に直結します。", health: "体調は安定。免疫力が上がりやすく、疲れにくい一日となるでしょう。" },
          { love: "過去の恋に再び向き合う機会が訪れそう。未解決の感情に整理がつくかもしれません。", work: "秘密を守る姿勢が信頼につながる日。誠実さが仕事運を後押しします。", health: "腸内環境の改善がカギ。発酵食品などを積極的に取り入れてみてください。" },
          { love: "一途な想いが伝わりやすくなる時。勇気を出して自分の気持ちを表現してみましょう。", work: "洞察力が鋭くなる日。複雑な案件ほどあなたの力が求められます。", health: "冷えに注意。温かい飲み物や服装で内側から温めて。" },
          { love: "感情の深まりが関係をさらに強固にする日。相手との真摯な対話が鍵となります。", work: "集中力が持続し、困難な作業でも効率的に解決できるでしょう。", health: "しっかりと休むことが健康維持に直結。質の良い睡眠を意識して。" },
          { love: "信頼関係が深まるチャンス。率直な思いを伝えることで心の距離が縮まります。", work: "慎重な判断が良い結果につながる日。焦らず丁寧に進めましょう。", health: "栄養バランスの取れた食事が体調管理に大きく役立ちます。" },
          { love: "誠実な態度が相手の心に響く日。誤解が解けて関係が良好に向かうかもしれません。", work: "新しい視点から取り組むことで、問題の突破口が見えてきます。", health: "身体を温める食事や入浴が、調子を整えるカギとなるでしょう。" },
          { love: "深い理解と共感が恋愛を進展させます。相手の想いを丁寧に汲み取る姿勢が大切です。", work: "観察力が冴える日。見落としがちな点に気づき、成果を上げやすいでしょう。", health: "湯船でしっかり温まり、心身の疲れをやさしく癒しましょう。" },
          { love: "秘密を共有することで、相手との絆が一段と強くなりそうです。", work: "集中して業務に取り組むことで、予想以上の成果を得られる可能性があります。", health: "身体の冷えが気になる日。温かい格好や食事でしっかり対策を。" },
          { love: "言葉よりも行動が想いを伝える鍵に。小さな優しさが大きな信頼につながります。", work: "裏方での働きが目立ちやすく、地道な努力が評価される時期です。", health: "胃腸にやさしい食事を選ぶことで、内臓の調子も整いやすくなります。" },
          { love: "気持ちを押しつけず自然体で接することが、相手の信頼を得るコツです。", work: "慎重な進め方が成功を呼び込みます。焦らず丁寧さを忘れずに。", health: "無理は禁物。しっかり休息を取って体力回復を最優先に。" },
          { love: "心の奥を開いて対話することで、絆がさらに強くなるタイミング。", work: "計画的に物事を進めることで、ミスを防ぎ安定した成果を出せます。", health: "消化の良い食事で内臓をいたわり、体の巡りを整えましょう。" },
          { love: "感情のコントロールがカギとなる日。冷静な対話が信頼関係を築きます。", work: "細部に目を配る丁寧な姿勢が、周囲の信頼を集めるきっかけに。", health: "体をしっかり温めてリラックス。質の良い睡眠でコンディションを保ちましょう。" },
          { love: "深い共感が恋愛を一段と深めてくれる日です。", work: "集中力が高まり、難題に取り組むには最適な日です。", health: "内臓のケアを意識すると体調が整いやすくなります。" },
          { love: "秘密の共有が二人の距離を縮めるきっかけになります。", work: "水面下での準備や根回しが成果を呼びそうです。", health: "静かな環境で過ごすことで心がリセットされます。" },
          { love: "情熱的な言葉が、相手の心に火を灯すでしょう。", work: "長期的な視野での行動が信頼を築きます。", health: "血行を促す入浴が回復力を高めます。" },
          { love: "感情を素直に表現することで、信頼が生まれます。", work: "リサーチや分析が光る業務に向いています。", health: "免疫力を高める食材を意識して摂りましょう。" },
          { love: "相手の本音を見抜く直感が冴える日です。", work: "周囲に流されず、自分の考えを貫くと吉です。", health: "心の内を紙に書き出すと整理されてスッキリします。" },
          { love: "強い意志で関係をリードすると吉です。", work: "細部へのこだわりが評価を集めます。", health: "マッサージで深部のコリをほぐすと良いでしょう。" },
          { love: "駆け引きよりも誠実さが好結果を生みます。", work: "裏方の仕事でも丁寧に取り組む姿勢が大切です。", health: "夜のリラックスタイムが心身の疲労回復に有効です。" },
          { love: "ふとした優しさが相手に強い印象を与えるでしょう。", work: "成果を表に出すより、着実な積み重ねが実を結びます。", health: "香りのあるアロマで気分を落ち着かせましょう。" },
          { love: "内に秘めた想いを勇気を出して伝えてみましょう。", work: "核心を突いた意見がリーダーからの信頼を得る鍵に。", health: "水分を意識的に摂ることで代謝が促進されます。" },
          { love: "一対一の深い対話が絆を固く結びます。", work: "控えめな態度がかえって好印象となります。", health: "一人の時間が心を整えるヒントになります。" },
          { love: "気配りよりも真実の言葉が響く日です。", work: "情報の整理と分析に時間をかけると良い結果に繋がります。", health: "お腹を温める工夫で体調が安定します。" },
          { love: "情熱と冷静さをバランスよく使い分けましょう。", work: "見えない努力が後に大きな報酬として返ってきます。", health: "睡眠環境の見直しが体調改善につながるでしょう。" }
        ]


      },
      sagittarius: {
        name: "射手座",
        images: ["zodiac/sagittarius.png"],
        fortunes: [
          { love: "自由な発想が恋を盛り上げ、柔軟な対応が相手の心をつかみます。", work: "新しい挑戦がスムーズに進み、自然体で取り組むことで信頼を得られるでしょう。", health: "屋外での活動がリフレッシュになり、自然とエネルギーも回復します。" },
          { love: "旅先や移動中に思わぬ出会いのチャンスがありそう。新しい価値観に触れることで恋が動き出します。", work: "海外関連や語学、学びが成功の鍵を握り、視野が広がるほどチャンスも増えます。", health: "ストレスをため込まず、意識的に発散することが心身の安定につながります。" },
          { love: "おおらかな気持ちで接すると、自然と関係が円滑になります。小さなことにこだわらず前向きに。", work: "理想を現実に近づけるための第一歩を踏み出す好機。準備より行動が功を奏します。", health: "体を動かすことが活力を引き出し、気分のリフレッシュにも効果的です。" },
          { love: "冒険心が恋愛に新しい刺激を与え、マンネリから抜け出せるきっかけになります。", work: "これまでにない発想や計画が成功へ導いてくれそう。思い切りの良さがカギです。", health: "自然に触れる時間が心を整え、疲れた頭をクリアにしてくれます。" },
          { love: "心を開いて素直に話すことで、相手との関係が一気に進展しそうです。", work: "人との交流やコミュニケーションが、予想以上の仕事運を運んできてくれます。", health: "十分な睡眠が今日のパフォーマンスを高めるポイントになります。" },
          { love: "自分の意志を大切にして行動することで、恋愛運は一気に上昇します。", work: "チャンスが目の前に現れたときは即行動が吉。後回しにしない勇気が結果に。", health: "適度な運動が体力の維持につながり、気分も前向きになれるでしょう。" },
          { love: "楽観的な態度が恋を前向きに導き、笑顔が相手に安心感を与えます。", work: "新しい学びに前向きになることで、将来的な可能性がぐっと広がります。", health: "アウトドアで体を動かすことで、エネルギーが内側から満ちてきます。" },
          { love: "旅先での思いがけない出会いが、あなたの恋を大きく動かすかもしれません。", work: "自由な発想が高く評価される日。常識にとらわれず意見を述べてみましょう。", health: "腰に負担がかからない姿勢を意識し、無理のない行動を心掛けてください。" },
          { love: "積極的なアプローチが功を奏し、恋が大きく進展する兆しがあります。", work: "挑戦を恐れず、思い切って一歩を踏み出すとチャンスに恵まれます。", health: "ジョギングやウォーキングなどの有酸素運動が効果的な一日です。" },
          { love: "視野を広げることで新たな恋の可能性が見えてきます。", work: "国際的なテーマや情報発信が吉と出る日。グローバルな視点を忘れずに。", health: "新しい種類の運動に挑戦することで、体にも気分にも変化が訪れます。" },
          { love: "笑顔が魅力となり、自然と人を引き寄せる日。恋愛運が好調に動きます。", work: "迅速な判断が成功につながりやすく、迷いを捨てることがカギ。", health: "音楽を活用したリラクゼーションが、ストレス解消にとても効果的です。" },
          { love: "冒険心が新たな出会いを引き寄せ、人間関係に嬉しい変化が起こるかもしれません。", work: "固定観念を超える自由な発想が、あなたの価値を際立たせるでしょう。", health: "呼吸を整えて、心身のバランスをリセットする時間を持ちましょう。" },
          { love: "冒険心が恋のきっかけを生む日。思い切って行動して吉。", work: "新しい企画や挑戦に前向きに取り組むと成功の兆しあり。", health: "屋外での運動や散歩がリフレッシュにつながります。" },
          { love: "自由な気持ちを大切にすると、自然体の魅力が高まります。", work: "直感に従って行動すると良い結果につながるでしょう。", health: "姿勢を意識することで体の負担が軽減されます。" },
          { love: "遠距離恋愛に希望が見える出来事があるかもしれません。", work: "海外や外部との連携がカギになる場面がありそうです。", health: "体を動かすことで心も前向きになれるでしょう。" },
          { love: "視野を広げることで、これまで気づかなかった縁に出会えます。", work: "柔軟な発想が周囲に良い刺激を与える日です。", health: "新鮮な空気を吸う時間を意識して作ってみて。" },
          { love: "ストレートな愛情表現が良い結果をもたらすでしょう。", work: "知識をシェアすることで信頼と評価が高まります。", health: "無理のない範囲でストレッチや軽い運動を取り入れて。" },
          { love: "旅先での出会いや変化が恋の可能性を広げます。", work: "思い切ったアイデアが形になりやすい日です。", health: "旅や外出が気分転換に効果的です。" },
          { love: "好奇心が恋愛運を後押しする鍵になりそうです。", work: "チャレンジ精神が高く評価される機会があります。", health: "日光を浴びることで活力がわいてくる日です。" },
          { love: "フィーリング重視で相手と接すると好印象に。", work: "プレゼンや発表の場であなたの個性が光るでしょう。", health: "体を温める食事がコンディションの安定に役立ちます。" },
          { love: "ノリの良さが恋のチャンスをつかむ武器になります。", work: "広報や発信の仕事がはかどりやすい日です。", health: "冒険的な運動や新しい習慣を始めると良いでしょう。" },
          { love: "未来志向で語り合える相手との絆が深まります。", work: "冒険心を活かした行動が道を切り開きます。", health: "軽快な音楽とともに動くと心身のリズムが整います。" },
          { love: "理想を語ることで共感を得て、距離が縮まりそうです。", work: "先入観にとらわれず、自由な視点を持つことが重要です。", health: "深呼吸を取り入れてエネルギーをチャージしてみて。" },
          { love: "小さな冒険が二人の関係に新鮮さをもたらします。", work: "大局的な視点で全体を見渡すと良い判断ができるでしょう。", health: "自然とのふれあいが心身の調和をもたらします。" }
        ]


      },
      capricorn: {
        name: "山羊座",
        images: ["zodiac/capricorn.png"],
        fortunes: [
          { love: "堅実な関係を築けるチャンスの日。安心感を与える行動が信頼を深めます。", work: "地道な努力が報われ、信頼を得て職場での評価も上昇します。", health: "骨や関節のケアを意識して、適度な運動を取り入れましょう。" },
          { love: "真面目で誠実な姿勢が魅力として伝わる日。", work: "責任感の強さが高く評価され、昇進や信頼に繋がります。", health: "質の良い睡眠を意識することで、心身の疲労回復につながります。" },
          { love: "家庭的な一面が相手に好印象を与え、関係が温かく進展。", work: "長期的な視点で進めていた計画が一歩前進する予感です。", health: "寒さ対策を万全にし、冷えから体を守ることを意識しましょう。" },
          { love: "お互いの信頼を深めることで恋愛運が上昇する日。", work: "一歩ずつ着実に積み重ねてきた努力が形になります。", health: "心身の緊張を解きほぐすよう、ゆったり過ごす時間を大切に。" },
          { love: "誠実な対応が相手に安心感を与え、関係が円滑に。", work: "目標に向かってコツコツ努力することが成果へとつながります。", health: "偏りなく栄養を摂るよう、バランスの良い食事を意識して。" },
          { love: "新しい出会いに心がときめく可能性あり。焦らず自然体で接して。", work: "効率よく計画的に業務を進められる好調な日。", health: "無理のない範囲で体を動かし、健やかな状態をキープしましょう。" },
          { love: "真面目な姿勢が相手の心に響き、恋が動き出す予感。", work: "予定通りに物事が進みやすく、安心して取り組める日です。", health: "足腰を意識した運動やケアを取り入れると健康維持に役立ちます。" },
          { love: "小さな努力や思いやりが、大きな愛情へと育つ日。", work: "仕事の効率化が進み、スムーズな業務遂行が期待できます。", health: "早めに就寝することで体力回復が促され、翌日に備えられます。" },
          { love: "自分の気持ちに正直に向き合うことで、恋愛運が好転します。", work: "耐える力が試される場面もありますが、その姿勢が評価されます。", health: "筋力トレーニングなどで基礎体力を養うと良い日です。" },
          { love: "理性的な振る舞いが好印象を与え、信頼関係の構築に役立ちます。", work: "責任ある立場を任されるかもしれない日。気を引き締めて。", health: "栄養補給を意識して、疲れをため込まないよう心がけてください。" },
          { love: "相手への信頼を素直に伝えることで、関係がより深まるでしょう。", work: "細かな確認作業がミスを防ぎ、評価に繋がる大切なポイント。", health: "関節のケアにストレッチを取り入れると、不調予防に役立ちます。" },
          { love: "静かな環境で過ごす時間が恋愛に癒しをもたらします。", work: "これまでの地道な努力が実を結び、報われる瞬間が訪れます。", health: "足元の冷えを防ぎ、温かくしてリラックスすることが大切です。" },
          { love: "真面目な姿勢が恋愛面での信頼を得る日です。", work: "計画的な行動が大きな成果につながります。", health: "体を冷やさない工夫が体調維持に役立ちます。" },
          { love: "落ち着いた会話が関係を深める鍵になります。", work: "責任あるポジションで実力を発揮できそうです。", health: "無理をせずに休息を優先することが回復の鍵です。" },
          { love: "長期的な視点で恋を育む意識が高まりそうです。", work: "細かな確認作業が信頼度を上げるポイントです。", health: "食事のバランスを見直すと体調が整いやすくなります。" },
          { love: "責任感のある行動が好印象につながります。", work: "努力の積み重ねが実を結ぶ兆しがあります。", health: "疲れが溜まりやすいので睡眠時間をしっかり確保して。" },
          { love: "誠実さが相手の心に響く日。", work: "時間をかけた準備が成功の鍵となります。", health: "静かな時間を過ごすことで心身が落ち着きます。" },
          { love: "控えめなアプローチがかえって効果を発揮します。", work: "コツコツとした作業に集中すると良い結果が出ます。", health: "軽い運動が気分転換に効果を発揮します。" },
          { love: "恋の進展には忍耐と努力が必要となるかもしれません。", work: "長期的なプロジェクトに取り組むのに適した日です。", health: "水分補給をこまめに行うと集中力が上がります。" },
          { love: "過去の経験が今の恋に活かされるチャンスがあります。", work: "周囲の期待に応えることで存在感が高まります。", health: "体のコリを解消するストレッチを取り入れてみて。" },
          { love: "現実的な価値観を共有できる相手との縁が深まります。", work: "地道な努力が目に見える形で評価される日です。", health: "腰回りのケアが快適な一日に繋がります。" },
          { love: "一歩引いた視点で関係性を見直すと気づきがあるでしょう。", work: "緻密なスケジュール管理が成果を引き寄せます。", health: "姿勢を正すことで疲れにくくなります。" },
          { love: "地に足のついた恋愛が運を引き寄せます。", work: "責任感を持って仕事に向き合う姿勢が評価されます。", health: "目の疲れを感じたら意識的に休憩を入れましょう。" },
          { love: "真剣な気持ちをストレートに伝えると誠意が伝わります。", work: "的確な判断がチーム全体の成功につながります。", health: "ぬるめのお風呂にゆっくり浸かると疲労回復が進みます。" }
        ]


      },
      aquarius: {
        name: "水瓶座",
        images: ["zodiac/aquarius.png"],
        fortunes: [
          { love: "新しい出会いに恵まれそうな日。互いの価値観を尊重し合うことが恋を育てます。", work: "独創的なアイデアが周囲に評価され、活躍の場が広がります。", health: "知的好奇心を刺激することで心身のリズムが整います。" },
          { love: "友情が恋愛に変わる兆し。親しみやすさが好印象を与えるでしょう。", work: "人脈づくりに最適な日。交流からチャンスが生まれそう。", health: "デジタル機器の使用を控え、目の休息を意識して過ごして。" },
          { love: "何気ない会話の中に恋のチャンスあり。柔軟に受け止める姿勢が大切です。", work: "最新のトレンドや技術を積極的に吸収して成果に繋げましょう。", health: "眠りの質を高める工夫が、心身の回復力を引き出します。" },
          { love: "自由な感性が恋愛に刺激をもたらす時。型にとらわれない関係が育ちます。", work: "新たな企画や取り組みが順調に進展しやすいタイミング。", health: "気ままに過ごす時間が心の余裕を生み、調子を整えます。" },
          { love: "独自の感性を活かすことで魅力が高まる日。相手の気持ちにも敏感に。", work: "発想のユニークさが強みとなり、周囲を驚かせる成果に。", health: "栄養バランスの取れた食事でエネルギーを維持しましょう。" },
          { love: "未知の恋に踏み出す勇気が幸運を呼ぶ日。変化を恐れず行動して。", work: "チームでの連携が良好になり、作業も円滑に進みます。", health: "ストレスを抱え込まず、自分なりの発散方法を試してみて。" },
          { love: "個性が光る魅力的な日。自然体でいることで恋愛が進展します。", work: "直感やひらめきが大きな成果を生む日となりそうです。", health: "新しい習慣を取り入れることで心身のバランスが整います。" },
          { love: "友情から始まる恋が進展する兆し。信頼が愛情へと変わる可能性あり。", work: "自分らしい働き方が評価される日。自由な発想で成果を。", health: "空を見上げるような気分転換が心に余裕をもたらします。" },
          { love: "変化を受け入れる姿勢が新たな恋の扉を開きます。", work: "トレンドを意識した行動が成功に結びつく鍵となる日。", health: "スマホ時間を減らして心身をリセットすると良いでしょう。" },
          { love: "異なる価値観を理解し合うことで関係が深まります。", work: "独自の発想や切り口が認められ、活躍のチャンスに恵まれそう。", health: "考えを整理することで精神的にもリフレッシュできます。" },
          { love: "共通の趣味を通じて自然な形で恋が芽生える日。", work: "グループ内での調和が取れ、協力関係がスムーズに。", health: "肩まわりのストレッチをすると気持ちもスッキリしそうです。" },
          { love: "自分らしさを大切にすることで、恋愛運が一段と高まります。", work: "自由な発想が形になり、想像以上の成果が期待できる日。", health: "模様替えや環境の変化が気分転換になり運気を引き上げます。" },
          { love: "ユニークな視点が相手に新鮮な印象を与える日です。", work: "革新的なアイデアが評価されやすい日です。", health: "デジタルデトックスが心のリフレッシュにつながります。" },
          { love: "自由な愛の形を尊重することで絆が深まります。", work: "自由な発想が仕事に良い刺激を与えます。", health: "気分転換に新しい音楽や映画を取り入れてみて。" },
          { love: "友情から恋に発展するチャンスが訪れるかもしれません。", work: "周囲との情報共有が新しい展開を呼び込む鍵に。", health: "首や肩のケアを意識すると疲労が和らぎます。" },
          { love: "自分らしくいることで自然と惹かれ合う縁があります。", work: "チームワークより個人の裁量が活きる場面が多くなりそう。", health: "深呼吸で頭をすっきりさせる時間を作ってください。" },
          { love: "未来のビジョンを共有できる相手との関係が進展します。", work: "オンラインでのやり取りがスムーズに進むでしょう。", health: "寝具の見直しが質の良い睡眠を促します。" },
          { love: "アイデア豊かな会話が距離を縮める鍵になります。", work: "独自の切り口で提案をすると注目を集めます。", health: "自分のペースで運動することで心身が整いやすくなります。" },
          { love: "共通の趣味を通じて恋が芽生える可能性が高まります。", work: "常識にとらわれない視点が問題解決の糸口に。", health: "思考の整理に日記やメモが役立ちます。" },
          { love: "気負わないやりとりが自然な親しみを生み出します。", work: "新しい技術に触れることでモチベーションが上がります。", health: "適度な孤独時間が心を落ち着かせてくれます。" },
          { love: "風通しの良い関係性が恋愛運を後押しします。", work: "直感的な判断が成功につながる場面があります。", health: "水分補給と共にミネラルの摂取も意識してみて。" },
          { love: "理屈よりも感覚を大切にしたアプローチが吉。", work: "変化の多い一日ですが、柔軟に対応する力が活かされます。", health: "好奇心を満たすことがストレス緩和につながります。" },
          { love: "ネットやSNSでの交流が思わぬ出会いにつながる予感。", work: "社内外のネットワークづくりがチャンスを呼びます。", health: "カフェインの摂取量を調整すると睡眠の質が安定します。" },
          { love: "今までとは違うタイプに惹かれるかもしれません。", work: "視野を広く持つと新しい可能性に気づけそうです。", health: "未来を考える時間が活力を与えてくれそうです。" }
        ]


      },
      pisces: {
        name: "魚座",
        images: ["zodiac/pisces.png"],
        fortunes: [
          { love: "穏やかな優しさが相手の心に響く日。そばにいるだけで癒しの存在になれそうです。", work: "芸術的な感性が輝き、独自のアイデアが評価されやすいタイミング。", health: "こまめな水分補給と心を緩める時間が心身を整えます。" },
          { love: "感情が豊かに溢れやすい日。素直な気持ちで向き合うと関係が一歩進みます。", work: "理想に向けての最初の一歩を踏み出すには絶好のチャンスです。", health: "ぬるめの入浴やお気に入りの音楽で心をゆるめましょう。" },
          { love: "空想力を活かしたロマンチックなアプローチが効果的な日です。", work: "直感的に動くことで物事がスムーズに運びやすくなります。", health: "余裕を持った行動が心にゆとりをもたらします。" },
          { love: "感受性が高まる日。深く通じ合う会話で愛情が深まりやすくなります。", work: "ひらめきに恵まれ、独創的な発想が成果に繋がるタイミング。", health: "意識してリラックスすることで心身の調和が取れます。" },
          { love: "共感力が高まり相手との距離が縮まる日。", work: "地道な計画に沿って行動すると良い結果を得られそうです。", health: "しっかりと休養をとることで回復力が高まります。" },
          { love: "夢のような恋に期待できる日。前向きな想像が現実を動かす鍵に。", work: "集中して取り組む姿勢が周囲にも良い印象を与えます。", health: "軽く体を動かすことでリフレッシュできます。" },
          { love: "空気がロマンチックに包まれ、素直な思いが伝わりやすいタイミング。", work: "直感に従って動くことで、自然と流れが良くなります。", health: "水を多めに摂取して体内環境を整えましょう。" },
          { love: "夢や希望を語ることで心の距離が縮まりやすくなります。", work: "直感に基づくインスピレーションが成果を呼びます。", health: "好きな香りで気持ちを切り替え、前向きに整えて。" },
          { love: "深い共感が恋を進展させる鍵になる日です。", work: "感情を表現に活かすと、相手にも良い影響を与えられそう。", health: "目を閉じて深呼吸する時間がリセットのきっかけになります。" },
          { love: "相手の優しさに包まれる日。安心感が二人の絆を強めてくれます。", work: "協調性を発揮することで大きな成果につながる日です。", health: "ぬるめのお風呂で体と心をゆっくり温めましょう。" },
          { love: "心の声を信じて行動すると、恋が自然と実を結びそうです。", work: "柔軟な発想が求められ、あなたの魅力が発揮される場面に。", health: "音楽を通して心を癒やすことで、バランスが取れてきます。" },
          { love: "芸術や美しいものに触れることで恋の運気が上昇する日。", work: "創作活動に打ち込むと新たな才能が開花する可能性大。", health: "深呼吸を意識して、自律神経のバランスを整えてみて。" },
          { love: "直感を信じることで素敵な恋の予感が高まります。", work: "クリエイティブな仕事で才能が発揮されやすい日です。", health: "水に触れることで心が落ち着く時間が得られそうです。" },
          { love: "優しさが相手の心を動かす日です。", work: "感性を活かした発想が評価されます。", health: "リラックスできる音楽が心身のバランスを整えます。" },
          { love: "感情を丁寧に伝えることで理解が深まります。", work: "曖昧な状況でも柔軟に対応できる力が活きるでしょう。", health: "目の疲れを感じたら温かいタオルで癒してみて。" },
          { love: "ロマンチックな出来事が起きやすい日となるでしょう。", work: "協調性を大切にすることでチームが円滑に動きます。", health: "無理な頑張りよりも休息を大切にしましょう。" },
          { love: "思いやりのある行動が恋愛運を引き寄せます。", work: "理想と現実のバランスを取る努力が必要です。", health: "夢を記録することで心の整理がつきやすくなります。" },
          { love: "無理に合わせず、自分の気持ちに正直になることが大切です。", work: "自分のペースで着実に進めると安定感が増します。", health: "好きな香りで気持ちを落ち着けてみましょう。" },
          { love: "相手の立場に立った言葉が信頼を築きます。", work: "直感で動くよりも計画を立てることが重要です。", health: "芸術に触れることで精神が浄化される日です。" },
          { love: "心の奥の想いに気づくきっかけが訪れるかもしれません。", work: "優しい対応が職場の雰囲気を明るくします。", health: "水分を意識的に摂ることで代謝が促進されます。" },
          { love: "幻想にとらわれず現実を見つめることで関係が安定します。", work: "相手の意見を尊重する姿勢が信頼を呼びます。", health: "感情の波に流されず、静かな時間を確保してください。" },
          { love: "思い出の場所に訪れることで恋が前進します。", work: "人の気持ちを察する能力が役立つ場面があります。", health: "自然とのふれあいが心を癒す効果を発揮します。" },
          { love: "芸術的な活動を通じて新たな出会いがありそうです。", work: "丁寧な説明やプレゼンが効果的な成果を生みます。", health: "足元を温めることで体全体が整いやすくなります。" },
          { love: "包み込むような優しさが恋愛成就の鍵となります。", work: "一歩引いて全体を見る視点が成功を導きます。", health: "静かに深呼吸することで自律神経が整いやすくなります。" }
        ]
      }

    };


    const zodiacButtonsContainer = document.getElementById('zodiacButtons');
    const resultDiv = document.getElementById('result');

    // 12星座のキー順リスト
    const zodiacKeys = Object.keys(zodiacData);

    // 今日の日付から0～11のindexを算出（0-23で24パターンローテーション）
    function getDayIndex() {
      const today = new Date();
      return (today.getDate() - 1) % 24;  // 24パターン対応
    }


    // ボタン作成とクリックイベント設定
    zodiacKeys.forEach(key => {
      const btn = document.createElement('button');
      btn.className = 'zodiac-button';
      btn.type = 'button';

      // ボタン内に画像＋星座名
      btn.innerHTML = `<img src="${zodiacData[key].images[0]}" alt="${zodiacData[key].name}" />${zodiacData[key].name}`;

      btn.addEventListener('click', () => {
        // 選択解除
        document.querySelectorAll('.zodiac-button.selected').forEach(el => el.classList.remove('selected'));
        // 選択状態に
        btn.classList.add('selected');
        gtag('event', 'select_zodiac', {
          zodiac: key,
          zodiac_name: zodiacData[key].name
        });
        showFortune(key);
      });

      zodiacButtonsContainer.appendChild(btn);
    });
    function showFortune(zodiacKey) {
      const data = zodiacData[zodiacKey];
      const dayIndex = getDayIndex();
      const fortune = data.fortunes[dayIndex];
      const image = data.images[0];  // 1枚固定

      resultDiv.innerHTML = `
    <h2>今日の${data.name}</h2>
    <img src="${image}" alt="${data.name}" class="zodiac-img" />
    <div class="fortune-section"><strong>恋愛運:</strong> ${fortune.love}</div>
    <div class="fortune-section"><strong>仕事運:</strong> ${fortune.work}</div>
    <div class="fortune-section"><strong>健康運:</strong> ${fortune.health}</div>
  `;
      // Share
      let snippetText = ("恋愛運:" + fortune.love + " 仕事運:" + fortune.work + " 健康運:" + fortune.health).substring(0, 50) + "...";
      snippetText = snippetText.replace(/^【(正位置|逆位置)】\s*/g, '').replace(/^(正位置|逆位置)\s*/g, '');
      const shareText = encodeURIComponent("#" + data.name + " #太陽星座 #星座占い \n" + snippetText + " | 占いアルカノヴァ");
      const shareUrl = encodeURIComponent("https://evitadesignart.com/horo/" + window.location.pathname.split('/').pop());
      const shareHtml = `
        <div id="result-share-buttons" style="margin-top: 20px; display: flex; justify-content: center; gap: 10px;">
        <a href="https://twitter.com/intent/tweet?url=${shareUrl}&text=${shareText}" class="sns-x" title="X (Twitter)でシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#000;color:#fff;text-decoration:none;"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=${shareUrl}" class="sns-fb" title="Facebookでシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#1877F2;color:#fff;text-decoration:none;"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://line.me/R/msg/text/?${shareText}%20${shareUrl}" class="sns-line" title="LINEでシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#06C755;color:#fff;text-decoration:none;"><i class="fa-brands fa-line"></i></a>
        <a href="https://bsky.app/intent/compose?text=${shareText}%20${shareUrl}" class="sns-bsky" title="Blueskyでシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#0085ff;color:#fff;text-decoration:none;"><i class="fa-brands fa-bluesky"></i></a>
        </div>
      `;
      resultDiv.innerHTML += shareHtml;


      // スクロールして結果表示欄へ移動
      document.getElementById('result').scrollIntoView({ behavior: 'smooth' });
    }

  </script>
</div>

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
      class="sns-x" title="X (Twitter)でシェア">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/horo/<?php echo basename($_SERVER['PHP_SELF']); ?>" class="sns-fb" title="Facebookでシェア">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
        <a href="https://line.me/R/msg/text/?<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/' . basename($_SERVER['PHP_SELF'])); ?>"
      class="sns-line" title="LINEでシェア">
      <i class="fa-brands fa-line"></i>
    </a>
        <a href="https://bsky.app/intent/compose?text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/' . basename($_SERVER['PHP_SELF'])); ?>"
      class="sns-bsky" title="Blueskyでシェア">
      <i class="fa-brands fa-bluesky"></i>
    </a>
  </div>
  <!-- SNS Share Buttons End -->
<!-- GA4 Share, Translate & Custom Event Tracking -->
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

  document.addEventListener('click', function(e) {
    if (typeof gtag !== 'function') return;
    
    var btn = e.target.closest ? e.target.closest('button, a, .card, .tarot-card, .zodiac-btn') : e.target;
    if (!btn) return;

    var btnId = btn.id || '';
    var btnText = (btn.innerText || btn.textContent || '').trim();
    var onclickAttr = btn.getAttribute ? (btn.getAttribute('onclick') || '') : '';

    if (
      btnId === 'drawBtn' || 
      btnId === 'drawButton' || 
      btnId === 'draw-btn' || 
      onclickAttr.indexOf('show') !== -1 || 
      btnText.indexOf('カードを引く') !== -1 || 
      btnText.indexOf('運勢を占う') !== -1 || 
      btnText.indexOf('診断する') !== -1 || 
      btnText.indexOf('占う') !== -1
    ) {
      if (btnText.indexOf('占い一覧') === -1) {
        gtag('event', 'draw_card', {
          'event_category': 'Fortune',
          'event_label': document.title,
          'button_text': btnText.substring(0, 30),
          'page_path': window.location.pathname
        });
      }
    }
    else if (
      btnId === 'retryBtn' || 
      btnId === 'resetBtn' || 
      btnText.indexOf('もう一度') !== -1 || 
      btnText.indexOf('リセット') !== -1
    ) {
      gtag('event', 'retry_fortune', {
        'event_category': 'Fortune',
        'event_label': document.title,
        'page_path': window.location.pathname
      });
    }
    else if (
      btn.classList.contains('zodiac-btn') || 
      (btn.parentElement && btn.parentElement.id === 'zodiacButtons')
    ) {
      gtag('event', 'select_zodiac', {
        'event_category': 'Zodiac',
        'zodiac_name': btnText.substring(0, 20),
        'page_path': window.location.pathname
      });
    }
    else if (btn.classList.contains('nav-btn-gold') || btnText.indexOf('占い一覧') !== -1) {
      gtag('event', 'click_navigation', {
        'event_category': 'Navigation',
        'link_name': btnText.substring(0, 30),
        'link_url': btn.href || '',
        'page_path': window.location.pathname
      });
    }
  }, true);
});
</script>
</body>

</html>




