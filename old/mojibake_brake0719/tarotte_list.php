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
    echo '<div class="badge-popular">莠ｺ豌・/div>';
  } elseif (((isset($ranked_ids[1]) && $ranked_ids[1] === $page_id) || (isset($ranked_ids[2]) && $ranked_ids[2] === $page_id)) && $sorted_views[$page_id] > 0) {
    echo '<div class="badge-recommend">縺翫☆縺吶ａ</div>';
  }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "xpag8axifh");
</script>
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
    content="辟｡譁吶〒豌苓ｻｽ縺ｫ縺ｧ縺阪ｋ繧ｿ繝ｭ繝・ヨ繝ｻ譏溷ｺｧ繝ｻ繝帙Ο繧ｹ繧ｳ繝ｼ繝怜頃縺・ｸ隕ｧ縲ゅい繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ繧・┌譁呵ｨｺ譁ｭ繧ゅ＃逕ｨ諢上よ°諢帙ｄ豈取律縺ｮ驕句兇縲∝ｿ・・繝｢繝､繝｢繝､繧貞━縺励￥隗｣縺阪⊇縺舌＠縺ｾ縺吶ょ・繧√※縺ｧ繧ょｮ牙ｿ・＠縺ｦ讌ｽ縺励ａ繧句頃縺・′縺・▲縺ｱ縺・飭">
  <meta name="keywords" content="辟｡譁吝頃縺・ 繧ｿ繝ｭ繝・ヨ, 譏溷ｺｧ蜊縺・ 濶ｲ蜊縺・ 螟ｪ髯ｽ譏溷ｺｧ, 譛域弌蠎ｧ, 繧｢繧ｻ繝ｳ繝繝ｳ繝・ 隱ｿ縺ｹ繧・ 隱ｿ縺ｹ譁ｹ, 辟｡譁・ 繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ">
  <meta name="google-adsense-account" content="ca-pub-6729293840967461">
  <meta name="author" content="Evita Designart">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="https://evitadesignart.com/img/1280.jpg">
  <link rel="canonical" href="https://evitadesignart.com/tarotte_list.php">
  <title>辟｡譁吝頃縺・ｸ隕ｧ・懊ち繝ｭ繝・ヨ繝ｻ譏溷ｺｧ繝ｻ繧｢繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ縺ｨ繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ | 蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡</title>

  <meta property="og:title" content="辟｡譁吝頃縺・| 蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡">
  <meta property="og:description" content="驕句多繧偵ョ繧ｶ繧､繝ｳ縺吶ｋ繧ｿ繝ｭ繝・ヨ繝ｻ譏溷頃縺・・繧｢繧ｻ繝ｳ繝繝ｳ繝育┌譁呵ｨｺ譁ｭ">
  <meta property="og:url" content="https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Kosugi+Maru&family=Noto+Sans+JP&family=Sawarabi+Gothic&display=swap"
    rel="stylesheet">
  <!-- Web繧ｵ繧､繝亥・菴薙・螳夂ｾｩ・・earchAction蜷ｫ繧・・-->
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

  <!-- 蜊縺・ｸ隕ｧ繝壹・繧ｸ縺ｮ螳夂ｾｩ -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "辟｡譁吝頃縺・ｸ隕ｧ繝ｻ繧｢繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ・廢vita Designart",
  "url": "https://evitadesignart.com/tarotte_list.php",
  "description": "辟｡譁吶〒讌ｽ縺励ａ繧九ち繝ｭ繝・ヨ繝ｻ譏溷ｺｧ繝ｻ濶ｲ蜊縺・ｸ隕ｧ繝壹・繧ｸ縲ゅい繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ繧・┌譁呵ｨｺ譁ｭ繝・・繝ｫ繧よ署萓帙・譫壼ｼ輔″縲・譫壼ｼ輔″縲∵°諢帙√・繝ｭ繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ縺ｪ縺ｩ雎雁ｯ後↑蜊縺・′菴馴ｨ薙〒縺阪∪縺吶・,
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "繝医ャ繝励・繝ｼ繧ｸ",
        "item": "https://evitadesignart.com/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "蜊縺・ｸ隕ｧ",
        "item": "https://evitadesignart.com/tarotte_list.php"
      }
    ]
  }
}
</script>

  <!-- 繝｡繝九Η繝ｼ繝ｪ繝ｳ繧ｯ鄒､・医リ繝薙ご繝ｼ繧ｷ繝ｧ繝ｳ蠑ｷ蛹厄ｼ・-->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SiteNavigationElement",
  "name": [
    "莉企ｱ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)",
    "莉頑怦縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)",
    "莉雁ｹｴ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)",
    "繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・,
    "繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・,
    "繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・,
    "繧ｿ繝ｭ繝・ヨ2譫夂嶌謇九→閾ｪ蛻・頃縺・,
    "繧ｿ繝ｭ繝・ヨ3譫壽°諢帛頃縺・,
    "繧ｿ繝ｭ繝・ヨ蟆上い繝ｫ繧ｫ繝雁頃縺・,
    "繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ",
    "繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・,
    "YESNO繝ｯ繝ｳ繧ｫ繝ｼ繝牙頃縺・,
    "譏溷ｺｧ蜊縺・螟ｪ髯ｽ譏溷ｺｧ)",
    "譏溷ｺｧ蜊縺・譛域弌蠎ｧ)",
    "譏溷ｺｧ蜊縺・繧｢繧ｻ繝ｳ繝繝ｳ繝・",
    "24縺ｮ濶ｲ蜊縺・,
    "繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・
  ],
  "url": [
    "https://evitadesignart.com/tarotte7.php",
    "https://evitadesignart.com/tarotte5.php",
    "https://evitadesignart.com/tarotte6.php",
    "https://evitadesignart.com/tarotte2.php",
    "https://evitadesignart.com/tarotte4.php",
    "https://evitadesignart.com/tarotte.php",
    "https://evitadesignart.com/tarotte9.php",
    "https://evitadesignart.com/tarotte8.php",
    "https://evitadesignart.com/tarotte3.php",
    "https://evitadesignart.com/tarotte10.php",
    "https://evitadesignart.com/tarotte11.php",
    "https://evitadesignart.com/tarotte12.php",
    "https://evitadesignart.com/zodiac.php",
    "https://evitadesignart.com/zodiac2.php",
    "https://evitadesignart.com/zodiac3.php",
    "https://evitadesignart.com/color24.php",
    "https://evitadesignart.com/engel.php"
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
      "name": "辟｡譁吶・繧ｿ繝ｭ繝・ヨ蜊縺・↓縺ｯ縺ｩ繧薙↑遞ｮ鬘槭′縺ゅｊ縺ｾ縺吶°・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "螟ｧ繧｢繝ｫ繧ｫ繝翫・1譫壼ｼ輔″繧・譫壼ｼ輔″縺ｮ諱区・蜊縺・∫嶌諤ｧ險ｺ譁ｭ縺ｪ縺ｩ縲∝･ｳ諤ｧ縺ｫ莠ｺ豌励・螟壼ｽｩ縺ｪ繧ｿ繝ｭ繝・ヨ蜊縺・ｒ縺皮畑諢上＠縺ｦ縺・∪縺吶ょ・蠢・・ｂ螳牙ｿ・＠縺ｦ讌ｽ縺励ａ縺ｾ縺吶ｈ縲・
      }
    },
    {
      "@type": "Question",
      "name": "譏溷ｺｧ蜊縺・〒縺ｯ縺ｩ繧薙↑縺薙→縺後ｏ縺九ｊ縺ｾ縺吶°・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "螟ｪ髯ｽ譏溷ｺｧ繧・怦譏溷ｺｧ縲√い繧ｻ繝ｳ繝繝ｳ繝医°繧峨√≠縺ｪ縺溘・諤ｧ譬ｼ繧・◎縺ｮ譌･縺ｮ豌怜・縲∵°諢帙・繝偵Φ繝医ｒ隱ｭ縺ｿ隗｣縺阪∪縺吶ら函蟷ｴ譛域律繧貞・蜉帙☆繧九→閾ｪ蜍戊ｨｺ譁ｭ繧ょ庄閭ｽ縺ｧ縺吶・
      }
    },
    {
      "@type": "Question",
      "name": "濶ｲ蜊縺・▲縺ｦ縺ｩ繧薙↑蜊縺・〒縺吶°・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "24濶ｲ縺ｮ荳ｭ縺九ｉ莉翫・縺ゅ↑縺溘↓縺ｴ縺｣縺溘ｊ縺ｮ濶ｲ繧偵Λ繝ｳ繝繝縺ｫ驕ｸ縺ｳ縲√◎縺ｮ濶ｲ縺梧戟縺､繝｡繝・そ繝ｼ繧ｸ繧・ヱ繝ｯ繝ｼ縺ｧ蠢・・繝｢繝､繝｢繝､繧堤剪縺励∪縺吶・
      }
    },
    {
      "@type": "Question",
      "name": "繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ縺ｯ縺ｩ縺・ｄ縺｣縺ｦ菴ｿ縺・・・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "逕溷ｹｴ譛域律縺ｨ蜃ｺ逕滓凾髢薙ｒ菴ｿ縺｣縺ｦ縲∝､ｪ髯ｽ譏溷ｺｧ繝ｻ譛域弌蠎ｧ繝ｻ繧｢繧ｻ繝ｳ繝繝ｳ繝医ｒ蜑ｲ繧雁・縺励√≠縺ｪ縺溘・諤ｧ譬ｼ繧・°諢帛だ蜷代∵ｯ取律縺ｮ驕句兇繧偵ｏ縺九ｊ繧・☆縺上♀莨昴∴縺励∪縺吶・
      }
    },
    {
      "@type": "Question",
      "name": "蜊縺・′蛻昴ａ縺ｦ縺ｧ繧ょ､ｧ荳亥､ｫ・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "繧ゅ■繧阪ｓ縺ｧ縺呻ｼ√す繝ｳ繝励Ν縺ｧ繧上°繧翫ｄ縺吶＞蜊縺・′螟壹￥縲∝・繧√※縺ｮ譁ｹ繧よｰ苓ｻｽ縺ｫ讌ｽ縺励ａ繧九ｈ縺・ｷ･螟ｫ縺励※縺・∪縺吶ゅ∪縺壹・繧ｿ繝ｭ繝・ヨ1譫壼ｼ輔″繧・､ｪ髯ｽ譏溷ｺｧ蜊縺・°繧芽ｩｦ縺励※縺ｿ縺ｦ縺上□縺輔＞縺ｭ縲・
      }
    },
    {
      "@type": "Question",
      "name": "豈取律蜊縺｣縺ｦ繧ゅ＞縺・・・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "縺ｯ縺・∵ｯ取律蜊縺｣縺ｦOK縺ｧ縺吶ら音縺ｫ1譌･縺ｮ蟋九∪繧翫↓蠑輔￥縺ｨ縲∽ｻ頑律縺ｮ蠢・・貅門ｙ繧・い繝峨ヰ繧､繧ｹ縺ｫ縺ｪ縺｣縺ｦ縺翫☆縺吶ａ縺ｧ縺吶・
      }
    },
    {
      "@type": "Question",
      "name": "譏溷ｺｧ蜊縺・→繧ｿ繝ｭ繝・ヨ蜊縺・・縺ｩ縺・＆縺・・・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "譏溷ｺｧ蜊縺・・逕溘∪繧梧戟縺｣縺滓ｧ譬ｼ繧・◎縺ｮ譌･縺ｮ豬√ｌ繧呈蕗縺医※縺上ｌ縺ｾ縺吶ゆｸ譁ｹ縲√ち繝ｭ繝・ヨ蜊縺・・繧ｫ繝ｼ繝峨′謨吶∴縺ｦ縺上ｌ繧句・菴鍋噪縺ｪ繝｡繝・そ繝ｼ繧ｸ繧・悴譚･縺ｮ繝偵Φ繝医ｒ蜿励￠蜿悶ｋ蜊縺・〒縺吶・
      }
    },
    {
      "@type": "Question",
      "name": "繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ縺ｫ蜃ｺ逕滓凾髢薙・蠢・ｦ・ｼ・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "繧｢繧ｻ繝ｳ繝繝ｳ繝医ｒ豁｣遒ｺ縺ｫ遏･繧九↓縺ｯ蜃ｺ逕滓凾髢薙′縺ゅｋ縺ｨ濶ｯ縺・〒縺吶′縲√ｏ縺九ｉ縺ｪ縺上※繧ょ､ｪ髯ｽ譏溷ｺｧ繧・怦譏溷ｺｧ縺ｮ險ｺ譁ｭ縺ｯ蜿ｯ閭ｽ縺ｧ縺吶ゅ♀豌苓ｻｽ縺ｫ隧ｦ縺励※縺ｿ縺ｦ縺上□縺輔＞縺ｭ縲・
      }
    },
    {
      "@type": "Question",
      "name": "繧ｹ繝槭・縺九ｉ繧ゆｽｿ縺医∪縺吶°・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "縺ｯ縺・√せ繝槭・繧・ち繝悶Ξ繝・ヨ縺九ｉ繧らｰ｡蜊倥↓蜊縺医∪縺吶ょ､門・蜈医〒繧よｰ苓ｻｽ縺ｫ繝√ぉ繝・け縺励※縺上□縺輔＞縲・
      }
    },
    {
      "@type": "Question",
      "name": "蜊縺・・邨先棡縺ｯ菫晏ｭ倥〒縺阪ｋ・・,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "邨先棡縺ｯ繧ｹ繧ｯ繝ｪ繝ｼ繝ｳ繧ｷ繝ｧ繝・ヨ縺ｧ菫晏ｭ倥＠縺溘ｊ縺ｧ縺阪∪縺吶ゅ♀豌励↓蜈･繧翫・邨先棡縺ｯ縺懊・谿九＠縺ｦ縺ｿ縺ｦ縺上□縺輔＞縺ｭ縲・
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
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
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

    .menu-block img, .card img {
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
      /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
      /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
<script src="ga4_events.js"></script>
</head>

<body>

  <header>
    <h1>辟｡譁吝頃縺・ｸ隕ｧ<br>繧ｿ繝ｭ繝・ヨ繝ｻ譏溷ｺｧ繝ｻ<br class="md:hidden"> 繧｢繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ繝ｻ繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ</h1>
        <?php include("nav.php"); ?>
  </header>
  <main>
    <div class="fv-wrapper">
      <div class="fv-container">
        <div class="fv-left">
          <div class="fv-slider">
            <img src="img/tarot_fv_1.jpg" alt="辟｡譁吶ち繝ｭ繝・ヨ蜊縺・→譏溷ｺｧ蜊縺・・繧､繝｡繝ｼ繧ｸ" class="fv-slide active" loading="lazy">
            <img src="img/tarot_fv_2.jpg" alt="逾樒ｧ倡噪縺ｪ繝帙Ο繧ｹ繧ｳ繝ｼ繝励→譏溽ｩｺ" class="fv-slide" loading="lazy">
            <img src="img/tarot_fv_3.jpg" alt="繧ｯ繝ｪ繧ｹ繧ｿ繝ｫ縺ｨ繧ｿ繝ｭ繝・ヨ繧ｫ繝ｼ繝・ class="fv-slide" loading="lazy">
          </div>
        </div>
        <div class="fv-right">
          <div class="floating-text">
            <div id="fortuneTip">莉頑律縺ｮ驕句多縺ｯ縲・br class="md:hidden"> 縺ゅ↑縺溘・荳豁ｩ縺ｧ螟峨ｏ繧雁ｧ九ａ繧九・/div>
            <p>
              蠖薙し繧､繝医〒縺ｯ縲∝・蠢・・〒繧よ･ｽ縺励ａ繧・br>
              辟｡譁吶・繧ｿ繝ｭ繝・ヨ蜊縺・ｄ譏溷ｺｧ蜊縺・ｒ<br> 謠蝉ｾ帙＠縺ｦ縺・∪縺吶・br>1譫壼ｼ輔″縺九ｉ3譫壼ｼ輔″縺ｾ縺ｧ縺ｮ繧ｿ繝ｭ繝・ヨ縲・br>
              蟆上い繝ｫ繧ｫ繝翫√◎縺励※螟ｪ髯ｽ譏溷ｺｧ繝ｻ譛域弌蠎ｧ繝ｻ<br> 繧｢繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ繧堤畑縺・◆<br> 辟｡譁吶・繝ｭ繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ縺ｧ縲・br>
              縺ゅ↑縺溘・譛ｪ譚･繧・°蜍｢繧定ｩｳ縺励￥蜊縺・∪縺吶・
            </p>
          </div>
        </div>
      </div>
      <div class="fv-buttons">
        <a href="#tarot-menu" class="tarot-btn"><i class="fa-solid fa-moon"></i>繧ｿ繝ｭ繝・ヨ蜊縺・br>荳隕ｧ</a>
        <a href="#zodiac-menu" class="tarot-btn"><i class="fa-solid fa-star"></i>譏溷頃縺・br>荳隕ｧ</a>
        <a href="#horoscope" class="tarot-btn"><i class="fa-solid fa-chart-pie"></i>繧｢繧ｻ繝ｳ繝繝ｳ繝・br>險ｺ譁ｭ</a>
      </div>
    </div>
    <div class="parallax-bg-section" style="text-align: center; margin: 2rem 0; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; padding: 4rem 1rem; box-sizing: border-box;">
      <span class="en-title" style="display: block; font-family: 'Cinzel', serif; font-size: 1.2rem; color: #fff; letter-spacing: 0.1em; margin-bottom: 0.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">FORTUNE ARCANOVA</span>
      <a href="https://evitadesignart.com/tarotte_list.php" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.8rem; text-decoration: none; color: #fff; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡</a>
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
        /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
    <h2><span class="en-title">CATEGORY</span><span class="ja-title">繧ｫ繝・ざ繝ｪ縺ｧ謗｢縺・/span></h2>
    <div class="category-grid-container">
      <a href="#menu-links" class="button">繧ｿ繝ｭ繝・ヨ・・弌蠎ｧ</a>
      <a href="#tarot-menu" class="button">繧ｿ繝ｭ繝・ヨ荳隕ｧ</a>
      <a href="#zodiac-menu" class="button">譏溷ｺｧ蜊縺・/a>
      <a href="#color-menu" class="button">縺昴・莉・/a>
      <a href="#ascendant-guide" class="button">繧｢繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ</a>
      <a href="#horoscope" class="button">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>


    <hr>

    <?php
    $year = date('Y');           // 萓・ 2025
    $month = date('n');          // 萓・ 7・・譛茨ｼ・
    $week = ceil(date('j') / 7); // 譛亥・縺ｮ隨ｬ菴暮ｱ縺具ｼ井ｾ・ 隨ｬ4騾ｱ・・
    ?>

    <h2 id="menu-links"><span class="en-title">ZODIAC & TAROT</span><span class="ja-title">譏溷ｺｧ・・ち繝ｭ繝・ヨ蜊縺・/span></h2>

    <div class="block">
      <?php display_dynamic_badge('tarotte7'); ?>
      <a href="https://evitadesignart.com/tarotte7.php" class="img-wrap"><img src="img/t01.jpg" alt="莉企ｱ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)">
        <div class="badge-container"><span class="badge-type">蜊譏溯｡・/span><span class="badge-type">繧ｿ繝ｭ繝・ヨ</span><span
            class="badge-type">騾ｱ髢・/span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte7']) ? $page_views['tarotte7'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte7.php">
        <?php echo $month; ?>譛育ｬｬ<?php echo $week; ?>騾ｱ縺ｮ驕句兇<br class="md:hidden"> (繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)
      </a>
      <small>莉企ｱ縺ｮ繝・・繝槭ｄ豬√ｌ繧・br class="md:hidden"> 繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｮ荳｡譁ｹ縺九ｉ隱ｭ縺ｿ隗｣縺阪・br class="md:hidden"> 驕弱＃縺玲婿縺ｮ繝偵Φ繝医ｒ<br class="md:hidden">
        蠕励ｉ繧後∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte5'); ?>
      <a href="https://evitadesignart.com/tarotte5.php" class="img-wrap"><img src="img/t02.jpg" alt="莉頑怦縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)">
        <div class="badge-container"><span class="badge-type">蜊譏溯｡・/span><span class="badge-type">繧ｿ繝ｭ繝・ヨ</span><span
            class="badge-type">譛磯俣</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte5']) ? $page_views['tarotte5'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte5.php">
        <?php echo $month; ?>譛医・驕句兇<br class="md:hidden"> (繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)
      </a>
      <small>繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｮ隕也せ縺九ｉ<br> 莉頑怦縺ｮ繝√Ε繝ｳ繧ｹ繧・ｳｨ諢冗せ繧・br class="md:hidden"> 遏･繧九％縺ｨ縺後〒縺阪∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte6'); ?>
      <a href="https://evitadesignart.com/tarotte6.php" class="img-wrap"><img src="img/t03.jpg" alt="莉雁ｹｴ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)">
        <div class="badge-container"><span class="badge-type">蜊譏溯｡・/span><span class="badge-type">繧ｿ繝ｭ繝・ヨ</span><span
            class="badge-type">蟷ｴ髢・/span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte6']) ? $page_views['tarotte6'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte6.php">
        <?php echo $year; ?>蟷ｴ縺ｮ驕句兇<br class="md:hidden"> (繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)
      </a>
      <small>莉雁ｹｴ1蟷ｴ髢薙・驕句兇縺ｮ豬√ｌ繧・br class="md:hidden"> 繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝医ｒ<br> 繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ蜊縺・∪縺吶・/small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">譏溷ｺｧ・・ち繝ｭ繝・ヨ</a>
      <a href="#tarot-menu" class="nav-btn-gold">繧ｿ繝ｭ繝・ヨ</a>
      <a href="#zodiac-menu" class="nav-btn-gold">譏溷ｺｧ</a>
      <a href="#color-menu" class="nav-btn-gold">縺昴・莉・/a>
      <a href="#horoscope" class="nav-btn-gold">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>

    <hr>


    <h2 id="tarot-menu"><span class="en-title">TAROT READING</span><span class="ja-title">繧ｿ繝ｭ繝・ヨ蜊縺・/span></h2>

    <div class="block">
      <?php display_dynamic_badge('tarotte2'); ?>
      <a href="https://evitadesignart.com/tarotte2.php" class="img-wrap"><img src="img/t04.jpg" alt="繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・>
        <div class="badge-container"><span class="badge-type">繝｡繝・そ繝ｼ繧ｸ</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte2']) ? $page_views['tarotte2'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte2.php">繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・br class="md:hidden"> 1譫壼頃縺・/a>
      <small>縺昴・譌･縺ｮ豌励↓縺ｪ繧九ユ繝ｼ繝槭↓縺､縺・※縲・br class="md:hidden"> 螟ｧ繧｢繝ｫ繧ｫ繝・譫壹°繧・br class="md:hidden"> 逶ｴ諢溽噪縺ｪ繝｡繝・そ繝ｼ繧ｸ繧貞女縺大叙繧翫∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte4'); ?>
      <a href="https://evitadesignart.com/tarotte4.php" class="img-wrap"><img src="img/t05.jpg" alt="繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・>
        <div class="badge-container"><span class="badge-type">迴ｾ迥ｶ</span><span class="badge-type">譛ｪ譚･</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte4']) ? $page_views['tarotte4'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte4.php">繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・br class="md:hidden"> 2譫壼頃縺・/a>
      <small>2譫壹・繧ｫ繝ｼ繝峨°繧臥樟迥ｶ縺ｨ譛ｪ譚･縲・br class="md:hidden"> 蜴溷屏縺ｨ邨先棡縺ｪ縺ｩ縲・br> 迚ｩ莠九・髢｢菫よｧ繧定ｪｭ縺ｿ蜿悶ｋ蜊縺・〒縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte'); ?>
      <a href="https://evitadesignart.com/tarotte.php" class="img-wrap"><img src="img/t06.jpg" alt="繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・>
        <div class="badge-container"><span class="badge-type">譛ｪ譚･</span><span class="badge-type">迴ｾ蝨ｨ</span><span
            class="badge-type">驕主悉</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte']) ? $page_views['tarotte'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte.php">繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・br class="md:hidden"> 3譫壼頃縺・/a>
      <small>驕主悉繝ｻ迴ｾ蝨ｨ繝ｻ譛ｪ譚･縺ｨ縺・≧豬√ｌ縺ｧ縲・br class="md:hidden"> 莉翫・迥ｶ豕√ｒ遶倶ｽ鍋噪縺ｫ謚頑升縺励・br class="md:hidden"> 谺｡縺ｮ陦悟虚謖・・繧呈爾繧翫∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte9'); ?>
      <a href="https://evitadesignart.com/tarotte9.php" class="img-wrap"><img src="img/t07.jpg" alt="繧ｿ繝ｭ繝・ヨ2譫夂嶌謇九→閾ｪ蛻・頃縺・>
        <div class="badge-container"><span class="badge-type">諱区・</span><span class="badge-type">迴ｾ迥ｶ</span><span
            class="badge-type">蠢・炊</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte9']) ? $page_views['tarotte9'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte9.php">繧ｿ繝ｭ繝・ヨ2譫夂嶌謇九→<br class="md:hidden"> 閾ｪ蛻・頃縺・/a>
      <small>逶ｸ謇九→縺ゅ↑縺溘・豌玲戟縺｡繧・br class="md:hidden"> 2譫壹・繧ｫ繝ｼ繝峨〒隱ｭ縺ｿ隗｣縺阪・br class="md:hidden"> 諱区・縺ｮ迴ｾ迥ｶ縺ｨ蠢・・縺吶ｌ驕輔＞縺ｫ<br>
        豌励▼縺阪ｒ繧ゅ◆繧峨＠縺ｾ縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte8'); ?>
      <a href="https://evitadesignart.com/tarotte8.php" class="img-wrap"><img src="img/t08.jpg" alt="繧ｿ繝ｭ繝・ヨ3譫壽°諢帛頃縺・>
        <div class="badge-container"><span class="badge-type">諱区・</span><span class="badge-type">驕主悉</span><span
            class="badge-type">迴ｾ蝨ｨ</span><span class="badge-type">譛ｪ譚･</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte8']) ? $page_views['tarotte8'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte8.php">繧ｿ繝ｭ繝・ヨ3譫・br class="md:hidden"> 諱区・蜊縺・/a>
      <small>驕主悉繝ｻ迴ｾ蝨ｨ繝ｻ譛ｪ譚･縺ｮ豬√ｌ縺九ｉ縲・br> 縺ゅ↑縺溘・諱区・縺ｮ迴ｾ迥ｶ縺ｨ<br class="md:hidden"> 莉雁ｾ後ｒ豺ｱ縺剰ｪｭ縺ｿ隗｣縺阪・br>
        谺｡縺ｮ荳豁ｩ縺ｸ縺ｮ繝偵Φ繝医ｒ蟆弱″蜃ｺ縺励∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte3'); ?>
      <a href="https://evitadesignart.com/tarotte3.php" class="img-wrap"><img src="img/t09.jpg" alt="繧ｿ繝ｭ繝・ヨ蟆上い繝ｫ繧ｫ繝雁頃縺・>
        <div class="badge-container"><span class="badge-type">隧ｳ邏ｰ</span><span class="badge-type">螳溷漁</span><span
            class="badge-type">諢滓ュ</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte3']) ? $page_views['tarotte3'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte3.php">繧ｿ繝ｭ繝・ヨ<br class="md:hidden"> 蟆上い繝ｫ繧ｫ繝雁頃縺・/a>
      <small>譌･蟶ｸ縺ｮ蜃ｺ譚･莠九ｄ諢滓ュ縲∝ｮ溷漁逧・↑蝠城｡後ｒ<br> 56譫壹・蟆上い繝ｫ繧ｫ繝翫〒<br class="md:hidden"> 邏ｰ繧・°縺ｫ隱ｭ縺ｿ隗｣縺丞頃縺・〒縺吶・/small>
    </div>


    <div class="block">
      <?php display_dynamic_badge('tarotte10'); ?>
      <a href="https://evitadesignart.com/tarotte10.php" class="img-wrap"><img src="img/t14.jpg" alt="繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ">
        <div class="badge-container"><span class="badge-type">繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ</span><span class="badge-type">逕溷ｹｴ譛域律</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte10']) ? $page_views['tarotte10'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte10.php">縺ゅ↑縺溘・<br class="md:hidden"> 繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ</a>
      <small>逕溷ｹｴ譛域律縺九ｉ縺ゅ↑縺溘・<br> 螟ｧ繧｢繝ｫ繧ｫ繝翫ｒ險ｺ譁ｭ縺吶ｋ蜊縺・〒縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte11'); ?>
      <a href="https://evitadesignart.com/tarotte11.php" class="img-wrap"><img src="img/t15.jpg" alt="繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・>
        <div class="badge-container"><span class="badge-type">蟯占ｷｯ</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte11']) ? $page_views['tarotte11'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte11.php">繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・/a>
      <small>螟ｧ繧｢繝ｫ繧ｫ繝翫〒縺ゅ↑縺溘・<br> 繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝医ｒ蜊縺・∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('tarotte12'); ?>
      <a href="https://evitadesignart.com/tarotte12.php" class="img-wrap"><img src="img/t16.jpg" alt="YES繝ｻNO蜊縺・>
        <div class="badge-container"><span class="badge-type">莠梧萱</span><span class="badge-type">YES</span><span
            class="badge-type">NO</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['tarotte12']) ? $page_views['tarotte12'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/tarotte12.php">YES繝ｻNO蜊縺・/a>
      <small>螟ｧ繧｢繝ｫ繧ｫ繝翫ｒ菴ｿ縺・br> 縺ゅ↑縺溘・謔ｩ縺ｿ繧炭ES繝ｻNO縺ｧ蜊縺・∪縺吶・/small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">譏溷ｺｧ・・ち繝ｭ繝・ヨ</a>
      <a href="#tarot-menu" class="nav-btn-gold">繧ｿ繝ｭ繝・ヨ</a>
      <a href="#zodiac-menu" class="nav-btn-gold">譏溷ｺｧ</a>
      <a href="#color-menu" class="nav-btn-gold">縺昴・莉・/a>
      <a href="#horoscope" class="nav-btn-gold">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>


    <hr>
    <h2 id="zodiac-menu"><span class="en-title">HOROSCOPE</span><span class="ja-title">譏溷ｺｧ蜊縺・/span></h2>

    <div class="block">
      <?php display_dynamic_badge('zodiac'); ?>
      <a href="https://evitadesignart.com/zodiac.php" class="img-wrap"><img src="img/t10.jpg" alt="譏溷ｺｧ蜊縺・螟ｪ髯ｽ譏溷ｺｧ)">
        <div class="badge-container"><span class="badge-type">螟ｪ髯ｽ譏溷ｺｧ</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['zodiac']) ? $page_views['zodiac'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/zodiac.php">譏溷ｺｧ蜊縺・br class="md:hidden"> (螟ｪ髯ｽ譏溷ｺｧ)</a>
      <small>螟ｪ髯ｽ譏溷ｺｧ縺九ｉ莉頑律縺ｮ蝓ｺ譛ｬ逧・↑<br> 繧ｨ繝阪Ν繧ｮ繝ｼ繧・｡悟虚蛯ｾ蜷代ｒ<br class="md:hidden"> 遒ｺ隱阪〒縺阪∪縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('zodiac2'); ?>
      <a href="https://evitadesignart.com/zodiac2.php" class="img-wrap"><img src="img/t11.jpg" alt="譏溷ｺｧ蜊縺・譛域弌蠎ｧ)">
        <div class="badge-container"><span class="badge-type">譛域弌蠎ｧ</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['zodiac2']) ? $page_views['zodiac2'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/zodiac2.php">譏溷ｺｧ蜊縺・br class="md:hidden"> (譛域弌蠎ｧ)</a>
      <small>譛域弌蠎ｧ縺檎､ｺ縺呎─諠・ｄ<br class="md:hidden"> 豌怜・縺ｮ豬√ｌ繧偵メ繧ｧ繝・け縺励・br> 蠢・・螳牙ｮ壹↓蠖ｹ遶九※縺ｾ縺励ｇ縺・・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('zodiac3'); ?>
      <a href="https://evitadesignart.com/zodiac3.php" class="img-wrap"><img src="img/t12.jpg" alt="譏溷ｺｧ蜊縺・繧｢繧ｻ繝ｳ繝繝ｳ繝・">
        <div class="badge-container"><span class="badge-type">繧｢繧ｻ繝ｳ繝繝ｳ繝・/span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['zodiac3']) ? $page_views['zodiac3'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/zodiac3.php">譏溷ｺｧ蜊縺・br class="md:hidden"> (繧｢繧ｻ繝ｳ繝繝ｳ繝・</a>
      <small>縺昴・譌･縺ｮ蟇ｾ莠ｺ髢｢菫ゅｄ<br class="md:hidden"> 隨ｬ荳蜊ｰ雎｡繧貞ｷｦ蜿ｳ縺吶ｋ<br> 繧｢繧ｻ繝ｳ繝繝ｳ繝医ｒ譌･縲・・謖・・縺ｨ縺励※豢ｻ逕ｨ縲・/small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">譏溷ｺｧ・・ち繝ｭ繝・ヨ</a>
      <a href="#tarot-menu" class="nav-btn-gold">繧ｿ繝ｭ繝・ヨ</a>
      <a href="#zodiac-menu" class="nav-btn-gold">譏溷ｺｧ</a>
      <a href="#color-menu" class="nav-btn-gold">縺昴・莉・/a>
      <a href="#horoscope" class="nav-btn-gold">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>



    <hr>
    <h2 id="color-menu"><span class="en-title">OTHERS</span><span class="ja-title">縺昴・莉・/span></h2>

    <div class="block">
      <?php display_dynamic_badge('color24'); ?>
      <a href="https://evitadesignart.com/color24.php" class="img-wrap"><img src="img/t13.jpg" alt="24縺ｮ濶ｲ蜊縺・>
        <div class="badge-container"><span class="badge-type">濶ｲ蜊縺・/span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['color24']) ? $page_views['color24'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/color24.php">24縺ｮ濶ｲ蜊縺・/a>
      <small>濶ｲ縺梧戟縺､諢丞袖繧・お繝阪Ν繧ｮ繝ｼ縺九ｉ縲・br class="md:hidden"> 莉翫・縺ゅ↑縺溘↓蠢・ｦ√↑<br class="md:hidden"> 繝｡繝・そ繝ｼ繧ｸ繧貞女縺大叙繧句頃縺・〒縺吶・/small>
    </div>

    <div class="block">
      <?php display_dynamic_badge('engel'); ?>
      <a href="https://evitadesignart.com/engel.php" class="img-wrap"><img src="img/t17.jpg" alt="繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・>
        <div class="badge-container"><span class="badge-type">繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・</span></div>
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span
            class="count-num"><?php echo isset($page_views['engel']) ? $page_views['engel'] : 0; ?></span></div>
      </a>
      <a class="button" href="https://evitadesignart.com/engel.php">繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・/a>
      <small>逶ｮ縺ｫ縺励◆謨ｰ蟄励°繧・br class="md:hidden"> 繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・縺ｮ<br> 諢丞袖繧定ｪｭ縺ｿ隗｣縺阪∪縺吶・/small>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">譏溷ｺｧ・・ち繝ｭ繝・ヨ</a>
      <a href="#tarot-menu" class="nav-btn-gold">繧ｿ繝ｭ繝・ヨ</a>
      <a href="#zodiac-menu" class="nav-btn-gold">譏溷ｺｧ</a>
      <a href="#color-menu" class="nav-btn-gold">縺昴・莉・/a>
      <a href="#horoscope" class="nav-btn-gold">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>



    <hr>
    <h2 id="ascendant-guide"><span class="en-title">ASCENDANT GUIDE</span><span class="ja-title"><i
          class="fa-solid fa-compass"></i> 繧｢繧ｻ繝ｳ繝繝ｳ繝茨ｼ・SC・峨・<br class="md:hidden"> 辟｡譁吶〒縺ｮ隱ｿ縺ｹ譁ｹ</span></h2>
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
        /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
        <img src="img/ascendant_guide.png" alt="繧｢繧ｻ繝ｳ繝繝ｳ繝医・隱ｿ縺ｹ譁ｹ 繧､繝ｳ繝輔か繧ｰ繝ｩ繝輔ぅ繝・け">
      </div>
      <div class="asc-guide-right">
        <p>
          縲瑚・蛻・・繧｢繧ｻ繝ｳ繝繝ｳ繝医ｒ辟｡譁吶〒隱ｿ縺ｹ繧九↓縺ｯ縺ｩ縺・＠縺溘ｉ縺・＞縺ｮ・溘阪→縺頑か縺ｿ縺ｮ譁ｹ縺ｸ縲・br>
          繧｢繧ｻ繝ｳ繝繝ｳ繝茨ｼ・SC・峨ｒ豁｣遒ｺ縺ｫ隱ｿ縺ｹ繧九↓縺ｯ縲√檎函蟷ｴ譛域律縲阪↓蜉縺医※縲梧ｭ｣遒ｺ縺ｪ蜃ｺ逕滓凾髢薙阪→縲悟・逕溷慍縲阪′蠢・ｦ√〒縺吶・br>
          蜃ｺ逕滓凾髢薙・豈榊ｭ先焔蟶ｳ縺ｪ縺ｩ縺ｧ遒ｺ隱阪☆繧九・縺御ｸ逡ｪ遒ｺ螳溘↑隱ｿ縺ｹ譁ｹ縺ｧ縺吶・br>
          蠖薙し繧､繝医〒縺ｯ縲∫函蟷ｴ譛域律縺ｨ蜃ｺ逕滓凾髢薙ｒ蜈･蜉帙☆繧九□縺代〒縲√≠縺ｪ縺溘・繧｢繧ｻ繝ｳ繝繝ｳ繝域弌蠎ｧ繧偵☆縺舌↓隱ｿ縺ｹ繧九・險育ｮ励〒縺阪ｋ繝・・繝ｫ繧堤┌譁吶〒謠蝉ｾ帙＠縺ｦ縺・∪縺吶・br>
          荳九・縲後い繧ｻ繝ｳ繝繝ｳ繝育┌譁呵ｨｺ譁ｭ縲阪°繧峨√●縺ｲ縺ゅ↑縺溘・隨ｬ荳蜊ｰ雎｡繧・､冶ｦ九・髮ｰ蝗ｲ豌励ｒ陦ｨ縺吶い繧ｻ繝ｳ繝繝ｳ繝医ｒ隱ｿ縺ｹ縺ｦ縺ｿ縺ｦ縺上□縺輔＞・・
        </p>
      </div>
    </div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">譏溷ｺｧ・・ち繝ｭ繝・ヨ</a>
      <a href="#tarot-menu" class="nav-btn-gold">繧ｿ繝ｭ繝・ヨ</a>
      <a href="#zodiac-menu" class="nav-btn-gold">譏溷ｺｧ</a>
      <a href="#color-menu" class="nav-btn-gold">縺昴・莉・/a>
      <a href="#horoscope" class="nav-btn-gold">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>

    <hr>
    <h2 id="horoscope"><span class="en-title">HOROSCOPE CHART</span><span class="ja-title"><i
          class="fa-solid fa-chart-pie"></i> 繧｢繧ｻ繝ｳ繝繝ｳ繝・br class="md:hidden"> 辟｡譁呵ｨｺ譁ｭ<br>
        ・・螻､繝帙Ο繧ｹ繧ｳ繝ｼ繝暦ｼ・/span></h2>
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
        /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
        <img src="img/horoscope_chart_ascendant.png" alt="3螻､繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ">
        <div class="view-counter"><span class="heart-icon">&hearts;</span><span class="count-num"><?php echo isset($page_views['horoscope']) ? $page_views['horoscope'] : 0; ?></span></div>
      </div>
      <div class="horoscope-right">
        <p>
          譛医・驕玖｡後→蜃ｺ逕滓凾蛻ｻ繧偵ｂ縺ｨ縺ｫ<br class="md:hidden"> 螟ｪ髯ｽ譏溷ｺｧ繝ｻ譛域弌蠎ｧ繝ｻ<br> 繧｢繧ｻ繝ｳ繝繝ｳ繝医ｒ閾ｪ蜍慕ｮ怜・縲・br>
          縲瑚｡ｨ縺ｮ諤ｧ譬ｼ縲阪悟ｿ・・螂･縲阪檎ｬｬ荳蜊ｰ雎｡縲・br> 縺ｨ縺・≧3縺､縺ｮ鬘斐ｒ遶倶ｽ鍋噪縺ｫ<br class="md:hidden"> 辟｡譁吶〒險ｺ譁ｭ縺励∪縺吶・
        </p>
        <div class="horoscope-form">
          <label>隱慕函譌･繧帝∈謚・</label>
          <input type="date" id="birthDate" max="<?php echo date('Y-m-d'); ?>"><br>
          <label>蜃ｺ逕滓凾髢薙ｒ驕ｸ謚・</label>
          <input type="time" id="birthTime"><br>
          <small style="opacity:.8;">窶ｻ 蜃ｺ逕滓凾髢薙′蛻・°繧峨↑縺・ｴ蜷医・縲・2:00縲阪〒逶ｮ螳芽ｨｺ譁ｭ縺ｧ縺阪∪縺吶・br>・医い繧ｻ繝ｳ繝繝ｳ繝医・邊ｾ蠎ｦ縺ｯ<br class="md:hidden">
            荳九′繧翫∪縺呻ｼ・/small><br>
          <button onclick="showZodiac()" class="button"><i class="fa-solid fa-wand-magic-sparkles"></i> 險ｺ譁ｭ縺吶ｋ</button>
          <button onclick="shareZodiac()" id="shareBtn" class="button" style="display:none;"><i
              class="fa-solid fa-share-nodes"></i> 邨先棡繧偵す繧ｧ繧｢</button>
        </div>
      </div>
    </div>
    <div id="zodiacLoading" style="display:none; text-align:center; margin-top:1.5em;">譏溘・驕玖｡後ｒ險育ｮ嶺ｸｭ...</div>
    <div id="zodiacResult" style="margin-top: 1em;"></div>
    <div id="lastResultLink" style="text-align:center; margin-top:1em;"></div>

    <div class="bottom-nav-buttons">
      <a href="#menu-links" class="nav-btn-gold">譏溷ｺｧ・・ち繝ｭ繝・ヨ</a>
      <a href="#tarot-menu" class="nav-btn-gold">繧ｿ繝ｭ繝・ヨ</a>
      <a href="#zodiac-menu" class="nav-btn-gold">譏溷ｺｧ</a>
      <a href="#color-menu" class="nav-btn-gold">縺昴・莉・/a>
      <a href="#horoscope" class="nav-btn-gold">繧｢繧ｻ繝ｳ繝繝ｳ繝郁ｨｺ譁ｭ</a>
    </div>




    <hr>
    <div class="pc-two-column-layout">
      <div class="pc-column-left">
        <h2 id="bsky-feed"><span class="en-title">LATEST POSTS</span><span class="ja-title"><i class="fa-brands fa-bluesky"></i>
            蜊縺・ョ繧ｶ繧､繝翫・繝医・譛譁ｰ謚慕ｨｿ</span></h2>
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
            /* Bluesky謚慕ｨｿ繧ｫ繝ｩ繝縺ｫ繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ繧定ｿｽ蜉縺励∝承蛛ｴ縺ｮ繧ｿ繝ｭ繝・ヨ繧ｳ繝ｩ繝縺ｨ鬮倥＆繧貞粋繧上○繧・*/
            .pc-column-left .bsky-feed-container {
              max-height: 500px; /* 繧ｿ繝ｭ繝・ヨ繧ｳ繝ｩ繝縺ｮ縺翫♀繧医◎縺ｮ鬮倥＆縺ｫ蜷医ｏ縺帙ｋ */
              overflow-y: auto;
              padding-right: 15px; /* 繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ繝舌・逕ｨ縺ｮ菴咏區 */
            }
            /* 繧ｹ繧ｯ繝ｭ繝ｼ繝ｫ繝舌・縺ｮ繧ｫ繧ｹ繧ｿ繝槭う繧ｺ */
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
              // URL縺ｮ繝ｪ繝ｳ繧ｯ蛹・
              $text = preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>', $text);
              // 繝上ャ繧ｷ繝･繧ｿ繧ｰ縺ｮ繝ｪ繝ｳ繧ｯ蛹・
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
                      echo '<img src="' . htmlspecialchars($img['thumb']) . '" alt="豺ｻ莉倡判蜒・ loading="lazy">';
                      echo '</a>';
                  }
                  echo '</div>';
              }
              
              echo '<div class="bsky-post-link"><a href="' . $post['link'] . '" target="_blank" rel="noopener noreferrer">Bluesky縺ｧ隕九ｋ <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>';
              echo '</div>';
          }
      } else {
          echo '<div class="bsky-post" style="text-align:center;">謚慕ｨｿ繧定ｪｭ縺ｿ霎ｼ繧√∪縺帙ｓ縺ｧ縺励◆縲・br>譎る俣繧偵♀縺・※蜀榊ｺｦ縺願ｩｦ縺励￥縺縺輔＞縲・/div>';
      }
      ?>
    </div>
    <div class="bsky-profile-btn">
      <a href="https://bsky.app/profile/evitadesignart.bsky.social" target="_blank" rel="noopener noreferrer" class="nav-btn-gold-rect" style="display: block; width: 100%; box-sizing: border-box; text-align: center;"><i class="fa-brands fa-bluesky"></i> Bluesky繝励Ο繝輔ぅ繝ｼ繝ｫ縺ｸ</a>
    </div>
    </div>

    <hr class="pc-hidden-hr">

    <div class="pc-column-right">
      <h2><span class="en-title">TAROT COLUMN</span><span class="ja-title"><i class="fa-solid fa-book-open"></i>
          繧ｿ繝ｭ繝・ヨ繧ｳ繝ｩ繝<br class="md:hidden"> ・医け繝ｪ繝・け縺ｧ髢矩哩・・/span></h2>



    <div class="accordion">

      <details>
        <summary>辟｡譁吶〒繧｢繧ｻ繝ｳ繝繝ｳ繝医ｒ隱ｿ縺ｹ繧九↓縺ｯ・溯ｪｿ縺ｹ譁ｹ縺ｮ繝昴う繝ｳ繝・/summary>
        <p>
          繧｢繧ｻ繝ｳ繝繝ｳ繝茨ｼ・SC・峨ｒ豁｣遒ｺ縺ｫ隱ｿ縺ｹ繧九↓縺ｯ縲√檎函蟷ｴ譛域律縲阪↓蜉縺医※縲梧ｭ｣遒ｺ縺ｪ蜃ｺ逕滓凾髢薙阪→縲悟・逕溷慍縲阪′蠢・ｦ√〒縺吶ょ・逕滓凾髢薙・豈榊ｭ先焔蟶ｳ縺ｪ縺ｩ縺ｧ遒ｺ隱阪☆繧九・縺御ｸ逡ｪ縺ｮ隱ｿ縺ｹ譁ｹ縺ｧ縺吶ょｽ薙し繧､繝医・辟｡譁吶・繝ｭ繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ繝・・繝ｫ繧剃ｽｿ縺医・縲∬ｪ慕函譌･縺ｨ譎る俣繧貞・蜉帙☆繧九□縺代〒縲√≠縺ｪ縺溘・繧｢繧ｻ繝ｳ繝繝ｳ繝域弌蠎ｧ繧偵☆縺舌↓隱ｿ縺ｹ繧九・險育ｮ励☆繧九％縺ｨ縺後〒縺阪∪縺吶・
        </p>
      </details>

      <details>
        <summary>繧ｿ繝ｭ繝・ヨ蜊縺・→縺ｯ菴輔°・・/summary>
        <p>
          繧ｿ繝ｭ繝・ヨ蜊縺・・縲∬ｱ｡蠕ｴ逧・↑邨ｵ譟・′謠上°繧後◆78譫壹・繧ｫ繝ｼ繝峨ｒ逕ｨ縺・※縲∵ｽ懷惠諢剰ｭ倥ｄ迥ｶ豕√・豬√ｌ繧定ｪｭ縺ｿ隗｣縺丞頃陦薙〒縺吶・br>
          迚ｹ縺ｫ縲悟､ｧ繧｢繝ｫ繧ｫ繝・2譫壹阪・驥崎ｦ√↑莠ｺ逕溘・繝・・繝槭ｄ螟牙喧繧堤､ｺ縺励√悟ｰ上い繝ｫ繧ｫ繝・6譫壹阪・譌･蟶ｸ縺ｮ邏ｰ繧・°縺ｪ蜃ｺ譚･莠九ｒ陦ｨ縺励∪縺吶・
        </p>
      </details>

      <details>
        <summary>豁｣菴咲ｽｮ縺ｨ騾・ｽ咲ｽｮ縺ｮ驕輔＞</summary>
        <p>
          繧ｿ繝ｭ繝・ヨ縺ｧ縺ｯ繧ｫ繝ｼ繝峨′豁｣遶九＠縺ｦ蜃ｺ繧九°縲・・＆縺ｫ蜃ｺ繧九°縺ｫ繧医▲縺ｦ諢丞袖縺悟､峨ｏ繧翫∪縺吶・br>
          豁｣菴咲ｽｮ縺ｯ繧ｫ繝ｼ繝画悽譚･縺ｮ繝昴ず繝・ぅ繝悶↑蛛ｴ髱｢繧偵・・ｽ咲ｽｮ縺ｯ繝悶Ο繝・け繧・ｪｲ鬘後∝・髱｢縺ｸ縺ｮ豕ｨ諢上ｒ遉ｺ縺励∪縺吶・br>
          縺ｩ縺｡繧峨′濶ｯ縺・・謔ｪ縺・〒縺ｯ縺ｪ縺上∫憾豕√ｒ螳｢隕ｳ逧・↓謐峨∴繧九◆繧√・隕也せ縺ｨ閠・∴縺ｾ縺励ｇ縺・・
        </p>
      </details>

      <details>
        <summary>縺ｩ繧薙↑縺ｨ縺阪↓蜊縺・・縺悟柑譫懃噪・・/summary>
        <p>
          繧ｿ繝ｭ繝・ヨ縺ｯ縲∵°諢帙・莉穂ｺ九・莠ｺ髢馴未菫ゅ・莠ｺ逕溘・蛻・ｲ千せ縺ｪ縺ｩ縲∬ｿｷ縺・ｄ荳榊ｮ峨ｒ諢溘§縺溘→縺阪↓豢ｻ逕ｨ縺ｧ縺阪∪縺吶・br>
          閾ｪ蛻・・豌玲戟縺｡繧呈紛逅・＠縺溘ｊ縲∬ｦ玖誠縺ｨ縺励※縺・◆隕也せ縺ｫ豌励▼縺・◆繧翫☆繧九・縺ｫ驕ｩ縺励※縺翫ｊ縲・br>
          豎ｺ譁ｭ縺ｮ閭御ｸｭ繧偵◎縺｣縺ｨ謚ｼ縺励※縺上ｌ繧句ｭ伜惠縺ｧ縺吶・
        </p>
      </details>

      <details>
        <summary>蛻晏ｿ・・↓縺翫☆縺吶ａ縺ｮ蠑輔″譁ｹ</summary>
        <p>
          蛻昴ａ縺ｦ繧ｿ繝ｭ繝・ヨ繧剃ｽｿ縺・↑繧峨・譫壼ｼ輔″縲阪′縺翫☆縺吶ａ縺ｧ縺吶・br>
          繧ｷ繝ｳ繝励Ν縺ｧ縺ゅｊ縺ｪ縺後ｉ縲∽ｻ翫・閾ｪ蛻・↓蠢・ｦ√↑繝｡繝・そ繝ｼ繧ｸ繧貞女縺大叙繧翫ｄ縺吶￥縲・br>
          豈取律縺ｮ鄙呈・縺ｫ縺吶ｋ縺薙→縺ｧ諢滓ｧ繧・峩諢溘ｂ鬢翫ｏ繧後∪縺吶・
        </p>
      </details>

    </div>
    </div>
    </div>




    <hr>
    <p>
      繧､繝ｩ繧ｹ繝育ｴ譚舌・ <a href="https://nano-design.booth.pm/">BOOTH</a>縲・a
        href="https://suzuri.jp/EvitaDesignart/designs">SUZURI</a>縲・a
        href="https://pixabay.com/users/51249745/">Pixabay</a><br class="md:hidden"> 縺ｧ雋ｩ螢ｲ荳ｭ縺ｧ縺吶・
    </p>
    <footer>

    <div class="footer-added-section parallax-bg-section" style="background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; color: #fff; padding: 4rem 1rem; margin-bottom: 2rem; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); box-sizing: border-box;">
    <div class="footer-menu" style="text-align: center; max-width: 1000px; margin: 0 auto; padding: 0 1rem; box-sizing: border-box;">
            <div class="footer-link-grid" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; line-height: 1.5; font-size: 0.9rem;">
        <a href="https://evitadesignart.com/tarotte_list.php" title="蜊縺・ｸ隕ｧ繝壹・繧ｸ" style="text-decoration: none; color: #fff;">TOP</a>
        <a href="https://evitadesignart.com/tarotte7.php" title="繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ莉企ｱ縺ｮ驕句兇" style="text-decoration: none; color: #fff;">莉企ｱ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&amp;譏溷ｺｧ)</a>
        <a href="https://evitadesignart.com/tarotte5.php" title="繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ莉頑怦縺ｮ驕句兇" style="text-decoration: none; color: #fff;">莉頑怦縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&amp;譏溷ｺｧ)</a>
        <a href="https://evitadesignart.com/tarotte6.php" title="繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ莉雁ｹｴ縺ｮ驕句兇" style="text-decoration: none; color: #fff;">莉雁ｹｴ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&amp;譏溷ｺｧ)</a>
        <a href="https://evitadesignart.com/tarotte2.php" title="螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・/a>
        <a href="https://evitadesignart.com/tarotte4.php" title="螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・/a>
        <a href="https://evitadesignart.com/tarotte.php" title="螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・/a>
        <a href="https://evitadesignart.com/tarotte9.php" title="逶ｸ謇九→閾ｪ蛻・・2譫壼頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｭ繝・ヨ2譫夂嶌謇九→閾ｪ蛻・頃縺・/a>
        <a href="https://evitadesignart.com/tarotte8.php" title="諱区・縺ｫ迚ｹ蛹悶＠縺・譫壼頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｭ繝・ヨ3譫壽°諢帛頃縺・/a>
        <a href="https://evitadesignart.com/tarotte3.php" title="蟆上い繝ｫ繧ｫ繝雁頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｭ繝・ヨ蟆上い繝ｫ繧ｫ繝雁頃縺・/a>
        <a href="https://evitadesignart.com/tarotte10.php" title="繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ" style="text-decoration: none; color: #fff;">縺ゅ↑縺溘・繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ</a>
        <a href="https://evitadesignart.com/tarotte11.php" title="繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・ style="text-decoration: none; color: #fff;">繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・/a>
        <a href="https://evitadesignart.com/tarotte12.php" title="YESNO繝ｯ繝ｳ繧ｫ繝ｼ繝牙頃縺・ style="text-decoration: none; color: #fff;">YES繝ｻNO繝ｯ繝ｳ繧ｫ繝ｼ繝牙頃縺・/a>
        <a href="https://evitadesignart.com/zodiac.php" title="螟ｪ髯ｽ譏溷ｺｧ縺ｮ蜊縺・ style="text-decoration: none; color: #fff;">譏溷ｺｧ蜊縺・螟ｪ髯ｽ譏溷ｺｧ)</a>
        <a href="https://evitadesignart.com/zodiac2.php" title="譛域弌蠎ｧ縺ｮ蜊縺・ style="text-decoration: none; color: #fff;">譏溷ｺｧ蜊縺・譛域弌蠎ｧ)</a>
        <a href="https://evitadesignart.com/zodiac3.php" title="繧｢繧ｻ繝ｳ繝繝ｳ繝医・譏溷ｺｧ蜊縺・ style="text-decoration: none; color: #fff;">譏溷ｺｧ蜊縺・繧｢繧ｻ繝ｳ繝繝ｳ繝・</a>
        <a href="https://evitadesignart.com/color24.php" title="24濶ｲ縺九ｉ蜊縺・ｧ譬ｼ險ｺ譁ｭ" style="text-decoration: none; color: #fff;">24縺ｮ濶ｲ蜊縺・/a>
        <a href="https://evitadesignart.com/engel.php" title="繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・ style="text-decoration: none; color: #fff;">繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・/a>
      </div>
    </div>
