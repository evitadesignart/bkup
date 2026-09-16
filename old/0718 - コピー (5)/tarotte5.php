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
  <meta name="description" content="今月のあなたの運勢を星座別に占う無料タロット占い。大アルカナのカードで未来のヒントとメッセージをお届けします。">
  <title>星座別タロット占い | 今月の運勢を大アルカナで診断  | 占いアルカノヴァ</title>
  <!-- OGP（Open Graph Protocol）タグ：画像なし -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="星座別タロット占い | 今月の運勢を大アルカナで診断" />
  <meta property="og:description" content="今月のあなたの運勢を星座別に占う無料タロット占い。大アルカナのカードで未来のヒントとメッセージをお届けします。" />
  <meta property="og:url" content="https://evitadesignart.com/tarotte5.php" />
  <meta property="og:site_name" content="Evita Designart" />
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "この星座別タロット占いは無料ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、当サイトのタロット占いはすべて無料でご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "毎月内容は変わりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。毎月占い結果が星座と日付に基づいて変わる仕様になっています。何度でもお楽しみいただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "カードの正位置と逆位置に意味の違いはありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。正位置はカードの本来の意味を、逆位置はその課題や注意点を表します。"
      }
    },
    {
      "@type": "Question",
      "name": "自分の星座が分からない場合はどうすれば良いですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "星座を選ばずに「占う」ボタンを押すと、ランダムで診断結果が表示されますのでご安心ください。"
      }
    },
    {
      "@type": "Question",
      "name": "スマートフォンやタブレットでも利用できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。すべてのデバイスで快適にご利用いただけるようにデザインされています。"
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

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #1a1a2ee3;
      color: #e0e0e0;
      text-align: center;
      margin: 0;
      margin-top: 5rem;
      padding: 2rem;
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

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #2e2e3a;
      padding: 1rem 0;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
      z-index: 1000;
    }

    header h1 {
      margin: 0;
      font-size: 1.8rem;
      color: #c5f8ff;
      text-align: center;
    }

    select,
    button {
      font-size: 1rem;
      padding: 1rem 1.5rem;
      margin: 10px;
      border: none;
      border-radius: 8px;
      background-color: #6f42c1;
      color: #f0e6f6;
      cursor: pointer;
      box-shadow: 0 0 10px #7d5fff;
      transition: background-color 0.3s ease;
    }

    button:hover,
    select:hover {
      background-color: #9b59b6;
      box-shadow: 0 0 15px #bb8fce;
    }

    .card-img {
      width: 60%;
      max-width: 250px;
      margin-top: 20px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(155, 89, 182, 0.7);
      pointer-events: none;
      user-drag: none;
      -webkit-user-drag: none;
    }

    .card-text {
      width: 90%;
      max-width: 800px;
      margin: 15px auto;
      background: rgba(255, 255, 255, 0.15);
      padding: 15px;
      border-radius: 10px;
      line-height: 1.6;
      color: white;
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
      <h1>星座別タロット占い<br class="md:hidden"> （今月の運勢）</h1>
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
    <img src="img/fv_tarotte5.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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

  <select id="zodiac">
    <option value="">星座を選んでください</option>
    <option value="牡羊座">牡羊座</option>
    <option value="牡牛座">牡牛座</option>
    <option value="双子座">双子座</option>
    <option value="蟹座">蟹座</option>
    <option value="獅子座">獅子座</option>
    <option value="乙女座">乙女座</option>
    <option value="天秤座">天秤座</option>
    <option value="蠍座">蠍座</option>
    <option value="射手座">射手座</option>
    <option value="山羊座">山羊座</option>
    <option value="水瓶座">水瓶座</option>
    <option value="魚座">魚座</option>
  </select>
  <button onclick="showTarot()">占う</button>
  <p> 星座を選んで「占う」を押すと、<br class="md:hidden"> 今月のあなたの<br class="md:hidden"> メッセージが表示されます。</p>
  <div id="result"></div>

  <p>
    イラストなどは <a href="https://nano-design.booth.pm/">BOOTH</a>、<a
      href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/?utm_source=pixabay&utm_medium=email&utm_campaign=onboarding_welcome">Pixabay</a>
    にて販売中です。
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
<h2><a href="https://evitadesignart.com/tarotte_list.php" style="display: block; width: 100%; text-align: center;"><button style="width: 100%; max-width: 600px;">占い一覧はコチラ</button></a></h2>
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

    <small>&copy;2016 -
      <script>document.write(new Date().getFullYear());</script> Evita Designart.
    </small>
  </footer>

  <!-- タロットデータとスクリプト -->
  <script>
    const tarotCards = [
      {
        name: "愚者",
        meaning: "自由、新しい始まり、未知への挑戦",
        img: "card7/00.jpg",
        comment: "未知の世界に飛び込む準備が整っています。恐れを超えた行動が、大きな可能性を引き寄せるでしょう。制限を捨て、思い切って動き出すことが、これまでにない発見と成長をもたらします。自由な心で歩みを進めると、これまで見えなかった世界が開かれ、自分自身の本質にも触れることができるでしょう。",
        reversedComment: "先を考えずに進むと、方向を見失う恐れがあります。一度立ち止まり、今いる場所を確認して。衝動的な選択には注意し、冷静な視点で状況を見直すことが重要です。軽率な行動は誤解や混乱を招く可能性があるため、信頼できる助言にも耳を傾けると良いでしょう。"
      },
      {
        name: "魔術師",
        meaning: "創造、意志、スタート",
        img: "card7/01.jpg",
        comment: "今こそ、あなたの知識やスキルを使うタイミング。集中力が高まり、望む現実を創り出せます。自信を持ってアイデアを形にすることで、新たな展開が動き出します。準備してきたことが形になり始めるときなので、積極的に行動に移すことがチャンスを引き寄せます。",
        reversedComment: "見せかけや器用さに頼ると、本質を見失います。誠実さを取り戻すことが大切です。形だけを整えるのではなく、内面から整える努力が必要です。表面的な成功に満足せず、長期的な視点で物事を見直すことで、真の力を取り戻せるでしょう。"
      },
      {
        name: "女教皇",
        meaning: "直感、精神性、秘密",
        img: "card7/02.jpg",
        comment: "表面的な情報よりも、静かに感じ取ることが鍵。心の奥にある真実に気づくチャンスです。直感を信じることで、あなたの中の深い知恵が導いてくれるでしょう。外の世界に答えを求める前に、自分の内面に耳を澄ませることで、本当に必要な道が見えてくるはずです。",
        reversedComment: "感情や外的ノイズに振り回されやすいとき。内なる声が届かなくなっています。静かな時間を意識的に持ち、内面のバランスを整えることが求められます。過去の経験を手放し、今の感覚を大切にすることで再び自分の感性を取り戻せるでしょう。"
      },
      {
        name: "女帝",
        meaning: "愛、豊かさ、成長",
        img: "card7/03.jpg",
        comment: "創造性や愛が育まれるとき。人や自然とのつながりが、あなたに実りをもたらします。内なる豊かさを信じ、受け取ることに心を開くことで、周囲との関係もより温かくなります。受容と包容の姿勢が、育てる力として働き、実りの循環を生むきっかけとなるでしょう。",
        reversedComment: "甘やかしや依存に注意。育てるべきものと手放すべきものを見極めましょう。感情に流されず、客観的に状況を見つめることが、健やかな関係を築く鍵となります。過保護になりすぎると、自立の妨げになるため、境界線を持った優しさが求められます。"
      },
      {
        name: "皇帝",
        meaning: "統率、力、責任",
        img: "card7/04.jpg",
        comment: "責任を持つ姿勢が評価されます。今は意志を貫き、揺るぎない土台を築く時です。自信と安定感が求められる場面で、あなたのリーダーシップが大きな影響力を持つでしょう。自分の信念を明確にし、揺るぎない軸を持つことが、周囲を安心させる存在になる鍵です。",
        reversedComment: "頑固さが人を遠ざけるかもしれません。柔軟性を忘れずに。自分の考えに固執せず、対話を通じて理解し合う姿勢が必要です。強さとは支配ではなく、信頼関係の中で育つものであることを忘れないようにしましょう。"
      },
      {
        name: "法王",
        meaning: "伝統、信頼、導き",
        img: "card7/05.jpg",
        comment: "伝統や知恵の継承に価値があります。信頼できる人との関係が未来の礎になります。形式の中にある意味を尊重しつつ、自分なりの在り方を見出すことがポイントです。先人の知恵を学ぶことは、あなた自身の軸を強める手助けにもなり、信念を持った選択ができるようになるでしょう。",
        reversedComment: "形式に縛られすぎて、自由な発想が抑えられている可能性があります。枠から外れた視点で物事を見直すと、新しい可能性が開けるでしょう。周囲の期待や常識に縛られすぎず、自分の内面からの声に従って行動することも必要です。"
      },
      {
        name: "恋人",
        meaning: "選択、愛、人間関係",
        img: "card7/06.jpg",
        comment: "愛や関係性の中で大切な選択が求められます。心の声に従うことで調和が訪れるでしょう。相手との絆を育てるには、誠実であることが何より大切です。感情と理性のバランスを保ちつつ、責任ある決断を下すことで、関係はより深く豊かなものになっていくでしょう。",
        reversedComment: "他人任せの選択や依存的な関係が問題を引き起こすかもしれません。自立心を持ち、主体的な判断を意識することが関係改善への一歩です。曖昧な態度や優柔不断さは誤解や摩擦を生むため、自分の本心と向き合う勇気が求められます。"
      },
      {
        name: "戦車",
        meaning: "勝利、突破、自信",
        img: "card7/07.jpg",
        comment: "エネルギーが満ちています。障害を乗り越える意志があれば、突破口が開かれます。情熱と冷静さを両立させることで、大きな成果へとつながるでしょう。困難に対しても臆せず進み、目的意識を明確にすることで、あなたの進むべき道が力強く切り拓かれていきます。",
        reversedComment: "強引すぎると反発を招きます。目的と手段を見直す必要があるでしょう。勢いだけではコントロールを失うこともあります。冷静さと自制心を持って、丁寧に状況を分析し、確実な一歩を踏み出すことが重要です。"
      },
      {
        name: "力",
        meaning: "勇気、忍耐、内なる強さ",
        img: "card7/08.jpg",
        comment: "真の強さは優しさの中にあります。静かな忍耐が、周囲との関係に良い影響を与えます。自分の感情をコントロールする力こそが、あらゆる困難を乗り越える鍵となるでしょう。力づくで物事を動かすのではなく、内面の落ち着きと信念で調和的な結果を生み出せます。",
        reversedComment: "感情に支配されやすい時。衝動的な反応は関係をこじらせる可能性があります。内なる安定を保ち、冷静に自分を見つめ直す時間を持ちましょう。自己コントロールを取り戻すことが、再び人との調和を生み出す助けになります。"
      },
      {
        name: "隠者",
        meaning: "内省、知恵、静寂",
        img: "card7/09.jpg",
        comment: "一人の時間に深い学びがあります。日々の喧騒から離れ、自分の内側に静かに耳を傾けることで、見落としていた真理や気づきが訪れます。孤独の中にこそ自己理解のチャンスがあり、今後の道筋を明確にする光が差してくるはずです。",
        reversedComment: "孤立しすぎると心が閉ざされます。他者との対話も忘れずに。内省と交流のバランスを取り戻すことが、今のあなたにとって重要です。自己防衛から距離を置き、心を開くことで新たな学びと支えを得られる可能性があります。"
      },
      {
        name: "運命の輪",
        meaning: "転機、チャンス、流れ",
        img: "card7/10.jpg",
        comment: "幸運のサイクルが始まります。物事が自然に進むときなので、流れに乗って行動しましょう。準備を整えておくことで、チャンスを確実に掴めるでしょう。偶然に見える出来事にも意味があり、変化の波に柔軟に乗ることで、運命は好転していきます。",
        reversedComment: "チャンスを逃しやすいとき。無理に逆らわず、今ある状況を受け入れて柔軟に対応することが開運のポイントになります。流れに執着せず、思い通りにならないことを嘆くより、今できることに集中する姿勢が必要です。"
      },
      {
        name: "正義",
        meaning: "公平、決断、バランス",
        img: "card7/11.jpg",
        comment: "冷静な判断が求められる場面です。感情に流されず、事実に基づいた決断があなたを助けます。公平な姿勢が信頼を呼び、状況を安定へと導くでしょう。物事の本質を見極め、真実に即した選択をすることで、自分にも他者にも誠実な対応ができるようになります。",
        reversedComment: "偏見や一方的な価値観が判断を曇らせます。柔軟な視点で物事を見つめ直すことで、よりよい選択肢が見えてくるでしょう。感情に振り回されず、冷静さを取り戻すことで、真の意味でのバランスと公正を保てます。"
      },
      {
        name: "吊るされた男",
        meaning: "犠牲、洞察、停滞",
        img: "card7/12.jpg",
        comment: "今は行動よりも内面の変化が必要なとき。視点を変えることで新たな気づきが訪れ、停滞していた物事にも光が差し込むようになるでしょう。進むことを急がず、あえて足を止めることで深い理解と変化の準備が整います。",
        reversedComment: "無意味な我慢を続けていませんか？自己犠牲が本当に必要か見直す時です。報われるための努力かどうかを冷静に考える必要があります。自分をすり減らす関係性から距離を取ることが、次のステージに進む鍵となるかもしれません。"
      },
      {
        name: "死神",
        meaning: "終わりと再生、変化",
        img: "card7/13.jpg",
        comment: "終わりを受け入れることで、新たな始まりが生まれます。過去に執着せず、前を向くことで大きな再生のエネルギーが動き始めるでしょう。潔い決断が、重荷を手放す勇気を与え、変化の中で新たな可能性を見出す力となります。",
        reversedComment: "古いものへの執着が前進を妨げています。恐れを手放し、心の整理を行うことで、本当に必要な変化が起こせます。未練を断ち切ることが、未来を切り開く第一歩となるでしょう。"
      },
      {
        name: "節制",
        meaning: "調和、節度、バランス",
        img: "card7/14.jpg",
        comment: "心と体のバランスが整う時期。無理をせず自然な流れに身を任せることで、調和と安定が生まれます。穏やかな心で人と接することで良好な関係が築けます。環境や人間関係においても、極端を避けて中庸の感覚を保つことが運気を高める鍵となります。",
        reversedComment: "極端な行動や感情に注意。中庸を意識することで落ち着きが戻ります。焦らずリズムを取り戻すことが、今のあなたに必要です。急ぎすぎると流れが乱れるため、一呼吸おいて状況を整える時間を持ちましょう。"
      },
      {
        name: "悪魔",
        meaning: "誘惑、束縛、執着",
        img: "card7/15.jpg",
        comment: "魅力的な誘惑が現れそうです。目の前の甘い言葉や魅力に心を奪われる前に、何に囚われているのかを冷静に見つめることが重要です。依存や執着の鎖を意識的に断ち切る勇気が求められています。自分を縛るものが何かを明確にすることが、自由を取り戻す第一歩となります。",
        reversedComment: "束縛から解放される兆し。これまで縛られていた執着や関係から一歩距離を置ける状態へと変化していきます。自由を選び取る強さが、未来の選択肢を広げてくれるでしょう。依存からの脱却は、新たな自分の可能性を開く鍵となります。"
      },
      {
        name: "塔",
        meaning: "崩壊、突然の変化",
        img: "card7/16.jpg",
        comment: "古い価値観が崩れる時。突然の変化に驚くかもしれませんが、その破壊の中に再生のチャンスが隠れています。不要なものを手放すことで、真の安定と新しい視野が生まれます。変化を受け入れ、新たな基盤を築くことで、大きな飛躍につながります。",
        reversedComment: "崩壊を恐れて変化を拒むと、苦しみが長引くかもしれません。変化に向き合う覚悟を持ち、必要な修正を加えることで、破壊を避けることが可能です。柔軟な姿勢と現実的な対応が、混乱を最小限に抑える鍵になります。"
      },
      {
        name: "星",
        meaning: "希望、インスピレーション",
        img: "card7/17.jpg",
        comment: "未来への希望が見えてきます。小さな光でも、それを信じて進むことが大切です。あなたの直感やインスピレーションが、道を照らす灯台となるでしょう。ポジティブなビジョンを持ち続けることで、周囲にも希望と癒しを与えられる存在になります。",
        reversedComment: "期待ばかりが膨らみ、現実感を失いやすい時。地に足をつけた行動を意識し、理想と現実のバランスをとることが、夢を形にする近道となります。見通しが立たない時ほど、一歩ずつ確実に進むことが求められます。"
      },
      {
        name: "月",
        meaning: "不安、幻想、直感",
        img: "card7/18.jpg",
        comment: "見えないものに目を向ける時。不安や迷いの中にこそ、直感的な気づきが隠れています。現実だけでは測れない何かが、あなたの心を揺り動かしているかもしれません。静かな環境で内面の声に耳を傾けることで、心の霧が晴れる兆しがあります。",
        reversedComment: "幻想に迷いやすいとき。直感に頼るだけでなく、現実的な情報や他人の助言も取り入れて、冷静さを保つことが混乱を防ぐカギとなります。妄想や誤解を減らすためにも、信頼できる人と現実的な対話を持つことが大切です。"
      },
      {
        name: "太陽",
        meaning: "成功、喜び、活力",
        img: "card7/19.jpg",
        comment: "成功や喜びが訪れます。明るく前向きな気持ちが、あなたの魅力や活力をさらに高めるでしょう。心を開いて素直な感情を表現することが、人間関係にも良い影響を与えます。自信と感謝の気持ちが、周囲を照らす存在としての力を引き出します。",
        reversedComment: "楽観的になりすぎると現実を見失うかもしれません。勢いだけで進むのではなく、謙虚な姿勢を持って状況を見つめ直すことが大切です。過度な自信や焦りは、思わぬ誤解やトラブルにつながる可能性があります。"
      },
      {
        name: "審判",
        meaning: "目覚め、再生、評価",
        img: "card7/20.jpg",
        comment: "過去の努力が実を結び、新しい段階へ進むときです。あなた自身の可能性に気づき、再スタートを切る準備が整っています。覚悟をもって次の扉を開いてください。失敗から学び、再び立ち上がることで人生の流れが大きく変化します。",
        reversedComment: "過去への後悔が前進を妨げています。評価や結果に縛られず、今の自分を認めることが再生への第一歩です。自己否定にとらわれず、自分の価値を見直すことで新しい可能性が開かれていくでしょう。"
      },
      {
        name: "世界",
        meaning: "達成、完成、新たな旅立ち",
        img: "card7/21.jpg",
        comment: "大きな達成感を得るでしょう。今までの努力が実を結び、ひとつの区切りを迎えます。次の旅立ちに向けた準備も整いつつあり、新たな成長のステージが始まります。自信を持って前進し、完成の喜びを次の挑戦へとつなげてください。",
        reversedComment: "完成直前で足踏みしそうな気配。もう少しの努力と集中力が、成功への扉を開きます。途中で諦めずに粘り強く進むことで、長く追い求めた目標が手に届く瞬間が訪れます。"
      }
    ];
    function showTarot(isRandom = false) {
      const zodiac = document.getElementById("zodiac")?.value || "ランダム";
      let index, isReversed;

      if (isRandom || zodiac === "ランダム" || zodiac === "") {
        index = Math.floor(Math.random() * tarotCards.length);
        isReversed = Math.random() < 0.5 ? "正位置" : "逆位置";
      } else {
        const now = new Date();
        const key = `${now.getFullYear()}-${now.getMonth() + 1}-${zodiac}`;
        let hash = 0;
        for (let i = 0; i < key.length; i++) {
          hash = key.charCodeAt(i) + ((hash << 5) - hash);
        }
        index = Math.abs(hash) % tarotCards.length;
        isReversed = hash % 2 === 0 ? "正位置" : "逆位置";
      }

      const card = tarotCards[index];
      const meaning = isReversed === "正位置" ? card.meaning : `逆位置: ${card.meaning}の課題`;
      const comment = isReversed === "正位置" ? card.comment : card.reversedComment || "逆位置の解釈が未登録です。";

      document.getElementById("result").innerHTML = `
    <div class="card-text"><strong>${zodiac} の ${new Date().getMonth() + 1}月の運勢</strong></div>
    <br>
    <img class="card-img" src="${card.img}" alt="${card.name}" style="${isReversed === '逆位置' ? 'transform: rotate(180deg);' : ''}"><br>
    <div class="card-text">カード: ${card.name} (${isReversed})</div>
    <div class="card-text">${meaning}</div>
    <div class="card-text" style="font-weight: bold;">${comment}</div>
  `;
      if (!isRandom) {
        document.getElementById("result").scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }



    document.addEventListener("DOMContentLoaded", () => {
      showTarot(true); // ← ランダム表示を強制
    });

  </script>

  <script>
    document.addEventListener("contextmenu", function (e) {
      e.preventDefault();
    });
    document.addEventListener("dragstart", function (e) {
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




