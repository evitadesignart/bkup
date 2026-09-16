<?php
$db_file = __DIR__ . '/tarot_log.sqlite';
$logs = [];

// CSVダウンロード処理
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    if (file_exists($db_file)) {
        try {
            $pdo = new PDO('sqlite:' . $db_file);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->query("SELECT id, card_name, position, ip_address, datetime(created_at, '+9 hours') as created_at FROM tarot_logs ORDER BY created_at DESC");
            $all_logs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // UTF-8 の BOM を出力して Excel での文字化けを防ぐ
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename="tarot_logs_' . date('Ymd_His') . '.csv"');
            echo "\xEF\xBB\xBF";
            
            $output = fopen('php://output', 'w');
            fputcsv($output, ['ID', 'カード名', '位置', 'IPアドレス', '記録日時']);
            foreach ($all_logs as $row) {
                fputcsv($output, $row);
            }
            fclose($output);
            exit;
        } catch (Exception $e) {
            die("CSV Export Error: " . $e->getMessage());
        }
    } else {
        die("ログが見つかりません。");
    }
}

// 通常の画面表示用処理
if (file_exists($db_file)) {
    try {
        $pdo = new PDO('sqlite:' . $db_file);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='tarot_logs'");
        if ($stmt->fetch()) {
            // 画面上は最新500件のみ表示
            $stmt = $pdo->query("SELECT id, card_name, position, ip_address, datetime(created_at, '+9 hours') as created_at FROM tarot_logs ORDER BY created_at DESC LIMIT 500");
            $logs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // 全件数を取得
            $count_stmt = $pdo->query("SELECT COUNT(*) FROM tarot_logs");
            $total_count = $count_stmt->fetchColumn();
        }
    } catch (Exception $e) {
        $error = "データベースエラー: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>タロットログ確認（管理者用）</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #f4f4f4; }
        .container { max-width: 800px; margin: 0 auto; }
        table { border-collapse: collapse; width: 100%; background: #fff; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background: #333; color: #fff; }
        h1 { color: #333; }
        .info-box { background: #e9f5ff; border-left: 5px solid #2196F3; padding: 15px; margin-bottom: 20px; }
        .btn { display: inline-block; padding: 10px 20px; background: #4CAF50; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .btn:hover { background: #45a049; }
    </style>
</head>
<body>
    <div class="container">
        <h1>タロットログ確認画面</h1>
        
        <div class="info-box">
            <h3>📊 ログの保存について</h3>
            <p><strong>最大保持数：無制限</strong></p>
            <p>データベース（SQLite）の容量が許す限り、何十万件でも永久に蓄積され続けます。ログが自動で消去されることはありませんので、大切な資産として蓄積されていきます。</p>
            <?php if(isset($total_count)): ?>
                <p>現在の総記録数： <strong><?php echo number_format($total_count); ?> 件</strong></p>
            <?php endif; ?>
            <a href="?export=csv" class="btn">📥 全ログをCSV（Excel）で一括ダウンロード</a>
        </div>

        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        
        <?php if (empty($logs)): ?>
            <p>ログはまだありません。</p>
        <?php else: ?>
            <h3>直近のログ（最新500件まで表示）</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>カード名</th>
                    <th>位置</th>
                    <th>IPアドレス</th>
                    <th>記録日時 (日本時間)</th>
                </tr>
                <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?php echo htmlspecialchars($log['id']); ?></td>
                    <td><?php echo htmlspecialchars($log['card_name']); ?></td>
                    <td><?php echo htmlspecialchars($log['position']); ?></td>
                    <td><?php echo htmlspecialchars($log['ip_address'] ?? '記録なし'); ?></td>
                    <td><?php echo htmlspecialchars($log['created_at']); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
