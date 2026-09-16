<?php
require_once 'counter.php';
if (isset($_GET['ajax_track']) && $_GET['ajax_track'] === 'horoscope') {
    if (function_exists('track_page_view')) {
        track_page_view('horoscope');
    }
    exit;
}
$page_views = get_all_page_views();

$sorted_views = $page_views;
arsort($sorted_views);
$ranked_ids = array_keys($sorted_views);

function display_dynamic_badge($page_id)
{
  global $ranked_ids, $sorted_views;
  if (isset($ranked_ids[0]) && $ranked_ids[0] === $page_id && $sorted_views[$page_id] > 0) {
    echo '<div class="badge-popular">人気</div>';
  } elseif (((isset($ranked_ids[1]) && $ranked_ids[1] === $page_id) || (isset($ranked_ids[2]) && $ranked_ids[2] === $page_id)) && $sorted_views[$page_id] > 0) {
    echo '<div class="badge-recommend">おすすめ</div>';
  }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google tag -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CX0Q57RVS9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-CX0Q57RVS9');
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="無料で気軽にできるタロット・星座・ホロスコープ占い一覧。アセンダントの調べ方や無料診断もご用意。恋愛や毎日の運勢、心のモヤモヤを優しく解きほぐします。初めてでも安心して楽しめる占いがいっぱい♪">
  <meta name="keywords" content="無料占い, タロット, 星座占い, 色占い, 太陽星座, 月星座, アセンダント, 調べる, 調べ方, 無料, ホロスコープ診断">
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <meta name="author" content="Evita Designart">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="https://evitadesignart.com/horo/img/ogp.jpg">
  <link rel="canonical" href="https://evitadesignart.com/horo/">
  <title>無料占い一覧｜タロット・星座・アセンダントの調べ方とホロスコープ診断 | 占いアルカノヴァ</title>

  <meta property="og:title" content="無料占い | 占いアルカノヴァ">
  <meta property="og:description" content="運命をデザインするタロット・星占い・アセンダント無料診断">
  <meta property="og:url" content="https://evitadesignart.com/horo/">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Kosugi+Maru&family=Noto+Sans+JP&family=Sawarabi+Gothic&display=swap"
    rel="stylesheet">
  <!-- Webサイト全体の定義（SearchAction含む） -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Evita Designart",
  "url": "https://evitadesignart.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://evitadesignart.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

  <!-- 占い一覧ページの定義 -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "無料占い一覧・アセンダントの調べ方｜Evita Designart",
  "url": "https://evitadesignart.com/horo/",
  "description": "無料で楽しめるタロット・星座・色占い一覧ページ。アセンダントの調べ方や無料診断ツールも提供。1枚引き、3枚引き、恋愛、ホロスコープ診断など豊富な占いが体験できます。",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "トップページ",
        "item": "https://evitadesignart.com/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "占い一覧",
        "item": "https://evitadesignart.com/horo/"
      }
    ]
  }
}
</script>

  <!-- メニューリンク群（ナビゲーション強化） -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SiteNavigationElement",
  "name": [
    "今週の運勢(タロット&星座)",
    "今月の運勢(タロット&星座)",
    "今年の運勢(タロット&星座)",
    "タロット大アルカナ1枚占い",
    "タロット大アルカナ2枚占い",
    "タロット大アルカナ3枚占い",
    "タロット2枚相手と自分占い",
    "タロット3枚恋愛占い",
    "タロット小アルカナ占い",
    "アルカナ診断",
    "ターニングポイント占い",
    "YESNOワンカード占い",
    "星座占い(太陽星座)",
    "星座占い(月星座)",
    "星座占い(アセンダント)",
    "24の色占い",
    "エンジェルナンバーガイド"
  ],
  "url": [
    "https://evitadesignart.com/horo/tarotte7.php",
    "https://evitadesignart.com/horo/tarotte5.php",
    "https://evitadesignart.com/horo/tarotte6.php",
    "https://evitadesignart.com/horo/tarotte2.php",
    "https://evitadesignart.com/horo/tarotte4.php",
    "https://evitadesignart.com/horo/tarotte.php",
    "https://evitadesignart.com/horo/tarotte9.php",
    "https://evitadesignart.com/horo/tarotte8.php",
    "https://evitadesignart.com/horo/tarotte3.php",
    "https://evitadesignart.com/horo/tarotte10.php",
    "https://evitadesignart.com/horo/tarotte11.php",
    "https://evitadesignart.com/horo/tarotte12.php",
    "https://evitadesignart.com/horo/zodiac.php",
    "https://evitadesignart.com/horo/zodiac2.php",
    "https://evitadesignart.com/horo/zodiac3.php",
    "https://evitadesignart.com/horo/color24.php",
    "https://evitadesignart.com/horo/engel.php"
  ]
}
</script>

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "無料のタロット占いにはどんな種類がありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "大アルカナの1枚引きや3枚引きの恋愛占い、相性診断など、女性に人気の多彩なタロット占いをご用意しています。初心者も安心して楽しめますよ。"
      }
    },
    {
      "@type": "Question",
      "name": "星座占いではどんなことがわかりますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "太陽星座や月星座、アセンダントから、あなたの性格やその日の気分、恋愛のヒントを読み解きます。生年月日を入力すると自動診断も可能です。"
      }
    },
    {
      "@type": "Question",
      "name": "色占いってどんな占いですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "24色の中から今のあなたにぴったりの色をランダムに選び、その色が持つメッセージやパワーで心のモヤモヤを癒します。"
      }
    },
    {
      "@type": "Question",
      "name": "ホロスコープ診断はどうやって使うの？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "生年月日と出生時間を使って、太陽星座・月星座・アセンダントを割り出し、あなたの性格や恋愛傾向、毎日の運勢をわかりやすくお伝えします。"
      }
    },
    {
      "@type": "Question",
      "name": "占いが初めてでも大丈夫？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "もちろんです！シンプルでわかりやすい占いが多く、初めての方も気軽に楽しめるよう工夫しています。まずはタロット1枚引きや太陽星座占いから試してみてくださいね。"
      }
    },
    {
      "@type": "Question",
      "name": "毎日占ってもいいの？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、毎日占ってOKです。特に1日の始まりに引くと、今日の心の準備やアドバイスになっておすすめです。"
      }
    },
    {
      "@type": "Question",
      "name": "星座占いとタロット占いはどう違うの？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "星座占いは生まれ持った性格やその日の流れを教えてくれます。一方、タロット占いはカードが教えてくれる具体的なメッセージや未来のヒントを受け取る占いです。"
      }
    },
    {
      "@type": "Question",
      "name": "ホロスコープ診断に出生時間は必要？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "アセンダントを正確に知るには出生時間があると良いですが、わからなくても太陽星座や月星座の診断は可能です。お気軽に試してみてくださいね。"
      }
    },
    {
      "@type": "Question",
      "name": "スマホからも使えますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "はい、スマホやタブレットからも簡単に占えます。外出先でも気軽にチェックしてください。"
      }
    },
    {
      "@type": "Question",
      "name": "占いの結果は保存できる？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "結果はスクリーンショットで保存したりできます。お気に入りの結果はぜひ残してみてくださいね。"
      }
    }
  ]
}


