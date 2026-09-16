<?php
require_once 'env.php';
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['googleClientId' => GOOGLE_CLIENT_ID]);
