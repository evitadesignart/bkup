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
  <title>今週の星座別タロット占い | 大アルカナで見る運勢メッセージ</title>
  <meta name="description" content="毎週の運勢を星座別にタロットカードで占います。大アルカナカードによる詳細メッセージで、あなたの未来へのヒントを受け取りましょう。">
  <!-- OGP（Open Graph Protocol） -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="今週の星座別タロット占い | 大アルカナで見る運勢メッセージ" />
  <meta property="og:description" content="毎週の運勢を星座別にタロットカードで占います。大アルカナカードによる詳細メッセージで、あなたの未来へのヒントを受け取りましょう。" />
  <meta property="og:url" content="https://evitadesignart.com/tarotte7.php" />
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
      "name": "占いの結果は毎週変わりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。占い結果は毎週の週番号と星座を元にして算出され、週ごとに固定されたカードが表示されます。"
      }
    },
    {
      "@type": "Question",
      "name": "正位置と逆位置にはどんな違いがありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "正位置はカード本来のポジティブな意味を表し、逆位置はその裏側や課題・注意点などを示します。"
      }
    },
    {
      "@type": "Question",
      "name": "スマートフォンでも利用できますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。スマートフォン・タブレット・PCのどの端末でも快適にご利用いただけます。"
      }
    },
    {
      "@type": "Question",
      "name": "星座を選ばずに占うことはできますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい。ページ読み込み時にランダムな星座が自動で選ばれて表示される初期占い機能があります。"
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
      display: inline-block;
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
    background-attachment: fixed;
  }
  @media screen and (max-width: 768px) {
    .parallax-bg-section, .nav-parallax-bg {
      background-attachment: scroll !important;
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
      <h1>今週の星座別タロット占い</h1>
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
    <img src="img/fv_tarotte7.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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

  <button onclick="showWeeklyTarot()">占う</button>

  <p>星座を選んで「占う」を押すと、<br class="md:hidden"> 今週のあなたの<br class="md:hidden"> 運勢が表示されます。</p>
  <div id="result"></div>

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

    <small>&copy;2016 - <span id="currentYear"></span> Evita Designart.</small>
  </footer>

  <script>
    const tarotCards = [
      {
        name: "愚者",
        meaning: "自由、新しい始まり",
        img: "card6/00.png",
        comment: "自由な選択と冒険心が試される週です。思い切って新しい一歩を踏み出しましょう！これまでの固定観念や制限から自分を解放し、未知の世界に飛び込むことで、想像以上の発見やチャンスが広がります。直感と好奇心を信じて動くことで、思いがけない出会いや展開にも恵まれるでしょう。ただし、無計画になりすぎず、最低限の準備も忘れずに。旅の始まりには心の余白が大切です。",
        commentReversed: "自由さが裏目に出やすい週。無鉄砲な行動や軽率な判断に注意しましょう。勢いで始めたことが途中で頓挫したり、誤解を招く恐れがあります。浮ついた気持ちになりやすいため、しっかりと現実を見据えた行動を意識して。冒険心も大切ですが、常識や責任感とのバランスを保つことが鍵です。"
      },
      {
        name: "魔術師",
        meaning: "創造、意志",
        img: "card6/01.png",
        comment: "創造的なアイデアが生まれやすい週。新しいことをスタートする絶好のタイミングです。頭の中で描いていた計画や夢を、実際に形にしていくための力が今あなたの中にあります。自分の可能性を信じて行動することで、周囲にも影響を与え、良い流れを引き寄せます。特に仕事や学習、新しい趣味のスタートに最適です。集中力が高まりやすいため、目標を明確にして動くと成果につながります。",
        commentReversed: "本質を見失いやすい週。見かけや言葉だけで取り繕おうとすると、信頼を失う可能性があります。自信過剰や強引なやり方に注意し、足元をしっかりと固めてから動き出すことが大切です。アイデア先行で中身が伴わないと感じたら、一度立ち止まって計画を見直してみましょう。"
      },
      {
        name: "女教皇",
        meaning: "直感、精神性",
        img: "card6/02.png",
        comment: "内面に目を向け、自分の感情を整理すると吉。冷静な判断が鍵です。今週は表面的な言動よりも、心の奥底にある本当の気持ちに気づくことがテーマとなります。人間関係や選択の場面では、他人の意見に流されず、自分の直感に従って判断を。無理に動くよりも、静かに観察する姿勢が運気を安定させます。本や音楽など、感性を刺激するものに触れる時間を持つと、精神的な浄化と癒しにもつながるでしょう。",
        commentReversed: "感情に支配されやすく、直感も鈍りがち。周囲に対して閉鎖的になったり、独断的な判断をしやすい週です。バランスを欠くことで精神的に不安定になる恐れもあるため、落ち着いて自分の気持ちを見つめ直し、客観的な視点を意識することが大切です。"
      },
      {
        name: "女帝",
        meaning: "愛、成長",
        img: "card6/03.png",
        comment: "愛情を育み、人との絆を深めることが大切な週。思いやりを意識して過ごして。あなたの優しさや包容力が周囲に伝わり、家庭や恋愛、友人関係などに温かな波紋を広げていきます。心を開いてコミュニケーションを取ることで、相手との距離も自然と縮まるでしょう。創造性や感性も高まっているため、アートや美容など感覚を使うことにも積極的に取り組むと、自分自身も豊かさを実感できそうです。",
        commentReversed: "依存や甘やかしすぎに注意。無意識に他人に尽くしすぎたり、自分の価値を他人からの評価に委ねてしまうことがあるかもしれません。愛情のバランスを見直し、自分自身へのケアも大切にしましょう。満たされない感情に流されず、自立した愛の形を意識してみてください。"
      },
      {
        name: "皇帝",
        meaning: "力、責任",
        img: "card6/04.png",
        comment: "リーダーシップを発揮するチャンス。強い意志で周囲を導いてください。あなたの言動に説得力と影響力が備わる週です。責任ある立場を任されることや、周囲から頼られる場面も増えそう。ブレない信念を持って行動すれば、多くの信頼を得られます。ただし頑固になりすぎず、柔軟性も忘れずに。理性的な判断と行動が調和すれば、実りの多い成果を手にできるでしょう。",
        commentReversed: "独裁的な態度や強引な振る舞いに要注意。コントロール欲が強まりすぎると、周囲との軋轢や孤立を招く可能性があります。柔軟な対応と、他者の意見に耳を傾ける姿勢が大切です。真の強さとは、寛容さと責任感を兼ね備えることだと意識しましょう。"
      },
      {
        name: "法王",
        meaning: "信頼、伝統",
        img: "card6/05.png",
        comment: "周囲との信頼関係を深める週。アドバイスを素直に受け入れて成長しましょう。誰かの言葉がヒントになったり、経験者の助言が進むべき道を照らしてくれることがあります。ルールや伝統に沿った行動が安定をもたらすとき。自分の意見に固執せず、集団の中で調和を保つことを意識してみましょう。学びにも最適な時期なので、専門的な知識を深めることも吉です。",
        commentReversed: "形式や他人の意見に縛られ、自分らしさを見失いやすい週です。アドバイスを鵜呑みにするのではなく、自分の価値観とのズレを見極めましょう。伝統に従いすぎると、柔軟性を欠いて窮屈に感じるかもしれません。信頼が崩れる可能性にも注意を。無理に合わせるのではなく、自分にとって本当に必要な知識や関係性を選び取る視点が大切です。"
      },
      {
        name: "恋人",
        meaning: "選択、愛",
        img: "card6/06.png",
        comment: "大切な選択が訪れる週。直感に従って決断を。恋愛や人間関係での分岐点に立つ場面があるかもしれません。どちらの道にも魅力や不安があるかもしれませんが、自分の心が一番ときめく方向を信じて選ぶことが大切です。相手との心のつながりを深める良いタイミングでもあるので、愛情表現や素直な言葉が絆を強くするでしょう。感情を大切にしてください。",
        commentReversed: "優柔不断になり、決断を避けたくなる週です。愛情に関しても本心を隠したり、選ばれることばかりを意識してしまうかもしれません。関係性に迷いや不安が生まれやすい時期なので、焦らずに自分の気持ちを丁寧に確認しましょう。表面的な魅力に惑わされず、真に大切なものを見極めることが求められます。"
      },
      {
        name: "戦車",
        meaning: "勝利、突破",
        img: "card6/07.png",
        comment: "勢いに乗って突き進むと良い結果に。目標に向けて全力投球！集中力が高まり、あなたのエネルギーが周囲に波及する週です。少し無理かなと思うようなことにもチャレンジしてみてください。積極的に行動することで、結果が後からついてきます。ただし、焦りや独走には注意。勢いの中にも冷静さを忘れずに、しっかりとハンドルを握って前進しましょう。",
        commentReversed: "勢い任せの行動が裏目に出やすい週です。無理をして突き進もうとすると、周囲との衝突や計画の破綻を招くかもしれません。過度な自己主張や焦りが原因でトラブルになる可能性も。立ち止まって状況を見直すことで、正しい方向性が見えてきます。冷静さを取り戻し、戦略を立て直しましょう。"
      },
      {
        name: "力",
        meaning: "勇気、内なる強さ",
        img: "card6/08.png",
        comment: "忍耐力と優しさが試される週。穏やかさを忘れずに進みましょう。今週は外的な困難や対立というより、自分自身の中にある葛藤や不安との向き合いがテーマになります。感情を抑え込みすぎず、冷静に受け入れることで本当の強さが育ちます。他人をコントロールしようとするのではなく、寄り添い、理解する姿勢が信頼につながるでしょう。",
        commentReversed: "感情を抑えきれず、怒りや苛立ちが表に出やすい週です。力で状況を変えようとすると、かえって反発を招く可能性があります。内なる不安に振り回されず、冷静さを取り戻すことが求められます。優しさや思いやりを忘れず、心の余裕を意識することで、信頼を築くことができます。"
      },
      {
        name: "隠者",
        meaning: "内省、知恵",
        img: "card6/09.png",
        comment: "一人の時間を大切にし、深く内面を見つめる週です。周囲の騒がしさや情報に流されず、自分だけの静かな空間を意識的に作ることが大切です。孤独ではなく、深い思索が実を結ぶとき。書き物や読書、日記などもおすすめです。答えを外に求めるよりも、内側にある気づきが大きなヒントになります。焦らずじっくりと自分と向き合いましょう。",
        commentReversed: "閉じこもりすぎて、孤独感や疎外感に苛まれる週です。人との関わりを拒んでしまうと、ますます心が閉ざされてしまう可能性があります。自分を見つめ直すことは大切ですが、外部とのつながりも忘れないようにしましょう。バランスの取れた内省を意識し、心の扉を少しずつ開いていくことが大切です。"
      },
      {
        name: "運命の輪",
        meaning: "転機、チャンス",
        img: "card6/10.png",
        comment: "予期せぬチャンスが訪れる週。柔軟に対応すると運が開けます！タイミングの流れを感じ取り、必要なときにすぐ動けるようにしておくことが成功のカギです。急な誘いや予想外の出来事も、あなたにとって重要な転機となる可能性があります。過去にうまくいかなかったことも、今回は違う結果になるかもしれません。流れに乗る勇気を持ちましょう。",
        commentReversed: "好機を逃しやすく、チャンスに気づけない週です。状況の変化についていけず、迷いが生じるかもしれません。変化を恐れて受け入れられないことで、成長のタイミングを失ってしまう可能性があります。流れに逆らわず、まずは現状を受け入れる姿勢を持ちましょう。柔軟さが未来を切り開く鍵になります。"
      },
      {
        name: "正義",
        meaning: "公平、決断",
        img: "card6/11.png",
        comment: "公平な視点を持ち、冷静に物事を判断する週です。感情的になる場面では、一歩引いて状況を俯瞰することで誤解や衝突を避けられます。自分にも他人にも誠実であることが、長期的に信頼や結果を生み出す鍵となるでしょう。契約や判断が必要な場面では、慎重かつ理性的に進めることで後悔のない選択ができます。ルールや約束も大切にしましょう。",
        commentReversed: "偏った判断や感情に流されやすい週です。自分の正義を押し付けてしまうと、関係にひびが入る恐れがあります。公平性を見失いやすく、物事を一方的に捉えてしまう可能性も。冷静さと客観性を取り戻し、自他ともに誠実に向き合うことが、問題の解決に導きます。"
      },
      {
        name: "吊るされた男",
        meaning: "犠牲、洞察",
        img: "card6/12.png",
        comment: "一時的な停滞が成長のヒントに。焦らずに待ちましょう。思い通りにいかない状況が続いても、それは決して無駄な時間ではありません。状況をじっくり観察し、新たな視点を得ることで、今後に生かせる気づきを得られます。自分を犠牲にしていると感じたとしても、そこから得る学びは必ず後で力になります。忍耐と観察が鍵の一週間です。",
        commentReversed: "無理に我慢を続けることで、自分自身を苦しめてしまう可能性がある週です。報われない努力や自己犠牲に疑問を持つことが大切です。停滞を受け入れるだけでなく、そこから抜け出すための視点の転換が必要かもしれません。変化を恐れず、自分にとって何が本当に必要かを見極めましょう。"
      },
      {
        name: "死神",
        meaning: "終わりと再生",
        img: "card6/13.png",
        comment: "不要なものを手放すタイミング。新しいスタートの準備を！過去に執着せず、次のステージへ進む決意を固めましょう。変化を恐れず、むしろ歓迎することで、大きなチャンスに恵まれる可能性があります。人間関係や考え方にもリセットの必要があるかもしれません。終わりは悲しみではなく、新たな始まりのサインです。前向きに受け止めて。",
        commentReversed: "変化を恐れて過去に執着してしまい、新たな一歩が踏み出せない週です。終わりを受け入れられずにいると、心の停滞が長引いてしまう可能性があります。手放すことの大切さを理解し、変化を前向きに捉える視点を持ちましょう。再出発のタイミングはすぐそばにあります。"
      },
      {
        name: "節制",
        meaning: "調和、バランス",
        img: "card6/14.png",
        comment: "バランスを意識する週。無理をせず調和を大切に。生活習慣、食事、仕事と休息、心と体…あらゆる面での“ちょうどよさ”を意識することで、安定と安心を得られる時期です。ストレスや過労に気づいたら、しっかり調整を。人間関係でも、押しすぎず引きすぎずの距離感が円滑な流れを作ってくれます。自然体を心がけましょう。",
        commentReversed: "調和を欠いた行動や極端な偏りが、トラブルの原因となりやすい週です。無理をしすぎて疲れが蓄積していたり、感情のバランスが崩れてしまっているかもしれません。冷静さを取り戻し、自分自身の状態を見直すことが求められます。休息とリセットの時間をしっかり確保しましょう。"
      },
      {
        name: "悪魔",
        meaning: "誘惑、束縛",
        img: "card6/15.png",
        comment: "誘惑に注意する週。自分をしっかりと持ちましょう。甘い話や依存的な関係には特に注意が必要です。何かに囚われすぎていないか、自分自身を見つめ直すタイミング。心地よさの裏にあるリスクや損失に気づき、解放される勇気を持ちましょう。小さな決断の積み重ねが、未来を大きく変えていきます。本当に大切なものを見失わないように。",
        commentReversed: "欲望や依存に支配されやすい週。自分を律する力が求められます。心の弱さや惰性に流されると、あとで後悔するような選択をしてしまうかもしれません。快楽や利便性だけに囚われると、大切なものを見失う恐れがあります。表面的な魅力に惑わされず、真に自分を自由にする選択を見極めましょう。"
      },
      {
        name: "塔",
        meaning: "崩壊、変化",
        img: "card6/16.png",
        comment: "思わぬ変化が訪れる週。恐れずに受け入れて。予期せぬトラブルや状況の崩壊があるかもしれませんが、それは本当に必要なものを見極めるための機会です。古い価値観や不要な関係を手放し、新しい視点を持つことが求められています。変化に逆らわず、柔軟に対応することで、逆に大きな再構築のチャンスが得られるでしょう。",
        commentReversed: "避けられたはずのトラブルに巻き込まれる可能性があります。警告を無視したり、変化を拒んでしがみついていると、かえって大きな混乱を招いてしまうかもしれません。崩壊を恐れる気持ちも理解できますが、今こそ価値観を見直し、手放すべきものを見極める勇気が求められています。"
      },
      {
        name: "星",
        meaning: "希望、夢",
        img: "card6/17.png",
        comment: "希望と癒しに満ちた週。未来に向けて一歩を踏み出して！今のあなたは周囲にも癒しや光を与える存在です。ポジティブなイメージを持って、自分が本当に叶えたい夢や理想に向かって小さな行動を積み重ねましょう。落ち込んでいた人には回復の兆しが見えます。願いや理想を信じることが、自分の可能性を広げてくれます。",
        commentReversed: "期待が裏切られたり、理想が遠く感じられる週かもしれません。目標があいまいになっていたり、現実逃避に走ってしまっている可能性も。今はあえて立ち止まり、自分の夢が本当に心から望むものかを見つめ直すことが大切です。過度な期待より、地に足のついた一歩を意識して。"
      },
      {
        name: "月",
        meaning: "直感、幻想",
        img: "card6/18.png",
        comment: "迷いが出やすい週ですが、直感を信じて進むと吉。不安や誤解が生まれやすく、見えないものに惑わされがちな時期ですが、内なる声に従えば道は開けます。あえて結論を急がず、静かに心を整える時間を持ちましょう。夢やインスピレーションがヒントになることも。現実逃避に注意しつつ、自分の感覚を信じる姿勢が大切です。",
        commentReversed: "誤解や妄想が膨らみ、真実が見えにくくなる週です。周囲の意見に振り回されたり、ネガティブな想像に囚われやすいかもしれません。冷静な視点を忘れず、事実確認を怠らないことが鍵です。直感に頼りすぎるのではなく、客観性とのバランスを意識しましょう。"
      },
      {
        name: "太陽",
        meaning: "成功、喜び",
        img: "card6/19.png",
        comment: "喜びと活力に満ちる週。積極的に行動しましょう！あなたの明るさやポジティブなエネルギーが周囲に伝わり、協力者や良いニュースが集まってきます。これまで努力してきたことが報われたり、評価される可能性も高いでしょう。自信を持って自分の魅力を発揮することで、さらに幸運を引き寄せることができます。",
        commentReversed: "過信や無理な楽観が裏目に出やすい週です。自信が過ぎると、周囲との温度差やトラブルを招く恐れがあります。表面的な成功や喜びにとらわれず、内面的な充実感を大切にしましょう。また、期待していた結果が思ったほどではない場合でも、自分の努力を否定せず前向きに受け止めて。"
      },
      {
        name: "審判",
        meaning: "再生、評価",
        img: "card6/20.png",
        comment: "過去を振り返り、次のステージに進む週です。これまでの努力が報われる時期であり、再チャレンジにも良い流れがきています。過去の出来事や人との再会が、新たな意味を持つかもしれません。反省や整理をすることで、心の浄化が進み、次なる一歩に自信を持って進むことができるでしょう。",
        commentReversed: "過去に執着しすぎて、前に進めなくなる恐れがあります。必要以上に自分を責めたり、終わった出来事にとらわれてしまっていないかを見直しましょう。今は手放し、浄化することで新しい可能性が開ける時です。再起を恐れず、過去を糧にした行動を意識してみてください。"
      },
      {
        name: "世界",
        meaning: "完成、達成",
        img: "card6/21.png",
        comment: "目標が達成され、新しいサイクルが始まる週です。努力が実を結び、達成感とともに新たな可能性が広がるタイミングです。一つの区切りを迎えたからこそ、次の目標に向けて視野を広げてください。旅の終わりは新しい始まりでもあります。満足感と成長を胸に、次のチャレンジへと進んでいきましょう。",
        commentReversed: "完了できないまま惰性で続いていることがあるかもしれません。目標の見失いや中途半端な結果に悩みやすい時です。今一度、自分が本当に何を成し遂げたいのかを見直してみましょう。終わらせる勇気を持つことで、新たなステージへの扉が開かれます。"
      }
    ];

    document.getElementById("currentYear").textContent = new Date().getFullYear();

    document.addEventListener("DOMContentLoaded", () => {
      // 星座一覧からランダムに選択
      const zodiacSelect = document.getElementById("zodiac");
      const options = Array.from(zodiacSelect.options).filter(opt => opt.value);
      const randomOption = options[Math.floor(Math.random() * options.length)];
      zodiacSelect.value = randomOption.value;

      // 初回表示のみランダム
      showRandomTarot(randomOption.value);
    });

    function showRandomTarot(zodiac) {
      const card = tarotCards[Math.floor(Math.random() * tarotCards.length)];
      const isReversed = Math.random() < 0.5 ? "正位置" : "逆位置";
      const meaning = isReversed === "正位置" ? card.meaning : `逆位置: ${card.meaning}の課題`;
      const comment = isReversed === "正位置" ? card.comment : (card.commentReversed || card.comment);

      const now = new Date();
      document.getElementById("result").innerHTML = `
    <div class="card-text"><strong>${zodiac} - ${now.getFullYear()}年${now.getMonth() + 1}月${now.getDate()}日のランダム占い</strong></div>
    <br>
    <img class="card-img" src="${card.img}" alt="${card.name}" style="${isReversed === '逆位置' ? 'transform: rotate(180deg);' : ''}"><br>
    <div class="card-text">カード: ${card.name} (${isReversed})</div>
    <div class="card-text">${meaning}</div>
    <div class="card-text" style="font-weight: bold;">${comment}</div>
  `;
    }

    // 毎週固定のタロット結果を表示（ボタン押下時）
    function showWeeklyTarot() {
      const zodiac = document.getElementById("zodiac").value || "全体運";
      const weekNumber = getWeekNumber();
      const now = new Date();
      const key = `${now.getFullYear()}-week${weekNumber}-${zodiac}`;

      let hash = 0;
      for (let i = 0; i < key.length; i++) {
        hash = key.charCodeAt(i) + ((hash << 5) - hash);
      }
      const index = Math.abs(hash) % tarotCards.length;
      const card = tarotCards[index];
      const isReversed = hash % 2 === 0 ? "正位置" : "逆位置";
      const meaning = isReversed === "正位置" ? card.meaning : `逆位置: ${card.meaning}の課題`;
      const comment = isReversed === "正位置" ? card.comment : (card.commentReversed || card.comment);

      document.getElementById("result").innerHTML = `
    <div class="card-text"><strong>${zodiac} - 第${weekNumber}週 (${now.getFullYear()}年) の運勢</strong></div>
    <br>
    <img class="card-img" src="${card.img}" alt="${card.name}" style="${isReversed === '逆位置' ? 'transform: rotate(180deg);' : ''}"><br>
    <div class="card-text">カード: ${card.name} (${isReversed})</div>
    <div class="card-text">${meaning}</div>
    <div class="card-text" style="font-weight: bold;">${comment}</div>
  `;
      document.getElementById("result").scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function getWeekNumber(date = new Date()) {
      const firstDay = new Date(date.getFullYear(), 0, 1);
      const pastDays = (date - firstDay) / 86400000;
      return Math.ceil((pastDays + firstDay.getDay() + 1) / 7);
    }

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