</script>


  <style>
    html {
      background-image: url("img/girly_pattern034.png");
      background-repeat: repeat;
      background-size: 200px auto;
      scroll-behavior: smooth;
      background-attachment: fixed;
    }

    h2 {
      max-width: 500px;
      margin: 0 auto;
      padding: 1.5rem 1.5rem;
      margin-bottom: 3rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      line-height: 1.4;
      border-bottom: 5px solid #9a6282;
    }

    h2 .en-title {
      font-family: 'Cinzel', serif;
      font-size: 1.8rem;
      color: #ffffff;
      letter-spacing: 0.1em;
      margin-bottom: 0.5rem;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    h2 .ja-title {
      font-size: 1.2rem;
      color: #ffffff;
      font-weight: bold;
    }


    body {
      font-family: 'Kosugi Maru', 'Segoe UI', sans-serif;
      background: #1a1a2ed6;
      color: #ffffff;
      margin: 0;
      padding: 0;
      line-height: 1.8;
    }

    a {
      color: yellow;
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

    #menu {
      text-align: center;
    }

    main {
      padding: 7rem 1rem 3rem;
      max-width: 1600px;
      margin: 0 auto;
      text-align: center;
      position: relative;
      z-index: 10;
    }

    img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    }

    .button {
      display: inline-block;
      padding: 2rem 2rem;
      min-width: 200px;
      font-size: 1rem;
      border-radius: 12px;
      background: linear-gradient(145deg, #ffffff, #bbd9e6);
      color: #1a1a1a;
      border: none;
      box-shadow: 0 6px 15px rgb(255 255 255 / 40%);
      text-decoration: none;
      transition: all 0.3s ease;
      margin: 1rem;
      font-weight: bold;
    }

    .button:hover {
      background: linear-gradient(145deg, #ffa500, #ffd700);
      color: #000;
      box-shadow: 0 8px 20px rgba(255, 215, 0, 0.6);
    }

    footer {
      margin-top: 3rem;
      font-size: 0.9rem;
      color: #ccc;
      text-align: center;
    }

    hr {
      margin: 4rem 0;
      border: none;
      border-top: 1px dashed #555;
    }

    input[type="date"],
    input[type="time"] {
      width: 90%;
      max-width: 300px;
      padding: 1em;
      margin: 1em auto;
      font-size: 1.2rem;
      border: 1px solid #888;
      border-radius: 8px;
      background-color: #2b2b3d;
      box-shadow: inset 0 1px 3px rgba(255, 255, 255, 0.1);
      color: #ffffff;
    }

    .block {
      display: inline-block;
      width: 30%;
      min-width: 300px;
      flex: 1 1 300px;
      max-width: 400px;
      margin: 1rem;
      background-color: #0000005c;
      border-radius: 1em;
      /* margin: 1em;*/
      min-height: 580px;
      height: auto;
      padding-bottom: 1.5em;
      vertical-align: top;
      position: relative;
    }

    .badge-recommend {
      position: absolute;
      top: 5px;
      right: 15px;
      background: linear-gradient(135deg, #ff416c, #ff4b2b);
      color: white;
      padding: 6px 16px;
      border-radius: 20px;
      font-size: 0.95rem;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      z-index: 10;
      pointer-events: none;
      animation: pulse 2s infinite;
      letter-spacing: 0.05em;
    }

    .badge-popular {
      position: absolute;
      top: 5px;
      right: 15px;
      background: linear-gradient(135deg, #f2c94c, #f2994a);
      color: #1a1a1a;
      padding: 6px 16px;
      border-radius: 20px;
      font-size: 0.95rem;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      z-index: 10;
      pointer-events: none;
      animation: pulse 2s infinite;
      letter-spacing: 0.05em;
    }

    .img-wrap {
      position: relative;
      display: inline-block;
      width: 90%;
      margin-top: 1em;
    }

    .img-wrap img {
      width: 100% !important;
      margin-top: 0 !important;
      display: block;
    }

    .badge-container {
      position: absolute;
      bottom: 8px;
      left: 8px;
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
      pointer-events: none;
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

    .img-wrap {
      position: relative;
      display: inline-block;
      width: 90%;
      margin-top: 1em;
    }

    .img-wrap img {
      width: 100% !important;
      margin-top: 0 !important;
      display: block;
    }

    .badge-container {
      position: absolute;
      bottom: 8px;
      left: 8px;
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
      pointer-events: none;
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

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }

    .block img {
      width: 90%;
      aspect-ratio: 3 / 4;
      object-fit: cover;
      margin-top: 1em;
      border-radius: 8px;
    }

    small {
      display: block;
      width: 80%;
      margin: 0 auto;
    }

    .accordion {
      margin: 0 auto;
      max-width: 800px;
      transition: transform 0.3s ease;
      perspective: 1000px;
    }

    .block:hover {
      transform: scale(1.05) rotate(-1deg);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 8px 25px rgba(255, 255, 200, 0.5);
    }

    .accordion details {
      background: #2e2e3a;
      border-radius: 8px;
      margin-bottom: 1rem;
      padding: 1rem;
      border: 1px solid #555;
      color: #fff;
      text-align: left;
    }

    .accordion summary {
      font-weight: bold;
      font-size: 1.1rem;
      cursor: pointer;
    }

    .accordion summary::-webkit-details-marker {
      display: none;
    }

    .accordion details[open] summary::before {
      content: " ";
    }

    .accordion summary::before {
      content: " ";
    }

    .horoscope-form {
      text-align: center;
    }

    .sign-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.2rem;
      margin: 2rem auto;
      max-width: 1100px;
    }

    .sign-card {
      background: #0000005c;
      border-radius: 1em;
      padding: 1.5rem 1.2rem;
      width: 260px;
      text-align: left;
      border-top: 4px solid #bbd9e6;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .sign-card:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 25px rgba(255, 255, 200, 0.4);
    }

    .sign-card h3 {
      margin: 0 0 .3em 0;
      font-size: 1.2rem;
      color: #c5f8ff;
    }

    .sign-card .role-label {
      display: inline-block;
      font-size: .75rem;
      background: #9a6282;
      color: #fff;
      padding: .15em .7em;
      border-radius: 1em;
      margin-bottom: .5em;
    }

    .element-badge {
      display: inline-block;
      font-size: .8rem;
      padding: .1em .6em;
      border-radius: 1em;
      margin-left: .4em;
    }

    .el-fire {
      background: #5a2a1e;
      color: #ffb37a;
    }

    .el-earth {
      background: #2e3a1e;
      color: #b7e07a;
    }

    .el-air {
      background: #1e3a3a;
      color: #8ff0f0;
    }

    .el-water {
      background: #1e2a5a;
      color: #9ab7ff;
    }

    .sign-card p {
      font-size: .92rem;
      margin: .5em 0;
    }

    .synthesis-box {
      max-width: 700px;
      margin: 2rem auto;
      background: #2e2e3a;
      border: 1px solid #555;
      border-radius: 1em;
      padding: 1.5rem;
      text-align: left;
    }

    .synthesis-box h3 {
      color: #ffd;
      margin-top: 0;
    }

    #fortuneTip {
      text-align: center;
      font-style: italic;
      font-size: 0.9rem;
      padding: 0 0 1rem 0;
      color: #ffd;
      animation: fadeIn 4s ease-in-out forwards;
      opacity: 0;
    }

    @media (min-width: 768px) {
      #fortuneTip {
        font-size: 1.1rem;
      }
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    #page-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #bbd9e6;
      color: #1a1a1a;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 5px;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      opacity: 0;
      pointer-events: none;
      z-index: 9999;
      transition: all 0.3s ease;
    }

    #page-top.show {
      opacity: 1;
      pointer-events: auto;
    }

    #page-top:hover {
      background: #ffa500;
      color: #000;
      transform: translateY(-3px);
    }

    .view-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      display: inline-block;
      text-align: center;
      z-index: 5;
      pointer-events: none;
      min-width: 40px;
    }

    .view-counter .heart-icon {
      font-style: normal;
      font-size: 3rem;
      /* 大きめのハート */
      color: rgba(255, 60, 60, 0.9);
      line-height: 1;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
    }

    .view-counter .count-num {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 0.75rem;
      font-family: Arial, sans-serif;
      font-weight: 900;
      letter-spacing: -0.5px;
      width: 100%;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
    }

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
      text-decoration: none;
      padding: 12px 5px;
      border-radius: 30px;
      font-weight: 800;
      font-size: 0.9rem;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
      border: 1px solid #ffeaa7;
      text-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      font-family: 'Noto Sans JP', sans-serif;
    }

    .bottom-nav-buttons .nav-btn-gold::after {
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

    @keyframes gold-shine {
      0% {
        left: -100%;
      }

      20% {
        left: 200%;
      }

      100% {
        left: 200%;
      }
    }

    .bottom-nav-buttons .nav-btn-gold:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 20px rgba(212, 175, 55, 0.6), inset 0 2px 2px rgba(255, 255, 255, 0.9);
      background-position: right center;
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
        font-size: 1rem;
        padding: 15px 10px;
      }
    }
  </style>
  <style>
    @media (min-width: 768px) {
      br[class*="md:hidden"] {
        display: none !important;
      }
    }

    .fv-wrapper {
      position: relative;
      margin-bottom: 4rem;
    }

    .fv-container {
      display: flex;
      flex-direction: column;
      align-items: stretch;
      gap: 2rem;
      padding-top: 1rem;
    }

    .fv-left {
      width: 100%;
    }

    .fv-slider {
      position: relative;
      width: 100%;
      height: 100%;
      aspect-ratio: 16 / 9;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .fv-slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0;
      transition: opacity 2s ease-in-out;
    }

    .fv-slide.active {
      opacity: 1;
    }

    .fv-right {
      width: 100%;
      display: flex;
      flex-direction: column;
    }

    @media (min-width: 768px) {
      .fv-container {
        flex-direction: row;
        align-items: stretch;
      }

      .fv-left {
        width: 70%;
      }

      .fv-right {
        width: 30%;
      }
    }

    .floating-text {
      background: linear-gradient(135deg, rgba(46, 46, 58, 0.95), rgba(26, 26, 46, 0.85));
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 3rem 2rem;
      border-radius: 15px;
      border: 1px solid rgba(212, 175, 55, 0.6);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), inset 0 0 20px rgba(255, 255, 255, 0.05);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      box-sizing: border-box;
    }

    .floating-text p {
      margin-bottom: 0;
      font-size: 0.8rem;
      line-height: 2;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    @media (min-width: 768px) {
      .floating-text p {
        font-size: 1.05rem;
      }
    }

    .fv-buttons {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.5rem;
      margin-top: 2rem;
      position: relative;
      z-index: 10;
      width: 100%;
      box-sizing: border-box;
      padding: 0 0.5rem;
    }

    @media (min-width: 768px) {
      .fv-buttons {
        display: flex;
        gap: 1.5rem;
        margin-top: -3rem;
        padding: 0;
      }
    }

    @keyframes floatCard {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-8px);
      }

      100% {
        transform: translateY(0px);
      }
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

    .tarot-btn:nth-child(1) {
      animation-delay: 0s;
    }

    .tarot-btn:nth-child(2) {
      animation-delay: 0.8s;
    }

    .tarot-btn:nth-child(3) {
      animation-delay: 1.6s;
    }

    .tarot-btn::before {
      content: '';
      position: absolute;
      top: 4px;
      left: 4px;
      right: 4px;
      bottom: 4px;
      border: 1px dashed #9a6282;
      border-radius: 8px;
      pointer-events: none;
    }

    @media (min-width: 768px) {
      .tarot-btn::before {
        top: 6px;
        left: 6px;
        right: 6px;
        bottom: 6px;
      }
    }

    .tarot-btn:hover {
      animation-play-state: paused;
      transform: translateY(-10px) scale(1.05);
      border-color: #d4af37;
      box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
      color: #ffd;
      z-index: 20;
    }

    .tarot-btn:hover::before {
      border-color: #d4af37;
    }

    .tarot-btn i {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #bbd9e6;
      transition: color 0.3s ease;
    }

    @media (min-width: 768px) {
      .tarot-btn i {
        font-size: 2.5rem;
        margin-bottom: 1rem;
      }
    }

    .tarot-btn:hover i {
      color: #d4af37;
    }

    .view-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      display: inline-block;
      text-align: center;
      z-index: 5;
      pointer-events: none;
      min-width: 40px;
    }

    .view-counter .heart-icon {
      font-style: normal;
      font-size: 3rem;
      /* 大きめのハート */
      color: rgba(255, 60, 60, 0.9);
      line-height: 1;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
    }

    .view-counter .count-num {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 0.75rem;
      font-family: Arial, sans-serif;
      font-weight: 900;
      letter-spacing: -0.5px;
      width: 100%;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
    }
  </style>
