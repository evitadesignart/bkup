<?php
require_once 'db.php';
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];
$MAX_TEXT_LEN = 500;
$MAX_DOMAIN_LEN = 60;
$MAX_AUTHOR_LEN = 40;

if ($method === 'GET') {
    $stmt = $db->query('SELECT * FROM cards ORDER BY created_at DESC');
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rows);
    exit;
}

if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $text = trim($input['text'] ?? '');
    $domain = trim($input['domain'] ?? '');
    $author = trim($input['author'] ?? '');
    
    if (!$text || !$domain) {
        http_response_code(400);
        echo json_encode(['error' => 'テキストと領域タグは必須です']);
        exit;
    }
    if (mb_strlen($text) > $MAX_TEXT_LEN) {
        http_response_code(400);
        echo json_encode(['error' => "テキストは{$MAX_TEXT_LEN}文字以内にしてください"]);
        exit;
    }
    if (mb_strlen($domain) > $MAX_DOMAIN_LEN) {
        http_response_code(400);
        echo json_encode(['error' => "領域タグは{$MAX_DOMAIN_LEN}文字以内にしてください"]);
        exit;
    }
    
    $id = sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff),
      mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000,
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
    $createdAt = time() * 1000;
    $cleanAuthor = mb_substr($author, 0, $MAX_AUTHOR_LEN);
    if (!$cleanAuthor) $cleanAuthor = '名無し';
    
    $stmt = $db->prepare('INSERT INTO cards (id, text, domain, author, created_at) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $text, $domain, $cleanAuthor, $createdAt]);
    
    http_response_code(201);
    echo json_encode(['id' => $id, 'text' => $text, 'domain' => $domain, 'author' => $cleanAuthor, 'created_at' => $createdAt]);
    exit;
}

http_response_code(404);
echo json_encode(['error' => 'Not Found']);
