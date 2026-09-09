<?php
header('Content-Type: application/json; charset=utf-8');

$possible_dirs = [
    __DIR__ . '/../assets/',
    __DIR__ . '/../asset/'
];

$images = [];
$success = false;
$checked_paths = [];
$error_message = 'No valid image directory found.';

foreach ($possible_dirs as $dir) {
    $checked_paths[] = $dir;
    if (is_dir($dir)) {
        $files = scandir($dir);
        if ($files !== false) {
            foreach ($files as $file) {
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    // フォルダ名（assetsかassetか）に合わせてパスを組む
                    $folder_name = basename($dir); 
                    $images[] = $folder_name . '/' . $file;
                }
            }
            if (count($images) > 0) {
                $success = true;
                $error_message = '';
                break; // 画像が見つかったら探索終了
            } else {
                $error_message = 'Directory exists, but no images found.';
            }
        }
    }
}

echo json_encode([
    'success' => $success,
    'images' => $images,
    'error' => $error_message,
    'checked_paths' => $checked_paths
]);
