<?php
session_start();
require_once 'db.php';
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];
$MAX_TEXT_LEN = 1000;

if (!isset($_SESSION['userId'])) {
    http_response_code(401);
    echo json_encode(['error' => 'ログインが必要です']);
    exit;
}

if ($method === 'GET') {
    $stmt = $db->prepare('SELECT * FROM ideas WHERE user_id = ? ORDER BY created_at DESC');
    $stmt->execute([$_SESSION['userId']]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rows);
    exit;
}

if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $text = trim($input['text'] ?? '');
    $aText = trim($input['aText'] ?? '');
    $aDomain = trim($input['aDomain'] ?? '');
    $bText = trim($input['bText'] ?? '');
    $bDomain = trim($input['bDomain'] ?? '');
    
    if (!$text || !$aText || !$bText) {
        http_response_code(400);
        echo json_encode(['error' => '入力が不足しています']);
        exit;
    }
    if (mb_strlen($text) > $MAX_TEXT_LEN) {
        http_response_code(400);
        echo json_encode(['error' => "企画メモは{$MAX_TEXT_LEN}文字以内にしてください"]);
        exit;
    }
    
    $id = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff),
      mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000,
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
    $createdAt = time() * 1000;
    
    $stmt = $db->prepare(
        'INSERT INTO ideas (id, user_id, text, a_text, a_domain, b_text, b_domain, created_at)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->execute([$id, $_SESSION['userId'], $text, $aText, $aDomain, $bText, $bDomain, $createdAt]);
    
    http_response_code(201);
    echo json_encode(['id' => $id, 'created_at' => $createdAt]);
    exit;
}

if ($method === 'DELETE') {
    $input = json_decode(file_get_contents('php://input'), true);
    $id = trim($input['id'] ?? '');
    if (!$id) {
        http_response_code(400);
        echo json_encode(['error' => 'IDが指定されていません']);
        exit;
    }
    
    $stmt = $db->prepare('DELETE FROM ideas WHERE id = ? AND user_id = ?');
    $stmt->execute([$id, $_SESSION['userId']]);
    
    echo json_encode(['success' => true]);
    exit;
}

http_response_code(404);
echo json_encode(['error' => 'Not Found']);
