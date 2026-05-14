<?php

session_start();

function authentification($login, $password){
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE `login` = ?");
    $stmt->execute([$login]);
    $result = $stmt->fetch();
    
    if(!$result){
        return false;
    }
    
    if(password_verify($password, $result['password'])){
        return [
            'user_id' => $result['user_id'],
            'role_id' => $result['role_id']
        ];
    }
    return false;
}

function isActiveTest($userId){
    global $pdo;
    $stmt = $pdo->prepare("SELECT at.student_id
                            FROM active_test at
                            INNER JOIN students s ON at.student_id = s.student_id
                            WHERE s.user_id = ?");
    $stmt->execute([$userId]);
    $result = $stmt->fetch();

    if($result){
        return true;
    }

    return false;
}

function autologout(){
    header("Refresh: 120; url=logout.php");
    
}
?>