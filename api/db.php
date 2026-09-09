<?php
$dataDir = __DIR__ . '/data';
if (!file_exists($dataDir)) {
    mkdir($dataDir, 0777, true);
}
$dbPath = $dataDir . '/iwakan.db';
$db = new PDO('sqlite:' . $dbPath);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("PRAGMA journal_mode = WAL;");

function initDb($db) {
    $db->exec("
        CREATE TABLE IF NOT EXISTS cards (
            id TEXT PRIMARY KEY,
            text TEXT NOT NULL,
            domain TEXT NOT NULL,
            author TEXT,
            created_at INTEGER NOT NULL
        );
        CREATE TABLE IF NOT EXISTS users (
            id TEXT PRIMARY KEY,
            email TEXT,
            name TEXT,
            created_at INTEGER NOT NULL
        );
        CREATE TABLE IF NOT EXISTS ideas (
            id TEXT PRIMARY KEY,
            user_id TEXT NOT NULL,
            text TEXT NOT NULL,
            a_text TEXT NOT NULL,
            a_domain TEXT NOT NULL,
            b_text TEXT NOT NULL,
            b_domain TEXT NOT NULL,
            created_at INTEGER NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id)
        );
        CREATE INDEX IF NOT EXISTS idx_ideas_user ON ideas(user_id);
    ");
}
initDb($db);
