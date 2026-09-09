<?php
require_once 'db.php';
session_start();

// ★管理画面のパスワード（自由に変更してください）
$ADMIN_PASSWORD = 'tane';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    if ($_POST['password'] === $ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $error = "パスワードが違います";
    }
}

if (empty($_SESSION['admin_logged_in'])) {
    ?>
    <!DOCTYPE html>
    <html lang="ja">
    <head><meta charset="UTF-8"><title>管理画面</title></head>
    <body style="font-family: sans-serif; padding: 20px;">
        <h2>管理ログイン</h2>
        <?php if(!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            パスワード: <input type="password" name="password">
            <button type="submit">ログイン</button>
        </form>
    </body>
    </html>
    <?php
    exit;
}

// 削除処理
if (isset($_POST['delete_id'])) {
    $stmt = $db->prepare('DELETE FROM cards WHERE id = ?');
    $stmt->execute([$_POST['delete_id']]);
    $msg = "削除しました。";
}

// 一覧取得
$stmt = $db->query('SELECT * FROM cards ORDER BY created_at DESC');
$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>タネ管理画面</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .delete-btn { color: white; background-color: #e74c3c; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer; }
        .delete-btn:hover { background-color: #c0392b; }
    </style>
</head>
<body>
    <h2>タネの管理（削除画面）</h2>
    <a href="?logout=1">ログアウト</a>
    <?php if(!empty($msg)) echo "<p style='color:green; font-weight:bold;'>$msg</p>"; ?>
    
    <table>
        <tr>
            <th>日時</th>
            <th>領域タグ</th>
            <th>テキスト</th>
            <th>操作</th>
        </tr>
        <?php foreach($cards as $c): ?>
        <tr>
            <td><?= date('Y/m/d H:i', $c['created_at']/1000) ?></td>
            <td><?= htmlspecialchars($c['domain']) ?></td>
            <td><?= htmlspecialchars($c['text']) ?></td>
            <td>
                <form method="POST" onsubmit="return confirm('本当に削除しますか？\n（復元できません）');" style="margin:0;">
                    <input type="hidden" name="delete_id" value="<?= htmlspecialchars($c['id']) ?>">
                    <button type="submit" class="delete-btn">削除</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
