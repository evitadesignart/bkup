<?php
/**
 * 今週のタロット＆星座占いを画像化してX（旧Twitter）に自動投稿するプログラム
 * 
 * 【使い方】
 * 1. 取得した4つのキーを以下の $api_key, $api_secret, $access_token, $access_secret に貼り付けます。
 * 2. サーバーのCron（定期実行）で、このファイル（tweet_fortune.php）を毎週月曜の朝8時などに実行するように設定します。
 */

// ==========================================
// 1. Bluesky 認証設定（ここに情報を貼り付けてください）
// ==========================================
$bsky_handle = "evitadesignart.bsky.social"; // 例: evitadesign.bsky.social
$bsky_password = "u27s-vhfq-yl5r-lf7r";       // 例: xxxx-xxxx-xxxx-xxxx (アプリパスワード)

// ==========================================
// 2. 占いデータ（tarotte7.php）の取得とパース
// ==========================================
$source_file = __DIR__ . '/../horo/tarotte7.php';
if (file_exists($source_file)) {
    $content = file_get_contents($source_file);
} else {
    // ローカル/サーバー上の相対パスで見つからない場合はWeb URLから取得
    $remote_source_url = 'https://evitadesignart.com/horo/tarotte7.php';
    $ctx = stream_context_create([
        'http' => ['timeout' => 5],
        'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
    ]);
    $content = @file_get_contents($remote_source_url, false, $ctx);
    if ($content === false || empty($content)) {
        die("エラー: tarotte7.php が見つかりません。パス: " . $source_file);
    }
}

// 正規表現で const tarotCards = [ ... ]; の部分を抽出
if (preg_match('/const\s+tarotCards\s*=\s*(\[.*?\]);/is', $content, $matches)) {
    $js_array = $matches[1];
    $js_array = preg_replace('/([{,]\s*)([a-zA-Z0-9_]+)\s*:/is', '$1"$2":', $js_array);
    $js_array = preg_replace('/,\s*}/is', '}', $js_array);
    $js_array = preg_replace('/,\s*\]/is', ']', $js_array);

    $tarotCards = json_decode($js_array, true);
    if (json_last_error() !== JSON_ERROR_NONE || !is_array($tarotCards)) {
        die("エラー: 占いデータの解析に失敗しました。JSONエラー: " . json_last_error_msg());
    }
} else {
    die("エラー: tarotte7.phpから占いデータを抽出できませんでした。");
}

// 星座のリスト
$zodiacs = ["牡羊座", "牡牛座", "双子座", "蟹座", "獅子座", "乙女座", "天秤座", "蠍座", "射手座", "山羊座", "水瓶座", "魚座"];

// ランダムに星座とカードを選ぶ
$zodiac = $zodiacs[array_rand($zodiacs)];
$card = $tarotCards[array_rand($tarotCards)];
$isReversed = (rand(0, 1) === 1) ? "逆位置" : "正位置";
$meaning = ($isReversed === "正位置") ? $card['meaning'] : "逆位置: {$card['meaning']}の課題";
$comment = ($isReversed === "正位置") ? $card['comment'] : (isset($card['commentReversed']) ? $card['commentReversed'] : $card['comment']);

// 今週の期間を計算（月曜?日曜）
$monday = new DateTime('monday this week');
$sunday = clone $monday;
$sunday->modify('+6 days');
$week_str = $monday->format('n/j') . "～" . $sunday->format('n/j');

// ==========================================
// 3. 画像の生成（GDライブラリ）
// ==========================================
if (!extension_loaded('gd')) {
    die("エラー: サーバーでGDライブラリが有効になっていません。");
}

$width = 1080;
$height = 1080;
$image = imagecreatetruecolor($width, $height);

// カラーパレット
$text_color = imagecolorallocate($image, 255, 255, 255); // 白
$accent_color = imagecolorallocate($image, 212, 175, 55); // ゴールド
$accent_light = imagecolorallocate($image, 240, 215, 125); // 明るいゴールド
$accent_dark = imagecolorallocate($image, 160, 125, 30); // 暗いゴールド

