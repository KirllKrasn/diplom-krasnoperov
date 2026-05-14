<?php
session_start();
require 'config.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = $_POST['password'];

    if (empty($login) || empty($password)) {
        $message = 'Введите логин и пароль!';
    } else {
        $stmt = $pdo->prepare("SELECT username, password FROM admin_auth WHERE username = ?");
        $stmt->execute([$login]);
        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['role'] = 'admin';
            $_SESSION['username'] = $admin['username'];
            header("Location: admin/admin_dashboard.php");
            exit;
        }

        $stmt = $pdo->prepare("
            SELECT u.id, u.fio, u.group_id, u.password, g.name AS group_name
            FROM users u
            LEFT JOIN student_groups g ON u.group_id = g.id
            WHERE u.fio = ?
        ");
        $stmt->execute([$login]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['role'] = 'user';
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fio'] = $user['fio'];
            $_SESSION['group'] = $user['group_name'];
            header("Location: user/psychotest.php");
            exit;
        }

        $message = 'Неверное имя пользователя или пароль!';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Вход в систему</h2>
        <?php if ($message): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
        <form method="POST" class="mx-auto" style="max-width: 400px;">
            <div class="mb-3">
                <input type="text"
                       name="login"
                       class="form-control"
                       placeholder="Введите логин"
                       required>
            </div>
            <div class="mb-3">
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Пароль"
                       required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Войти</button>
        </form>
    </div>
</body>
</html>