<?php
// assetsディレクトリ内の画像一覧を返すAPI
$dir = __DIR__ . '/../assets/';
$images = [];

if (is_dir($dir)) {
    $files = scandir($dir);
    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        // 画像ファイルのみを抽出
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $images[] = 'assets/' . $file;
        }
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($images);