// 背景をグラデーション風に塗りつぶし（深いネイビーから紫へ）
for ($y = 0; $y < $height; $y++) {
    $r = 15 + intval(($y / $height) * 15);
    $g = 15 + intval(($y / $height) * 10);
    $b = 30 + intval(($y / $height) * 30);
    $col = imagecolorallocate($image, $r, $g, $b);
    imageline($image, 0, $y, $width, $y, $col);
}

// 神秘的な星（パーティクル）を散りばめる
for ($i = 0; $i < 150; $i++) {
    $sx = rand(0, $width);
    $sy = rand(0, $height);
    $size = rand(1, 3);
    $alpha = rand(60, 110);
    $star_color = imagecolorallocatealpha($image, 240, 215, 125, $alpha);
    imagefilledellipse($image, $sx, $sy, $size, $size, $star_color);
}

// リッチなゴールドの多重枠線を描画する関数
function drawThickRect($img, $x1, $y1, $x2, $y2, $color, $thick)
{
    for ($i = 0; $i < $thick; $i++) {
        imagerectangle($img, $x1 + $i, $y1 + $i, $x2 - $i, $y2 - $i, $color);
    }
}

// 外枠（重厚なゴールド）
drawThickRect($image, 15, 15, $width - 15, $height - 15, $accent_dark, 2);
drawThickRect($image, 17, 17, $width - 17, $height - 17, $accent_color, 4);
drawThickRect($image, 21, 21, $width - 21, $height - 21, $accent_light, 2);
drawThickRect($image, 23, 23, $width - 23, $height - 23, $accent_dark, 2);

// 内枠（細いゴールド）
drawThickRect($image, 40, 40, $width - 40, $height - 40, $accent_color, 1);

// フォントファイルの指定
$font_path = __DIR__ . '/NotoSansJP-Bold.otf';
if (!file_exists($font_path)) {
    die("エラー: フォントファイルが見つかりません。");
}

// テキストを描画する関数
function drawTextCentered($image, $size, $y, $color, $font, $text, $width)
{
    if (!function_exists('imagettfbbox')) {
        die("エラー: FreeTypeがサーバーにインストールされていません。");
    }
    $bbox = imagettfbbox($size, 0, $font, $text);
    $text_width = $bbox[2] - $bbox[0];
    $x = ($width - $text_width) / 2;
    imagettftext($image, $size, 0, $x, $y, $color, $font, $text);
}

function wrapText($size, $font, $text, $max_width)
{
    $words = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
    $lines = [];
    $current_line = '';

    foreach ($words as $char) {
        $test_line = $current_line . $char;
        $bbox = imagettfbbox($size, 0, $font, $test_line);
        $test_width = $bbox[2] - $bbox[0];
        if ($test_width > $max_width && $current_line !== '') {
            $lines[] = $current_line;
            $current_line = $char;
        } else {
            $current_line = $test_line;
        }
    }
    if ($current_line !== '') {
        $lines[] = $current_line;
    }
    return $lines;
}

// タイトルの描画
$title = "【 今週({$week_str})の運勢: {$zodiac} 】";
drawTextCentered($image, 32, 80, $accent_color, $font_path, $title, $width);

// カード画像の合成
$raw_img_data = null;
$card_rel_path = ltrim($card['img'], '/');
$local_img_path = __DIR__ . '/../horo/' . $card_rel_path;

if (file_exists($local_img_path)) {
    $raw_img_data = @file_get_contents($local_img_path);
} else {
    // ローカルに存在しない場合はWebサーバー経由で取得を試みる
    $remote_url = "https://evitadesignart.com/horo/" . $card_rel_path;
    $ctx = stream_context_create([
        'http' => ['timeout' => 5],
        'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
    ]);
    $raw_img_data = @file_get_contents($remote_url, false, $ctx);
}

