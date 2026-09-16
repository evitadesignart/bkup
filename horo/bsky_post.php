<?php
// bsky_post.php
// cronで定期実行するためのスクリプト

header('Content-Type: text/plain; charset=utf-8');

// 1. Bluesky 認証設定（ここに情報を貼り付けてください）
// ==========================================
$bsky_handle = "evitadesignart.bsky.social"; // 例: evitadesign.bsky.social
$bsky_password = "u27s-vhfq-yl5r-lf7r";       // 例: xxxx-xxxx-xxxx-xxxx (アプリパスワード)

$db_file = __DIR__ . '/tarot_log.sqlite';
$top_weekly = [];

try {
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT card_name, position, COUNT(*) as count 
                         FROM tarot_logs 
                         WHERE created_at >= datetime('now', '-7 days', 'localtime') 
                         GROUP BY card_name, position 
                         ORDER BY count DESC LIMIT 3");
    $top_weekly = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    die("DBエラー: " . $e->getMessage());
}

if (count($top_weekly) < 3) {
    die("データが不足しています（まだ3種類のカードが引かれていません）。");
}

// 投稿テキストを作成
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

$text = "👑【今週の世相タロットベスト3】\n\n";
foreach ($top_weekly as $index => $item) {
    $rank = $index + 1;
    $text .= "{$rank}位: {$item['card_name']}【{$item['position']}】\n";
}

$first_card = $top_weekly[0];
$meaning_text = '';
if (isset($tarot_meanings[$first_card['card_name']]) && isset($tarot_meanings[$first_card['card_name']][$first_card['position']])) {
    $meaning_text = "\n💡 今週の運勢（1位のカードより）:\n" . $tarot_meanings[$first_card['card_name']][$first_card['position']] . "\n";
}

$text .= $meaning_text . "\nみんなが引いたカードから、今週の世界の運気を感じ取ってみましょう🕊️✨\n#タロット占い #世相占い #占いアルカノヴァ\nhttps://evitadesignart.com/horo/";

// Bluesky APIへの投稿処理
function postToBluesky($handle, $appPassword, $text) {
    // 1. セッションの作成 (JWTトークン取得)
    $ch = curl_init('https://bsky.social/xrpc/com.atproto.server.createSession');
    $payload = json_encode(['identifier' => $handle, 'password' => $appPassword]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $response = curl_exec($ch);
    curl_close($ch);

    $session = json_decode($response, true);
    if (!isset($session['accessJwt'])) {
        return "認証に失敗しました: " . print_r($session, true);
    }

    $jwt = $session['accessJwt'];
    $did = $session['did'];

    // 2. 投稿 (createRecord)
    $postPayload = json_encode([
        'repo' => $did,
        'collection' => 'app.bsky.feed.post',
        'record' => [
            '$type' => 'app.bsky.feed.post',
            'text' => $text,
            'createdAt' => gmdate('Y-m-d\TH:i:s\Z')
        ]
    ]);

    $ch2 = curl_init('https://bsky.social/xrpc/com.atproto.repo.createRecord');
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch2, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $jwt
    ]);
    curl_setopt($ch2, CURLOPT_POST, true);
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $postPayload);
    $postResponse = curl_exec($ch2);
    curl_close($ch2);

    $result = json_decode($postResponse, true);
    if (isset($result['uri'])) {
        return true;
    } else {
        return "投稿に失敗しました: " . print_r($result, true);
    }
}

// 実行
$result = postToBluesky($bsky_handle, $bsky_password, $text);
if ($result === true) {
    echo "✅ Blueskyへの投稿が完了しました！\n";
    echo $text;
} else {
    echo "❌ エラーが発生しました\n";
    echo $result;
}
?>
