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
  <title>24色の無料色占い</title>
  <meta name="description" content="24色の色占いで、今のあなたの心理状態や未来へのメッセージを診断。色の持つ意味をもとに、正位置・逆位置のアドバイスを無料で受け取れます。直感で選ぶだけの簡単占い。">
  <!-- OGP（Open Graph Protocol） -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="24色の無料色占い" />
  <meta property="og:description"
    content="24色の色占いで、今のあなたの心理状態や未来へのメッセージを診断。色の持つ意味をもとに、正位置・逆位置のアドバイスを無料で受け取れます。直感で選ぶだけの簡単占い。" />
  <meta property="og:url" content="https://evitadesignart.com/color24.php" />
  <meta property="og:site_name" content="Evita Designart" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="24色の無料色占い" />
  <meta name="twitter:description" content="色で心を読み解く、新しい占い体験。選んだカラーから今の心理や未来へのヒントを無料でチェック！" />

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "色占いとは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "色占いは、色が持つ象徴的な意味や心理効果をもとに、今の心の状態や未来の方向性を読み解く占いです。24色から直感で選ぶだけで、そのときの潜在意識やメッセージを受け取れます。"
      }
    },
    {
      "@type": "Question",
      "name": "正位置・逆位置とは何ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "選ばれた色の表示に上下の向きがあり、正位置はポジティブな側面、逆位置は気をつけるべき点や課題を表します。どちらもその色の持つ意味の一部であり、占い結果として読み解きます。"
      }
    },
    {
      "@type": "Question",
      "name": "どうやって色を選べばよいですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "直感で気になるカードを選ぶのがおすすめです。迷った場合は、最初に目に入ったカードや、なぜか気になるカードを選ぶと、その時の心の状態が反映されやすくなります。"
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

    .card {
      width: 120px;
      display: inline-block;
      height: 180px;
      margin: 15px;
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
    }

    .modal-content {
      background-color: #2c2c54;
      margin: 10% auto;
      padding: 30px;
      width: 80%;
      max-width: 500px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 20px rgba(155, 89, 182, 0.8);
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
  </style>
  <style>
    @media (min-width: 768px) {
      br[class*="md:hidden"] {
        display: none !important;
      }
    }
  </style>
</head>

<body>
  <header>
    <a href="https://evitadesignart.com/tarotte_list.php">
      <h1>24色の色占い<br class="md:hidden"> （正位置・逆位置対応）</h1>
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
    <img src="img/fv_color24.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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
    width: 140px;
    height: 200px;
    aspect-ratio: auto;
    font-size: 1rem;
    padding: 0;
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
  <div
    style="margin: 0 auto; max-width: 800px; text-align: left; padding: 1rem; background: rgba(255,255,255,0.05); border-radius: 10px; box-shadow: 0 0 10px rgba(255,255,255,0.1); margin-bottom: 2rem;">
    <h2 style="color: #ffccff; text-shadow: 0 0 5px #bb8fce;">色占いとは？</h2>
    <p style="line-height: 1.8; color: #e0e0e0;">
      色占いは、色彩が持つエネルギーや心理的な影響を読み解くことで、あなたの心の状態やこれからの運勢を導く占術です。<br>
      選んだカードによって、今のあなたに必要なメッセージやアドバイスが示されます。<br><br>
      この占いでは、24色それぞれに正位置・逆位置があり、ランダムに引かれた1枚が現在のあなたを象徴します。<br>
      気になる色を直感で選んで、今の自分にぴったりのメッセージを受け取ってみましょう。
    </p>
  </div>
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
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 自分の心の状態や直感を色から知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 気持ちをリセットしたいときの<br class="md:hidden">ヒントが欲しい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 難しい占いより感覚的に楽しみたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 色彩の意味や心理に興味がある</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 正位置と逆位置によるメッセージを<br class="md:hidden">体験したい</li>
    </ul>
  </div>


  <div class="card-container" id="card-container"></div>

  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close" id="close">&times;</span>
      <div id="color-name"></div>
      <img id="card-img" src="" alt="カード画像">
      <div id="color-description"></div>
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
  <a href="https://evitadesignart.com/tarotte_list.php#menu-links" class="nav-btn-gold">星座＆タロット</a>
  <a href="https://evitadesignart.com/tarotte_list.php#tarot-menu" class="nav-btn-gold">タロット</a>
  <a href="https://evitadesignart.com/tarotte_list.php#zodiac-menu" class="nav-btn-gold">星座</a>
  <a href="https://evitadesignart.com/tarotte_list.php#color-menu" class="nav-btn-gold">その他</a>
  <a href="https://evitadesignart.com/tarotte_list.php#horoscope" class="nav-btn-gold">アセンダント診断</a>
</div>
<h2><a href="https://evitadesignart.com/tarotte_list.php"><button>占い一覧はコチラ</button></a></h2>
  <footer>
    <small>&copy;2016 -
      <script>document.write(new Date().getFullYear());</script> Evita Designart.
    </small>
  </footer>
  <script>const colors = [
      { name: "赤", color: "#FF0000", img: "card5/00.jpg", upright: "情熱が高まり、活力にあふれた行動ができる時期です。エネルギーが内側から湧き上がり、何事にも前向きに取り組む姿勢が成功へと導きます。目標に向かって一直線に進む力強さがあり、チャレンジにも臆せず挑めるでしょう。", reversed: "衝動的な言動や怒りの感情が表に出やすくなっています。エネルギーが過剰となり、周囲との摩擦を生む可能性があります。冷静な判断力を意識し、感情のコントロールを心がけることが大切です。" },
      { name: "ピンク", color: "#FFC0CB", img: "card5/01.jpg", upright: "愛情深く人に接することができ、思いやりが自然と伝わる時期です。穏やかな空気が周囲との関係を和らげ、安心感のある人間関係を築けるでしょう。優しさや包容力が評価され、人との絆が深まります。", reversed: "人に甘えすぎたり、相手に依存しやすい傾向が強まります。自分自身の価値を見失いがちになるため、まずは自立と自己受容を意識することが重要です。他人に頼りすぎず、心の軸を整えましょう。" },
      { name: "ローズ", color: "#FF66B2", img: "card5/02.jpg", upright: "自己肯定感が高まり、自分自身の魅力や価値を実感できる時期です。周囲から注目される場面が増え、自信を持って行動することで更なる評価を得られるでしょう。自分らしさを大切にして前向きに進んでください。", reversed: "自分本位な言動が目立ち、人との距離を生む可能性があります。思いやりに欠ける態度は誤解を招きやすく、孤立を招く恐れも。客観的な視点を持ち、他者との関係性を丁寧に見直すことが求められます。" },
      { name: "オレンジ", color: "#FFA500", img: "card5/03.jpg", upright: "明るさと親しみやすさが際立ち、社交の場での魅力が高まります。積極的な交流を通じて人脈を広げたり、新しいチャンスに恵まれる時です。創造力も豊かになり、楽しいアイデアが生まれやすくなります。", reversed: "気持ちが浮つきやすくなり、軽率な行動や言動がトラブルのもとになる可能性があります。テンポの速さに流されず、物事に対して丁寧に取り組む姿勢を大切にしてください。" },
      { name: "アプリコット", color: "#FBCEB1", img: "card5/04.jpg", upright: "感情表現が豊かになり、温かな関係を育める時期です。相手への共感力が高まり、心と心が通い合うような深い絆が築けるでしょう。素直な気持ちを表すことで、信頼関係がより強固なものになります。", reversed: "感情が揺れ動きやすく、不安定な心が表面化しやすい時です。些細なことに敏感になり、傷つきやすさが増しているかもしれません。無理に感情を抑えず、心のケアを優先してください。" },
      { name: "黄色", color: "#FFFF00", img: "card5/05.jpg", upright: "明るい希望が見えてくるタイミングです。知的好奇心が刺激され、学びや探究の成果が出やすくなります。前向きな姿勢で物事に取り組めば、自然と運気が上昇していくでしょう。", reversed: "気持ちが空回りしやすく、注意力が散漫になりがちです。焦って先を急ぐよりも、ひとつひとつ丁寧に対応することが、良い結果を引き寄せる鍵になります。" },
      { name: "クリーム", color: "#FFFDD0", img: "card5/06.jpg", upright: "柔らかな雰囲気に包まれ、周囲との関係性が自然と穏やかになります。家庭的な安心感や心のぬくもりを得られる時期で、自分らしくいられる環境を整えると、より心が満たされるでしょう。", reversed: "優しさが裏目に出て、決断を避けてしまう場面があるかもしれません。曖昧さがトラブルの原因となりやすいため、自分の気持ちをはっきりさせることが大切です。" },
      { name: "ライム", color: "#BFFF00", img: "card5/07.jpg", upright: "新鮮な気持ちで日々を過ごせる時期です。好奇心が旺盛になり、ユニークな発想や若々しいエネルギーが周囲に良い影響を与えるでしょう。フレッシュな気分で新しいことにも挑戦できます。", reversed: "集中力が散漫になり、物事の本質を見落としやすくなります。落ち着きのなさが原因で、チャンスを逃す可能性も。ひとつのことに丁寧に取り組む姿勢が求められます。" },
      { name: "緑", color: "#00FF00", img: "card5/08.jpg", upright: "心と体が調和し、安定感のあるエネルギーが満ちています。癒しの力が高まり、自然とのつながりを感じることで、内面のバランスがさらに整っていくでしょう。静かな幸福感に包まれる時です。", reversed: "気力や意欲が低下しやすく、無気力な状態に陥ることがあります。あえて小さな行動を積み重ねることで、再び流れが生まれ、活力が取り戻せるようになるでしょう。" },
      { name: "オリーブ", color: "#808000", img: "card5/09.jpg", upright: "現実的で冷静な視点を持てる時期です。地に足のついた判断ができるため、長期的な計画や慎重な行動が良い結果を生みます。安定感があり、信頼を得ることもできるでしょう。", reversed: "考えすぎたり疑念を持ちすぎることで、柔軟性を失うおそれがあります。変化を恐れず、視野を広げて対応することで、流れが好転していきます。" },
      { name: "ターコイズ", color: "#40E0D0", img: "card5/10.jpg", upright: "創造力と直感が高まり、自由な発想が冴え渡る時期です。自分の世界を表現することで、多くの人の共感を得られるでしょう。のびのびと自己表現することが幸運を引き寄せます。", reversed: "感情の波が大きくなり、自己表現に迷いが生じやすくなります。自分を抑えすぎず、素直な気持ちを受け入れることが、安定への第一歩です。" },
      { name: "シアン", color: "#00FFFF", img: "card5/11.jpg", upright: "浄化のエネルギーが強まり、過去の疲れやネガティブな感情を手放す好機です。心身が軽やかになり、新しい流れが自然とあなたを導いてくれるでしょう。", reversed: "思考が混乱しやすく、方向性を見失いやすい傾向があります。焦らず、静かな時間を持つことで、本当に必要な選択が見えてきます。" },
      { name: "スカイブルー", color: "#87CEEB", img: "card5/12.jpg", upright: "開放感に包まれ、自由な発想がのびのびと広がる時期です。心が軽やかになり、人間関係でもリラックスした交流が楽しめるでしょう。", reversed: "現実から逃げたくなるような感覚に陥りやすくなります。地に足のついた視点を忘れず、目の前のことに誠実に向き合うことが大切です。" },
      { name: "青", color: "#0000FF", img: "card5/13.jpg", upright: "誠実で信頼される言動ができる時です。冷静さが際立ち、物事を着実に進める力に恵まれます。堅実な姿勢が周囲の信頼を集めるでしょう。", reversed: "内向的になりすぎて、感情をうまく表現できない傾向があります。孤独感を抱えやすくなるため、心を開いて会話を増やす意識が必要です。" },
      { name: "インディゴ", color: "#4B0082", img: "card5/14.jpg", upright: "直感が冴えわたり、深い洞察が得られる時です。精神性が高まり、目に見えないものからの導きを受け取れるでしょう。内面の成長を実感できます。", reversed: "内にこもりすぎてしまい、人との関わりが希薄になりやすい状態です。バランスを取るためには、外の世界との交流も意識してみましょう。" },
      { name: "紫", color: "#800080", img: "card5/15.jpg", upright: "変容のエネルギーに満ちており、霊的な気づきが得られやすいタイミングです。精神的な成長が進み、自分の本質とつながる瞬間が訪れるかもしれません。", reversed: "夢や理想に傾きすぎて、地に足がつかなくなる恐れがあります。現実的な視点を忘れずに、今の自分に必要な行動を見極めましょう。" },
      { name: "ラベンダー", color: "#E6E6FA", img: "card5/16.jpg", upright: "優しさや癒しの気配が満ちており、心がほっと安らげるような出来事に恵まれます。想像力が豊かになり、創作活動にも向いています。", reversed: "空想や妄想に囚われて、現実とのバランスを欠く可能性があります。地に足のついた行動を意識して、夢を少しずつ現実にしていきましょう。" },
      { name: "白", color: "#FFFFFF", img: "card5/17.jpg", upright: "純粋さや始まりのエネルギーに満ちています。物事をリセットし、新たなスタートを切るのに絶好のタイミングです。", reversed: "無感情になったり、目標を見失いやすくなっています。目的意識を明確にすることで、心に再び光が差し込むでしょう。" },
      { name: "グレー", color: "#808080", img: "card5/18.jpg", upright: "中立的な視点が持てるため、冷静で公正な判断が下せます。物事に左右されず、落ち着いた態度で周囲に安心感を与えられるでしょう。", reversed: "優柔不断になり、なかなか結論が出せない状況に陥ることがあります。思い切った決断が、流れを変えるきっかけになるでしょう。" },
      { name: "黒", color: "#000000", img: "card5/19.jpg", upright: "内省が深まり、自分自身と向き合う時間に適しています。古い価値観を手放し、新たな自分へと生まれ変わるための準備が整ってきています。", reversed: "不安や恐れが強くなり、閉塞感に包まれることがあります。過去にとらわれすぎず、今できることに目を向けましょう。" },
      { name: "ゴールド", color: "#FFD700", img: "card5/20.jpg", upright: "成功や達成感が得られるタイミングです。自信に満ちた姿勢が周囲を引き寄せ、良い評価や報酬を手にできるでしょう。", reversed: "自信過剰や支配的な態度が周囲との摩擦を生む可能性があります。謙虚さと協調性を忘れずに過ごすことが大切です。" },
      { name: "シルバー", color: "#C0C0C0", img: "card5/21.jpg", upright: "感受性が高まり、鋭い直感で物事を見抜ける時期です。繊細さを活かして、人間関係でも優れた対応ができるでしょう。", reversed: "気分の浮き沈みが激しくなりやすく、周囲の影響に敏感になりすぎる傾向があります。冷静な視点を保つよう意識して。" },
      { name: "ブラウン", color: "#8B4513", img: "card5/22.jpg", upright: "安定感があり、継続的な努力が実を結ぶ時期です。現実的な視点と堅実な行動が、信頼と実績につながります。", reversed: "頑固になりやすく、新しい考え方を受け入れづらい傾向があります。柔軟性を意識することで、より良い結果が得られるでしょう。" },
      { name: "ベージュ", color: "#F5F5DC", img: "card5/23.jpg", upright: "自然体でいられる環境が整い、穏やかな日常の中で安心感が得られます。落ち着いた気持ちで過ごすことができ、心のゆとりが生まれるでしょう。", reversed: "受け身になりすぎて、自ら行動することを避けがちです。勇気を出して一歩踏み出せば、思わぬ発展が期待できます。" }
    ];


    const container = document.getElementById("card-container");
    const modal = document.getElementById("modal");
    const close = document.getElementById("close");
    const colorName = document.getElementById("color-name");
    const colorDescription = document.getElementById("color-description");
    const cardImg = document.getElementById("card-img");

    function shuffle(array) {
      return array.sort(() => Math.random() - 0.5);
    }

    function showModal(name, explanation, imgPath) {
      colorName.textContent = name;
      colorDescription.textContent = explanation;
      cardImg.src = imgPath;
      modal.style.display = "block";
    }

    close.onclick = () => {
      modal.style.display = "none";
    };

    window.onclick = (e) => {
      if (e.target === modal) modal.style.display = "none";
    };

    shuffle(colors).forEach(item => {
      const card = document.createElement("div");
      card.className = "card";
      card.style.backgroundColor = "#444"; // 色は空なので固定色
      const isUpright = Math.random() < 0.5;
      const explanation = isUpright ? item.upright : "【逆位置】" + item.reversed;
      card.onclick = () => showModal(item.name, explanation, item.img);

      container.appendChild(card);
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