if ($raw_img_data !== false && !empty($raw_img_data)) {
    $card_image = @imagecreatefromstring($raw_img_data);
    if ($card_image !== false) {
        $card_w = imagesx($card_image);
        $card_h = imagesy($card_image);

        // 逆位置の場合は画像を180度回転
        if ($isReversed === "逆位置") {
            $card_image = imagerotate($card_image, 180, imageColorAllocateAlpha($card_image, 0, 0, 0, 127));
            $card_w = imagesx($card_image);
            $card_h = imagesy($card_image);
        }

        $target_h = 320; // さらに少し小さくして余裕を持たせる
        $target_w = intval($card_w * ($target_h / $card_h));
        $dest_x = ($width - $target_w) / 2;
        $dest_y = 130;

        // カードの後ろにゴールドの額縁（フレーム）を描画
        imagefilledrectangle($image, $dest_x - 6, $dest_y - 6, $dest_x + $target_w + 5, $dest_y + $target_h + 5, $accent_dark);
        imagefilledrectangle($image, $dest_x - 4, $dest_y - 4, $dest_x + $target_w + 3, $dest_y + $target_h + 3, $accent_light);
        imagefilledrectangle($image, $dest_x - 2, $dest_y - 2, $dest_x + $target_w + 1, $dest_y + $target_h + 1, $accent_color);

        imagecopyresampled($image, $card_image, $dest_x, $dest_y, 0, 0, $target_w, $target_h, $card_w, $card_h);
        imagedestroy($card_image);
    }
}

// 装飾線（カード名の上と下）
function drawDivider($img, $y, $width, $color, $light_color)
{
    imageline($img, 200, $y, $width - 200, $y, $color);
    imageline($img, 200, $y + 1, $width - 200, $y + 1, $light_color);
}
drawDivider($image, 480, $width, $accent_color, $accent_light); // カード名の上
drawDivider($image, 550, $width, $accent_color, $accent_light); // カード名の下

// カード名の描画
$card_name_text = "【 {$card['name']} / {$isReversed} 】";
drawTextCentered($image, 35, 530, $accent_color, $font_path, $card_name_text, $width);

// コメントの描画
$wrapped_lines = wrapText(24, $font_path, $comment, 900);
$y_offset = 600; // コメントの開始位置を上にずらす
foreach ($wrapped_lines as $line) {
    drawTextCentered($image, 24, $y_offset, $text_color, $font_path, $line, $width);
    $y_offset += 45;
}

// フッターの少し上にCTA（Call to Action）を描画
$cta_text = "もう表示されないかも… いいね・保存・フォローをお願いします！";
drawTextCentered($image, 22, 960, $accent_color, $font_path, $cta_text, $width);

// フッター
$footer = "Evita Designart - https://evitadesignart.com";
drawTextCentered($image, 20, 1020, $text_color, $font_path, $footer, $width);

// 画像を一時保存
$temp_img_path = __DIR__ . '/fortune_temp.jpg';
imagejpeg($image, $temp_img_path, 90);
imagedestroy($image);


// ==========================================
// 4. Blueskyへの投稿 (AT Protocol)
// ==========================================
function bsky_request($url, $method, $headers = [], $data = null, $is_binary = false)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        if ($data !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $is_binary ? $data : json_encode($data));
        }
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        die("cURLエラー: " . curl_error($ch));
    }
    curl_close($ch);
    return json_decode($result, true);
}

// 投稿処理の実行
if ($bsky_handle === "YOUR_HANDLE.bsky.social" || empty($bsky_handle)) {
    echo "画像は生成されましたが、Blueskyのハンドル名が設定されていないため投稿はスキップしました。<br>";
    echo "<img src='fortune_temp.jpg?" . time() . "' width='400'>";
    exit;
}

