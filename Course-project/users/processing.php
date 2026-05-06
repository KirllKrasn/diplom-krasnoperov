<?php
session_start();
require '../dbcon.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SESSION['user_id'])) {
    exit;
}

$userId = (int)$_SESSION['user_id'];

$answers = [];
$allValid = true;
for ($i = 1; $i <= 187; $i++) {
    $key = "answer-$i";
    if (!isset($_POST[$key]) || !in_array($_POST[$key], ['a', 'b', 'c'], true)) {
        $allValid = false;
        break;
    }
    $answers[$i] = $_POST[$key];
}

if (!$allValid) {
    header('Location: kettel-test.php');
    exit;
}

$stmt = $pdo->prepare("SELECT student_id FROM students WHERE user_id = ?");
$stmt->execute([$userId]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$student) {
    exit;
}

$studentId = (int)$student['student_id'];

$resultJson = json_encode([
    'answers'     => $answers,
    'submitted_at'=> date('Y-m-d H:i:s'),
    'user_id'     => $userId
], JSON_UNESCAPED_UNICODE);

try {
    $pdo->beginTransaction();

    $insertSql = "INSERT INTO results (user_id, result_json, result_date) VALUES (?, ?, NOW())";
    $stmt = $pdo->prepare($insertSql);
    $stmt->execute([$userId, $resultJson]);

    $deleteSql = "DELETE FROM active_test WHERE student_id = ?";
    $stmt = $pdo->prepare($deleteSql);
    $stmt->execute([$studentId]);

    $pdo->commit();

    header('Location: #'); // Пока не сделал
    exit;

} catch (PDOException $e) {
    $pdo->rollBack();
    exit;
}
?>