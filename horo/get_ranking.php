<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$db_file = __DIR__ . '/tarot_log.sqlite';

try {
    if (!file_exists($db_file)) {
        echo json_encode(['status' => 'success', 'data' => []]);
        exit;
    }

    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 過去1週間のデータを集計 (SQLiteのdatetime関数を使用)
    // 期間の指定を動的にする場合に備えて対応
    $period = isset($_GET['period']) ? $_GET['period'] : '7 days';
    if ($period === 'all') {
        $date_condition = "1=1"; // 全期間
    } else {
        $date_condition = "created_at >= datetime('now', '-7 days', 'localtime')";
    }


    $sql = "SELECT card_name, position, COUNT(*) as count 
            FROM tarot_logs 
            WHERE $date_condition 
            GROUP BY card_name, position 
            ORDER BY count DESC 
            LIMIT 3";
            
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['status' => 'success', 'data' => $results]);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
