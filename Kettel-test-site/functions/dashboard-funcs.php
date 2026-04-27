<?php

function addUser($fio, $login, $password, $role, $group_id){

    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO `users` (`fio`, `login`, `password`, `role_id`) VALUES (?, ?, ?, ?)");
    $stmt->execute([$fio, $login, $password, $role]);
    
    $userId = $pdo->lastInsertId();
    $stmt = $pdo->prepare("INSERT INTO `students` (`user_id`, `group_id`) VALUES (?, ?)");
    $stmt = $pdo->execute([$userId, $group_id]);
}

function isUserExist($login){
    global $pdo;
    $stmt = $pdo->prepare("SELECT `login` FROM users WHERE `login` = ?");
    $stmt->execute([$login]);
    $result = $stmt->fetch();

    if($result != null){
        // print_r($result);
        return true;
    }

    return false;
}

?>