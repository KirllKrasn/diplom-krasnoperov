<?php
    session_start();
    require 'config.php';
    if (!isset($_SESSION['role'])) {
        header("Location: login.php");
        exit;
    }

    if ($_SESSION['role'] === 'admin') {
        header("Location: admin/admin_dashboard.php");
    } elseif ($_SESSION['role'] === 'user') {
        header("Location: psychotest.php");
    } else {
        header("Location: login.php");
    }

    exit;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>16PF — Психологическое тестирование</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Тест Кеттелла 16PF (Форма А)</h1>
        <p class="lead">
            Стандартизованный личностный опросник для оценки 16 ключевых черт личности.  
            Предназначен для лиц с образованием не ниже 8–9 классов.
        </p>

        <?php
        session_start();
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] === 'admin') {
                echo '<a href="admin/admin_dashboard.php" class="btn btn-primary">Панель администратора</a>';
            } else {
                echo '<a href="psychotest.php" class="btn btn-success">Пройти тест</a>';
                echo ' | <a href="logout.php">Выйти</a>';
            }
        } else {
            echo '<a href="login.php" class "btn btn-primary">Войти</a>';
        }
        ?>
    </div>
</body>
</html>