<style>
  .parallax-bg-section, .nav-parallax-bg {
    
  }
  @media screen and (max-width: 768px) {
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
    <h1>無料占い一覧<br>タロット・星座・<br class="md:hidden"> アセンダントの調べ方・ホロスコープ診断</h1>
        <?php include("nav.php"); ?>
  </header>
  <main>
    <div class="fv-wrapper">
      <div class="fv-container">
        <div class="fv-left">
          <div class="fv-slider">
            <img src="img/tarot_fv_1.jpg" alt="無料タロット占いと星座占いのイメージ" class="fv-slide active" loading="lazy">
            <img src="img/tarot_fv_2.jpg" alt="神秘的なホロスコープと星空" class="fv-slide" loading="lazy">
            <img src="img/tarot_fv_3.jpg" alt="クリスタルとタロットカード" class="fv-slide" loading="lazy">
          </div>
        </div>
        <div class="fv-right">
          <div class="floating-text">
            <div id="fortuneTip">今日の運命は、<br class="md:hidden"> あなたの一歩で変わり始める。</div>
            <p>
              当サイトでは、初心者でも楽しめる<br>
              無料のタロット占いや星座占いを<br> 提供しています。<br>1枚引きから3枚引きまでのタロット、<br>
              小アルカナ、そして太陽星座・月星座・<br> アセンダントの調べ方を用いた<br> 無料ホロスコープ診断で、<br>
              あなたの未来や運勢を詳しく占います。
            </p>
          </div>
        </div>
      </div>
      <div class="fv-buttons">
        <a href="#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>タロット占い<br>一覧</a>
        <a href="#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>星占い<br>一覧</a>
        <a href="#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>アセンダント<br>診断</a>
      </div>
    </div>
    <div class="parallax-bg-section" style="text-align: center; margin: 2rem 0; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; padding: 4rem 1rem; box-sizing: border-box;">
      <span class="en-title" style="display: block; font-family: 'Cinzel', serif; font-size: 1.2rem; color: #fff; letter-spacing: 0.1em; margin-bottom: 0.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">FORTUNE ARCANOVA</span>
      <a href="https://evitadesignart.com/horo/" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.8rem; text-decoration: none; color: #fff; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">占いアルカノヴァ</a>
    </div>
    <hr>

    <style>
      .category-grid-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1em;
        padding: 0 1em;
        max-width: 500px;
        margin: 0 auto;
      }

      .category-grid-container .button {
        margin: 0;
        width: 100%;
        box-sizing: border-box;
      }

      @media (min-width: 768px) {
        .category-grid-container {
          grid-template-columns: repeat(3, 1fr);
          gap: 1.5em;
          max-width: 1000px;
        }
      }

      .view-counter {
        position: absolute;
        bottom: 5px;
        right: 10px;
        display: inline-block;
        text-align: center;
        z-index: 5;
        pointer-events: none;
        min-width: 40px;
      }

      .view-counter .heart-icon {
        font-style: normal;
        font-size: 3rem;
        /* 大きめのハート */
        color: rgba(255, 60, 60, 0.9);
        line-height: 1;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
      }

      .view-counter .count-num {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 0.75rem;
        font-family: Arial, sans-serif;
        font-weight: 900;
        letter-spacing: -0.5px;
        width: 100%;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
      }
    </style>
    <h2><span class="en-title">CATEGORY</span><span class="ja-title">カテゴリで探す</span></h2>
    <div class="category-grid-container">
      <a href="#menu-links" class="button">タロット＆星座</a>
      <a href="#tarot-menu" class="button">タロット一覧</a>
      <a href="#zodiac-menu" class="button">星座占い</a>
      <a href="#color-menu" class="button">その他</a>
      <a href="#ascendant-guide" class="button">アセンダントの調べ方</a>
      <a href="#horoscope" class="button">アセンダント診断</a>
    </div>


    <hr>

    <?php
    $year = date('Y');           // 例: 2025
    $month = date('n');          // 例: 7（7月）
    $week = ceil(date('j') / 7); // 月内の第何週か（例: 第4週）
    ?>

    <h2 id="menu-links"><span class="en-title">ZODIAC & TAROT</span><span class="ja-title">星座＆タロット占い</span></h2>

    <div class="block">
      <?php display_dynamic_badge('tarotte7'); ?>
      <a href="https://evitadesignart.com/horo/tarotte7.php" class="img-wrap"><img src="img/t01.jpg" alt="今週の運勢(タロット&星座)">
        <div class="badge-container"><span class="badge-type">占星術</span><span class="badge-type">タロット</span><span
            class="badge-type">週間</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte7']) ? $page_views['tarotte7'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte7.php">
        <?php echo $month; ?>月第<?php echo $week; ?>週の運勢<br class="md:hidden"> (タロット&星座)
      </a>
      <small>今週のテーマや流れを<br class="md:hidden"> タロットと星座の両方から読み解き、<br class="md:hidden"> 過ごし方のヒントを<br class="md:hidden">
        得られます。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte5'); ?>
      <a href="https://evitadesignart.com/horo/tarotte5.php" class="img-wrap"><img src="img/t02.jpg" alt="今月の運勢(タロット&星座)">
        <div class="badge-container"><span class="badge-type">占星術</span><span class="badge-type">タロット</span><span
            class="badge-type">月間</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte5']) ? $page_views['tarotte5'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte5.php">
        <?php echo $month; ?>月の運勢<br class="md:hidden"> (タロット&星座)
      </a>
      <small>タロットと星座の視点から<br> 今月のチャンスや注意点を<br class="md:hidden"> 知ることができます。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte6'); ?>
      <a href="https://evitadesignart.com/horo/tarotte6.php" class="img-wrap"><img src="img/t03.jpg" alt="今年の運勢(タロット&星座)">
        <div class="badge-container"><span class="badge-type">占星術</span><span class="badge-type">タロット</span><span
            class="badge-type">年間</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte6']) ? $page_views['tarotte6'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte6.php">
        <?php echo $year; ?>年の運勢<br class="md:hidden"> (タロット&星座)
      </a>
      <small>今年1年間の運勢の流れや<br class="md:hidden"> ターニングポイントを<br> タロットと星座で占います。</small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">星座＆タロット</a>
      <a href="#tarot-menu" class="nav-btn-gold">タロット</a>
      <a href="#zodiac-menu" class="nav-btn-gold">星座</a>
      <a href="#color-menu" class="nav-btn-gold">その他</a>
      <a href="#horoscope" class="nav-btn-gold">アセンダント診断</a>
    </div>

    <hr>


    <h2 id="tarot-menu"><span class="en-title">TAROT READING</span><span class="ja-title">タロット占い</span></h2>

    <div class="block">
      <?php display_dynamic_badge('tarotte2'); ?>
      <a href="https://evitadesignart.com/horo/tarotte2.php" class="img-wrap"><img src="img/t04.jpg" alt="タロット大アルカナ1枚占い">
        <div class="badge-container"><span class="badge-type">メッセージ</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte2']) ? $page_views['tarotte2'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte2.php">タロット大アルカナ<br class="md:hidden"> 1枚占い</a>
      <small>その日の気になるテーマについて、<br class="md:hidden"> 大アルカナ1枚から<br class="md:hidden"> 直感的なメッセージを受け取ります。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte4'); ?>
      <a href="https://evitadesignart.com/horo/tarotte4.php" class="img-wrap"><img src="img/t05.jpg" alt="タロット大アルカナ2枚占い">
        <div class="badge-container"><span class="badge-type">現状</span><span class="badge-type">未来</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte4']) ? $page_views['tarotte4'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte4.php">タロット大アルカナ<br class="md:hidden"> 2枚占い</a>
      <small>2枚のカードから現状と未来、<br class="md:hidden"> 原因と結果など、<br> 物事の関係性を読み取る占いです。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte'); ?>
      <a href="https://evitadesignart.com/horo/tarotte.php" class="img-wrap"><img src="img/t06.jpg" alt="タロット大アルカナ3枚占い">
        <div class="badge-container"><span class="badge-type">未来</span><span class="badge-type">現在</span><span
            class="badge-type">過去</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte']) ? $page_views['tarotte'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte.php">タロット大アルカナ<br class="md:hidden"> 3枚占い</a>
      <small>過去・現在・未来という流れで、<br class="md:hidden"> 今の状況を立体的に把握し、<br class="md:hidden"> 次の行動指針を探ります。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte9'); ?>
      <a href="https://evitadesignart.com/horo/tarotte9.php" class="img-wrap"><img src="img/t07.jpg" alt="タロット2枚相手と自分占い">
        <div class="badge-container"><span class="badge-type">恋愛</span><span class="badge-type">現状</span><span
            class="badge-type">心理</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte9']) ? $page_views['tarotte9'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte9.php">タロット2枚相手と<br class="md:hidden"> 自分占い</a>
      <small>相手とあなたの気持ちを<br class="md:hidden"> 2枚のカードで読み解き、<br class="md:hidden"> 恋愛の現状と心のすれ違いに<br>
        気づきをもたらします。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte8'); ?>
      <a href="https://evitadesignart.com/horo/tarotte8.php" class="img-wrap"><img src="img/t08.jpg" alt="タロット3枚恋愛占い">
        <div class="badge-container"><span class="badge-type">恋愛</span><span class="badge-type">過去</span><span
            class="badge-type">現在</span><span class="badge-type">未来</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte8']) ? $page_views['tarotte8'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte8.php">タロット3枚<br class="md:hidden"> 恋愛占い</a>
      <small>過去・現在・未来の流れから、<br> あなたの恋愛の現状と<br class="md:hidden"> 今後を深く読み解き、<br>
        次の一歩へのヒントを導き出します。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte3'); ?>
      <a href="https://evitadesignart.com/horo/tarotte3.php" class="img-wrap"><img src="img/t09.jpg" alt="タロット小アルカナ占い">
        <div class="badge-container"><span class="badge-type">詳細</span><span class="badge-type">実務</span><span
            class="badge-type">感情</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte3']) ? $page_views['tarotte3'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte3.php">タロット<br class="md:hidden"> 小アルカナ占い</a>
      <small>日常の出来事や感情、実務的な問題を<br> 56枚の小アルカナで<br class="md:hidden"> 細やかに読み解く占いです。</small>
    </div>


    <div class="block">
      <?php display_dynamic_badge('tarotte10'); ?>
      <a href="https://evitadesignart.com/horo/tarotte10.php" class="img-wrap"><img src="img/t14.jpg" alt="アルカナ診断">
        <div class="badge-container"><span class="badge-type">アルカナ診断</span><span class="badge-type">生年月日</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte10']) ? $page_views['tarotte10'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte10.php">あなたの<br class="md:hidden"> アルカナ診断</a>
      <small>生年月日からあなたの<br> 大アルカナを診断する占いです。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte11'); ?>
      <a href="https://evitadesignart.com/horo/tarotte11.php" class="img-wrap"><img src="img/t15.jpg" alt="ターニングポイント占い">
        <div class="badge-container"><span class="badge-type">岐路</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte11']) ? $page_views['tarotte11'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte11.php">ターニングポイント占い</a>
      <small>大アルカナであなたの<br> ターニングポイントを占います。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte12'); ?>
      <a href="https://evitadesignart.com/horo/tarotte12.php" class="img-wrap"><img src="img/t16.jpg" alt="YES・NO占い">
        <div class="badge-container"><span class="badge-type">二択</span><span class="badge-type">YES</span><span
            class="badge-type">NO</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte12']) ? $page_views['tarotte12'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/tarotte12.php">YES・NO占い</a>
      <small>大アルカナを使い<br> あなたの悩みをYES・NOで占います。</small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">星座＆タロット</a>
      <a href="#tarot-menu" class="nav-btn-gold">タロット</a>
      <a href="#zodiac-menu" class="nav-btn-gold">星座</a>
      <a href="#color-menu" class="nav-btn-gold">その他</a>
      <a href="#horoscope" class="nav-btn-gold">アセンダント診断</a>
    </div>


    <hr>
    <h2 id="zodiac-menu"><span class="en-title">HOROSCOPE</span><span class="ja-title">星座占い</span></h2>

    <div class="block">
      <?php display_dynamic_badge('zodiac'); ?>
      <a href="https://evitadesignart.com/horo/zodiac.php" class="img-wrap"><img src="img/t10.jpg" alt="星座占い(太陽星座)">
        <div class="badge-container"><span class="badge-type">太陽星座</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['zodiac']) ? $page_views['zodiac'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/zodiac.php">星座占い<br class="md:hidden"> (太陽星座)</a>
      <small>太陽星座から今日の基本的な<br> エネルギーや行動傾向を<br class="md:hidden"> 確認できます。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('zodiac2'); ?>
      <a href="https://evitadesignart.com/horo/zodiac2.php" class="img-wrap"><img src="img/t11.jpg" alt="星座占い(月星座)">
        <div class="badge-container"><span class="badge-type">月星座</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['zodiac2']) ? $page_views['zodiac2'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/zodiac2.php">星座占い<br class="md:hidden"> (月星座)</a>
      <small>月星座が示す感情や<br class="md:hidden"> 気分の流れをチェックし、<br> 心の安定に役立てましょう。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('zodiac3'); ?>
      <a href="https://evitadesignart.com/horo/zodiac3.php" class="img-wrap"><img src="img/t12.jpg" alt="星座占い(アセンダント)">
        <div class="badge-container"><span class="badge-type">アセンダント</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['zodiac3']) ? $page_views['zodiac3'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/zodiac3.php">星座占い<br class="md:hidden"> (アセンダント)</a>
      <small>その日の対人関係や<br class="md:hidden"> 第一印象を左右する<br> アセンダントを日々の指針として活用。</small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">星座＆タロット</a>
      <a href="#tarot-menu" class="nav-btn-gold">タロット</a>
      <a href="#zodiac-menu" class="nav-btn-gold">星座</a>
      <a href="#color-menu" class="nav-btn-gold">その他</a>
      <a href="#horoscope" class="nav-btn-gold">アセンダント診断</a>
    </div>



    <hr>
    <h2 id="color-menu"><span class="en-title">OTHERS</span><span class="ja-title">その他</span></h2>

    <div class="block">
      <?php display_dynamic_badge('color24'); ?>
      <a href="https://evitadesignart.com/horo/color24.php" class="img-wrap"><img src="img/t13.jpg" alt="24の色占い">
        <div class="badge-container"><span class="badge-type">色占い</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['color24']) ? $page_views['color24'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/color24.php">24の色占い</a>
      <small>色が持つ意味やエネルギーから、<br class="md:hidden"> 今のあなたに必要な<br class="md:hidden"> メッセージを受け取る占いです。</small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('engel'); ?>
      <a href="https://evitadesignart.com/horo/engel.php" class="img-wrap"><img src="img/t17.jpg" alt="エンジェルナンバーガイド">
        <div class="badge-container"><span class="badge-type">エンジェルナンバー</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['engel']) ? $page_views['engel'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/horo/engel.php">エンジェルナンバーガイド</a>
      <small>目にした数字から<br class="md:hidden"> エンジェルナンバーの<br> 意味を読み解きます。</small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">星座＆タロット</a>
      <a href="#tarot-menu" class="nav-btn-gold">タロット</a>
      <a href="#zodiac-menu" class="nav-btn-gold">星座</a>
      <a href="#color-menu" class="nav-btn-gold">その他</a>
      <a href="#horoscope" class="nav-btn-gold">アセンダント診断</a>
    </div>



    <hr>
    <h2 id="ascendant-guide"><span class="en-title">ASCENDANT GUIDE</span><span class="ja-title"><i
          class="fa-solid fa-compass"></i> アセンダント（ASC）の<br class="md:hidden"> 無料での調べ方</span></h2>
    <style>
      .asc-guide-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        max-width: 1000px;
        margin: 0 auto 2em auto;
        padding: 0 1em;
        align-items: center;
      }

      .asc-guide-left {
        width: 100%;
        max-width: 400px;
      }

      .asc-guide-left img {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
      }

      .asc-guide-right {
        width: 100%;
        text-align: left;
      }

      .asc-guide-right p {
        margin-bottom: 1rem;
        line-height: 2;
      }

      @media (min-width: 768px) {
        .asc-guide-container {
          flex-direction: row;
          align-items: center;
        }

        .asc-guide-left {
          width: 45%;
        }

        .asc-guide-right {
          width: 55%;
        }
      }

      .view-counter {
        position: absolute;
        bottom: 5px;
        right: 10px;
        display: inline-block;
        text-align: center;
        z-index: 5;
        pointer-events: none;
        min-width: 40px;
      }

      .view-counter .heart-icon {
        font-style: normal;
        font-size: 3rem;
        /* 大きめのハート */
        color: rgba(255, 60, 60, 0.9);
        line-height: 1;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
      }

      .view-counter .count-num {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 0.75rem;
        font-family: Arial, sans-serif;
        font-weight: 900;
        letter-spacing: -0.5px;
        width: 100%;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
      }
    </style>
    <div class="asc-guide-container">
      <div class="asc-guide-left">
        <img src="img/ascendant_guide.png" alt="アセンダントの調べ方 インフォグラフィック">
      </div>
      <div class="asc-guide-right">
        <p>
          「自分のアセンダントを無料で調べるにはどうしたらいいの？」とお悩みの方へ。<br>
          アセンダント（ASC）を正確に調べるには、「生年月日」に加えて「正確な出生時間」と「出生地」が必要です。<br>
          出生時間は母子手帳などで確認するのが一番確実な調べ方です。<br>
          当サイトでは、生年月日と出生時間を入力するだけで、あなたのアセンダント星座をすぐに調べる・計算できるツールを無料で提供しています。<br>
          下の「アセンダント無料診断」から、ぜひあなたの第一印象や外見の雰囲気を表すアセンダントを調べてみてください！
        </p>
      </div>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">星座＆タロット</a>
      <a href="#tarot-menu" class="nav-btn-gold">タロット</a>
      <a href="#zodiac-menu" class="nav-btn-gold">星座</a>
      <a href="#color-menu" class="nav-btn-gold">その他</a>
      <a href="#horoscope" class="nav-btn-gold">アセンダント診断</a>
    </div>

    <hr>
    <h2 id="horoscope"><span class="en-title">HOROSCOPE CHART</span><span class="ja-title"><i
          class="fa-solid fa-chart-pie"></i> アセンダント<br class="md:hidden"> 無料診断<br>
        （3層ホロスコープ）</span></h2>
    <style>
      .horoscope-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        max-width: 1000px;
        margin: 0 auto 2em auto;
        padding: 0 1em;
        align-items: center;
      }

      .horoscope-left {
        width: 100%;
        max-width: 400px;
        position: relative;
      }

      .horoscope-left img {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
      }

      .horoscope-right {
        width: 100%;
      }

      @media (min-width: 768px) {
        .horoscope-container {
          flex-direction: row;
          align-items: center;
        }

        .horoscope-left {
          width: 45%;
        }

        .horoscope-right {
          width: 55%;
        }
      }

      .horoscope-form .button {
        width: 90%;
        max-width: 300px;
        margin: 1em auto;
        box-sizing: border-box;
        display: block;
      }

      .horoscope-form label {
        display: inline-block;
        background: rgba(0, 0, 0, 0.6);
        padding: 0.4em 1.2em;
        border-radius: 6px;
        font-weight: bold;
        margin-top: 1em;
        margin-bottom: 0.3em;
        border-left: 4px solid #bbd9e6;
        font-size: 0.95rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
      }

      .view-counter {
        position: absolute;
        bottom: 5px;
        right: 10px;
        display: inline-block;
        text-align: center;
        z-index: 5;
        pointer-events: none;
        min-width: 40px;
      }

      .view-counter .heart-icon {
        font-style: normal;
        font-size: 3rem;
        /* 大きめのハート */
        color: rgba(255, 60, 60, 0.9);
        line-height: 1;
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
      }

      .view-counter .count-num {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 0.75rem;
        font-family: Arial, sans-serif;
        font-weight: 900;
        letter-spacing: -0.5px;
        width: 100%;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
      }
    </style>
    <div class="horoscope-container">
      <div class="horoscope-left">
        <img src="img/horoscope_chart_ascendant.png" alt="3層ホロスコープ診断">
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span class="count-num"><?php echo isset($page_views['horoscope']) ? $page_views['horoscope'] : 0; ?></span></div>
      </div>
      <div class="horoscope-right">
        <p>
          月の運行と出生時刻をもとに<br class="md:hidden"> 太陽星座・月星座・<br> アセンダントを自動算出。<br>
          「表の性格」「心の奥」「第一印象」<br> という3つの顔を立体的に<br class="md:hidden"> 無料で診断します。
        </p>
        <div class="horoscope-form">
          <label>誕生日を選択:</label>
          <input type="date" id="birthDate" max="<?php echo date('Y-m-d'); ?>"><br>
          <label>出生時間を選択:</label>
          <input type="time" id="birthTime"><br>
          <small style="opacity:.8;">※ 出生時間が分からない場合は「12:00」で目安診断できます。<br>（アセンダントの精度は<br class="md:hidden">
            下がります）</small><br>
          <button onclick="showZodiac()" class="button"><i class="fa-solid fa-wand-magic-sparkles"></i> 診断する</button>
          <button onclick="shareZodiac()" id="shareBtn" class="button" style="display:none;"><i
              class="fa-solid fa-share-nodes"></i> 結果をシェア</button>
        </div>
      </div>
    </div>
    <div id="zodiacLoading" style="display:none; text-align:center; margin-top:1.5em;">星の運行を計算中...</div>
    <div id="zodiacResult" style="margin-top: 1em;"></div>
    <div id="lastResultLink" style="text-align:center; margin-top:1em;"></div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">星座＆タロット</a>
      <a href="#tarot-menu" class="nav-btn-gold">タロット</a>
      <a href="#zodiac-menu" class="nav-btn-gold">星座</a>
      <a href="#color-menu" class="nav-btn-gold">その他</a>
      <a href="#horoscope" class="nav-btn-gold">アセンダント診断</a>
    </div>




    <hr>
    <div class="pc-two-column-layout">
      <div class="pc-column-left">
        <h2 id="bsky-feed"><span class="en-title">LATEST POSTS</span><span class="ja-title"><i class="fa-brands fa-bluesky"></i>
            占いデザイナートの最新投稿</span></h2>
        <style>
          .pc-two-column-layout {
            display: flex;
            flex-direction: column;
          }
          .pc-hidden-hr {
            display: block;
            margin: 2em 0;
            width: 100%;
          }
          @media (min-width: 768px) {
            .pc-two-column-layout {
              flex-direction: row;
              align-items: flex-start;
              gap: 2rem;
              max-width: 1000px;
              margin: 0 auto;
            }
            .pc-column-left, .pc-column-right {
              flex: 1;
              width: 50%;
              min-width: 0;
            }
            .pc-hidden-hr {
              display: none;
            }
            /* Bluesky投稿カラムにスクロールを追加し、右側のタロットコラムと高さを合わせる */
            .pc-column-left .bsky-feed-container {
              max-height: 500px; /* タロットコラムのおおよその高さに合わせる */
              overflow-y: auto;
              padding-right: 15px; /* スクロールバー用の余白 */
            }
            /* スクロールバーのカスタマイズ */
            .pc-column-left .bsky-feed-container::-webkit-scrollbar {
              width: 8px;
            }
            .pc-column-left .bsky-feed-container::-webkit-scrollbar-track {
              background: rgba(0, 0, 0, 0.2);
              border-radius: 4px;
            }
            .pc-column-left .bsky-feed-container::-webkit-scrollbar-thumb {
              background: rgba(17, 133, 254, 0.6);
              border-radius: 4px;
            }
            .pc-column-left .bsky-feed-container::-webkit-scrollbar-thumb:hover {
              background: rgba(17, 133, 254, 0.9);
            }
          }
      .bsky-feed-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        max-width: 800px;
        margin: 0 auto 2em auto;
        padding: 0 1em;
      }
      .bsky-post {
        background: rgba(0, 0, 0, 0.7);
        border-radius: 12px;
        padding: 1.5em;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        border-left: 4px solid #1185fe;
        text-align: left;
        color: #fff;
      }
      .bsky-post-date {
        font-size: 0.85em;
        color: #ccc;
        margin-bottom: 0.8em;
      }
      .bsky-post-text {
        font-size: 0.95em;
        color: #fff;
        line-height: 1.6;
        margin-bottom: 1em;
        overflow-wrap: anywhere;
        word-wrap: break-word;
        word-break: break-all;
      }
      .bsky-post-text a {
        color: #1da1f2;
        text-decoration: none;
      }
      .bsky-post-text a:hover {
        text-decoration: underline;
      }
      .bsky-post-images {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 1em;
        overflow-x: auto;
      }
      .bsky-post-images img {
        max-height: 200px;
        border-radius: 8px;
        object-fit: cover;
      }
      .bsky-post-link {
        text-align: right;
      }
      .bsky-post-link a {
        font-size: 0.85em;
        color: #1185fe;
        text-decoration: none;
        font-weight: bold;
      }
      .bsky-post-link a:hover {
        text-decoration: underline;
      }
      .nav-btn-gold-rect {
        background: linear-gradient(135deg, #d4af37 0%, #fff2cd 25%, #d4af37 50%, #b38b22 75%, #fff2cd 100%);
        background-size: 200% auto;
        color: #3e2723 !important;
        text-decoration: none;
        padding: 15px 10px;
        border-radius: 8px;
        font-weight: 800;
        font-size: 1rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5), inset 0 2px 2px rgba(255, 255, 255, 0.8), inset 0 -2px 3px rgba(139, 87, 0, 0.6);
        border: 1px solid #ffeaa7;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
      }
      .nav-btn-gold-rect::after {
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
      .nav-btn-gold-rect:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.6), inset 0 2px 2px rgba(255, 255, 255, 0.9);
        background-position: right center;
      }
      .bsky-profile-btn {
        margin-top: 1em;
        width: 100%;
        padding: 0 1em;
        box-sizing: border-box;
      }
      @media (min-width: 768px) {
        .bsky-profile-btn {
          padding-left: 1em;
          padding-right: 15px;
        }
      }
    </style>
    <div class="bsky-feed-container">
      <?php
      function get_bsky_posts_api($actor, $limit = 3) {
          $url = "https://public.api.bsky.app/xrpc/app.bsky.feed.getAuthorFeed?actor=" . rawurlencode($actor) . "&limit=" . $limit;
          $context = stream_context_create([
              'http' => ['timeout' => 3]
          ]);
          $json = @file_get_contents($url, false, $context);
          if ($json === false) return [];
          
          $data = @json_decode($json, true);
          if (empty($data['feed'])) return [];
          
          $posts = [];
          foreach ($data['feed'] as $item) {
              $postData = $item['post'];
              $record = $postData['record'];
              
              $text = isset($record['text']) ? $record['text'] : '';
              // URLのリンク化
              $text = preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>', $text);
              // ハッシュタグのリンク化
              $text = preg_replace('/#([^\s]+)/', '<a href="https://bsky.app/search?q=%23$1" target="_blank" rel="noopener noreferrer">#$1</a>', $text);
              
              $pubDate = date('Y.m.d H:i', strtotime($record['createdAt']));
              
              // Bluesky post URL
              $parts = explode('/', $postData['uri']);
              $postId = end($parts);
              $link = "https://bsky.app/profile/" . $actor . "/post/" . $postId;
              
              $images = [];
              if (isset($postData['embed']['images'])) {
                  foreach ($postData['embed']['images'] as $img) {
                      $images[] = [
                          'thumb' => $img['thumb'],
                          'full' => $img['fullsize']
                      ];
                  }
              }
              
              $posts[] = [
                  'link' => $link,
                  'date' => $pubDate,
                  'text' => nl2br($text),
                  'images' => $images
              ];
          }
          return $posts;
      }
      $bsky_posts = get_bsky_posts_api('evitadesignart.bsky.social', 3);
      
      if (!empty($bsky_posts)) {
          foreach ($bsky_posts as $post) {
              echo '<div class="bsky-post">';
              echo '<div class="bsky-post-date">' . $post['date'] . '</div>';
              echo '<div class="bsky-post-text">' . $post['text'] . '</div>';
              
              if (!empty($post['images'])) {
                  echo '<div class="bsky-post-images">';
                  foreach ($post['images'] as $img) {
                      echo '<a href="' . htmlspecialchars($img['full']) . '" target="_blank" rel="noopener noreferrer">';
                      echo '<img src="' . htmlspecialchars($img['thumb']) . '" alt="添付画像" loading="lazy">';
                      echo '</a>';
                  }
                  echo '</div>';
              }
              
              echo '<div class="bsky-post-link"><a href="' . $post['link'] . '" target="_blank" rel="noopener noreferrer">Blueskyで見る <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>';
              echo '</div>';
          }
      } else {
          echo '<div class="bsky-post" style="text-align:center;">投稿を読み込めませんでした。<br>時間をおいて再度お試しください。</div>';
      }
      ?>
    </div>
    <div class="bsky-profile-btn">
      <a href="https://bsky.app/profile/evitadesignart.bsky.social" target="_blank" rel="noopener noreferrer" class="nav-btn-gold-rect" style="display: block; width: 100%; box-sizing: border-box; text-align: center;"><i class="fa-brands fa-bluesky"></i> Blueskyプロフィールへ</a>
    </div>
    </div>

    <hr class="pc-hidden-hr">

    <div class="pc-column-right">
      <h2><span class="en-title">TAROT COLUMN</span><span class="ja-title"><i class="fa-solid fa-book-open"></i>
          タロットコラム<br class="md:hidden"> （クリックで開閉）</span></h2>



    <div class="accordion">

      <details>
        <summary>無料でアセンダントを調べるには？調べ方のポイント</summary>
        <p>
          アセンダント（ASC）を正確に調べるには、「生年月日」に加えて「正確な出生時間」と「出生地」が必要です。出生時間は母子手帳などで確認するのが一番の調べ方です。当サイトの無料ホロスコープ診断ツールを使えば、誕生日と時間を入力するだけで、あなたのアセンダント星座をすぐに調べる・計算することができます。
        </p>
      </details>

      <details>
        <summary>タロット占いとは何か？</summary>
        <p>
          タロット占いは、象徴的な絵柄が描かれた78枚のカードを用いて、潜在意識や状況の流れを読み解く占術です。<br>
          特に「大アルカナ22枚」は重要な人生のテーマや変化を示し、「小アルカナ56枚」は日常の細やかな出来事を表します。
        </p>
      </details>

      <details>
        <summary>正位置と逆位置の違い</summary>
        <p>
          タロットではカードが正立して出るか、逆さに出るかによって意味が変わります。<br>
          正位置はカード本来のポジティブな側面を、逆位置はブロックや課題、内面への注意を示します。<br>
          どちらが良い・悪いではなく、状況を客観的に捉えるための視点と考えましょう。
        </p>
      </details>

      <details>
        <summary>どんなときに占うのが効果的？</summary>
        <p>
          タロットは、恋愛・仕事・人間関係・人生の分岐点など、迷いや不安を感じたときに活用できます。<br>
          自分の気持ちを整理したり、見落としていた視点に気づいたりするのに適しており、<br>
          決断の背中をそっと押してくれる存在です。
        </p>
      </details>

      <details>
        <summary>初心者におすすめの引き方</summary>
        <p>
          初めてタロットを使うなら「1枚引き」がおすすめです。<br>
          シンプルでありながら、今の自分に必要なメッセージを受け取りやすく、<br>
          毎日の習慣にすることで感性や直感も養われます。
        </p>
      </details>

    </div>
    </div>
    </div>




    <hr>
    <p>
      イラスト素材は <a href="https://nano-design.booth.pm/">BOOTH</a>、<a
        href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>、<a
        href="https://pixabay.com/users/51249745/">Pixabay</a><br class="md:hidden"> で販売中です。
    </p>
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

      <small>&copy;2016 -
        <script>document.write(new Date().getFullYear());</script> Evita Designart.
      </small>
    </footer>
  </main>



  <script>
    // ---- 星座マスタ（0=牡羊座 ? 11=魚座）----
    const ZODIAC = [
      {
        name: "牡羊座", symbol: "\u2648", element: "fire",
        sun: "情熱的で行動的、新しい挑戦を恐れないリーダー気質。思い立ったらすぐ動く瞬発力があります。",
        moon: "心の奥では白黒はっきりさせたい負けず嫌い。感情の起伏は速いですが引きずりません。",
        asc: "第一印象は元気でストレート。出会った瞬間から場を明るくするエネルギーを感じさせます。",
        love: "押しの強いアプローチに弱く、自分から動く恋を好みます。駆け引きより直球勝負。"
      },
      {
        name: "牡牛座", symbol: "\u2649", element: "earth",
        sun: "安定志向で忍耐力があり、五感を大切にする芸術的な面も。じっくり積み上げる力があります。",
        moon: "心の奥は変化を嫌う安心第一派。落ち着ける環境や美味しいものに癒されます。",
        asc: "第一印象は穏やかで安心感のある人。マイペースだけど信頼できる雰囲気を持っています。",
        love: "時間をかけてゆっくり距離を縮めるタイプ。一度心を開くととことん一途です。"
      },
      {
        name: "双子座", symbol: "\u264A", element: "air",
        sun: "知的好奇心が旺盛で、言葉と情報に優れた柔軟な性格。話題が豊富で場をつなぐのが得意。",
        moon: "心の奥は退屈が苦手で刺激を求めがち。感情も頭で整理してから納得するタイプ。",
        asc: "第一印象は軽やかでフレンドリー。誰とでもすぐ打ち解けられる社交性が光ります。",
        love: "会話のキャッチボールを楽しむ恋愛派。知的な刺激をくれる相手に惹かれます。"
      },
      {
        name: "蟹座", symbol: "\u264B", element: "water",
        sun: "感情豊かで家族や仲間を大切にする保護本能の強いタイプ。面倒見の良さが魅力。",
        moon: "心の奥は繊細で人一倍傷つきやすい反面、大切な人には深い愛情を注ぎます。",
        asc: "第一印象は柔らかく親しみやすい。警戒心はあるものの根が優しい印象を与えます。",
        love: "安心できる関係を最優先。相手を包み込むような尽くし型の恋をします。"
      },
      {
        name: "獅子座", symbol: "\u264C", element: "fire",
        sun: "華やかで自信にあふれ、注目を集めるカリスマ性を持つ。堂々とした振る舞いが魅力。",
        moon: "心の奥はプライドが高く、認められたい気持ちが強め。褒められると伸びるタイプ。",
        asc: "第一印象は華やかで存在感抜群。自然と人の視線を集めるオーラを持っています。",
        love: "リードするのもされるのも好き。恋愛でも主役として輝きたいタイプです。"
      },
      {
        name: "乙女座", symbol: "\u264D", element: "earth",
        sun: "分析力と実務力に優れ、繊細で完璧主義な一面も。気配りの細やかさが強みです。",
        moon: "心の奥は心配性で自分にも他人にも厳しめ。整理整頓されていると安心します。",
        asc: "第一印象は清潔感があり誠実。きちんとした人という信頼をすぐに得やすいです。",
        love: "相手をよく観察し、さりげないサポートで愛情を示す控えめな恋愛スタイル。"
      },
      {
        name: "天秤座", symbol: "\u264E", element: "air",
        sun: "バランス感覚に優れ、人間関係を円滑にする調和の象徴。センスの良さも光ります。",
        moon: "心の奥は争いごとが苦手で、常に公平でいたい気持ちが強いです。",
        asc: "第一印象は上品で感じが良い。誰に対しても自然な気配りができる人と映ります。",
        love: "パートナーシップを大切にし、対等な関係を築きたいロマンチスト。"
      },
      {
        name: "蠍座", symbol: "\u264F", element: "water",
        sun: "深い情熱と洞察力を持ち、物事を極める力を秘めている。一度決めた道は貫きます。",
        moon: "心の奥は独占欲や執着心が強め。信じた相手には全てを懸ける覚悟があります。",
        asc: "第一印象はミステリアスで深みがある。簡単には本心を見せない魅力があります。",
        love: "浅い関係を好まず、運命的なつながりを求める重めで一途な恋愛観。"
      },
      {
        name: "射手座", symbol: "\u2650", element: "fire",
        sun: "自由と冒険を愛し、理想に向かって果敢に進む探究者。楽観的なパワーが魅力。",
        moon: "心の奥は縛られることが何より苦手。常に新しい景色や学びを求めています。",
        asc: "第一印象は明るくオープン。裏表のないさっぱりした雰囲気に好感を持たれます。",
        love: "束縛を嫌い、お互いの自由を尊重できる恋人同士のような関係を好みます。"
      },
      {
        name: "山羊座", symbol: "\u2651", element: "earth",
        sun: "責任感が強く、コツコツと努力を重ねて成果を築く。長期的な視点で物事を見ます。",
        moon: "心の奥は弱みを見せるのが苦手で、一人で抱え込みがち。実は努力家で寂しがりや。",
        asc: "第一印象は落ち着いていて頼れる大人という印象。誠実さが自然と伝わります。",
        love: "時間をかけて信頼を築く堅実派。将来を見据えた真剣な恋愛を好みます。"
      },
      {
        name: "水瓶座", symbol: "\u2652", element: "air",
        sun: "独創的な発想と未来志向で、新しい価値観を生み出す。個性を大切にします。",
        moon: "心の奥は自由な発想の持ち主で、常識にとらわれず物事をフラットに捉えます。",
        asc: "第一印象は個性的でユニーク。ありきたりでない魅力を放ちます。",
        love: "友達のような対等な関係を好み、束縛のない自由な恋愛を理想とします。"
      },
      {
        name: "魚座", symbol: "\u2653", element: "water",
        sun: "感受性が豊かで共感力が高く、夢見がちな優しい性格。想像力の豊かさが強みです。",
        moon: "心の奥は人の気持ちに敏感で、感情移入しやすいピュアな部分を持っています。",
        asc: "第一印象はふんわりと優しい雰囲気。癒し系として親しまれやすいタイプです。",
        love: "相手に共感し寄り添う献身的な恋。ロマンチックな展開に弱いです。"
      }
    ];

    const ELEMENT_LABEL = { fire: "火", earth: "地", air: "風", water: "水" };
    const ELEMENT_CLASS = { fire: "el-fire", earth: "el-earth", air: "el-air", water: "el-water" };
    const ELEMENT_DESC = {
      fire: "情熱・行動力が際立つ「火」の気質が強く出ています。思い立ったら即行動、勢いを味方にするタイプ。",
      earth: "現実感覚と粘り強さが際立つ「地」の気質が強く出ています。着実に積み上げて結果を出すタイプ。",
      air: "知性とコミュニケーション力が際立つ「風」の気質が強く出ています。情報や人とのつながりを力に変えるタイプ。",
      water: "感受性と共感力が際立つ「水」の気質が強く出ています。感情の機微を大切にする繊細なタイプ。"
    };

    function normalizeDeg(deg) {
      let d = deg % 360;
      if (d < 0) d += 360;
      return d;
    }
    function deg2rad(d) { return d * Math.PI / 180; }

    // 太陽星座（トロピカル方式の実日付境界。既存ロジックを踏襲）
    function getSunIndex(month, day) {
      const b = [
        [3, 21, 4, 19], [4, 20, 5, 20], [5, 21, 6, 21], [6, 22, 7, 22],
        [7, 23, 8, 22], [8, 23, 9, 22], [9, 23, 10, 23], [10, 24, 11, 22],
        [11, 23, 12, 21], [12, 22, 1, 19], [1, 20, 2, 18], [2, 19, 3, 20]
      ];
      for (let i = 0; i < 12; i++) {
        const [m1, d1, m2, d2] = b[i];
        if ((month === m1 && day >= d1) || (month === m2 && day <= d2)) return i;
      }
      return 0;
    }

    // ユリウス日（Meeusの近似式）
    function toJulianDate(y, m, d, hourDecimal) {
      if (m <= 2) { y -= 1; m += 12; }
      const A = Math.floor(y / 100);
      const B = 2 - A + Math.floor(A / 4);
      return Math.floor(365.25 * (y + 4716)) + Math.floor(30.6001 * (m + 1)) + d + B - 1524.5 + hourDecimal / 24;
    }

    // 月星座：月の黄道座標を低精度近似式で算出（誤差はおよそ±5度程度）
    function getMoonIndex(y, m, d, hourDecimal) {
      const jd = toJulianDate(y, m, d, hourDecimal);
      const dT = jd - 2451545.0;
      const L = normalizeDeg(218.316 + 13.176396 * dT);   // 平均黄経
      const M = normalizeDeg(134.963 + 13.064993 * dT);   // 平均近点角
      const trueLon = normalizeDeg(L + 6.289 * Math.sin(deg2rad(M)));
      return Math.floor(trueLon / 30) % 12;
    }

    // アセンダント：太陽星座＋出生時刻からの簡易推定
    // （日の出頃≒太陽星座がAscに一致し、約2時間で1サイン進むという近似モデル）
    // ※ 厳密な算出には出生地の緯度経度・恒星時が必要です
    function getAscIndex(sunIdx, hourDecimal) {
      let offset = hourDecimal - 6;
      if (offset < 0) offset += 24;
      const advanced = Math.floor(offset / 2);
      return (sunIdx + advanced) % 12;
    }

    function buildSynthesis(sunEl, moonEl, ascEl) {
      const counts = {};
      [sunEl, moonEl, ascEl].forEach(e => counts[e] = (counts[e] || 0) + 1);
      const entries = Object.entries(counts).sort((a, b) => b[1] - a[1]);
      const [topEl, topCount] = entries[0];

      if (topCount === 3) {
        return `太陽・月・アセンダントすべてが「${ELEMENT_LABEL[topEl]}」で統一されています。${ELEMENT_DESC[topEl]}表と裏、どちらの顔を見ても一貫性のある、ブレの少ないタイプと言えるでしょう。`;
      }
      if (topCount === 2) {
        const otherEl = entries[1][0];
        return `3つのうち2つが「${ELEMENT_LABEL[topEl]}」の気質。${ELEMENT_DESC[topEl]}一方で「${ELEMENT_LABEL[otherEl]}」の要素も持ち合わせており、状況に応じて違う一面を見せる奥行きのある性格です。`;
      }
      return `太陽・月・アセンダントがそれぞれ異なる気質（火・地・風・水のうち3種）を持つ、多面的な魅力の持ち主です。場面によって見せる顔が変わるので、周囲から「意外な一面」に驚かれることが多いかもしれません。`;
    }

    function renderCard(role, label, icon, sign) {
      return `
        <div class="sign-card">
          <span class="role-label">${label}</span>
          <span class="element-badge ${ELEMENT_CLASS[sign.element]}">${ELEMENT_LABEL[sign.element]}</span>
          <h3>${icon} ${sign.symbol} ${sign.name}</h3>
          <p>${sign[role]}</p>
        </div>`;
    }

    function showZodiac() {
      const dateVal = document.getElementById("birthDate").value;
      const timeVal = document.getElementById("birthTime").value;
      const resultEl = document.getElementById("zodiacResult");
      const loadingEl = document.getElementById("zodiacLoading");

      if (!dateVal) {
        resultEl.innerHTML = "<p>誕生日を入力してください。</p>";
        return;
      }
      const useTime = timeVal || "12:00";

      resultEl.innerHTML = "";
      loadingEl.style.display = "block";

      setTimeout(() => {
        const [y, m, d] = dateVal.split("-").map(Number);
        const [h, min] = useTime.split(":").map(Number);
        const hourDecimal = h + min / 60;

        const sunIdx = getSunIndex(m, d);
        const moonIdx = getMoonIndex(y, m, d, hourDecimal);
        const ascIdx = getAscIndex(sunIdx, hourDecimal);

        const sunSign = ZODIAC[sunIdx];
        const moonSign = ZODIAC[moonIdx];
        const ascSign = ZODIAC[ascIdx];

        const synthesis = buildSynthesis(sunSign.element, moonSign.element, ascSign.element);
        const timeNote = timeVal ? "" : "<br><small>※ 出生時間が未入力のため12:00で仮算出しています。より正確なアセンダントには実際の出生時間の入力をおすすめします。</small>";

        loadingEl.style.display = "none";
        resultEl.innerHTML = `
          <div class="sign-grid">
            ${renderCard("sun", "太陽星座（表の性格）", "<i class='fa-solid fa-sun'></i>", sunSign)}
            ${renderCard("moon", "月星座（心の奥）", "<i class='fa-solid fa-moon'></i>", moonSign)}
            ${renderCard("asc", "アセンダント（第一印象）", "ASC", ascSign)}
          </div>
          <div class="synthesis-box">
            <h3><i class="fa-solid fa-wand-magic-sparkles"></i> 総合診断</h3>
            <p>${synthesis}</p>
            <p><strong><i class="fa-solid fa-heart"></i> 恋愛のヒント：</strong>${sunSign.love}</p>
            <p><small>太陽星座は「人生の方向性と表の性格」、月星座は「無意識の感情反応」、アセンダントは「他人に与える第一印象」を表します。3つを重ねることで、あなたの多面的な気質が立体的に見えてきます。${timeNote}</small></p>
          </div>
        `;

        // 結果を保存し、シェアボタンを表示
        try {
          localStorage.setItem("horoscopeResult", JSON.stringify({
            date: dateVal, time: useTime,
            sun: sunSign.name, moon: moonSign.name, asc: ascSign.name,
            savedAt: new Date().toISOString()
          }));
        } catch (e) { /* localStorageが使えない環境は無視 */ }
        document.getElementById("shareBtn").style.display = "inline-block";
        renderLastResultLink();

        // 診断回数をカウント（非同期通信）
        try {
          fetch('?ajax_track=horoscope');
          const countEl = document.querySelector('.horoscope-left .count-num');
          if (countEl) {
            countEl.textContent = parseInt(countEl.textContent || 0) + 1;
          }
        } catch(e) {}

        // スマホなどで見やすいように結果部分へ自動スクロール
        setTimeout(() => {
          resultEl.scrollIntoView({ behavior: "smooth", block: "start" });
        }, 50);
      }, 400);
    }

    function shareZodiac() {
      let saved;
      try { saved = JSON.parse(localStorage.getItem("horoscopeResult")); } catch (e) { saved = null; }
      if (!saved) return;
      const text = `私の診断結果 | 太陽星座:${saved.sun} / 月星座:${saved.moon} / アセンダント:${saved.asc}\n#無料占い #ホロスコープ診断`;
      const url = "https://evitadesignart.com/horo/#horoscope";
      if (navigator.share) {
        navigator.share({ title: "3層ホロスコープ診断結果", text, url }).catch(() => { });
      } else if (navigator.clipboard) {
        navigator.clipboard.writeText(text + "\n" + url).then(() => {
          alert("結果をコピーしました。SNSなどに貼り付けてシェアできます。");
        });
      }
    }

    function renderLastResultLink() {
      let saved;
      try { saved = JSON.parse(localStorage.getItem("horoscopeResult")); } catch (e) { saved = null; }
      const el = document.getElementById("lastResultLink");
      if (!saved || !el) return;
      const d = new Date(saved.savedAt);
      const dateStr = isNaN(d) ? "" : `${d.getMonth() + 1}/${d.getDate()}`;
      el.innerHTML = `<small>前回の診断結果（${dateStr}）: <i class="fa-solid fa-sun"></i>${saved.sun} / <i class="fa-solid fa-moon"></i>${saved.moon} / ASC:${saved.asc}</small>`;
    }

    document.addEventListener("DOMContentLoaded", () => {
      renderLastResultLink();
      let saved;
      try { saved = JSON.parse(localStorage.getItem("horoscopeResult")); } catch (e) { saved = null; }
      if (saved) document.getElementById("shareBtn").style.display = "inline-block";
    });
  </script>





  <script>
    const tips = [
      "今日の運命は、あなたの一歩で変わり始める。",
      "カードが語る真実に耳をすませて。",
      "星の導きに身を委ねてみましょう。",
      "心の中の声が、占いを通じて現れるかも。",
      "ひとつの選択が、未来を動かします。"
    ];

    let index = 0;
    function rotateTips() {
      const el = document.getElementById("fortuneTip");
      if (el) {
        el.style.opacity = 0;
        setTimeout(() => {
          el.textContent = tips[index];
          el.style.opacity = 1;
          index = (index + 1) % tips.length;
        }, 500);
      }
    }
    setInterval(rotateTips, 7000);

    // TOPに戻るボタンの制御
    const pageTopBtn = document.getElementById('page-top');
    if (pageTopBtn) {
      window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        if (scrollTop > 300) {
          pageTopBtn.classList.add('show');
        } else {
          pageTopBtn.classList.remove('show');
        }
      });

      pageTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
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

    .view-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      display: inline-block;
      text-align: center;
      z-index: 5;
      pointer-events: none;
      min-width: 40px;
    }

    .view-counter .heart-icon {
      font-style: normal;
      font-size: 3rem;
      /* 大きめのハート */
      color: rgba(255, 60, 60, 0.9);
      line-height: 1;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
    }

    .view-counter .count-num {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 0.75rem;
      font-family: Arial, sans-serif;
      font-weight: 900;
      letter-spacing: -0.5px;
      width: 100%;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
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

      input:not([type="radio"]):not([type="checkbox"]),
      select,
      textarea {
        width: 100% !important;
        box-sizing: border-box !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        display: block !important;
        -webkit-appearance: none;
      }

      button:not(.lang-option) {
        width: 100% !important;
        box-sizing: border-box !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        display: block !important;
        -webkit-appearance: none;
        white-space: normal !important;
        word-break: break-word !important;
      }

      .block {
        margin-left: auto !important;
        margin-right: auto !important;
        min-width: unset !important;
        width: 100% !important;
        max-width: 400px !important;
        display: block !important;
      }

      .horoscope-container {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        padding: 0 !important;
        box-sizing: border-box !important;
      }

      .horoscope-form {
        max-width: 100% !important;
        box-sizing: border-box !important;
      }
    }

    .view-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      display: inline-block;
      text-align: center;
      z-index: 5;
      pointer-events: none;
      min-width: 40px;
    }

    .view-counter .heart-icon {
      font-style: normal;
      font-size: 3rem;
      /* 大きめのハート */
      color: rgba(255, 60, 60, 0.9);
      line-height: 1;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
    }

    .view-counter .count-num {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 0.75rem;
      font-family: Arial, sans-serif;
      font-weight: 900;
      letter-spacing: -0.5px;
      width: 100%;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
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
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.2s;
      text-decoration: none;
      color: #fff !important;
      font-size: 22px;
    }

    .fixed-sns-share a:hover {
      transform: scale(1.1);
      color: #fff !important;
    }

    .sns-x {
      background: #000;
      border: 1px solid #333;
    }

    .sns-fb {
      background: #1877F2;
    }

    .sns-line {
      background: #06C755;
    }
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

    .view-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      display: inline-block;
      text-align: center;
      z-index: 5;
      pointer-events: none;
      min-width: 40px;
    }

    .view-counter .heart-icon {
      font-style: normal;
      font-size: 3rem;
      /* 大きめのハート */
      color: rgba(255, 60, 60, 0.9);
      line-height: 1;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
    }

    .view-counter .count-num {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 0.75rem;
      font-family: Arial, sans-serif;
      font-weight: 900;
      letter-spacing: -0.5px;
      width: 100%;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
    }
  </style>
  <div class="fixed-sns-share">
        <a href="https://twitter.com/intent/tweet?url=https://evitadesignart.com/horo/&text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ'); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-x" title="X (Twitter)でシェア">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/horo/"
      target="_blank" rel="noopener noreferrer" class="sns-fb" title="Facebookでシェア">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
        <a href="https://line.me/R/msg/text/?<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/'); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-line" title="LINEでシェア">
      <i class="fa-brands fa-line"></i>
    </a>
        <a href="https://bsky.app/intent/compose?text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/'); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-bsky" title="Blueskyでシェア">
      <i class="fa-brands fa-bluesky"></i>
    </a>
  </div>
  <!-- SNS Share Buttons End -->
  <!-- Animation & Effects Start -->
  <canvas id="star-canvas"
    style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none;"></canvas>
  <style>
    .fade-in-hidden {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in-visible {
      opacity: 1;
      transform: translateY(0);
    }

    .view-counter {
      position: absolute;
      bottom: 5px;
      right: 10px;
      display: inline-block;
      text-align: center;
      z-index: 5;
      pointer-events: none;
      min-width: 40px;
    }

    .view-counter .heart-icon {
      font-style: normal;
      font-size: 3rem;
      /* 大きめのハート */
      color: rgba(255, 60, 60, 0.9);
      line-height: 1;
      text-shadow: 0 3px 6px rgba(0, 0, 0, 0.5);
    }

    .view-counter .count-num {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 0.75rem;
      font-family: Arial, sans-serif;
      font-weight: 900;
      letter-spacing: -0.5px;
      width: 100%;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
    }
  </style>
  <script>
    // Fade-in animation
    document.addEventListener("DOMContentLoaded", function () {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-visible');
          }
        });
      }, { threshold: 0.1 });

      const sections = document.querySelectorAll('h2, .block, .fv-wrapper, .horoscope-container, .asc-guide-container, .synthesis-box, .category-grid-container, .accordion');
      sections.forEach(sec => {
        sec.classList.add('fade-in-hidden');
        observer.observe(sec);
      });

      // FV Slider
      const fvSlides = document.querySelectorAll('.fv-slide');
      if (fvSlides.length > 0) {
        let currentFv = 0;
        setInterval(() => {
          fvSlides[currentFv].classList.remove('active');
          currentFv = (currentFv + 1) % fvSlides.length;
          fvSlides[currentFv].classList.add('active');
        }, 5000);
      }
    });

    // Star particle animation
    const canvas = document.getElementById('star-canvas');
    const ctx = canvas.getContext('2d');
    let width, height;
    let stars = [];

    function initStars() {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
      stars = [];
      const numStars = window.innerWidth < 768 ? 60 : 150;
      for (let i = 0; i < numStars; i++) {
        stars.push({
          x: Math.random() * width,
          y: Math.random() * height,
          r: Math.random() * 1.8 + 0.2,
          vx: (Math.random() - 0.5) * 0.2,
          vy: (Math.random() - 0.5) * 0.2,
          alpha: Math.random(),
          alphaDelta: (Math.random() * 0.03) + 0.01,
          color: Math.random() > 0.7 ? '255, 235, 100' : '255, 255, 255'
        });
      }
    }
    window.addEventListener('resize', initStars);
    initStars();

    function drawStars() {
      ctx.clearRect(0, 0, width, height);
      stars.forEach(star => {
        star.x += star.vx;
        star.y += star.vy;
        if (star.x < 0) star.x = width;
        if (star.x > width) star.x = 0;
        if (star.y < 0) star.y = height;
        if (star.y > height) star.y = 0;

        star.alpha += star.alphaDelta;
        if (star.alpha <= 0.0) {
          star.alpha = 0.0;
          star.alphaDelta = Math.abs(star.alphaDelta);
        } else if (star.alpha >= 1.0) {
          star.alpha = 1.0;
          star.alphaDelta = -Math.abs(star.alphaDelta);
        }

        ctx.beginPath();
        ctx.arc(star.x, star.y, star.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(${star.color}, ${star.alpha})`;
        ctx.fill();
      });
      requestAnimationFrame(drawStars);
    }
    drawStars();
  </script>
  <!-- Animation & Effects End -->



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