<?php require_once 'counter.php'; track_page_view(basename(__FILE__, '.php')); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>今年の星座別タロット占い | 大アルカナで診断する未来のメッセージ | 占いアルカノヴァ</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CX0Q57RVS9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-CX0Q57RVS9');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Evita Designart">
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6729293840967461"
    crossorigin="anonymous"></script>
  <meta name="description" content="あなたの今年の運勢を星座別にタロットで占います。大アルカナカードによる詳細な解説で、愛、仕事、全体運を読み解く特別なメッセージをお楽しみください。">
  
  <meta property="og:image" content="https://evitadesignart.com/horo/img/ogp.jpg">
  <!-- OGP（Open Graph Protocol） -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="今年の星座別タロット占い | 大アルカナで診断する未来のメッセージ" />
  <meta property="og:description" content="あなたの今年の運勢を星座別にタロットで占います。大アルカナカードによる詳細な解説で、愛、仕事、全体運を読み解く特別なメッセージをお楽しみください。" />
  <meta property="og:url" content="https://evitadesignart.com/horo/tarotte6.php" />
  <meta property="og:site_name" content="Evita Designart" />

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "このタロット占いは無料で利用できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、当サイトの星座別タロット占いはすべて無料でご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "占い結果は毎年変わりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。選んだ星座と西暦ごとに自動で占い結果が決まるため、年ごとに異なるメッセージが表示されます。"
      }
    },
    {
      "@type": "Question",
      "name": "正位置と逆位置にはどんな違いがありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "正位置はカード本来の意味を表し、逆位置はその裏側や課題、注意点を表すことがあります。"
      }
    },
    {
      "@type": "Question",
      "name": "スマートフォンでも利用できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。スマートフォン・タブレット・パソコンのすべてで快適にご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "星座を選ばなくても占えますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。星座を選ばずに占うと、ランダムで今年の運勢が表示されます。"
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
      display: inline-block;
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
      color: #f5f5f5;
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
      <h1>今年の星座別<br class="md:hidden"> タロット占い</h1>
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
    <img src="img/fv_tarotte6.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
    <div class="badge-container"><span class="badge-type">占星術</span><span class="badge-type">星占い</span><span class="badge-type">タロット占い</span><span class="badge-type">年間</span></div>
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
  <a href="https://evitadesignart.com/horo/#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
  <a href="https://evitadesignart.com/horo/#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
  <a href="https://evitadesignart.com/horo/#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
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
  <button onclick="showYearlyTarot()">占う</button>

  <p> 星座を選んで「占う」を押すと、<br class="md:hidden"> あなたの今年の<br class="md:hidden"> 運勢が表示されます。</p>
  <div id="result"></div>

  <p>
    イラストなどは <a href="https://nano-design.booth.pm/">BOOTH</a>、<a
      href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
      href="https://pixabay.com/users/51249745/">Pixabay</a> にて販売中です。
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

    <small>&copy;2016 - <span id="currentYear"></span> Evita Designart.</small>
  </footer>

  <script>

    const tarotCards = [
      {
        "name": "愚者",
        "meaning": "自由、冒険、無限の可能性",
        "img": "card7/00.jpg",
        "comment": "この一年は、これまでの常識や枠にとらわれず、自由な発想と大胆な行動が運気を切り開く鍵となります。思いがけないチャンスや新しい出会いがあなたを刺激し、人生に新たな展開が生まれるでしょう。周囲の目を気にせず、自分の内なる声に従って行動することで、未知の世界へと踏み出すことができます。好奇心を大切にしながら、リスクを恐れず一歩を踏み出す勇気を持ちましょう。柔軟さと軽やかさが大きな可能性を引き寄せる一年となるはずです。",
        "reversedComment": "この一年は、計画性のなさや無鉄砲な行動がトラブルを引き寄せる暗示があります。自由を履き違えて無責任な態度をとると、信頼を失ったり大切なものを見落とす可能性も。思いつきで動く前に、一度立ち止まって状況を見極めることが大切です。また、現実逃避に走りたくなる場面もあるかもしれませんが、地に足をつけて着実に行動する意識を持つことで、思わぬ落とし穴を避けることができます。"
      },
      {
        "name": "魔術師",
        "meaning": "創造、才能、スタート",
        "img": "card7/01.jpg",
        "comment": "この一年は、新たな才能やアイデアを活かして、自分の世界を切り拓くスタートの年となるでしょう。あなたの中に眠る能力が開花し、仕事や趣味、人間関係においてもポジティブな変化が起こりやすくなります。自信を持って取り組めば、さまざまな分野で周囲の注目を集めることができるでしょう。始まりを告げる運気に乗り、迷わず行動を起こすことで、成果につながる可能性が高まります。思いつきや直感が成功の鍵となる一年です。",
        "reversedComment": "この一年は、表面的なスキルやうわべだけの行動に注意が必要です。自己演出ばかりに気を取られると、信頼を失う結果になりかねません。また、やる気はあっても行動が伴わず、チャンスを逃してしまうこともあるでしょう。今は焦って結果を出そうとせず、自分の足元を固めることに集中すべきときです。実力を養い、信頼を積み重ねることで、本当の力を発揮できるようになります。"
      },
      {
        "name": "女教皇",
        "meaning": "知恵、直感、静寂",
        "img": "card7/02.jpg",
        "comment": "この一年は、外向きの活動よりも内面の深まりがテーマとなる時期です。感情を抑えて冷静に物事を見つめることで、自然と正しい判断ができるようになります。静かな環境で本を読んだり、自分と対話する時間を意識的に持つことで、精神的な成長が促されます。また、他人に流されず、自分の価値観を大切にする姿勢が大切です。表には見えにくい直感力や洞察力が高まり、見えない部分にこそ真実があると気づける一年になるでしょう。",
        "reversedComment": "この一年は、感情に支配されたり、思い込みで判断してしまいやすい傾向があります。理性と直感のバランスを崩すと、誤解やすれ違いが生じやすくなるでしょう。また、閉鎖的になりすぎて他人との距離が開いてしまうことも。自分だけの世界にこもらず、時には周囲の意見に耳を傾け、客観的な視点を持つことが大切です。知識や情報を独占せず、必要なときには共有する柔軟さも求められる一年です。"
      },
      {
        "name": "女帝",
        "meaning": "豊かさ、愛情、実り",
        "img": "card7/03.jpg",
        "comment": "この一年は、あなたの周囲に豊かさと実りがもたらされる幸運な時期です。愛情面や人間関係では、温かく穏やかな絆が深まり、家庭や恋愛においても心が満たされるような出来事が起こるでしょう。創造的な活動にも適しており、あなたの感性やセンスが周囲から評価される場面もありそうです。育ててきたものが大きく花開く時期なので、安心感と共に物事をゆっくりと育てていく姿勢が大切です。物質面でも精神面でも、豊かさを感じられる一年です。",
        "reversedComment": "この一年は、感情が過剰になったり、甘えや依存に注意が必要です。愛情を求めるあまり、相手に期待しすぎたり、思い通りにならないことに不満を抱きやすくなるかもしれません。また、浪費や無計画な消費にも注意が必要です。目先の快楽に流されず、地に足のついた判断を心がけましょう。自分の価値を外からの評価で決めるのではなく、内面の充実を第一に考えることで、再びバランスを取り戻せます。"
      },
      {
        "name": "皇帝",
        "meaning": "支配、安定、責任",
        "img": "card7/04.jpg",
        "comment": "この一年は、安定と実行力がテーマとなる年です。仕事や家庭などでリーダーシップを発揮する場面が増え、あなたの決断力や責任感が試されることになるでしょう。物事を具体的に形にしていく力が高まり、周囲からの信頼も厚くなります。ブレない姿勢と秩序ある行動が成果につながりやすい一年なので、目標に向かってしっかりとした計画を立てて実行することが重要です。信念を貫く強さが、あなたを成功に導く原動力となるでしょう。",
        "reversedComment": "この一年は、頑固さや支配欲が強く出てしまい、周囲との軋轢を生む可能性があります。自分の考えに固執するあまり、他人の意見を受け入れられなくなると孤立してしまうことも。過剰な責任感やプレッシャーで心身が疲弊しやすいため、適度な休息と柔軟な思考を意識することが大切です。自分一人で抱え込まず、信頼できる人に相談することで、状況が好転しやすくなります。"
      },
      {
        "name": "法王",
        "meaning": "伝統、信頼、助言",
        "img": "card7/05.jpg",
        "comment": "この一年は、伝統や社会的ルールとの調和を意識しながら生きることで、安定した運気が流れてきます。学びや精神的な成長に関心が向きやすく、尊敬できる人物や師との出会いが人生に良い影響を与えてくれるでしょう。周囲との信頼関係を築くことができれば、人とのつながりが豊かな実りをもたらします。自分自身も周囲にとっての導き手となれる一年であり、誠実な行動が信頼を深めるカギとなります。",
        "reversedComment": "この一年は、頑なに伝統やルールにこだわりすぎると、かえって停滞を招いてしまう恐れがあります。他人の価値観を否定したり、自分の考えを一方的に押し付けてしまうと、周囲との関係に亀裂が生じやすくなります。型にはまりすぎず、柔軟な考え方を取り入れることが求められる年です。助言を求めることに抵抗を感じるかもしれませんが、素直な気持ちで他者の意見に耳を傾けることが状況改善のきっかけとなるでしょう。"
      },
      {
        "name": "恋人",
        "meaning": "選択、愛、調和",
        "img": "card7/06.jpg",
        "comment": "この一年は、重要な選択やパートナーシップに関する出来事が多くなりそうです。恋愛や人間関係において心が通じ合う相手との関係が深まったり、人生の分岐点となるような出会いや決断が訪れる可能性があります。直感と感情のバランスを取りながら、自分にとって本当に大切なものを見極めることが重要です。迷いがあっても、自分の本音と向き合うことで、調和のとれた道が見えてくるでしょう。",
        "reversedComment": "この一年は、優柔不断や他人に流されやすい傾向が強く出てきそうです。重要な選択の場面で自分の気持ちに自信が持てず、結果として後悔する可能性もあります。また、人間関係で誤解やすれ違いが起きやすく、信頼のバランスが崩れることも。感情に振り回されず、冷静な判断を心がけることで、関係性の修復やより良い選択につながるはずです。"
      },
      {
        name: "戦車",
        meaning: "前進、勝利、意志",
        img: "card7/07.jpg",
        comment: "この一年、あなたの意志と行動力が試される場面が多く訪れるでしょう。目標に向かって迷わず突き進むことで、大きな成果を手にする可能性があります。特に仕事や勉強、新たなチャレンジにおいては、あなたのリーダーシップと決断力が成功の鍵となります。周囲からの信頼も厚くなり、あなた自身が周囲を牽引していく存在となるでしょう。ただし、自信過剰や独断専行にならないよう、他者とのバランスにも注意が必要です。冷静さと柔軟性を併せ持てば、困難も力強く乗り越えられる一年となります。",
        reversedComment: "この一年は、感情に突き動かされる場面や衝動的な判断が増えやすくなります。自分の意志だけを優先して進もうとすると、周囲との摩擦や誤解を招きやすくなるため注意が必要です。強引な進め方は一時的な成果をもたらすかもしれませんが、後々トラブルの火種となる可能性も。冷静に全体を見渡し、時には立ち止まる勇気も持ちましょう。また、他人の意見を柔軟に受け入れることで、新たな視点や解決策が見えてきます。行動よりも“調整力”が求められる一年となりそうです。"
      },
      {
        "name": "力",
        "meaning": "内なる強さ、忍耐、優しさ",
        "img": "card7/08.jpg",
        "comment": "この一年、あなたの内面の強さと精神的な安定が大きなテーマになります。困難な状況に直面しても、慌てず騒がず、穏やかに対応することで周囲の信頼を得ることができます。誰かに優しくすることで自分自身も癒されるような経験を重ね、あなたの魅力がさらに輝きを増していくでしょう。時に感情を抑える場面もあるかもしれませんが、それが逆に人間関係を円滑にし、信頼関係を深めるきっかけになります。派手さはなくとも、着実に前進していける安定した一年になりそうです。",
        "reversedComment": "この一年は、心のバランスを崩しやすく、自分の中の不安や焦りと向き合う必要が出てくるでしょう。些細なことに過敏になったり、思い通りに進まないことにイライラしてしまうかもしれません。大切なのは、まず自分の心を認め、整えること。感情を抑え込むのではなく、丁寧に扱うことが求められます。周囲の言動に影響されすぎず、自分のペースを保つことが、回復と成長への近道となります。"
      },
      {
        "name": "隠者",
        "meaning": "探求、内省、静寂",
        "img": "card7/09.jpg",
        "comment": "この一年は、あなた自身と深く向き合うことに価値があります。表面的な成功よりも、本質的な問いに答えを出すことがテーマになるでしょう。忙しい日々の中で、意識的に一人の時間をつくることで、心が整い、自分にとって本当に大切なものが見えてきます。周囲と距離を取ることが、悪い意味ではなく、再び前に進むための準備期間になることもあります。内省を深めることで、精神的な成熟と、次なる成長の足がかりを得られる一年になるでしょう。",
        "reversedComment": "この一年は、孤立感や閉塞感を感じやすくなるかもしれません。物理的な孤独というよりも、心が誰とも通じ合えないような感覚に陥ることがあるでしょう。しかしそれは、あなたが心の深い部分と向き合っている証でもあります。他人に頼ることを恐れず、自分の気持ちを言葉にしてみることが大切です。殻に閉じこもるのではなく、静かな対話を通して再び世界とのつながりを築いていくことで、心の風通しが良くなるでしょう。"
      },
      {
        "name": "運命の輪",
        "meaning": "転機、チャンス、変化",
        "img": "card7/10.jpg",
        "comment": "この一年は、思いもよらないチャンスや出会いが訪れ、人生の流れが大きく変わる可能性を秘めています。流れに身を任せる柔軟さが、成功へのカギとなるでしょう。計画通りに進まないこともあるかもしれませんが、それがむしろ好転のきっかけになることも。特に人間関係や仕事面で、タイミングよく物事が動くことがあり、運命的な出来事を感じる瞬間もあるでしょう。自分の直感を信じ、流れに逆らわず行動することで、良い巡り合わせをつかめる一年になりそうです。",
        "reversedComment": "この一年は、変化への恐れや過去への執着が原因で、チャンスを逃しやすくなるかもしれません。物事が思うように進まず、停滞感を覚える場面もありますが、それは次のステージに進む準備期間と捉えてください。焦って結果を出そうとするよりも、じっくりと今を見つめ直すことで、新たな可能性が見えてきます。流れに逆らうのではなく、小さな変化を受け入れる姿勢が、再び運を味方にするポイントとなります。"
      },
      {
        "name": "正義",
        "meaning": "公平、バランス、判断",
        "img": "card7/11.jpg",
        "comment": "この一年は、公平な判断とバランスのとれた思考が重要になります。物事を感情ではなく冷静な視点で捉えることで、正しい道が自然と見えてくるでしょう。トラブルや対立が起きたとしても、誠実で正直な対応をすることで、信頼を築くことができます。特に仕事や人間関係において、責任感と公正さがあなたをサポートしてくれるでしょう。正しい判断力を保つためにも、心と身体の調和を意識し、無理をしすぎないように心がけてください。",
        "reversedComment": "この一年は、偏った判断や感情的な対応がトラブルを招く恐れがあります。自分の意見を押し通そうとすると、周囲との摩擦が生まれやすくなります。視野が狭くなっていると感じたら、一度立ち止まって多角的に物事を見る習慣をつけましょう。また、物事を白黒ではなくグラデーションで捉える柔軟さも求められます。正しさにこだわりすぎず、人の立場や背景にも目を向けることで、新しい理解が得られる一年になるはずです。"
      },
      {
        "name": "吊るされた男",
        "meaning": "犠牲、内面的成長、視点の転換",
        "img": "card7/12.jpg",
        "comment": "この一年は、すぐに結果を求めるよりも、じっくりと物事に向き合うことで深い学びを得られる時期となるでしょう。一見、前に進んでいないように見えるかもしれませんが、内面的な成長が確実に進んでいます。状況を変えるよりも、視点を変えることにより、これまで見えていなかった価値や意味に気づくことができます。周囲に理解されなくても、自分なりの信念を持って静かに前進する姿勢が、やがて大きな成果へと繋がっていくでしょう。",
        "reversedComment": "この一年は、我慢や自己犠牲が報われないと感じる場面が増えるかもしれません。やるべきことをこなしているはずなのに、結果が出ずに疲れてしまうこともあるでしょう。そんなときこそ、自分が本当に納得してその道を選んでいるのかを見つめ直してみてください。もしも義務感や他人の期待に縛られているなら、その枷を外すことが成長の第一歩です。無理に耐えるのではなく、自分に優しくなる選択を意識してみましょう。"
      },
      {
        "name": "死神",
        "meaning": "終わりと始まり、変容、刷新",
        "img": "card7/13.jpg",
        "comment": "この一年は、何かを終わらせることで新たな可能性が開ける時期です。手放すことは怖いことのように思えるかもしれませんが、実はそれこそが未来への扉を開く鍵なのです。過去の習慣や執着を整理し、不要なものをそぎ落とすことで、本当に必要なものが見えてきます。新しい生き方や考え方を受け入れる柔軟性を持つことで、人生の方向性に大きな変化が訪れるでしょう。恐れず、変化を味方にすることが成長の近道です。",
        "reversedComment": "この一年は、過去への執着や古い価値観が変化の足を引っ張る傾向があります。変わることに対する恐れが、新たな可能性を遠ざけてしまうかもしれません。現状に不満を感じながらも行動に移せないというジレンマに陥りやすいため、自分の中の“変わりたくない”という気持ちと向き合うことが求められます。少しずつでも良いので、古い習慣や考え方を見直し、前向きな一歩を踏み出していく意識が重要な一年となるでしょう。"
      },
      {
        "name": "節制",
        "meaning": "調和、バランス、柔軟性",
        "img": "card7/14.jpg",
        "comment": "この一年は、物事のバランスを大切にしながら過ごすことで、心と体の安定が得られるでしょう。無理に進もうとせず、自然の流れに身を任せることが結果的に最良の選択につながります。対人関係でも、自分と相手の間に心地よい距離感を保つことで、摩擦の少ない関係を築けそうです。急ぎすぎず、焦らず、ゆったりとしたペースで生活を整えることで、大きなトラブルを未然に防ぎ、精神的にも満たされた時間を過ごせる一年となるでしょう。",
        "reversedComment": "この一年は、バランスを崩しやすく、無理をしすぎてしまう傾向があります。極端な行動や考え方が心身の疲れにつながるため、柔軟な視点と調整力が求められます。予定を詰めすぎたり、人に合わせすぎたりすると、自分自身が見えなくなることも。必要なのは、自分のリズムを取り戻すこと。すべてを完璧にこなそうとせず、適度なゆるさを許すことで、気持ちにも余裕が生まれ、より良い一年を築くことができます。"
      },
      {
        "name": "悪魔",
        "meaning": "欲望、執着、依存",
        "img": "card7/15.jpg",
        "comment": "この一年は、何かに強く惹かれたり、依存的な傾向が強まりやすい時期です。魅力的な誘惑や快楽に対して、自分自身の意思で線引きをする力が試されます。一時的な快感に身を委ねるのではなく、長期的に見て自分にとってプラスになるかどうかを考える必要があります。人間関係や金銭面、習慣など、依存心が強まる対象には注意を払いましょう。自分をコントロールする力を意識的に育てることで、自由で充実した時間を手にすることができる一年になります。",
        "reversedComment": "この一年は、今まで囚われていたものから解放されるタイミングが訪れます。自分を縛っていた執着や恐れに気づき、それらを手放すことができれば、大きな精神的自由を得ることができるでしょう。不健全な関係性や生活習慣、思考パターンを見直すことで、本来の自分らしさを取り戻すチャンスでもあります。抜け出せないと思っていた状況も、意外と自分の意志で変えられることに気づくでしょう。"
      },
      {
        "name": "塔",
        "meaning": "崩壊、衝撃、再構築",
        "img": "card7/16.jpg",
        "comment": "この一年は、思いがけない出来事や急激な変化に見舞われる可能性があります。最初は混乱を招くかもしれませんが、それは古い価値観や不安定な土台が崩れ、新たなステージへと進むための必要なプロセスです。壊れることを恐れず、その中にこそ新しい可能性や再出発のチャンスがあると受け止めてください。柔軟に対応し、そこから学びを得る姿勢が、長期的に見てあなたをより強く成長させてくれる一年となるでしょう。",
        "reversedComment": "この一年は、変化を恐れるあまり、本来必要な転機を先延ばしにしてしまいがちです。現状にしがみつくことで、余計にストレスが溜まり、後になって大きな揺れを引き起こす可能性があります。壊れることは決して悪いことではなく、次の土台を築くための準備と考えることが大切です。抵抗よりも受け入れを選ぶことで、ダメージを最小限に抑え、より良い未来への道筋が開ける一年になるでしょう。"
      },
      {
        "name": "星",
        "meaning": "希望、癒し、未来",
        "img": "card7/17.jpg",
        "comment": "この一年は、未来に対する希望と癒しのエネルギーに包まれます。苦しかった過去を乗り越え、ようやく前向きな気持ちで歩き出せるようになるでしょう。夢や目標を具体的に思い描き、それに向かって一歩一歩近づいていける時期でもあります。心の余裕が生まれることで、他人にも優しくなれ、良い人間関係が築かれていくでしょう。焦らず、自分のペースで理想を形にしていく姿勢が大切です。",
        "reversedComment": "この一年は、理想ばかりを追い求めることで現実とのギャップに苦しむ傾向があります。夢や希望を持つことは素晴らしいですが、それに固執しすぎると、目の前の現実が見えにくくなってしまいます。今ある幸せに気づき、まずは足元を固めることが、未来への第一歩になります。空想の世界に逃げず、現実とのバランスを意識して過ごすことで、結果的に理想にも近づける一年となるでしょう。"
      },
      {
        "name": "月",
        "meaning": "不安、幻想、直感",
        "img": "card7/18.jpg",
        "comment": "この一年は、感情が揺れやすく、不確かなことへの不安や迷いが心に浮かびやすいかもしれません。しかし、その不安の裏には、あなたの直感が重要なメッセージを伝えている可能性があります。表面的な情報に惑わされず、心の声に耳を傾けることが大切です。夢や直感を軽視せず、自分の中の感覚を信じることで、見えなかった道が開けてくるでしょう。芸術的な感性や精神世界への興味が高まる年でもありますので、内面の世界を豊かに育てていくことがテーマです。",
        "reversedComment": "この一年は、疑念や誤解に振り回されやすくなりそうです。人の言葉を過度に信じすぎたり、自分の感情に呑まれて判断を誤ることもあるかもしれません。幻想に囚われることで、現実から目を逸らす傾向が強くなりがちです。冷静に事実を確認し、物事を客観的に見る習慣をつけることで、感情に飲み込まれるリスクを減らせます。不安の正体を見極め、そこから目を背けない姿勢が、あなたを一段と成長させてくれる一年になるでしょう。"
      },
      {
        "name": "太陽",
        "meaning": "喜び、成功、祝福",
        "img": "card7/19.jpg",
        "comment": "この一年は、これまでの努力が実を結び、喜びにあふれた時間を過ごせる明るい運気となるでしょう。あなたのポジティブなエネルギーが周囲にも良い影響を与え、思わぬサポートやチャンスが舞い込んできます。自信を持って前に進めば、達成感や祝福される出来事に恵まれやすく、心からの笑顔で過ごせる時間が増えていきます。明るさと感謝の気持ちを忘れずにいることで、周囲との信頼関係もさらに深まっていく一年となるでしょう。",
        "reversedComment": "この一年は、期待しすぎるがゆえに現実とのギャップに戸惑ったり、成功を急ぎすぎてしまう傾向があります。ポジティブさが空回りしてしまうこともあるかもしれません。大切なのは、今ある幸せや小さな成果にしっかりと目を向け、そこに感謝できる心を育てることです。必要以上に目立とうとせず、自分らしい輝きを内側から放つ意識が大きな成果につながる鍵となります。"
      },
      {
        "name": "審判",
        "meaning": "覚醒、再生、再評価",
        "img": "card7/20.jpg",
        "comment": "この一年は、過去の経験を活かして新たなステージへと踏み出す再生の年となるでしょう。自分の過去の選択や出来事を改めて見つめ直し、そこから学んだことを糧に未来を切り開いていけるタイミングです。思いがけない再会や、以前取り組んでいたことが再び動き出す兆しもあります。失敗から得た教訓を前向きに活かし、過去の自分を許し、受け入れることで、心が軽くなり、本当の意味での覚醒が訪れる一年になるでしょう。",
        "reversedComment": "この一年は、過去の失敗や後悔にとらわれすぎて、なかなか前に進めない状態に陥りがちです。自分を責めたり、過去の選択に執着することで、チャンスを見逃してしまう恐れがあります。必要なのは、過去を悔いることではなく、そこから何を学び、どう生きていくかを見つめ直すことです。心の整理を行い、自分自身に対する赦しと再評価を通じて、ようやく新たな一歩を踏み出す準備が整う一年となるでしょう。"
      },
      {
        "name": "世界",
        "meaning": "完成、統合、達成",
        "img": "card7/21.jpg",
        "comment": "この一年は、これまで積み重ねてきた努力が形になり、充実感と達成感に満ちた時間が訪れるでしょう。長く追いかけてきた目標がついに実現し、ひとつの物語に終止符を打つような感覚を味わえるかもしれません。また、次のステージへ向けた新たな扉が開かれるタイミングでもあります。完成されたものに安心せず、新しい世界に対しても柔軟な姿勢を持ち続けることで、さらなる飛躍の年となるでしょう。",
        "reversedComment": "この一年は、完成目前で気が緩んだり、あと一歩が踏み出せない状態に陥りやすい時期です。目標に手が届きそうなのに、自信をなくしてしまったり、準備不足で足踏みすることもあるかもしれません。そんなときこそ、今まで積み上げてきた自分の歩みを信じることが大切です。途中で諦めず、最後までやり抜くことが、未来の自分への最大のプレゼントになるでしょう。"
      }
    ];
    function showYearlyTarot(random = false) {
      let zodiac = document.getElementById("zodiac").value;
      const now = new Date();
      let key;
      if (random || zodiac === "") {
        zodiac = "ランダム";
        key = `${now.getFullYear()}-${Math.random()}`;
      } else {
        key = `${now.getFullYear()}-${zodiac}`;
      }

      let hash = 0;
      for (let i = 0; i < key.length; i++) {
        hash = key.charCodeAt(i) + ((hash << 5) - hash);
      }

      const index = Math.abs(hash) % tarotCards.length;
      const card = tarotCards[index];
      const isReversed = hash % 2 !== 0;
      const orientation = isReversed ? "逆位置" : "正位置";
      const meaning = isReversed ? `逆位置: ${card.meaning}の課題` : card.meaning;
      const comment = isReversed ? card.reversedComment : card.comment;

      // GA4 トラッキング
      if (typeof gtag === 'function') {
        gtag('event', 'select_tarot', {
          'card_name': card.name,
          'position': orientation
        });
      }
      const rotation = isReversed ? 'style="transform: rotate(180deg);"' : '';

      document.getElementById("result").innerHTML = `
    <div class="card-text"><strong>${zodiac} の ${now.getFullYear()}年の運勢</strong></div>
    <br>
    <img class="card-img" src="${card.img}" alt="${card.name}" ${rotation}><br>
    <div class="card-text">カード: ${card.name}（${orientation}）</div>
    <div class="card-text">${meaning}</div>
    <div class="card-text" style="font-weight: bold;">${comment}</div>
  `;
      

      if (!random) {
        // Share
      const shareUrl = encodeURIComponent("https://evitadesignart.com/horo/" + window.location.pathname.split('/').pop());
      let titleText = document.title.split('|')[0].trim();
      let snippetText = "";
      if(typeof resultDiv !== 'undefined' && resultDiv) {
          snippetText = resultDiv.innerText.replace(/\n/g, '').substring(0, 50) + '...';
      } else {
          // fallback: try to grab from result element
          let el = document.getElementById("result");
          if(el) {
              snippetText = el.innerText.replace(/\n/g, '').substring(0, 50) + '...';
          }
      }
      
      snippetText = snippetText.replace(/^【(正位置|逆位置)】\s*/g, '').replace(/^(正位置|逆位置)\s*/g, '');
      // Convert titleText "カード名【正位置】" to "#カード名 #正位置"
      shareText = encodeURIComponent((zodiac !== 'ランダム' ? "#" + zodiac + " " : "") + "#" + card.name + " #" + (isReversed === true || isReversed === "逆位置" ? "逆位置" : "正位置") + " #タロット占い \n" + snippetText + " | 占いアルカノヴァ");
      
      
      fetch('log_tarot.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ 
              card_name: card.name.replace(/（.*$/, ""), 
              position: (isReversed === true || isReversed === "逆位置") ? "逆位置" : "正位置" 
          })
      }).catch(e => console.error(e));

      const shareHtml = `
        <div id="result-share-buttons" style="margin-top: 20px; display: flex; justify-content: center; gap: 10px;">
        <a href="https://twitter.com/intent/tweet?url=${shareUrl}&text=${shareText}" class="sns-x" title="X (Twitter)でシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#000;color:#fff;text-decoration:none;"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=${shareUrl}" class="sns-fb" title="Facebookでシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#1877F2;color:#fff;text-decoration:none;"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://line.me/R/msg/text/?${shareText}%20${shareUrl}" class="sns-line" title="LINEでシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#06C755;color:#fff;text-decoration:none;"><i class="fa-brands fa-line"></i></a>
        <a href="https://bsky.app/intent/compose?text=${shareText}%20${shareUrl}" class="sns-bsky" title="Blueskyでシェア" style="display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:#0085ff;color:#fff;text-decoration:none;"><i class="fa-brands fa-bluesky"></i></a>
        </div>
      `;
      document.getElementById("result").innerHTML += shareHtml;
      document.getElementById("result").scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }


    document.getElementById("currentYear").textContent = new Date().getFullYear();

    // ページ読み込み時にランダム表示
    document.addEventListener("DOMContentLoaded", () => {
      showYearlyTarot(true);
    });
  </script>

  <script>
    document.addEventListener("contextmenu", function (e) { e.preventDefault(); });
    document.addEventListener("dragstart", function (e) { e.preventDefault(); });
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




