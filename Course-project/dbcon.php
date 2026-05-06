<?php
session_start();

$hostname = 'localhost';
$dbname = 'kettel-test-db';
$login = 'root';
$password = 'root';

try{
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOEXCEPTiON $e){
    die();
}
?>