try {
    // 1. セッションの作成 (ログイン)
    $session_url = "https://bsky.social/xrpc/com.atproto.server.createSession";
    $session_data = ['identifier' => $bsky_handle, 'password' => $bsky_password];
    $session_res = bsky_request($session_url, 'POST', ['Content-Type: application/json'], $session_data);

    if (!isset($session_res['accessJwt'])) {
        die("Blueskyのログインに失敗しました。詳細: " . print_r($session_res, true));
    }

    $access_jwt = $session_res['accessJwt'];
    $did = $session_res['did'];
    $auth_header = 'Authorization: Bearer ' . $access_jwt;

    // 2. 画像(Blob)のアップロード
    $upload_url = "https://bsky.social/xrpc/com.atproto.repo.uploadBlob";
    $img_data = file_get_contents($temp_img_path);
    $upload_headers = [$auth_header, 'Content-Type: image/jpeg'];
    $upload_res = bsky_request($upload_url, 'POST', $upload_headers, $img_data, true);

    if (!isset($upload_res['blob'])) {
        die("画像のアップロードに失敗しました。詳細: " . print_r($upload_res, true));
    }

    $blob = $upload_res['blob'];

    // 3. 投稿 (Recordの作成)
    $post_url = "https://bsky.social/xrpc/com.atproto.repo.createRecord";
$tweet_text = "🔮 今週（{$week_str}）のタロット占い\n\nピックアップ星座: {$zodiac}\nカード: {$card['name']}（{$isReversed}）\n\n詳細や他の星座の運勢はこちらからチェック！👇\nhttps://evitadesignart.com/horo/\n\n#占い #タロット #今週の運勢 #おはよう #{$zodiac}";

    // URLとハッシュタグをタップ可能にする（BlueskyのFacet機能）
    $facets = [];

    // URLの抽出
    if (preg_match_all('/(https?:\/\/[^\s]+)/', $tweet_text, $matches, PREG_OFFSET_CAPTURE)) {
        foreach ($matches[1] as $match) {
            $facets[] = [
                'index' => ['byteStart' => $match[1], 'byteEnd' => $match[1] + strlen($match[0])],
                'features' => [['$type' => 'app.bsky.richtext.facet#link', 'uri' => $match[0]]]
            ];
        }
    }

    // ハッシュタグの抽出
    if (preg_match_all('/#([^\s]+)/', $tweet_text, $matches, PREG_OFFSET_CAPTURE)) {
        foreach ($matches[0] as $i => $match) {
            $facets[] = [
                'index' => ['byteStart' => $match[1], 'byteEnd' => $match[1] + strlen($match[0])],
                'features' => [['$type' => 'app.bsky.richtext.facet#tag', 'tag' => $matches[1][$i][0]]]
            ];
        }
    }

    $post_data = [
        'repo' => $did,
        'collection' => 'app.bsky.feed.post',
        'record' => [
            '$type' => 'app.bsky.feed.post',
            'text' => $tweet_text,
            'facets' => $facets,
            'createdAt' => gmdate('Y-m-d\TH:i:s\Z'),
            'embed' => [
                '$type' => 'app.bsky.embed.images',
                'images' => [
                    [
                        'alt' => "今週のタロット占い: {$zodiac}",
                        'image' => $blob
                    ]
                ]
            ]
        ]
    ];

    $post_res = bsky_request($post_url, 'POST', [$auth_header, 'Content-Type: application/json'], $post_data);

    if (isset($post_res['uri'])) {
        echo "? Blueskyへの投稿に成功しました！ URI: " . $post_res['uri'] . "<br>";
        echo "<img src='fortune_temp.jpg?" . time() . "' width='400'>";
    } else {
        echo "? Blueskyの投稿に失敗しました。詳細:<br><pre>" . print_r($post_res, true) . "</pre>";
    }

} catch (Exception $e) {
    echo "? 予期せぬエラーが発生しました: " . $e->getMessage();
}

?>