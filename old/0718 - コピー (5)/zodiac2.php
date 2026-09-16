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
  <title>無料月星座占い｜内面の性格と今日のメッセージをチェック | 占いアルカノヴァ</title>
  <meta name="description"
    content="月星座から、今日の内面や感情に関するメッセージを無料で診断。12星座の月星座ごとに、心の状態や潜在意識にアプローチするヒントが得られます。素の自分を知る占いを毎日チェック！" />
  <!-- OGP（Open Graph Protocol） -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="無料月星座占い｜内面の性格と今日のメッセージをチェック" />
  <meta property="og:description"
    content="月星座から、今日の内面や感情に関するメッセージを無料で診断。12星座の月星座ごとに、心の状態や潜在意識にアプローチするヒントが得られます。素の自分を知る占いを毎日チェック！" />
  <meta property="og:url" content="https://evitadesignart.com/zodiac2.php" />
  <meta property="og:site_name" content="Evita Designart" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="無料月星座占い｜内面の性格と今日のメッセージをチェック" />
  <meta name="twitter:description" content="感情の波や本当の自分を知るヒントを、月星座でチェック！12星座別に内面を読み解く無料占い。" />

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "無料月星座占い｜内面の性格と今日のメッセージをチェック",
  "url": "https://evitadesignart.com/zodiac2.php", 
  "description": "月星座から、あなたの今日の内面や感情の傾向を無料で診断。12星座別に、心の状態や潜在意識にアプローチするヒントを毎日チェックできます。",
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
        "name": "月星座とは何ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "月星座とは、あなたが生まれた瞬間に月が位置していた星座のことです。太陽星座が「表面の性格」を示すのに対して、月星座は「内面の性格」や「感情の反応」を表します。"
        }
      },
      {
        "@type": "Question",
        "name": "月星座占いはどんな人に向いていますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "自分の本音や感情のクセを知りたい人、人間関係のモヤモヤの原因を探りたい人、太陽星座ではピンとこなかった方におすすめです。"
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
    }

    h1 {
      text-align: center;
      text-shadow: 0 0 6px #aabbffcc;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      text-align: center;
      width: 100%;
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

    .zodiac-buttons {
      text-align: center;
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

    .zodiac-img {
      width: 100%;
      max-width: 300px;
      margin: 20px auto;
      display: block;
      border-radius: 12px;
      /*  box-shadow: 0 0 12px #6677ccaa;*/
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
</head>

<body>
  <header>
    <a href="https://evitadesignart.com/tarotte_list.php">
      <h1>月星座占い<br>今日のメッセージ</h1>
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
    <img src="img/fv_zodiac2.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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
  <a href="https://evitadesignart.com/tarotte_list.php#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
  <a href="https://evitadesignart.com/tarotte_list.php#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
  <a href="https://evitadesignart.com/tarotte_list.php#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
</div>
  <p style="text-align:center;">下の月星座ボタンから選んで、<br class="md:hidden">今日の内面メッセージをチェック！<br>
    <a href="https://evitadesignart.com/tarotte_list.php#horoscope"><button>生年月日から<br class="md:hidden"> 月星座を調べる</button></a>
  </p>

  <div class="zodiac-buttons" id="zodiacButtons"></div>

  <div id="result" class="result">月星座を選んでください。</div>
  <p style="max-width:600px; margin: 1em auto; line-height:1.6;">
    <strong>月星座とは？</strong><br>
    月星座は、あなたが生まれた瞬間に月が位置していた星座を指します。<br>太陽星座が「表面の性格」や「社会的な顔」を示すのに対して、月星座は「内面の性格」や「感情の反応」「心の奥の欲求」を表します。<br>リラックスしたときの素の自分を知るヒントになる重要な要素です。
  </p>

  <div style="background:#112244;padding:1em;border-radius:8px;margin-bottom:1em;">
    <strong style="color:#aabbff;">こんな人におすすめ：</strong><br>
    <ul style="list-style:none; padding:0; margin:0;">
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 自分の「本音」や<br class="md:hidden">「本当の気持ち」を知りたい</li>
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 人間関係で感じる<br class="md:hidden">モヤモヤの原因を探りたい</li>
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 太陽星座では<br class="md:hidden">ピンとこなかった方</li>
      <li style="padding-left:1.2em; text-indent:-1.2em;">・ 無意識の行動や感情のクセを<br class="md:hidden">見直したい方</li>
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
  <a href="https://evitadesignart.com/tarotte_list.php#menu-links" class="nav-btn-gold">星座＆タロット</a>
  <a href="https://evitadesignart.com/tarotte_list.php#tarot-menu" class="nav-btn-gold">タロット</a>
  <a href="https://evitadesignart.com/tarotte_list.php#zodiac-menu" class="nav-btn-gold">星座</a>
  <a href="https://evitadesignart.com/tarotte_list.php#color-menu" class="nav-btn-gold">その他</a>
  <a href="https://evitadesignart.com/tarotte_list.php#horoscope" class="nav-btn-gold">アセンダント診断</a>
</div>
<br><a href="https://evitadesignart.com/tarotte_list.php" style="display: block; width: 100%; text-align: center;"><button style="width: 100%; max-width: 600px;">占い一覧はコチラ</button></a>
  </p>

  <script>
    const moonZodiacData = {
      aries: {
        name: "牡羊座",
        image: "zodiac/aries.png",
        messages: [
          "直感を信じて動くことで、思いがけない良い結果やチャンスに恵まれる日です。普段なら迷ってしまう場面でも、今日は心の声に従うことで運が味方してくれるでしょう。小さな判断一つが、大きな成功や喜びへとつながる日です。",
          "内側からエネルギーが湧き上がり、何か新しいことを始めるには最高のタイミングです。少しの勇気でその行動が、大きな成果や喜びにつながるかもしれません。自分の情熱を信じて挑戦すると、未来が開ける兆しがあります。",
          "自分の意志や信念を大切にしながら、一歩ずつ確実に行動していきましょう。焦らず、確実に積み重ねることが、後に大きな成功への土台となります。小さな努力が積もって、想像以上の成果を生む日になるでしょう。",
          "あなたの素直で情熱的な姿勢が周囲に伝わり、信頼や絆をより深めてくれます。誠実な行動や思いやりが、人との関係をさらに良いものに変えてくれるでしょう。今日の行動が、長く続く信頼関係を築く鍵となります。",
          "大胆に行動することが運を引き寄せるきっかけとなるでしょう。迷わず進むことで、想像以上のチャンスに巡り合う可能性があります。積極性と勇気が、新しい扉を開く大切なポイントです。",
          "自分の可能性を信じることで、これまで気づかなかった新しい扉が開かれそうです。ポジティブな心が、新しい出会いや発見を引き寄せます。信じる力が未来を形作る日になるでしょう。",
          "今日のあなたは、人を惹きつけるオーラに包まれています。自然体でいるだけで周囲から注目され、サポートを得やすくなるでしょう。魅力的な笑顔や態度が、人間関係をさらに豊かにします。",
          "思いついたアイデアや直感は、メモしておくと後々大きなヒントになります。小さな気づきが大きな成果に繋がる日です。考えを整理し、具体的に行動に移すと運気がさらにアップします。",
          "苦手意識のあったことにも、意外とスムーズに取り組めるかもしれません。成長の兆しを感じやすい一日です。自信を持って挑戦すると、成功体験があなたをさらに強くします。",
          "周囲との会話や偶然の出会いから、未来を広げるきっかけが訪れる可能性があります。積極的にコミュニケーションを取ってみましょう。新しい発見が日常をより豊かにしてくれます。",
          "行動することで停滞していた流れが一気に動き出します。勇気ある一歩が新たな道を切り開くでしょう。変化を恐れず挑戦することで、人生に新たな風が吹き込む日です。",
          "自分自身を信じ、心から楽しむ気持ちを大切にすれば、今日一日が特別な時間として記憶に残るでしょう。喜びや満足感を感じることで、周囲にもポジティブな影響を与えられます。"
        ]
      },

      taurus: {
        name: "牡牛座",
        image: "zodiac/taurus.png",
        messages: [
          "心の安定を意識して過ごすことで、日々の中に豊かさや安心感を感じられるでしょう。心が落ち着くことで、思考や判断もクリアになり、穏やかな一日を過ごせます。小さな安心感が大きな幸福感を生む日です。",
          "感謝の気持ちを大切にすることで、人との絆が深まり運気も自然と高まっていきます。小さな『ありがとう』が大きな信頼関係を築くカギとなります。心からの感謝があなたに幸運をもたらすでしょう。",
          "日常の中にある小さな幸せをじっくりと噛みしめると、心がじんわりと満たされます。何気ない瞬間に目を向けることで、幸運の種を見つけやすくなります。日常の中に喜びを見つける力が今日の幸運を引き寄せます。",
          "自分が心から安心できる環境こそが、今のあなたにとって最大のエネルギー源になります。居心地の良さを大切にすることで、活力も自然と湧いてくるでしょう。落ち着いた時間が心身を整えるカギとなります。",
          "周囲に流されず、自分のペースをしっかり守ることで安定した運気を保つことができます。焦らず、着実に物事を進めることが今日のポイントです。ゆっくりでも確実な歩みが未来の安心を生みます。",
          "美味しい食事や香り、音楽など五感で楽しめる時間が、心身のリフレッシュに繋がります。ゆったりとした時間を取ることで、明日への活力が増すでしょう。感覚を大切にすることが今日の幸運を引き寄せます。",
          "心が安らぐ瞬間を意識的に作ることで、日々のストレスを軽減できます。自然や静かな場所に身を置くのもおすすめです。穏やかな時間が心の安定を後押しします。",
          "大切な人に自分の気持ちを伝えることで、より深い信頼や絆が育まれます。優しさはあなた自身の運気も上げてくれるでしょう。思いやりが巡り巡って幸運を呼び込みます。",
          "身近な幸せを見つけることで、心に満足感が広がります。小さな喜びを大切にすると、より豊かな一日を過ごせます。小さなことへの感謝が運をさらに高めます。",
          "自分のペースを守りつつ、無理せず行動することが、安定した運気と心の余裕を生みます。焦りは禁物です。日々のゆとりが幸福感を強めます。",
          "美しいものや心地よいものに触れる時間を意識すると、心身のバランスが整いやすくなります。感性を大切に過ごしてみましょう。芸術や自然が心に活力を与える日です。",
          "今日一日を穏やかに楽しむことで、内面からの満足感と幸せが得られるでしょう。小さな喜びを大切にすると、日常がより豊かになります。心の余裕がさらに良い運気を呼び込みます。"
        ]
      },

      gemini: {
        name: "双子座",
        image: "zodiac/gemini.png",
        messages: [
          "情報や会話の中に幸運のヒントが隠れている日。積極的に話すことでチャンスが広がります。日常の何気ない会話から意外なアイデアやチャンスが生まれるかもしれません。思いついたことはメモして、後で活かすと良いでしょう。",
          "軽やかに動き回ることで、新しい出会いや思わぬチャンスがあなたの元へ舞い込むでしょう。外出や交流の機会を大切にすると、運気も自然にアップします。行動範囲を広げることが新しい縁を引き寄せます。",
          "新しく得た知識や学びが、あなたの感性を刺激し新たな視野を切り開いてくれます。学びを行動に活かすことで、周囲からの信頼も高まります。情報を実践に繋げることが幸運のカギです。",
          "好奇心を持って行動することで、思いがけない発見や刺激的な体験に繋がるでしょう。新しいことに挑戦する勇気が、未来を豊かにします。臆せず一歩踏み出すことが大切です。",
          "人との活発な交流の中に、今後の幸運を左右する大きなヒントが隠れている可能性があります。友人や同僚との会話を楽しみましょう。コミュニケーションの質が運気を左右します。",
          "柔軟な発想と臨機応変な行動が、今日の運気を大きく引き寄せるカギとなるでしょう。思い切ったアイデアを試すのも吉です。状況に応じた柔軟な対応が成功を導きます。",
          "興味のあることに積極的に取り組むと、新たな学びや出会いが広がります。今日の経験は将来のヒントになります。挑戦は小さくても価値があります。",
          "会話の中で聞いた情報をメモに残すと、後で大きな価値に変わる可能性があります。気づきを逃さないようにしましょう。記録することでチャンスが増えます。",
          "社交の場では、自分の意見を柔らかく伝えることで、良い関係を築きやすくなります。適度な主張が運気を後押しします。言葉選びを意識するとさらに良い結果に繋がります。",
          "今日のあなたは好奇心旺盛。小さな冒険や体験でも、新しい発見や喜びを得られるでしょう。積極的に動くことで日々が充実します。",
          "軽やかに行動することで、停滞していた物事もスムーズに進みやすくなります。動くことでチャンスが巡ってきます。行動する勇気が未来を切り開きます。",
          "自分の柔軟性を活かして、変化を楽しむ姿勢が幸運を呼びます。思いがけない展開も前向きに受け入れましょう。柔軟さが新しい可能性を広げます。"
        ]
      },

      cancer: {
        name: "蟹座",
        image: "zodiac/cancer.png",
        messages: [
          "大切な人との絆を深めるのに最適なタイミング。丁寧な言葉や行動が心の距離を近づけてくれそうです。会話やふとした気遣いが信頼関係をさらに強めます。小さな心配りや共感を示すことで、関係はより一層深まります。",
          "心の声に静かに耳を傾けることで、新たな気づきや直感が訪れます。自分に正直になる時間を持つことが、今日のあなたに重要な気づきをもたらすでしょう。心の内側を観察することで、将来へのヒントも見えてきます。",
          "家庭的で落ち着ける時間を意識的に取ると、心の疲れが癒やされバランスが整っていくでしょう。安心できる空間で過ごすことが心身の回復につながります。温かい空間でのひとときが、日常の緊張も和らげてくれます。",
          "感情を素直に表現することで、周囲との関係がより良好になります。無理に抑え込まず、本音で向き合うことで信頼が深まります。率直な気持ちを伝えることで、周囲の理解も高まります。",
          "あなたの優しさや気配りが自然と周囲に伝わり、信頼と運気を引き寄せる力になります。小さな思いやりが大きな絆を生むでしょう。心からの行動が人々の心を動かし、幸運を呼びます。",
          "頑張る自分にご褒美をあげる時間を持つことで、心に余裕が生まれ、気持ちが安定していきます。自分をいたわることが明日の活力になります。休息と充実を意識することで、毎日の生活も豊かになります。",
          "大切な人と過ごす時間を意識的に作ることで、日常の中に安心感と幸せを感じられます。笑顔や小さな優しさが運気を引き上げます。親しい人との時間は、心の栄養にもなります。",
          "自分の感情を丁寧に整理することで、心の平穏を保ちやすくなります。静かな時間を持つことが大切です。深呼吸や瞑想なども気持ちを落ち着ける助けになります。",
          "家族や友人との穏やかな時間が、あなたに心の充足感をもたらします。日常の些細な瞬間に幸せを感じられるでしょう。日常のささやかな出来事が心の豊かさにつながります。",
          "周囲の人に気持ちを伝えることで、より深い理解や絆が生まれます。素直な表現が人間関係を円滑にします。率直に話すことで、信頼と安心感も自然と増します。",
          "自分を大切にする行動を取ることで、心に余裕と安心感が生まれます。その余裕が周囲にも良い影響を与えます。自己ケアが、対人関係にも良い循環を作ります。",
          "日々の生活の中で小さな幸せを意識することで、心が穏やかになり、運気も自然と整っていくでしょう。気づいた幸せを言葉にしてみると、さらに充実感が増します。"
        ]
      },

      leo: {
        name: "獅子座",
        image: "zodiac/leo.png",
        messages: [
          "自信を持って自分を表現することで、思わぬチャンスや注目が自然と集まってくる日です。堂々とした態度が周囲に好印象を与え、評価につながります。今日のあなたの言動は、長期的な信頼や人間関係にも良い影響を与えるでしょう。",
          "あなたらしさを堂々と見せることで、周囲からの評価が高まり、信頼も強まるタイミングです。自然体の魅力が人々を引き寄せます。自分の意見を素直に伝えることで、新しい協力関係やチャンスも生まれるでしょう。",
          "積極的に行動することで運気が高まり、新たな展開や出会いが生まれる可能性が高まります。行動することでチャンスが巡ってきます。今日の行動は、未来の大きな成果につながる重要な一歩になるでしょう。",
          "人前で実力を発揮できる日。堂々と振る舞えば、期待以上の成果や評価が得られるでしょう。自分の力を信じて挑戦するのが鍵です。周囲からの信頼も深まり、次のチャンスへのステップが整います。",
          "自己表現を楽しむことで心が満たされ、周囲にもそのポジティブなエネルギーが広がります。楽しい気持ちが周囲の運気も上げるでしょう。あなたの情熱は周囲に良い影響を与え、協力や支援を引き出すことにもつながります。",
          "今こそ大胆な一歩を踏み出す時。迷いを断ち切ることで、新たな未来への扉が開かれるでしょう。勇気を持つことが運気の流れを作ります。恐れず前進することで、自分にとって最良の結果を手に入れられる可能性が高まります。",
          "今日のあなたは人を惹きつける魅力にあふれています。自然体でいるだけで周囲の注目を集めるでしょう。あなたの存在感や率直さが、周囲の信頼や協力を引き寄せる力となります。",
          "新しい挑戦やアイデアに取り組むことで、自己成長のチャンスが訪れます。恐れず行動しましょう。学びや経験を積み重ねることで、将来的に大きな成果や評価につながるでしょう。",
          "リーダーシップを発揮する場面が増えます。積極的に意見を述べることで信頼を得られるでしょう。あなたの決断力や行動力が周囲を引っ張り、チーム全体の成功を後押しします。",
          "自分の個性を大切にすることで、周囲との調和も保たれます。無理に変わろうとせず、自分らしく振る舞いましょう。あなたの個性を認めることで、他者からも尊重と支持を受けやすくなります。",
          "ポジティブな姿勢が運気を引き寄せます。笑顔や明るさを忘れずに過ごすと良い日です。前向きな心で過ごすことで、新しいチャンスや人間関係の広がりが期待できます。",
          "大きな目標や夢に向かって踏み出すことで、新しい可能性が開かれます。自信を持って挑戦しましょう。小さな一歩でも積み重ねることで、未来の大きな成功に繋がります。"
        ]
      },

      virgo: {
        name: "乙女座",
        image: "zodiac/virgo.png",
        messages: [
          "あなたの細やかな気遣いや配慮が周囲にしっかり伝わり、感謝や信頼を得られる日です。小さな気配りが大きな信頼を生むでしょう。具体的な行動や言葉で周囲に安心感を与えることができます。",
          "計画的に物事を進めることで、無駄なく効率的に成果へと繋がる運気に恵まれています。段取りを意識すると、思わぬ好結果を得やすくなります。細部に注意することで、よりスムーズな進行が期待できます。",
          "整理整頓が心の落ち着きや集中力を高め、仕事や対人関係に良い影響をもたらします。環境を整えることで判断力も冴えます。整理された空間は新しい発想やアイデアも生みやすくします。",
          "慎重な姿勢がトラブルを防ぎ、確実な成功への足がかりとなる重要な一日となるでしょう。焦らず慎重に行動することが吉です。判断を急がず、計画に沿った行動を心がけましょう。",
          "一見小さな改善でも積み重ねることで、周囲を驚かせるような大きな変化を生み出します。コツコツの努力が大きな成果につながります。小さな工夫や改善を見逃さず、丁寧に取り組むことが大切です。",
          "あなたの誠実で丁寧な態度が、信頼関係を強化し、今後の人間関係に好影響を与えます。信頼はあなたの運気を高める鍵です。約束や言葉を守ることで、より強固な信頼が築けます。",
          "細やかな気配りで人間関係が円滑に進みます。相手の立場を思いやることで、良い結果を得やすくなるでしょう。相手の意見を尊重することで、信頼関係がさらに深まります。",
          "効率よく物事を進めることで、余裕を持った行動が可能になります。時間を有効に使うことが運気向上のポイントです。計画的に進めることで、予期せぬ問題にも柔軟に対応できます。",
          "身の回りを整えることで、心の整理も自然に進みます。整った環境は集中力を高める助けになります。整理整頓された空間は、創造力やアイデアの発展にも寄与します。",
          "慎重に考え行動することで、予期せぬトラブルを回避できます。今日の注意深さが明日の成果につながります。些細な確認や準備が、後々の安心感につながります。",
          "日々の努力を積み重ねることで、周囲からの評価が高まります。小さな工夫が大きな成功につながります。継続的な努力が信頼や成果を確実に積み上げます。",
          "誠実で丁寧な姿勢を貫くことで、人間関係が安定し運気も整っていきます。信頼を大切にしましょう。周囲への配慮が、さらなる良縁やチャンスを引き寄せます。"
        ]
      },

      libra: {
        name: "天秤座",
        image: "zodiac/libra.png",
        messages: [
          "人との距離感や立ち位置を意識すると、思わぬ良縁や信頼が生まれやすくなる一日です。周囲との調和を意識することで、信頼関係が自然に深まります。日常の小さな気配りや会話が、あなたの評判をより良いものにしてくれるでしょう。",
          "物事の調和やバランスを意識して過ごすことで、自然と運気の流れが穏やかに整っていきます。心の余裕を保つことが、今日の運気アップにつながります。周囲の意見や状況に柔軟に対応することで、トラブルも回避できます。",
          "自分の美意識やこだわりを大切にすることで、心に喜びや満足感が広がりやすいでしょう。小さな工夫が幸福感を増すポイントです。見た目や身の回りを整えることで、心身ともに前向きな気持ちになれます。",
          "相手に対して柔らかく丁寧な対応を心がけることで、不必要な誤解やトラブルを防げます。言葉遣いや態度に気を配ると吉です。感謝の気持ちを言葉にすることで、良い関係をさらに深められるでしょう。",
          "人との会話を楽しむことが、思わぬ共感や深いつながりを生むきっかけとなるかもしれません。笑顔で接することが大切です。気軽な雑談や相談も、未来のチャンスにつながります。",
          "気軽な社交の場で、価値観を変えるような興味深い出会いや発見が訪れる予感があります。新しい情報や人脈を受け入れましょう。新しい人との交流が、今後の運気やチャンスに大きな影響を与えるかもしれません。",
          "周囲の意見に耳を傾けることで、新たな視点や学びを得られる日です。柔軟な対応が運気を引き上げます。異なる考えを受け入れることで、問題解決のヒントが見つかるでしょう。",
          "調和を意識した行動が、今日の小さなトラブルを回避するカギとなります。バランス感覚を大切に。人間関係のこじれを未然に防ぎ、快適な一日を過ごせるでしょう。",
          "自分の美意識を活かして環境を整えると、心身ともに快適に過ごせます。整った空間は運気を上げます。整理整頓や掃除で、気持ちもすっきりするでしょう。",
          "社交の場で誠実に振る舞うことで、信頼関係が深まり良縁につながるでしょう。気持ちを伝えることを大切に。自分の考えを丁寧に伝えることが、信頼構築のポイントです。",
          "柔軟な考え方と適切な対応が、今日の幸運を引き寄せるカギになります。臨機応変さが吉。予想外の出来事にも冷静に対応できるでしょう。",
          "思いやりや丁寧な振る舞いが、人間関係に好影響を与え、運気を安定させます。相手を大切にすることが運を呼びます。小さな気配りの積み重ねが、周囲の信頼をさらに高めるでしょう。"
        ]
      },

      scorpio: {
        name: "蠍座",
        image: "zodiac/scorpio.png",
        messages: [
          "心の奥に秘めていた深い想いや願いが、今日のあなたの行動力や突破力となって現れます。内面の情熱が周囲に良い影響を与える日です。自分の強い意志を信じて行動することで、予期せぬチャンスを引き寄せるでしょう。",
          "熱意や情熱を注いで取り組んできたことに、ようやく形としての成果や評価が現れそうです。努力が実を結ぶタイミングです。これまでの頑張りを振り返り、次のステップに活かしましょう。",
          "物事への集中力が高まり、これまで停滞していた事柄に大きな進展が見られる日になるでしょう。細部への注意が成果を引き寄せます。集中力を活かすことで、他者からの信頼も高まります。",
          "大切な誰かと本音や秘密を共有することで、絆が深まり強い信頼関係が築かれていきます。心を開くことで運も開けます。素直な気持ちで接することが、周囲との関係をさらに良くします。",
          "普段は避けがちな心の深い部分と静かに向き合うことで、精神的な成長や癒しが訪れます。自己理解が運気を高めます。自分の気持ちを整理することで、未来への判断力が増すでしょう。",
          "揺るがない強い思いを持ち続けることで、思いがけない好機やチャンスが舞い込んでくるでしょう。信念がチャンスを引き寄せます。困難な状況でも、前向きな心が幸運を呼びます。",
          "内面の情熱を素直に表現することで、周囲の人との信頼関係がさらに深まります。誠実な姿勢が運を呼びます。周囲に良い影響を与える言動を心がけると吉です。",
          "困難に直面しても冷静に対処することで、成果や成功を引き寄せることができます。冷静さが幸運を導きます。冷静な判断と行動が、思わぬ展開を良い方向へ導くでしょう。",
          "自分の感情や願いに正直になることで、必要な助けやサポートが自然に得られる日です。心を開くことが吉。率直な自己表現が、周囲との協力関係を強化します。",
          "深い思考や洞察力が、今後の判断や行動に役立ちます。考えを整理する時間を持ちましょう。洞察力を活かすことで、目の前の問題をスムーズに解決できます。",
          "集中力を活かして重要な課題に取り組むと、周囲からの評価も高まります。努力が目に見える成果となります。計画的な行動が、さらなるチャンスを生むでしょう。",
          "自分自身の信念に従って行動することで、思わぬチャンスや幸運が訪れます。勇気を持つことが大切です。自信を持つことで、周囲にもポジティブな影響を与えられます。"
        ]
      },

      sagittarius: {
        name: "射手座",
        image: "zodiac/sagittarius.png",
        messages: [
          "未知の世界に飛び込む冒険心を大切にすると、思いがけないチャンスや運が舞い込んできます。新しい体験があなたの成長を促し、未知の環境での学びが次の挑戦への自信となるでしょう。慎重さと好奇心のバランスを意識すると、より大きな成果につながります。",
          "新しい経験や挑戦が、あなたの人間的な成長や視野の広がりにつながる日となるでしょう。恐れず前に進むことで未知の可能性を発見し、多くの人との出会いや学びを通じて、あなたの考え方や価値観もさらに豊かになります。",
          "自由で柔軟な発想が、周囲の注目を集めたり、あなたの個性や魅力をさらに引き立ててくれます。創造力を活かしてアイデアを形にすることで、周囲からの信頼や協力も得やすくなり、新たなチャンスを自ら引き寄せる日となるでしょう。",
          "心のままに行動することで、思いがけない展開や面白い出会いが自然と引き寄せられてきます。直感を信じ、感じたままに動くことで、予想外の成果や新しい学びを得られ、人生に新しい風が吹き込むでしょう。",
          "夢や目標を遠慮なく大きく描くことで、それに向かう道筋がクリアになり自信が湧いてきます。大胆な計画を立てて行動することで、自分の可能性を最大限に引き出し、周囲のサポートも自然に集まる日となるでしょう。",
          "気分転換に外へ出てみると、今のあなたに必要な人や情報と偶然出会う可能性が高まります。日常のルーティンから少し離れることで、思わぬチャンスやインスピレーションが舞い込み、行動の幅が広がるでしょう。",
          "新しい冒険や挑戦に積極的になることで、学びや発見が増えます。失敗を恐れず行動することで、多くの経験と洞察を得られ、あなたの未来への選択肢を広げるきっかけとなるでしょう。",
          "自由な発想で問題解決に取り組むと、周囲からの信頼や評価が高まります。柔軟さと工夫を意識することで、予期せぬ困難にもスムーズに対応でき、周りの人々との協力も得やすくなります。",
          "目標に向かって一歩踏み出すことで、自信と成長を得られる日です。小さな成功も積み重ねることで大きな成果に繋がり、挑戦を続ける意欲がさらに高まります。",
          "外の世界で新しい人や情報に触れることで、今後の可能性が広がります。交流の中で得られる知識や経験は、あなたの視野を広げ、人生に新しい価値や喜びをもたらすでしょう。",
          "心の赴くままに行動することで、偶然の出会いや運命的なチャンスを得やすくなります。自分の直感を信じて行動することで、予想以上の成果や学びが訪れる日となるでしょう。",
          "冒険心を忘れずにいることで、新しいアイデアや機会が自然に引き寄せられる日です。積極的に行動し、多様な経験を楽しむことで、人生における大きな成長や発展のきっかけが訪れるでしょう。"
        ]
      },

      capricorn: {
        name: "山羊座",
        image: "zodiac/capricorn.png",
        messages: [
          "長期的な目標に向かって、堅実な一歩を重ねることで確かな成果が得られる日となりそうです。小さな努力の積み重ねが大きな成功につながります。今日は特に、計画を立てて一つずつ丁寧に実行することで、その効果を最大限に引き出すことができます。",
          "これまでの努力が評価される兆しがあり、周囲の信頼も着実に積み重なっていくでしょう。あなたの誠実さが人間関係を強固にし、今後の協力や支援を得やすくします。日常の積み重ねが、将来的な大きな成果を生み出す日です。",
          "計画を立てて着実に行動すると、思いがけないチャンスや成果を手にする可能性があります。目標に向かって慎重に進むことで、予想以上の成果や喜びを得られる日となるでしょう。",
          "誠実で真摯な対応が、仕事や人間関係において大きな信頼と安心感を生み出します。今日の行動一つ一つが、未来の大きな信頼や評価につながる大切な日です。",
          "今は土台作りに適した時期です。基盤を整えることで、将来の安定や発展に繋がっていくでしょう。焦らず丁寧に取り組むことで、後々大きな成果や安心感を手にできます。",
          "焦らず丁寧に進むことで、心の落ち着きや達成感を得られ、自信へと繋がっていきます。慎重さを大切にすることで、周囲からの評価も高まり、日々の積み重ねが力になります。",
          "長期的な視点で行動すると、今日の努力が将来大きな実りとなります。今日できる小さな工夫や行動も、未来の大きな成果を生む一歩となるでしょう。",
          "周囲との信頼関係を大切にすることで、支援や協力を得やすくなります。人との繋がりやコミュニケーションを意識的に深めることで、幸運やチャンスを引き寄せます。",
          "一歩一歩着実に進むことで、焦らずでも着実に成果を手にできます。慎重かつ計画的に行動することで、今日の努力が未来の大きな成果につながる日です。",
          "計画に基づいた行動が、思わぬチャンスや良い結果をもたらすでしょう。準備や下調べを丁寧に行うことで、より大きな成功や評価を得やすくなります。",
          "誠実で堅実な態度を続けることで、周囲の評価と信頼が高まりやすくなります。日々の積み重ねが確実な力となり、未来への道をしっかり築いてくれるでしょう。",
          "落ち着いた判断で行動することで、心の安定を得ながら成果を積み重ねられる日です。冷静さを意識することで、どんな状況にも柔軟に対応でき、結果的に大きな成功につながります。"
        ]
      },

      aquarius: {
        name: "水瓶座",
        image: "zodiac/aquarius.png",
        messages: [
          "あなたの独創的なアイデアや自由な発想が、周囲の関心を集めて注目されるタイミングです。思い切った表現が運気を引き寄せます。さらに、自分の個性や考え方を積極的に示すことで、新たな出会いやチャンスが増え、周囲との信頼関係も強化されます。",
          "今までにない視点やユニークな考え方が、現状を打破する鍵となり、新たな道が開けそうです。発想力が成功のカギです。加えて、柔軟な思考と行動を組み合わせることで、困難な状況も乗り越えやすく、人生に新しい展開が訪れます。",
          "既成概念にとらわれない柔軟な思考が、目の前の困難を乗り越える大きな力になります。柔軟さが運を引き寄せます。さらに、予想外の状況にも冷静に対応できるため、問題解決のスピードや効率も高まり、周囲からの信頼も増すでしょう。",
          "自分らしさを貫き、自由な行動を選ぶことで、思いがけない幸運が舞い込むかもしれません。個性を活かすことが吉です。加えて、自然体で過ごすことでストレスが減り、創造力がさらに豊かになり、新しいアイデアや計画を実行に移す力も高まります。",
          "変化を恐れず一歩を踏み出す勇気が、未来を切り開く原動力となる日です。勇気ある行動がチャンスを呼びます。さらに、自信を持って行動することで、周囲からの支援や協力を得やすくなり、思い描いた目標への到達がよりスムーズになります。",
          "人とのつながりを広げることで、新しいチャンスや貴重な情報がもたらされる可能性があります。交流が運を運びます。加えて、異なる視点を持つ人との意見交換が、創造的な発想や問題解決のヒントを与えてくれるでしょう。",
          "独創的なアイデアを実行に移すことで、新しい可能性や道が開ける日です。行動力が幸運を引き寄せます。さらに、積極的に挑戦することで自己成長も促され、後々の人生における大きな成功や経験に繋がるでしょう。",
          "自由な発想で問題解決に取り組むことで、周囲からの評価が高まります。柔軟さと独自性が吉。加えて、他人には思いつかないようなユニークな方法を提案することで、チームやプロジェクト内での存在感が増し、信頼も厚くなります。",
          "新しい人との出会いや情報が、あなたの視野を広げ運気を上げるきっかけになります。積極的な交流が大事です。さらに、自分が興味を持った分野で関わりを持つことで、深い人間関係や有益な知識を獲得できるチャンスが増えます。",
          "今まで避けていた方法や考え方に挑戦すると、驚くほどの成果やチャンスが生まれます。挑戦が運を呼びます。加えて、新しいアプローチを試すことで、自分の能力の幅を広げ、予期せぬ成功や喜びに繋がる可能性があります。",
          "自分らしい発想と行動が、予期せぬ幸運やラッキーな出来事を引き寄せます。直感を信じることが大切です。さらに、内なる声に耳を傾けることで、より的確な判断や決断ができ、人生における重要な節目をうまく乗り越えることができるでしょう。",
          "周囲の人に新しいアイデアを共有することで、協力や支援を得やすくなり運気がアップします。コミュニケーションが吉。加えて、意見を分かち合うことでチーム内の信頼が深まり、将来的な協力関係や新しいプロジェクトの成功にも繋がります。"
        ]
      },

      pisces: {
        name: "魚座",
        image: "zodiac/pisces.png",
        messages: [
          "直感や感性を優先して過ごすことで、内面的な癒しと穏やかな気持ちを取り戻せる日です。心の声を大切にし、無理のない行動を心がけることで、精神的な充足感も得られます。周囲に流されず、自分のリズムで過ごすことが幸運を引き寄せます。",
          "あなたの優しさや思いやりが周囲に自然と伝わり、温かな人間関係が築けそうです。共感力を発揮することで、困っている人を助けたり、信頼を深めるきっかけにもなります。日々の小さな気遣いが、大きな運を運んできます。",
          "理想や夢に意識を向けると、想像を超えた素敵なアイデアがひらめきやすくなります。クリエイティブな時間を楽しむことで、自分自身の可能性を広げ、学びや成長にもつながります。直感に従い、新しいことに挑戦することが大切です。",
          "心の動きに正直になり、自分の感情と丁寧に向き合うことで精神的な安定が得られます。自分自身を癒す時間を確保することで、日常生活での判断力や集中力も高まります。心のケアが運気を引き寄せます。",
          "芸術作品や音楽に触れることで、前向きなエネルギーが心に満ちていく時間になるでしょう。感性を活かすことで運気が上がり、創造性や直感力も磨かれます。心を豊かにする活動が、日常に喜びをもたらします。",
          "誰かの気持ちを深く理解しようとする姿勢が、信頼や絆をより一層強くしてくれます。思いやりの心を行動に表すことで、周囲の人も安心感を得て協力的になりやすくなります。心の温かさが運を引き寄せます。",
          "直感に従い行動することで、新しい発見やチャンスに出会いやすい日です。心を開いて周囲に接することで、思いもよらない良い出来事やサポートを受けられる可能性があります。冒険心が幸運を呼びます。",
          "感受性を活かして他人の立場を理解することで、思わぬ支援や助けを得られる可能性があります。人の気持ちに敏感になることで、協力関係が深まり、信頼や友情も強化される日です。",
          "夢や理想に向けた小さな一歩が、大きな成果や幸運につながる日です。積極的に行動し、計画を少しずつ実行することで、未来に向けた基盤を作ることができます。努力の積み重ねがチャンスを生みます。",
          "感情を素直に表現することで、周囲との絆が深まり信頼関係が強化されます。自分を偽らず、率直な気持ちを伝えることで、人間関係の中で重要な理解と協力を得やすくなります。",
          "音楽や美術に触れ、心を豊かにすることで精神的な充実感を得られます。創造的な活動を通して、新しい発想やアイデアが湧き、日常生活や仕事にもプラスの影響をもたらします。感性を磨くことが運を呼びます。",
          "他人の視点や気持ちに敏感になることで、重要な気づきや学びを得やすくなります。洞察力を活かして人間関係や問題解決に役立てることができ、思わぬ支援やチャンスを手にする日になるでしょう。"
        ]
      }

    };

    function getDayIndex() {
      const today = new Date();
      return (today.getDate() - 1) % 12;
    }

    const zodiacButtonsContainer = document.getElementById('zodiacButtons');
    const resultDiv = document.getElementById('result');

    Object.keys(moonZodiacData).forEach(key => {
      const btn = document.createElement('button');
      btn.className = 'zodiac-button';
      btn.type = 'button';
      btn.innerHTML = `<img src="${moonZodiacData[key].image}" alt="${moonZodiacData[key].name}" />${moonZodiacData[key].name}`;

      btn.addEventListener('click', () => {
        document.querySelectorAll('.zodiac-button.selected').forEach(el => el.classList.remove('selected'));
        btn.classList.add('selected');
        gtag('event', 'select_moon_zodiac', {
          zodiac: key,
          zodiac_name: moonZodiacData[key].name
        });
        showMoonFortune(key);
      });

      zodiacButtonsContainer.appendChild(btn);
    });

    function showMoonFortune(zodiacKey) {
      const data = moonZodiacData[zodiacKey];
      const dayIndex = getDayIndex();
      const message = data.messages[dayIndex];

      resultDiv.innerHTML = `
    <h2>${data.name}の月星座メッセージ</h2>
    <img src="${data.image}" alt="${data.name}" class="zodiac-img" />
    <p style="margin-top: 15px;">${message}</p>
  `;
      // スクロールして結果表示欄へ移動
      document.getElementById('result').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</div>


  <footer>

    <div class="footer-added-section parallax-bg-section" style="background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; color: #fff; padding: 4rem 1rem; margin-bottom: 2rem; width: 100%; box-sizing: border-box;">
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

    <small>&copy;2016 - <span id="currentYear"></span> Evita Designart.</small>
  </footer>

  <script>
    // フッターの年表示をJSで動的に
    document.getElementById("currentYear").textContent = new Date().getFullYear();
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




