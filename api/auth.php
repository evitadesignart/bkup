<?php
session_start();
require_once 'env.php';
require_once 'db.php';

header('Content-Type: application/json; charset=utf-8');

$action = $_GET['action'] ?? '';
$method = $_SERVER['REQUEST_METHOD'];

if ($action === 'google' && $method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $credential = $input['credential'] ?? null;
    
    if (!$credential) {
        http_response_code(400);
        echo json_encode(['error' => 'credentialがありません']);
        exit;
    }
    
    // Verify using Google's public endpoint
    $url = "https://oauth2.googleapis.com/tokeninfo?id_token=" . urlencode($credential);
    $response = @file_get_contents($url);
    if ($response === false) {
        http_response_code(401);
        echo json_encode(['error' => 'Googleログインの検証に失敗しました']);
        exit;
    }
    
    $payload = json_decode($response, true);
    if (!isset($payload['aud']) || $payload['aud'] !== GOOGLE_CLIENT_ID) {
        http_response_code(401);
        echo json_encode(['error' => 'Googleログインの検証に失敗しました (Client ID mismatch)']);
        exit;
    }
    
    $userId = $payload['sub'];
    $email = $payload['email'] ?? '';
    $name = $payload['name'] ?? ($email ?: '名無しユーザー');
    
    $stmt = $db->prepare('SELECT id FROM users WHERE id = ?');
    $stmt->execute([$userId]);
    $existing = $stmt->fetch();
    
    if (!$existing) {
        $stmt = $db->prepare('INSERT INTO users (id, email, name, created_at) VALUES (?, ?, ?, ?)');
        $stmt->execute([$userId, $email, $name, time() * 1000]);
    }
    
    $_SESSION['userId'] = $userId;
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    
    echo json_encode(['userId' => $userId, 'email' => $email, 'name' => $name]);
    exit;
}

if ($action === 'logout' && $method === 'POST') {
    session_destroy();
    echo json_encode(['ok' => true]);
    exit;
}

if ($action === 'me' && $method === 'GET') {
    if (isset($_SESSION['userId'])) {
        echo json_encode([
            'user' => [
                'userId' => $_SESSION['userId'],
                'email' => $_SESSION['email'],
                'name' => $_SESSION['name']
            ]
        ]);
    } else {
        echo json_encode(['user' => null]);
    }
    exit;
}

http_response_code(404);
echo json_encode(['error' => 'Not Found']);
