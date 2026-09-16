<?php
$db_file = __DIR__ . '/tarot_log.sqlite';
$top_weekly = [];
$top_all = [];
try {
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SELECT card_name, position, COUNT(*) as count FROM tarot_logs WHERE created_at >= datetime('now', '-7 days', 'localtime') GROUP BY card_name, position ORDER BY count DESC LIMIT 10");
    $top_weekly = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt2 = $pdo->query("SELECT card_name, position, COUNT(*) as count FROM tarot_logs GROUP BY card_name, position ORDER BY count DESC LIMIT 10");
    $top_all = $stmt2->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {}
?>
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
  <meta charset="UTF-8" />
  <title>タロット過去ログ・世相占い｜タロット・星座・アセンダントの調べ方とホロスコープ診断 | 占いアルカノヴァ</title>

  <!-- Google tag -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CX0Q57RVS9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-CX0Q57RVS9');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="無料で気軽にできるタロット・星座・ホロスコープ占い一覧。アセンダントの調べ方や無料診断もご用意。恋愛や毎日の運勢、心のモヤモヤを優しく解きほぐします。初めてでも安心して楽しめる占いがいっぱい♪">
  <meta name="keywords" content="無料占い, タロット, 星座占い, 色占い, 太陽星座, 月星座, アセンダント, 調べる, 調べ方, 無料, ホロスコープ診断">
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <meta name="author" content="Evita Designart">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="https://evitadesignart.com/horo/img/ogp.jpg">
  <link rel="canonical" href="https://evitadesignart.com/horo/">

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
    <a href="https://evitadesignart.com/horo/" style="text-decoration: none; color: inherit;">
      <h1>タロット過去ログ・世相占い<br>占いアルカノヴァ</h1>
    </a>
    <?php include("nav.php"); ?>
  </header>
  <main>
<style>
button {
    padding: 1rem 2rem;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    background-color: #6f42c1;
    color: #f0e6f6;
    cursor: pointer;
    box-shadow: 0 0 10px #7d5fff;
    transition: background-color 0.3s ease;
    margin: 5rem auto;
    width: 50%;
    max-width: 500px;
    display: block;
}
button:hover {
    background-color: #5a32a3;
}
.history-container {
    max-width: 800px;
    margin: 4rem auto;
    padding: 2rem;
    background: rgba(26, 26, 46, 0.9);
    border: 2px solid #9a6282;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    color: #fff;
    font-family: 'Kosugi Maru', sans-serif;
}
.history-container h1, .history-container h2 {
    text-align: center;
    color: #d4af37;
    text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
    margin-bottom: 2rem;
}
.ranking-list { list-style: none; padding: 0; }
.ranking-item {
    background: #2c2c54;
    margin-bottom: 15px;
    padding: 15px 20px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    border-left: 5px solid #d4af37;
}
.rank {
    font-size: 1.8rem;
    font-weight: bold;
    color: #ffd700;
    width: 60px;
    text-align: center;
}
.card-info { flex-grow: 1; padding-left: 15px; }
.card-name { font-size: 1.3rem; font-weight: bold; margin-bottom: 5px; }
.card-pos { color: #bbd9e6; font-size: 1rem; }
.card-count { color: #aaa; font-size: 1rem; }
.prediction-box {
    margin: 3rem 0;
    padding: 2rem;
    background: rgba(0,0,0,0.4);
    border-radius: 12px;
    border: 1px dashed #d4af37;
}
.prediction-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #eee;
    white-space: pre-wrap;
    text-align: center;
}
</style>

<div class="history-container">
    <h1>👑 タロット過去ログ・世相占い</h1>

    <div class="prediction-box">
        <h2>🕊️ 今週の世相占い</h2>
        <div class="prediction-text">
<?php

$tarot_meanings = [
    '愚者' => ['正位置' => '自由な発想や新しいスタートの予感。型にとらわれない柔軟な姿勢が道を切り開きます。', '逆位置' => '計画性のなさや無責任な行動に注意が必要。足元を固める時期かもしれません。'],
    '魔術師' => ['正位置' => '創造力とコミュニケーションが活発に。新しいアイデアが形になりやすい運気です。', '逆位置' => '準備不足やコミュニケーションのすれ違いに注意。誠実な対応が鍵となります。'],
    '女教皇' => ['正位置' => '直感や深い洞察力が高まる時期。冷静な判断で真実を見極めることができるでしょう。', '逆位置' => '神経質になったり、感情的になりやすいかも。客観的な視点を意識しましょう。'],
    '女帝' => ['正位置' => '豊かさや愛情に恵まれる充実した時間。育むことや受け入れることで幸運が舞い込みます。', '逆位置' => '依存や甘え、過剰な要求に注意。バランスの取れた関係を心がけてください。'],
    '皇帝' => ['正位置' => '責任感と実行力で目標を達成できる運気。リーダーシップを発揮するチャンスです。', '逆位置' => '独断や頑固な態度が反発を招く恐れ。周囲の意見に耳を傾ける余裕を持ちましょう。'],
    '教皇' => ['正位置' => '周囲の支援や良いアドバイスに恵まれる時期。伝統やルールを重んじることで安定します。', '逆位置' => '押し付けがましい態度や古い価値観にとらわれないよう注意。柔軟な思考が大切です。'],
    '恋人' => ['正位置' => '調和や深い結びつき、正しい選択の暗示。ワクワクするような喜びや共感が広がります。', '逆位置' => '優柔不断な態度や誘惑に流されやすい時期。自分の本当の気持ちを見つめ直しましょう。'],
    '戦車' => ['正位置' => '困難を乗り越え、力強く前進する勢いがあります。スピーディな行動が吉と出ます。', '逆位置' => '焦りや暴走、挫折の暗示。少し立ち止まってコントロールを取り戻す必要があります。'],
    '力' => ['正位置' => '精神的な強さや忍耐力で困難を克服できる時。愛と優しさが最大の力となります。', '逆位置' => '自信の喪失や、感情のコントロールが効かなくなるかも。自分を信じる強さを取り戻して。'],
    '隠者' => ['正位置' => '自己探求や静かな内省の時間。内なる声に耳を傾けることで、深い気づきが得られます。', '逆位置' => '孤立や閉鎖的になりやすい時期。過度な引きこもりを避け、周囲との繋がりも大切に。'],
    '運命の輪' => ['正位置' => '思いがけない幸運やチャンスの到来。流れに乗ることで状況が好転していく運気です。', '逆位置' => 'タイミングのずれや予期せぬアクシデントに注意。今は無理に抗わず、様子を見る時期。'],
    '正義' => ['正位置' => '公平でバランスの取れた判断ができる時。誠実な行いが正当に評価されるでしょう。', '逆位置' => '偏見や不公平な扱い、モラルの欠如に注意。冷静で客観的な視点を取り戻してください。'],
    '吊るされた男' => ['正位置' => '忍耐と試練の時期ですが、視点を変えることで新たな価値観や気づきを得られます。', '逆位置' => '無駄な犠牲や徒労感、身動きが取れない状態。執着を手放し、新しいアプローチを。'],
    '死神' => ['正位置' => '一つのサイクルが終わり、新しい始まりを迎える時。不要なものを手放す絶好の機会です。', '逆位置' => '過去への執着や変化への恐れが足かせに。現状を受け入れ、前に進む勇気を持ちましょう。'],
    '節制' => ['正位置' => '穏やかでバランスの取れた良好な状態。異なる要素がうまく調和し、新しいものが生まれます。', '逆位置' => '不摂生やバランスの崩れ、妥協の失敗に注意。極端な行動を避け、中庸を心がけて。'],
    '悪魔' => ['正位置' => '物質的な欲望や執着、誘惑に囚われやすい時期。目先の利益にとらわれないよう警戒を。', '逆位置' => '悪習慣からの脱却や、呪縛からの解放の兆し。見直すべき関係や環境から抜け出せる時。'],
    '塔' => ['正位置' => '突然のトラブルや予期せぬ崩壊の暗示。しかしそれは、古きを壊し新しきを築くための浄化です。', '逆位置' => 'ジワジワとした崩壊や、避けられない小さなトラブル。根本的な問題解決から目を背けないで。'],
    '星' => ['正位置' => '希望やインスピレーション、明るい未来への兆し。理想に向かって真っ直ぐ進める素晴らしい運気。', '逆位置' => '希望を見失ったり、理想が高すぎて挫折しがち。現実的な目標に焦点を合わせ直しましょう。'],
    '月' => ['正位置' => '不安や迷い、曖昧な状況の暗示。見えないものに怯えすぎず、直感を信じて慎重に進む時。', '逆位置' => '霧が晴れ、隠されていた真実や解決の糸口が見えてくる兆し。不安から解放されるでしょう。'],
    '太陽' => ['正位置' => '明るい喜び、成功、生命力に満ちた最高の運気！すべてがクリアに輝く祝福の時です。', '逆位置' => 'エネルギー不足や、一時的な停滞、期待外れ。しかし深刻な事態ではなく、少しの休養で回復します。'],
    '審判' => ['正位置' => '過去の努力が報われ、復活や再生を遂げる時。重要な決断が良い結果をもたらします。', '逆位置' => '過去の失敗への未練や、チャンスを逃す恐れ。過去に囚われず、現実を受け入れる覚悟が必要です。'],
    '世界' => ['正位置' => '完全な達成と調和、一つのサイクルの完成。これまでの努力が実を結び、大団円を迎えます。', '逆位置' => '未完成や不完全燃焼、スランプの暗示。最後の詰めを怠らず、もう一息の努力が必要です。']
];

if (count($top_weekly) >= 3) {
    echo "👑【今週の世相タロットベスト3】\n\n";
    for ($i = 0; $i < 3; $i++) {
        $rank = $i + 1;
        echo "{$rank}位: {$top_weekly[$i]['card_name']}【{$top_weekly[$i]['position']}】\n";
    }
    
    $first_card = $top_weekly[0];
    if (isset($tarot_meanings[$first_card['card_name']]) && isset($tarot_meanings[$first_card['card_name']][$first_card['position']])) {
        echo "\n💡 今週の運勢（1位のカードより）:\n" . $tarot_meanings[$first_card['card_name']][$first_card['position']] . "\n";
    }

    echo "\nみんなが引いたカードから、今週の世界の運気を感じ取ってみましょう🕊️✨\n#タロット占い #世相占い #占いアルカノヴァ";
} else {
    echo "データが集計中です（まだ3種類のカードが引かれていません）。";
}
?>
        </div>
    </div>
    
    <h2>📅 今週のベスト10</h2>
    <ul class="ranking-list">
        <?php if (empty($top_weekly)): ?>
            <p style="text-align:center;">まだデータがありません。</p>
        <?php else: ?>
            <?php foreach ($top_weekly as $index => $item): ?>
                <li class="ranking-item">
                    <div class="rank"><?php echo $index + 1; ?></div>
                    <div class="card-info">
                        <div class="card-name"><?php echo htmlspecialchars($item['card_name']); ?></div>
                        <div class="card-pos">【<?php echo htmlspecialchars($item['position']); ?>】</div>
                    </div>
                    <div class="card-count"><?php echo $item['count']; ?>回</div>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <h2 style="margin-top: 4rem;">🌟 歴代ベスト10</h2>
    <ul class="ranking-list">
        <?php if (empty($top_all)): ?>
            <p style="text-align:center;">まだデータがありません。</p>
        <?php else: ?>
            <?php foreach ($top_all as $index => $item): ?>
                <li class="ranking-item">
                    <div class="rank"><?php echo $index + 1; ?></div>
                    <div class="card-info">
                        <div class="card-name"><?php echo htmlspecialchars($item['card_name']); ?></div>
                        <div class="card-pos">【<?php echo htmlspecialchars($item['position']); ?>】</div>
                    </div>
                    <div class="card-count"><?php echo $item['count']; ?>回</div>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>

<h2><a href="https://evitadesignart.com/horo/" style="display: block; width: 100%; text-align: center; text-decoration: none;"><button style="width: 100%; max-width: 600px;">占い一覧はこちら</button></a></h2>
</main>
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
      class="sns-x" title="X (Twitter)でシェア">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/horo/"
      class="sns-fb" title="Facebookでシェア">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
        <a href="https://line.me/R/msg/text/?<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/'); ?>"
      class="sns-line" title="LINEでシェア">
      <i class="fa-brands fa-line"></i>
    </a>
        <a href="https://bsky.app/intent/compose?text=<?php echo rawurlencode('無料占い | 占いアルカノヴァ https://evitadesignart.com/horo/'); ?>"
      class="sns-bsky" title="Blueskyでシェア">
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