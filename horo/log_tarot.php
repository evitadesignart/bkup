<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$db_file = __DIR__ . '/tarot_log.sqlite';

try {
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // テーブルが無ければ作成
    $pdo->exec("CREATE TABLE IF NOT EXISTS tarot_logs (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        card_name TEXT NOT NULL,
        position TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['card_name']) && isset($data['position'])) {
        $stmt = $pdo->prepare("INSERT INTO tarot_logs (card_name, position) VALUES (:card_name, :position)");
        $stmt->bindParam(':card_name', $data['card_name']);
        $stmt->bindParam(':position', $data['position']);
        $stmt->execute();
        
        echo json_encode(['status' => 'success', 'message' => 'Logged successfully']);
    } else {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
    }
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