</div>
    <div class="footer-brand" style="text-align: center; margin-bottom: 2rem;">
      <a href="https://evitadesignart.com/tarotte_list.php" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.5rem; text-decoration: none; color: inherit;">蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡</a><br>
      <small style="display: block; margin-top: 0.5rem; font-size: 0.8rem; color: #ccc;">驕句霧 <a href="https://evitadesignart.com/" style="text-decoration: none; color: inherit;">EvitaDesignart</a></small>
    </div>

      <small>&copy;2016 -
        <script>document.write(new Date().getFullYear());</script> Evita Designart.
      </small>
    </footer>
  </main>



  <script>
    // ---- 譏溷ｺｧ繝槭せ繧ｿ・・=迚｡鄒雁ｺｧ ? 11=鬲壼ｺｧ・・---
    const ZODIAC = [
      {
        name: "迚｡鄒雁ｺｧ", symbol: "\u2648", element: "fire",
        sun: "諠・・逧・〒陦悟虚逧・∵眠縺励＞謖第姶繧呈＄繧後↑縺・Μ繝ｼ繝繝ｼ豌苓ｳｪ縲よ昴＞遶九▲縺溘ｉ縺吶＄蜍輔￥迸ｬ逋ｺ蜉帙′縺ゅｊ縺ｾ縺吶・,
        moon: "蠢・・螂･縺ｧ縺ｯ逋ｽ鮟偵・縺｣縺阪ｊ縺輔○縺溘＞雋縺代★雖後＞縲よ─諠・・襍ｷ莨上・騾溘＞縺ｧ縺吶′蠑輔″縺壹ｊ縺ｾ縺帙ｓ縲・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ蜈・ｰ励〒繧ｹ繝医Ξ繝ｼ繝医ょ・莨壹▲縺溽椪髢薙°繧牙ｴ繧呈・繧九￥縺吶ｋ繧ｨ繝阪Ν繧ｮ繝ｼ繧呈─縺倥＆縺帙∪縺吶・,
        love: "謚ｼ縺励・蠑ｷ縺・い繝励Ο繝ｼ繝√↓蠑ｱ縺上∬・蛻・°繧牙虚縺乗°繧貞･ｽ縺ｿ縺ｾ縺吶るｧ・￠蠑輔″繧医ｊ逶ｴ逅・享雋縲・
      },
      {
        name: "迚｡迚帛ｺｧ", symbol: "\u2649", element: "earth",
        sun: "螳牙ｮ壼ｿ怜髄縺ｧ蠢崎仙鴨縺後≠繧翫∽ｺ疲─繧貞､ｧ蛻・↓縺吶ｋ闃ｸ陦鍋噪縺ｪ髱｢繧ゅゅ§縺｣縺上ｊ遨阪∩荳翫￡繧句鴨縺後≠繧翫∪縺吶・,
        moon: "蠢・・螂･縺ｯ螟牙喧繧貞ｫ後≧螳牙ｿ・ｬｬ荳豢ｾ縲り誠縺｡逹縺代ｋ迺ｰ蠅・ｄ鄒主袖縺励＞繧ゅ・縺ｫ逋偵＆繧後∪縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ遨上ｄ縺九〒螳牙ｿ・─縺ｮ縺ゅｋ莠ｺ縲ゅ・繧､繝壹・繧ｹ縺縺代←菫｡鬆ｼ縺ｧ縺阪ｋ髮ｰ蝗ｲ豌励ｒ謖√▲縺ｦ縺・∪縺吶・,
        love: "譎る俣繧偵°縺代※繧・▲縺上ｊ霍晞屬繧堤ｸｮ繧√ｋ繧ｿ繧､繝励ゆｸ蠎ｦ蠢・ｒ髢九￥縺ｨ縺ｨ縺薙→繧謎ｸ騾斐〒縺吶・
      },
      {
        name: "蜿悟ｭ仙ｺｧ", symbol: "\u264A", element: "air",
        sun: "遏･逧・･ｽ螂・ｿ・′譌ｺ逶帙〒縲∬ｨ闡峨→諠・ｱ縺ｫ蜆ｪ繧後◆譟碑ｻ溘↑諤ｧ譬ｼ縲りｩｱ鬘後′雎雁ｯ後〒蝣ｴ繧偵▽縺ｪ縺舌・縺悟ｾ玲э縲・,
        moon: "蠢・・螂･縺ｯ騾螻医′闍ｦ謇九〒蛻ｺ豼繧呈ｱゅａ縺後■縲よ─諠・ｂ鬆ｭ縺ｧ謨ｴ逅・＠縺ｦ縺九ｉ邏榊ｾ励☆繧九ち繧､繝励・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ霆ｽ繧・°縺ｧ繝輔Ξ繝ｳ繝峨Μ繝ｼ縲りｪｰ縺ｨ縺ｧ繧ゅ☆縺先遠縺｡隗｣縺代ｉ繧後ｋ遉ｾ莠､諤ｧ縺悟・繧翫∪縺吶・,
        love: "莨夊ｩｱ縺ｮ繧ｭ繝｣繝・メ繝懊・繝ｫ繧呈･ｽ縺励・諱区・豢ｾ縲ら衍逧・↑蛻ｺ豼繧偵￥繧後ｋ逶ｸ謇九↓諠ｹ縺九ｌ縺ｾ縺吶・
      },
      {
        name: "陝ｹ蠎ｧ", symbol: "\u264B", element: "water",
        sun: "諢滓ュ雎翫°縺ｧ螳ｶ譌上ｄ莉ｲ髢薙ｒ螟ｧ蛻・↓縺吶ｋ菫晁ｭｷ譛ｬ閭ｽ縺ｮ蠑ｷ縺・ち繧､繝励る擇蛟定ｦ九・濶ｯ縺輔′鬲・鴨縲・,
        moon: "蠢・・螂･縺ｯ郢顔ｴｰ縺ｧ莠ｺ荳蛟榊す縺､縺阪ｄ縺吶＞蜿埼擇縲∝､ｧ蛻・↑莠ｺ縺ｫ縺ｯ豺ｱ縺・・諠・ｒ豕ｨ縺弱∪縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ譟斐ｉ縺九￥隕ｪ縺励∩繧・☆縺・りｭｦ謌貞ｿ・・縺ゅｋ繧ゅ・縺ｮ譬ｹ縺悟━縺励＞蜊ｰ雎｡繧剃ｸ弱∴縺ｾ縺吶・,
        love: "螳牙ｿ・〒縺阪ｋ髢｢菫ゅｒ譛蜆ｪ蜈医ら嶌謇九ｒ蛹・∩霎ｼ繧繧医≧縺ｪ蟆ｽ縺上＠蝙九・諱九ｒ縺励∪縺吶・
      },
      {
        name: "迯・ｭ仙ｺｧ", symbol: "\u264C", element: "fire",
        sun: "闖ｯ繧・°縺ｧ閾ｪ菫｡縺ｫ縺ゅ・繧後∵ｳｨ逶ｮ繧帝寔繧√ｋ繧ｫ繝ｪ繧ｹ繝樊ｧ繧呈戟縺､縲ょゅ・→縺励◆謖ｯ繧玖・縺・′鬲・鴨縲・,
        moon: "蠢・・螂･縺ｯ繝励Λ繧､繝峨′鬮倥￥縲∬ｪ阪ａ繧峨ｌ縺溘＞豌玲戟縺｡縺悟ｼｷ繧√り､偵ａ繧峨ｌ繧九→莨ｸ縺ｳ繧九ち繧､繝励・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ闖ｯ繧・°縺ｧ蟄伜惠諢滓栢鄒､縲り・辟ｶ縺ｨ莠ｺ縺ｮ隕也ｷ壹ｒ髮・ａ繧九が繝ｼ繝ｩ繧呈戟縺｣縺ｦ縺・∪縺吶・,
        love: "繝ｪ繝ｼ繝峨☆繧九・繧ゅ＆繧後ｋ縺ｮ繧ょ･ｽ縺阪よ°諢帙〒繧ゆｸｻ蠖ｹ縺ｨ縺励※霈昴″縺溘＞繧ｿ繧､繝励〒縺吶・
      },
      {
        name: "荵吝･ｳ蠎ｧ", symbol: "\u264D", element: "earth",
        sun: "蛻・梵蜉帙→螳溷漁蜉帙↓蜆ｪ繧後∫ｹ顔ｴｰ縺ｧ螳檎挑荳ｻ鄒ｩ縺ｪ荳髱｢繧ゅよｰ鈴・繧翫・邏ｰ繧・°縺輔′蠑ｷ縺ｿ縺ｧ縺吶・,
        moon: "蠢・・螂･縺ｯ蠢・・諤ｧ縺ｧ閾ｪ蛻・↓繧ゆｻ紋ｺｺ縺ｫ繧ょ宍縺励ａ縲よ紛逅・紛鬆薙＆繧後※縺・ｋ縺ｨ螳牙ｿ・＠縺ｾ縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ貂・ｽ疲─縺後≠繧願ｪ螳溘ゅ″縺｡繧薙→縺励◆莠ｺ縺ｨ縺・≧菫｡鬆ｼ繧偵☆縺舌↓蠕励ｄ縺吶＞縺ｧ縺吶・,
        love: "逶ｸ謇九ｒ繧医￥隕ｳ蟇溘＠縲√＆繧翫￡縺ｪ縺・し繝昴・繝医〒諢帶ュ繧堤､ｺ縺呎而縺医ａ縺ｪ諱区・繧ｹ繧ｿ繧､繝ｫ縲・
      },
      {
        name: "螟ｩ遘､蠎ｧ", symbol: "\u264E", element: "air",
        sun: "繝舌Λ繝ｳ繧ｹ諢溯ｦ壹↓蜆ｪ繧後∽ｺｺ髢馴未菫ゅｒ蜀・ｻ代↓縺吶ｋ隱ｿ蜥後・雎｡蠕ｴ縲ゅそ繝ｳ繧ｹ縺ｮ濶ｯ縺輔ｂ蜈峨ｊ縺ｾ縺吶・,
        moon: "蠢・・螂･縺ｯ莠峨＞縺斐→縺瑚協謇九〒縲∝ｸｸ縺ｫ蜈ｬ蟷ｳ縺ｧ縺・◆縺・ｰ玲戟縺｡縺悟ｼｷ縺・〒縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ荳雁刀縺ｧ諢溘§縺瑚憶縺・りｪｰ縺ｫ蟇ｾ縺励※繧り・辟ｶ縺ｪ豌鈴・繧翫′縺ｧ縺阪ｋ莠ｺ縺ｨ譏繧翫∪縺吶・,
        love: "繝代・繝医リ繝ｼ繧ｷ繝・・繧貞､ｧ蛻・↓縺励∝ｯｾ遲峨↑髢｢菫ゅｒ遽峨″縺溘＞繝ｭ繝槭Φ繝√せ繝医・
      },
      {
        name: "陟榊ｺｧ", symbol: "\u264F", element: "water",
        sun: "豺ｱ縺・ュ辭ｱ縺ｨ豢槫ｯ溷鴨繧呈戟縺｡縲∫黄莠九ｒ讌ｵ繧√ｋ蜉帙ｒ遘倥ａ縺ｦ縺・ｋ縲ゆｸ蠎ｦ豎ｺ繧√◆驕薙・雋ｫ縺阪∪縺吶・,
        moon: "蠢・・螂･縺ｯ迢ｬ蜊谺ｲ繧・濤逹蠢・′蠑ｷ繧√ゆｿ｡縺倥◆逶ｸ謇九↓縺ｯ蜈ｨ縺ｦ繧呈・縺代ｋ隕壽ぁ縺後≠繧翫∪縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ繝溘せ繝・Μ繧｢繧ｹ縺ｧ豺ｱ縺ｿ縺後≠繧九らｰ｡蜊倥↓縺ｯ譛ｬ蠢・ｒ隕九○縺ｪ縺・ｭ・鴨縺後≠繧翫∪縺吶・,
        love: "豬・＞髢｢菫ゅｒ螂ｽ縺ｾ縺壹・°蜻ｽ逧・↑縺､縺ｪ縺後ｊ繧呈ｱゅａ繧矩㍾繧√〒荳騾斐↑諱区・隕ｳ縲・
      },
      {
        name: "蟆・焔蠎ｧ", symbol: "\u2650", element: "fire",
        sun: "閾ｪ逕ｱ縺ｨ蜀帝匱繧呈・縺励∫炊諠ｳ縺ｫ蜷代°縺｣縺ｦ譫懈覆縺ｫ騾ｲ繧謗｢遨ｶ閠・よ･ｽ隕ｳ逧・↑繝代Ρ繝ｼ縺碁ｭ・鴨縲・,
        moon: "蠢・・螂･縺ｯ邵帙ｉ繧後ｋ縺薙→縺御ｽ輔ｈ繧願協謇九ょｸｸ縺ｫ譁ｰ縺励＞譎ｯ濶ｲ繧・ｭｦ縺ｳ繧呈ｱゅａ縺ｦ縺・∪縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ譏弱ｋ縺上が繝ｼ繝励Φ縲り｣剰｡ｨ縺ｮ縺ｪ縺・＆縺｣縺ｱ繧翫＠縺滄峅蝗ｲ豌励↓螂ｽ諢溘ｒ謖√◆繧後∪縺吶・,
        love: "譚溽ｸ帙ｒ雖後＞縲√♀莠偵＞縺ｮ閾ｪ逕ｱ繧貞ｰ企㍾縺ｧ縺阪ｋ諱倶ｺｺ蜷悟｣ｫ縺ｮ繧医≧縺ｪ髢｢菫ゅｒ螂ｽ縺ｿ縺ｾ縺吶・
      },
      {
        name: "螻ｱ鄒雁ｺｧ", symbol: "\u2651", element: "earth",
        sun: "雋ｬ莉ｻ諢溘′蠑ｷ縺上√さ繝・さ繝・→蜉ｪ蜉帙ｒ驥阪・縺ｦ謌先棡繧堤ｯ峨￥縲る聞譛溽噪縺ｪ隕也せ縺ｧ迚ｩ莠九ｒ隕九∪縺吶・,
        moon: "蠢・・螂･縺ｯ蠑ｱ縺ｿ繧定ｦ九○繧九・縺瑚協謇九〒縲∽ｸ莠ｺ縺ｧ謚ｱ縺郁ｾｼ縺ｿ縺後■縲ょｮ溘・蜉ｪ蜉帛ｮｶ縺ｧ蟇ゅ＠縺後ｊ繧・・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ關ｽ縺｡逹縺・※縺・※鬆ｼ繧後ｋ螟ｧ莠ｺ縺ｨ縺・≧蜊ｰ雎｡縲りｪ螳溘＆縺瑚・辟ｶ縺ｨ莨昴ｏ繧翫∪縺吶・,
        love: "譎る俣繧偵°縺代※菫｡鬆ｼ繧堤ｯ峨￥蝣・ｮ滓ｴｾ縲ょｰ・擂繧定ｦ区紺縺医◆逵溷殴縺ｪ諱区・繧貞･ｽ縺ｿ縺ｾ縺吶・
      },
      {
        name: "豌ｴ逑ｶ蠎ｧ", symbol: "\u2652", element: "air",
        sun: "迢ｬ蜑ｵ逧・↑逋ｺ諠ｳ縺ｨ譛ｪ譚･蠢怜髄縺ｧ縲∵眠縺励＞萓｡蛟､隕ｳ繧堤函縺ｿ蜃ｺ縺吶ょ区ｧ繧貞､ｧ蛻・↓縺励∪縺吶・,
        moon: "蠢・・螂･縺ｯ閾ｪ逕ｱ縺ｪ逋ｺ諠ｳ縺ｮ謖√■荳ｻ縺ｧ縲∝ｸｸ隴倥↓縺ｨ繧峨ｏ繧後★迚ｩ莠九ｒ繝輔Λ繝・ヨ縺ｫ謐峨∴縺ｾ縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ蛟区ｧ逧・〒繝ｦ繝九・繧ｯ縲ゅ≠繧翫″縺溘ｊ縺ｧ縺ｪ縺・ｭ・鴨繧呈叛縺｡縺ｾ縺吶・,
        love: "蜿矩＃縺ｮ繧医≧縺ｪ蟇ｾ遲峨↑髢｢菫ゅｒ螂ｽ縺ｿ縲∵據邵帙・縺ｪ縺・・逕ｱ縺ｪ諱区・繧堤炊諠ｳ縺ｨ縺励∪縺吶・
      },
      {
        name: "鬲壼ｺｧ", symbol: "\u2653", element: "water",
        sun: "諢溷女諤ｧ縺瑚ｱ翫°縺ｧ蜈ｱ諢溷鴨縺碁ｫ倥￥縲∝､｢隕九′縺｡縺ｪ蜆ｪ縺励＞諤ｧ譬ｼ縲よΦ蜒丞鴨縺ｮ雎翫°縺輔′蠑ｷ縺ｿ縺ｧ縺吶・,
        moon: "蠢・・螂･縺ｯ莠ｺ縺ｮ豌玲戟縺｡縺ｫ謨乗─縺ｧ縲∵─諠・ｧｻ蜈･縺励ｄ縺吶＞繝斐Η繧｢縺ｪ驛ｨ蛻・ｒ謖√▲縺ｦ縺・∪縺吶・,
        asc: "隨ｬ荳蜊ｰ雎｡縺ｯ縺ｵ繧薙ｏ繧翫→蜆ｪ縺励＞髮ｰ蝗ｲ豌励ら剪縺礼ｳｻ縺ｨ縺励※隕ｪ縺励∪繧後ｄ縺吶＞繧ｿ繧､繝励〒縺吶・,
        love: "逶ｸ謇九↓蜈ｱ諢溘＠蟇・ｊ豺ｻ縺・鍵霄ｫ逧・↑諱九ゅΟ繝槭Φ繝√ャ繧ｯ縺ｪ螻暮幕縺ｫ蠑ｱ縺・〒縺吶・
      }
    ];

    const ELEMENT_LABEL = { fire: "轣ｫ", earth: "蝨ｰ", air: "鬚ｨ", water: "豌ｴ" };
    const ELEMENT_CLASS = { fire: "el-fire", earth: "el-earth", air: "el-air", water: "el-water" };
    const ELEMENT_DESC = {
      fire: "諠・・繝ｻ陦悟虚蜉帙′髫帷ｫ九▽縲檎↓縲阪・豌苓ｳｪ縺悟ｼｷ縺丞・縺ｦ縺・∪縺吶よ昴＞遶九▲縺溘ｉ蜊ｳ陦悟虚縲∝兇縺・ｒ蜻ｳ譁ｹ縺ｫ縺吶ｋ繧ｿ繧､繝励・,
      earth: "迴ｾ螳滓─隕壹→邊倥ｊ蠑ｷ縺輔′髫帷ｫ九▽縲悟慍縲阪・豌苓ｳｪ縺悟ｼｷ縺丞・縺ｦ縺・∪縺吶ら捩螳溘↓遨阪∩荳翫￡縺ｦ邨先棡繧貞・縺吶ち繧､繝励・,
      air: "遏･諤ｧ縺ｨ繧ｳ繝溘Η繝九こ繝ｼ繧ｷ繝ｧ繝ｳ蜉帙′髫帷ｫ九▽縲碁｢ｨ縲阪・豌苓ｳｪ縺悟ｼｷ縺丞・縺ｦ縺・∪縺吶よュ蝣ｱ繧・ｺｺ縺ｨ縺ｮ縺､縺ｪ縺後ｊ繧貞鴨縺ｫ螟峨∴繧九ち繧､繝励・,
      water: "諢溷女諤ｧ縺ｨ蜈ｱ諢溷鴨縺碁圀遶九▽縲梧ｰｴ縲阪・豌苓ｳｪ縺悟ｼｷ縺丞・縺ｦ縺・∪縺吶よ─諠・・讖溷ｾｮ繧貞､ｧ蛻・↓縺吶ｋ郢顔ｴｰ縺ｪ繧ｿ繧､繝励・
    };

    function normalizeDeg(deg) {
      let d = deg % 360;
      if (d < 0) d += 360;
      return d;
    }
    function deg2rad(d) { return d * Math.PI / 180; }

    // 螟ｪ髯ｽ譏溷ｺｧ・医ヨ繝ｭ繝斐き繝ｫ譁ｹ蠑上・螳滓律莉伜｢・阜縲よ里蟄倥Ο繧ｸ繝・け繧定ｸ剰･ｲ・・
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

    // 繝ｦ繝ｪ繧ｦ繧ｹ譌･・・eeus縺ｮ霑台ｼｼ蠑擾ｼ・
    function toJulianDate(y, m, d, hourDecimal) {
      if (m <= 2) { y -= 1; m += 12; }
      const A = Math.floor(y / 100);
      const B = 2 - A + Math.floor(A / 4);
      return Math.floor(365.25 * (y + 4716)) + Math.floor(30.6001 * (m + 1)) + d + B - 1524.5 + hourDecimal / 24;
    }

    // 譛域弌蠎ｧ・壽怦縺ｮ鮟・％蠎ｧ讓吶ｒ菴守ｲｾ蠎ｦ霑台ｼｼ蠑上〒邂怜・・郁ｪ､蟾ｮ縺ｯ縺翫ｈ縺敖ｱ5蠎ｦ遞句ｺｦ・・
    function getMoonIndex(y, m, d, hourDecimal) {
      const jd = toJulianDate(y, m, d, hourDecimal);
      const dT = jd - 2451545.0;
      const L = normalizeDeg(218.316 + 13.176396 * dT);   // 蟷ｳ蝮・ｻ・ｵ・
      const M = normalizeDeg(134.963 + 13.064993 * dT);   // 蟷ｳ蝮・ｿ醍せ隗・
      const trueLon = normalizeDeg(L + 6.289 * Math.sin(deg2rad(M)));
      return Math.floor(trueLon / 30) % 12;
    }

    // 繧｢繧ｻ繝ｳ繝繝ｳ繝茨ｼ壼､ｪ髯ｽ譏溷ｺｧ・句・逕滓凾蛻ｻ縺九ｉ縺ｮ邁｡譏捺耳螳・
    // ・域律縺ｮ蜃ｺ鬆・薗螟ｪ髯ｽ譏溷ｺｧ縺窟sc縺ｫ荳閾ｴ縺励∫ｴ・譎る俣縺ｧ1繧ｵ繧､繝ｳ騾ｲ繧縺ｨ縺・≧霑台ｼｼ繝｢繝・Ν・・
    // 窶ｻ 蜴ｳ蟇・↑邂怜・縺ｫ縺ｯ蜃ｺ逕溷慍縺ｮ邱ｯ蠎ｦ邨悟ｺｦ繝ｻ諱呈弌譎ゅ′蠢・ｦ√〒縺・
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
        return `螟ｪ髯ｽ繝ｻ譛医・繧｢繧ｻ繝ｳ繝繝ｳ繝医☆縺ｹ縺ｦ縺後・{ELEMENT_LABEL[topEl]}縲阪〒邨ｱ荳縺輔ｌ縺ｦ縺・∪縺吶・{ELEMENT_DESC[topEl]}陦ｨ縺ｨ陬上√←縺｡繧峨・鬘斐ｒ隕九※繧ゆｸ雋ｫ諤ｧ縺ｮ縺ゅｋ縲√ヶ繝ｬ縺ｮ蟆代↑縺・ち繧､繝励→險縺医ｋ縺ｧ縺励ｇ縺・Ａ;
      }
      if (topCount === 2) {
        const otherEl = entries[1][0];
        return `3縺､縺ｮ縺・■2縺､縺後・{ELEMENT_LABEL[topEl]}縲阪・豌苓ｳｪ縲・{ELEMENT_DESC[topEl]}荳譁ｹ縺ｧ縲・{ELEMENT_LABEL[otherEl]}縲阪・隕∫ｴ繧よ戟縺｡蜷医ｏ縺帙※縺翫ｊ縲∫憾豕√↓蠢懊§縺ｦ驕輔≧荳髱｢繧定ｦ九○繧句･･陦後″縺ｮ縺ゅｋ諤ｧ譬ｼ縺ｧ縺吶Ａ;
      }
      return `螟ｪ髯ｽ繝ｻ譛医・繧｢繧ｻ繝ｳ繝繝ｳ繝医′縺昴ｌ縺槭ｌ逡ｰ縺ｪ繧区ｰ苓ｳｪ・育↓繝ｻ蝨ｰ繝ｻ鬚ｨ繝ｻ豌ｴ縺ｮ縺・■3遞ｮ・峨ｒ謖√▽縲∝､夐擇逧・↑鬲・鴨縺ｮ謖√■荳ｻ縺ｧ縺吶ょｴ髱｢縺ｫ繧医▲縺ｦ隕九○繧矩｡斐′螟峨ｏ繧九・縺ｧ縲∝捉蝗ｲ縺九ｉ縲梧э螟悶↑荳髱｢縲阪↓鬩壹°繧後ｋ縺薙→縺悟､壹＞縺九ｂ縺励ｌ縺ｾ縺帙ｓ縲Ａ;
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
        resultEl.innerHTML = "<p>隱慕函譌･繧貞・蜉帙＠縺ｦ縺上□縺輔＞縲・/p>";
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
        const timeNote = timeVal ? "" : "<br><small>窶ｻ 蜃ｺ逕滓凾髢薙′譛ｪ蜈･蜉帙・縺溘ａ12:00縺ｧ莉ｮ邂怜・縺励※縺・∪縺吶ゅｈ繧頑ｭ｣遒ｺ縺ｪ繧｢繧ｻ繝ｳ繝繝ｳ繝医↓縺ｯ螳滄圀縺ｮ蜃ｺ逕滓凾髢薙・蜈･蜉帙ｒ縺翫☆縺吶ａ縺励∪縺吶・/small>";

        loadingEl.style.display = "none";
        resultEl.innerHTML = `
          <div class="sign-grid">
            ${renderCard("sun", "螟ｪ髯ｽ譏溷ｺｧ・郁｡ｨ縺ｮ諤ｧ譬ｼ・・, "<i class='fa-solid fa-sun'></i>", sunSign)}
            ${renderCard("moon", "譛域弌蠎ｧ・亥ｿ・・螂･・・, "<i class='fa-solid fa-moon'></i>", moonSign)}
            ${renderCard("asc", "繧｢繧ｻ繝ｳ繝繝ｳ繝茨ｼ育ｬｬ荳蜊ｰ雎｡・・, "ASC", ascSign)}
          </div>
          <div class="synthesis-box">
            <h3><i class="fa-solid fa-wand-magic-sparkles"></i> 邱丞粋險ｺ譁ｭ</h3>
            <p>${synthesis}</p>
            <p><strong><i class="fa-solid fa-heart"></i> 諱区・縺ｮ繝偵Φ繝茨ｼ・/strong>${sunSign.love}</p>
            <p><small>螟ｪ髯ｽ譏溷ｺｧ縺ｯ縲御ｺｺ逕溘・譁ｹ蜷第ｧ縺ｨ陦ｨ縺ｮ諤ｧ譬ｼ縲阪∵怦譏溷ｺｧ縺ｯ縲檎┌諢剰ｭ倥・諢滓ュ蜿榊ｿ懊阪√い繧ｻ繝ｳ繝繝ｳ繝医・縲御ｻ紋ｺｺ縺ｫ荳弱∴繧狗ｬｬ荳蜊ｰ雎｡縲阪ｒ陦ｨ縺励∪縺吶・縺､繧帝㍾縺ｭ繧九％縺ｨ縺ｧ縲√≠縺ｪ縺溘・螟夐擇逧・↑豌苓ｳｪ縺檎ｫ倶ｽ鍋噪縺ｫ隕九∴縺ｦ縺阪∪縺吶・{timeNote}</small></p>
          </div>
        `;

        // 邨先棡繧剃ｿ晏ｭ倥＠縲√す繧ｧ繧｢繝懊ち繝ｳ繧定｡ｨ遉ｺ
        try {
          localStorage.setItem("horoscopeResult", JSON.stringify({
            date: dateVal, time: useTime,
            sun: sunSign.name, moon: moonSign.name, asc: ascSign.name,
            savedAt: new Date().toISOString()
          }));
        } catch (e) { /* localStorage縺御ｽｿ縺医↑縺・腸蠅・・辟｡隕・*/ }
        document.getElementById("shareBtn").style.display = "inline-block";
        renderLastResultLink();

        // 險ｺ譁ｭ蝗樊焚繧偵き繧ｦ繝ｳ繝茨ｼ磯撼蜷梧悄騾壻ｿ｡・・
        try {
          fetch('?ajax_track=horoscope');
          const countEl = document.querySelector('.horoscope-left .count-num');
          if (countEl) {
            countEl.textContent = parseInt(countEl.textContent || 0) + 1;
          }
        } catch(e) {}

        // 繧ｹ繝槭・縺ｪ縺ｩ縺ｧ隕九ｄ縺吶＞繧医≧縺ｫ邨先棡驛ｨ蛻・∈閾ｪ蜍輔せ繧ｯ繝ｭ繝ｼ繝ｫ
        setTimeout(() => {
          resultEl.scrollIntoView({ behavior: "smooth", block: "start" });
        }, 50);
      }, 400);
    }

    function shareZodiac() {
      let saved;
      try { saved = JSON.parse(localStorage.getItem("horoscopeResult")); } catch (e) { saved = null; }
      if (!saved) return;
      const text = `遘√・險ｺ譁ｭ邨先棡 | 螟ｪ髯ｽ譏溷ｺｧ:${saved.sun} / 譛域弌蠎ｧ:${saved.moon} / 繧｢繧ｻ繝ｳ繝繝ｳ繝・${saved.asc}\n#辟｡譁吝頃縺・#繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ`;
      const url = "https://evitadesignart.com/tarotte_list.php#horoscope";
      if (navigator.share) {
        navigator.share({ title: "3螻､繝帙Ο繧ｹ繧ｳ繝ｼ繝苓ｨｺ譁ｭ邨先棡", text, url }).catch(() => { });
      } else if (navigator.clipboard) {
        navigator.clipboard.writeText(text + "\n" + url).then(() => {
          alert("邨先棡繧偵さ繝斐・縺励∪縺励◆縲４NS縺ｪ縺ｩ縺ｫ雋ｼ繧贋ｻ倥￠縺ｦ繧ｷ繧ｧ繧｢縺ｧ縺阪∪縺吶・);
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
      el.innerHTML = `<small>蜑榊屓縺ｮ險ｺ譁ｭ邨先棡・・{dateStr}・・ <i class="fa-solid fa-sun"></i>${saved.sun} / <i class="fa-solid fa-moon"></i>${saved.moon} / ASC:${saved.asc}</small>`;
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
      "莉頑律縺ｮ驕句多縺ｯ縲√≠縺ｪ縺溘・荳豁ｩ縺ｧ螟峨ｏ繧雁ｧ九ａ繧九・,
      "繧ｫ繝ｼ繝峨′隱槭ｋ逵溷ｮ溘↓閠ｳ繧偵☆縺ｾ縺帙※縲・,
      "譏溘・蟆弱″縺ｫ霄ｫ繧貞ｧ斐・縺ｦ縺ｿ縺ｾ縺励ｇ縺・・,
      "蠢・・荳ｭ縺ｮ螢ｰ縺後∝頃縺・ｒ騾壹§縺ｦ迴ｾ繧後ｋ縺九ｂ縲・,
      "縺ｲ縺ｨ縺､縺ｮ驕ｸ謚槭′縲∵悴譚･繧貞虚縺九＠縺ｾ縺吶・
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

    // TOP縺ｫ謌ｻ繧九・繧ｿ繝ｳ縺ｮ蛻ｶ蠕｡
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
      backToTopBtn.title = 'TOP縺ｸ謌ｻ繧・;
      backToTopBtn.innerHTML = '笆ｲ';
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
      /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
      /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
      /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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
        <a href="https://twitter.com/intent/tweet?url=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>&text=<?php echo rawurlencode('辟｡譁吝頃縺・| 蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡'); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-x" title="X (Twitter)縺ｧ繧ｷ繧ｧ繧｢">
      <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://evitadesignart.com/<?php echo basename($_SERVER['PHP_SELF']); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-fb" title="Facebook縺ｧ繧ｷ繧ｧ繧｢">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
        <a href="https://line.me/R/msg/text/?<?php echo rawurlencode('辟｡譁吝頃縺・| 蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡ https://evitadesignart.com/' . basename($_SERVER['PHP_SELF'])); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-line" title="LINE縺ｧ繧ｷ繧ｧ繧｢">
      <i class="fa-brands fa-line"></i>
    </a>
        <a href="https://bsky.app/intent/compose?text=<?php echo rawurlencode('辟｡譁吝頃縺・| 蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡ https://evitadesignart.com/' . basename($_SERVER['PHP_SELF'])); ?>"
      target="_blank" rel="noopener noreferrer" class="sns-bsky" title="Bluesky縺ｧ繧ｷ繧ｧ繧｢">
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
      /* 螟ｧ縺阪ａ縺ｮ繝上・繝・*/
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



</body>

</html>