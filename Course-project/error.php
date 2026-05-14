<?php
session_start();
header("Refresh: 10; url=logout.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap-grid.css">
</head>
<body>

<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
                <h2>СООБЩЕНИЕ: <?php echo $_SESSION['error'];?></h2>
                <h2>Перенаправление на страницу авторизации</h2>
                <a href="index.php">Обратно на страницу авторазации</a>
    </div>
</div>  
</body>
</html>