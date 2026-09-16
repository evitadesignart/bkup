<?php
require_once 'db.php';
session_start();

// ★管理画面のパスワード（自由に変更してください）
$ADMIN_PASSWORD = 'evitamillion';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: https://evitadesignart.com/tane/');
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
        body { font-family: 'Zen Kaku Gothic New', sans-serif; padding: 0; margin: 0; background: #ecf0f1; color: #2c3e50; }
        .admin-header { background: #1a252f; color: #fff; padding: 12px 20px; text-align: center; }
        .admin-header h2 { margin: 0; font-size: 20px; }
        .container { max-width: 900px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 16px rgba(0,0,0,0.05); }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ecf0f1; padding: 12px; text-align: left; }
        th { background-color: #f8f9f9; font-weight: 700; }
        .delete-btn { color: white; background-color: #e74c3c; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .delete-btn:hover { background-color: #c0392b; }
        .global-footer { background: #1a252f; color: #fff; padding: 30px 20px; margin-top: 60px; text-align: center; }
        .global-footer a { color: #fff; opacity: 0.9; }
        .global-footer a:hover { opacity: 1; }
    </style>
</head>
<body>
    <header class="admin-header">
        <h2>タネの管理（削除画面）</h2>
    </header>
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
            <a href="../">&laquo; サイトへ戻る</a>
            <a href="?logout=1" style="color:#e74c3c;">ログアウト</a>
        </div>
        
        <?php if(!empty($msg)) echo "<p style='color:#27ae60; font-weight:bold; background:#e9f7ef; padding:10px; border-radius:4px;'>$msg</p>"; ?>
        
        <table>
            <tr>
                <th>日時</th>
                <th>テキスト</th>
                <th>操作</th>
            </tr>
            <?php foreach($cards as $c): ?>
            <tr>
                <td><?= date('Y/m/d H:i', $c['created_at']/1000) ?></td>
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
    </div>

    <footer class="global-footer">
        <p style="font-size: 13px; margin: 0 0 10px; color:rgba(255,255,255,0.8);">書き留めた違和感の単語帳は、全員で共有されます。</p>
        <div style="font-size: 13px;">
            <a href="https://evitadesignart.com/" target="_blank">&copy; Evita Design Art</a>
        </div>
    </footer>
</body>
</html>
