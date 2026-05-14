<?php
$_SESSION = array();
session_start();
$_SESSION['error'] = null;

require __DIR__ . "/functions/accounting.php";
require_once __DIR__ . '/dbcon.php';
$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $login = $_POST['login'];
    $password = trim($_POST['password']);

    $user = authentification($login, $password);
    if(empty($login) || empty($password)){
        $message = "Введите логин и пароль!";
    }else{
        if($user){
            $_SESSION['user'] = ['user_id' => $user['user_id'], 'role' => $user['role_id']];
            if($_SESSION['user']['role'] == 1 | $_SESSION['user']['role'] == 2){
                header("Location: admin/admin_dashboard.php");
            } else if(isActiveTest($_SESSION['user']['user_id'])){
                header("Location: users/kettel-test.php");
            } else{
                $message = "Для вас нет активных тестирований!";
                $_SESSION['error'] = $message;
                header("Location: error.php");
            }
        }else{
            $message = "Неправильный логин или пароль!";

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap-grid.css">
</head>
<body>

<div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="card w-100 shadow-sm" style="max-width: 400px;">
        <div class="card-body">
            <p class="h5 mb-3">Добро пожаловать!</p>
            <form method="POST">
                <div class="mb-3">
                    <label for="InputLogin" class="form-label">Логин</label>
                    <input type="text" class="form-control" name="login" id="InputLogin">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password" id="InputPassword">
                </div>
                <button type="submit" class="btn btn-primary w-100">Войти</button>
                <?php echo $message;?>
            </form>
        </div>
    </div>

</div>

<script src="jquery-4.0.0.js"></script>

</body>
</html>