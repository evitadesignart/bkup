<?php require_once 'counter.php'; track_page_view(basename(__FILE__, '.php')); ?>
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

  <!-- SEO タイトルとディスクリプション -->
  <title>エンジェルナンバー一覧｜111・222・1234などのぞろ目・連番の意味と運勢 | 占いアルカノヴァ</title>
  <meta name="description"
    content="エンジェルナンバーの意味を詳しく解説。111、222などのぞろ目や1234などの連番も完全カバー。数字が伝えるメッセージを理解して日常生活や自己成長に活かしましょう。" />

  <!-- OGP (画像なし) -->
  <meta property="og:title" content="エンジェルナンバーの意味｜111・222などぞろ目・1234連番の運勢とメッセージ" />
  <meta property="og:description"
    content="エンジェルナンバーの意味を詳しく解説。111、222などのぞろ目や1234などの連番も完全カバー。数字が伝えるメッセージを理解して日常生活や自己成長に活かしましょう。" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://evitadesignart.com/engel.php" />

  <!-- JSON-LD FAQ構造化データ -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "エンジェルナンバーとは何ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "エンジェルナンバーとは、天使や宇宙が数字を通して送るメッセージです。ぞろ目や連番など、繰り返し見かける数字に意味があるとされます。"
        }
      },
      {
        "@type": "Question",
        "name": "ぞろ目の111や222の意味は？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "111は思考が現実化しやすいサインで、意識の焦点を合わせることが大切です。222は調和やバランスのサインで、物事の進行を信頼するタイミングを示します。"
        }
      },
      {
        "@type": "Question",
        "name": "連番1234や2345にはどんな意味がありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "連番は段階的な成長やプロセスを示します。1234はステップを踏むことで成功に近づくサイン、2345は変化を受け入れながら調和を保つことを示します。"
        }
      },
      {
        "@type": "Question",
        "name": "エンジェルナンバーはどうやって活用すればいいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "数字を目にしたときに意味を思い出し、日常の行動や意思決定に活かすことで、直感や自己成長をサポートすることができます。"
        }
      }
    ]
  }
  </script>
  <style>
    html {
      background-color: #1a0f2b;
      /* ダークパープル系 */
      background-image: url("img/flower_pattern043.jpg");
      background-repeat: repeat;
      background-size: 25%;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(26, 11, 43, 0.95);
      /* 透け感のあるダーク */
      padding: 1rem;
      z-index: 1000;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.7);
      /* 影を濃くして妖艶感 */
    }

    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background: #2b173f;
      /* 暗めの紫 */
      padding: 2rem;
      padding-top: 180px;
      /* ヘッダー調整 */
      max-width: 1000px;
      margin: 0 auto;
      display: block;
      color: #e0d5ff;
      /* 薄紫の文字で妖艶感 */
    }

    h1 {
      font-size: 2rem;
      display: inline-block;
      margin-bottom: 1rem;
      color: #f1c0ff;
      /* 明るめの紫 */
      text-shadow: 0 0 8px #9b59b6, 0 0 12px #5a2ea0;
    }

    h2 {
      font-size: 1.5rem;
      margin-top: 2rem;
      color: #f1bfff;
      text-shadow: 0 0 6px #7f3fbf, 0 0 10px #5a2ea0;
    }

    .buttons {
      display: flex;
      flex-wrap: wrap;
      /* 幅が狭くなると自動改行 */
      justify-content: center;
      /* 中央寄せ */
      gap: 12px 8px;
      /* 横方向12px、縦方向8pxの余白 */
      margin: 20px 0;
    }

    button {
      padding: 8px 14px;
      /* 少しゆったり目に調整 */
      border-radius: 8px;
      border: 1px solid #5a2ea0;
      cursor: pointer;
      transition: 0.2s;
      font-weight: bold;
      font-size: 0.95rem;
      background: #3b1f5f;
      color: #e0d5ff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
    }

    button.selected {
      background-color: #6a33b8;
      color: #fff;
      transform: scale(1.03);
      box-shadow: 0 4px 12px rgba(106, 51, 184, 0.6);
    }

    button:not(.selected):hover {
      background-color: #4b1f85;
      color: #fff;
    }

    .card {
      max-width: 700px;
      margin: 0 auto;
      margin-top: 3em;
      background: #3a1f4f;
      /* 暗めの紫系カード */
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.6);
      color: #f0e0ff;
    }

    .card h2 {
      color: #e0c0ff;
      text-align: center;
      scroll-margin-top: 200px;
    }

    .card p {
      line-height: 1.8;
      color: #dcd0ff;
    }

    a {
      color: #ffde75;
      text-decoration: none;
    }

    button a {
      color: #fff;
      text-decoration: none;
    }

    #overview,
    #overview2 {
      max-width: 600px;
      margin: 0 auto 1.5rem auto;
      font-size: 1.1rem;
      color: #d3c7e0;
      line-height: 1.5;
      user-select: none;
    }

    #overview2 {
      font-size: small;
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
    <a href="https://evitadesignart.com/tarotte_list.php">
      <h1>エンジェルナンバーの意味<br>111・222などぞろ目・連番の<br class="md:hidden"> 運勢とメッセージ</h1>
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
    
  </style>
  <div id="fv-wrapper" class="fv-wrapper-custom">
    <img src="img/fv_engel.jpg" alt="" style="width: 100%; height: auto; display: block; object-fit: cover;">
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


  <div class="buttons" id="numberButtons"></div>

  <p id="overview">
    エンジェルナンバーは、<br class="md:hidden"> 数字を通して天使や宇宙から<br class="md:hidden"> 送られるメッセージです。<br>それぞれの番号が<br class="md:hidden">
    あなたの運勢や日常の選択、<br class="md:hidden"> 成長のサイクルを示します。<br>恋愛、仕事、健康など<br class="md:hidden"> さまざまな面での示唆を<br
      class="md:hidden"> 受け取ることができます。</p>

  <div class="card">
    <h2 id="selectedNumber">111</h2>
    <p id="numberText"></p>
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
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 日常で繰り返し目にする<br class="md:hidden"> 数字の意味を知りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 自分の行動や選択に対する<br class="md:hidden"> メッセージを受け取りたい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ 恋愛・仕事・健康など<br class="md:hidden"> 生活のヒントを得たい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ ぞろ目や連番など、特別な数字の<br class="md:hidden"> サインを理解したい</li>
      <li style="padding-left: 1.2em; text-indent: -1.2em;">・ エンジェルナンバー初心者でも<br class="md:hidden"> わかりやすく学びたい</li>
    </ul>
  </div>






  <script>
    const angelNumbers = {
      "000": "宇宙とのつながりが強まり、あらゆる可能性が開かれている合図です。過去の制限や思い込みから解放され、ゼロから新しい計画やアイデアを創造できるタイミングです。瞑想や直感に従うことで、宇宙からのサポートをより感じられます。",
      "0000": "完全なるリセットと再創造のタイミングです。ゼロベースで再設計することで、新しい選択肢やアイデアが開けます。瞑想や目標設定で、自分にとって最も望ましい道を明確にしましょう。不要なものを手放すことで新しいチャンスが自然に引き寄せられます。",
      "1020": "計画的な進行や準備を意識する数字。物事を段階的に進め、必要な準備や確認を怠らないことが求められます。順序立てた行動が目標達成の鍵となります。",
      "1001": "自己反省と内面の調和を意識する数字。過去の経験や習慣を振り返り、内面の感情や価値観を整理することで、未来の行動や判断がより明確になります。心の声に耳を傾けることで、日常生活における選択や人間関係の安定にもつながります。",
      "111": "思考が現実に直結しやすい加速期のサインです。ポジティブな考えに集中することで願望実現のスピードが増します。否定的な想像も具現化されやすいので、日常の言葉遣いや行動、感情のバランスを整えることが重要です。アファメーションやヴィジュアライゼーションを取り入れると効果的です。",
      "1111": "強力な願望実現のポータルが開いています。意図を言語化して宣言し、すぐに行動を起こすことで現実化のサイクルがスムーズになります。集中力と決断力が強化され、ポジティブな思考と行動の連鎖が加速します。",
      "121": "自己と他者の関係に調和をもたらす数字。バランスを意識することで新しい発展につながります。",
      "1212": "バランス感覚やパートナーシップの重要性。自分と他者の関係性を見直し、互いに調和した行動を意識することで、円滑なコミュニケーションや協力が可能になります。長期的な関係構築や信頼の形成にも影響します。",
      "131": "直感や創造性が高まるサイン。自分らしさを大切に表現すると導きが得られます。",
      "141": "安定と変化の間で学びを得る数字。基盤を固めつつ新しい挑戦を受け入れる時期を示します。",
      "151": "新しい始まりと選択の象徴。恐れずに進むことで幸運が舞い込む暗示です。",
      "161": "家庭や心の拠り所を大切にするタイミング。癒しや安心感がテーマになります。",
      "171": "目標に近づいている証拠。天使が進む道を応援しているサインです。",
      "181": "物質的な豊かさと精神的な気づきを両立させる数字。努力が実を結ぶ前触れです。",
      "191": "終わりと始まりが重なる転換期。古いものを手放すことで新たな流れが訪れます。",
      "202": "信じる心を持ち続けることを促す数字。人間関係や協力が大切な時期です。",
      "2030": "次のステップへの準備が整う時期。現在の状況を整理し、必要な知識やスキルを補完することで、スムーズに次の段階へ進めます。未来の行動の土台作りが重要です。",
      "212": "思考が現実を形作る合図。ポジティブに考えるほど望む未来が近づきます。",
      "2121": "内外の調整や循環を意識する時期。自分の内面と外界の状況を見比べながら、必要な調整を行うことが大切です。過去の経験を踏まえつつ柔軟な対応をすることで、成果や人間関係の安定が得られます。",
      "222": "プロセスを信頼し、心身のバランスを取り戻す時期です。焦らず物事を進めることで、見えないところで物事が着実に進行します。信頼できる仲間やサポートネットワークを活用すると良いでしょう。忍耐と柔軟さが未来の成果を確実にします。",
      "2222": "水面下で必要な要素が整いつつある合図です。協調・信頼・バランスの重要性が高まっています。焦らずタイミングを見極め、人間関係やプロジェクトを自然に進めましょう。感謝の気持ちを忘れず、周囲との関係を整えることも大切です。自己成長や学びの機会が増えるタイミングでもあります。",
      "232": "周囲とのコミュニケーションが重要なサイン。協力関係が幸運を引き寄せます。",
      "242": "内面の安定を重視する時。焦らず心の平穏を守ることが成功の鍵です。",
      "252": "変化の波がやってくる暗示。恐れず受け入れることで飛躍できます。",
      "262": "人間関係や家庭での絆を深める数字。感謝を意識すると良い流れに乗れます。",
      "272": "学びや精神的成長のサイン。自分を高める知識や体験が運を開きます。",
      "282": "豊かさが循環する暗示。与えることで大きなリターンが戻ってきます。",
      "292": "古いサイクルの終わりと新しい始まりを告げる数字。前向きな変化の兆しです。",
      "303": "宇宙や天のサポートを受け取れるサイン。自由な発想が開運につながります。",
      "3040": "新しい挑戦への心構えと段階的成長。小さな成功や経験を積み重ねることで、自信を持って次の挑戦に臨めます。段階的な成長が持続可能な成果につながります。",
      "313": "自己表現を強めるタイミング。創造力を活かし周囲に良い影響を与えます。",
      "323": "人間関係の調和と協力の象徴。信頼できる仲間と共に進むと安心です。",
      "333": "アセンデッドマスターの支援が強く、学びや創造性が後押しされています。直感やひらめきを無視せず、メンターや仲間と共有することで想像以上の成果が得られます。瞑想や祈りを通して感謝の心を育むと、さらに宇宙からのサポートが強まります。",
      "3333": "高次のサポートが強く働き、共同制作や学びが飛躍につながるサインです。祈りや感謝、瞑想、メンターへの相談がブレイクスルーの鍵になります。直感を信じ、積極的に学びの場に参加すると成果が加速します。アイデアやひらめきを形にすることで周囲への影響力も高まります。",
      "404": "安定と柔軟性を兼ね備えるサイン。計画通りだけでなく臨機応変さも求められます。",
      "414": "基盤を固めつつ新しい可能性を探るタイミング。着実な努力が運を開きます。",
      "424": "心のバランスと内面の調和を意識する時期。冷静な判断が吉となります。",
      "434": "直感に従いながら行動することで物事がスムーズに進む暗示です。",
      "444": "天使たちが守護している強いサポートのサイン。安心して進むことができます。",
      "4444": "天使たちの強力な援助が届いている状態。安全と安定の中で学びや成長が加速します。",
      "505": "新しい挑戦と冒険の時。恐れずに一歩を踏み出すことが成功の鍵です。",
      "515": "変化の波に乗るチャンス。柔軟な対応が運を引き寄せます。",
      "525": "人間関係やパートナーシップの調和を意識すると良い時期です。",
      "535": "自己成長や学びが強調される数字。挑戦を恐れず取り組むことが吉です。",
      "545": "変化と安定のバランスを取りながら進むべき時。柔軟性が成功を招きます。",
      "555": "大きな変化や転機が訪れるサイン。古いものを手放し新しいステージへ進むタイミングです。",
      "5555": "変革の波が強く押し寄せる時期。勇気を持って新しい方向へ進むことで、長期的な成長が得られます。",
      "606": "愛情や人間関係に意識を向けると良い時期。思いやりが幸運を引き寄せます。",
      "616": "家庭や心の安定を意識する数字。癒しや安心感がテーマです。",
      "626": "絆や信頼を深めるチャンス。感謝の気持ちが運気を上げます。",
      "636": "創造性や表現力が高まる時期。周囲に良い影響を与えられます。",
      "646": "自己成長と調整のタイミング。学びや経験を重ねることで未来が開けます。",
      "656": "変化の中でバランスを取る必要がある数字。焦らず着実に進むことが吉です。",
      "666": "調和とバランスを整えるサイン。過剰や偏りに注意し、心身の健康を意識しましょう。",
      "6666": "高いレベルでの調和とバランスを象徴。内面と外界の整合性を意識し、感謝を持って過ごすことが推奨されます。",
      "707": "精神的成長や直感の開花を示す数字。瞑想や内省が吉です。",
      "717": "目標に向かって正しい道を進んでいるサイン。天使がサポートしています。",
      "727": "学びや成長の機会が増える時期。新しい知識や体験を取り入れると吉です。",
      "737": "精神的な導きとサポートを受けやすい数字。直感に従うことが成功の鍵です。",
      "747": "守護と保護の暗示。安全な環境で着実に前進することが推奨されます。",
      "757": "変化と進展の兆し。柔軟な心で新しい流れを受け入れると良いです。",
      "767": "内面の成長と学びが強化される時期。自己理解を深めると運が開けます。",
      "777": "精神的・スピリチュアルな成長が加速するサイン。運が味方している時期です。",
      "7777": "最高レベルでの霊的成長とサポートが届いている状態。自己信頼と直感に従うことで、大きな成果や気づきが得られます。",
      "808": "豊かさや成果が循環する暗示。与えることで大きなリターンがあります。",
      "818": "物質的豊かさと精神的気づきを両立するタイミング。努力が成果につながります。",
      "828": "循環やバランスを意識する数字。感謝と共有が運気を上げます。",
      "838": "挑戦と学びの数字。新しい経験が自己成長に繋がります。",
      "848": "安定と変化のバランスを意識する時期。柔軟性が成功を招きます。",
      "858": "自己変革と成長を促すサイン。古い習慣を手放すことで新しい可能性が開きます。",
      "868": "人間関係や信頼関係の強化がテーマ。感謝の気持ちを忘れずに。",
      "878": "学びと成長が加速する時期。挑戦や経験が運気を上げます。",
      "888": "豊かさと成功の象徴。努力と準備が大きな成果を生むタイミングです。",
      "8888": "最大限の豊かさと成果が引き寄せられるサイン。感謝と信念を持って行動すると、長期的な成功と繁栄が得られます。",
      "909": "終わりと始まりのサイクル。古いものを手放し新しい道に進む暗示です。",
      "919": "転換期のサイン。変化を受け入れることで新しいチャンスが訪れます。",
      "929": "新しい始まりと循環を意識する数字。過去を整理し未来に備えましょう。",
      "939": "直感や導きが冴える時期。心の声を信じることで正しい選択ができます。",
      "949": "学びや経験を活かすタイミング。挑戦が成長と成果をもたらします。",
      "959": "変化の中でのバランスを意識する数字。冷静な判断が運を引き寄せます。",
      "969": "信頼や協力の重要性が増す時期。周囲との関係を大切にしましょう。",
      "979": "精神的な成長や気づきが強まる数字。内面の整理が吉です。",
      "989": "豊かさと循環のサイン。与えることでより大きなリターンが期待できます。",
      "999": "完結と成就の数字。努力の結果が実を結ぶ時期です。",
      "9999": "大きなサイクルの完了と新しい始まり。人生の転換点を迎える合図です。"
    };

    const buttonsContainer = document.getElementById('numberButtons');
    const numberText = document.getElementById('numberText');
    const selectedNumber = document.getElementById('selectedNumber');

    function updateText(num, shouldScroll = true) {
      selectedNumber.textContent = num;
      numberText.textContent = angelNumbers[num];
      document.querySelectorAll('.buttons button').forEach(btn => btn.classList.remove('selected'));
      document.querySelector(`button[data-num="${num}"]`)?.classList.add('selected');
      // 追加部分：selectedNumberまでスクロール
      if (shouldScroll) {
        selectedNumber.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }

    // ボタン作成（桁数ごとに昇順）
    Object.keys(angelNumbers)
      .sort((a, b) => {
        // まず桁数で比較
        if (a.length !== b.length) return a.length - b.length;
        // 桁数が同じ場合は数値で昇順
        return parseInt(a, 10) - parseInt(b, 10);
      })
      .forEach(key => {
        const btn = document.createElement('button');
        btn.textContent = key;
        btn.setAttribute('data-num', key);
        btn.onclick = () => {
          updateText(key, true);
          gtag('event', 'click_angel_number', { 'number': key });
        };
        buttonsContainer.appendChild(btn);
      });



    // 初期表示
    updateText('111', false);
  </script>

  <p id="overview2">

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
  <footer>

    <div class="footer-added-section parallax-bg-section" style="background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; color: #fff; padding: 4rem 1rem; margin-bottom: 2rem; width: 100vw; margin-left: calc(50% - 50vw); margin-right: calc(50% - 50vw); box-sizing: border-box;">
    <div class="footer-menu" style="text-align: center; max-width: 1000px; margin: 0 auto; padding: 0 1rem; box-sizing: border-box;">
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




