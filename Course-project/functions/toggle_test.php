<?php
session_start();
require '../dbcon.php';

header('Content-Type: application/json');

$studentId = (int)($_POST['student_id'] ?? 0);
$action = $_POST['action'] ?? '';

if ($studentId <= 0 || !in_array($action, ['add', 'remove'])) {
    echo json_encode(['error' => 'Неверные параметры']);
    exit;
}

try {
    if ($action === 'add') {
        $stmt = $pdo->prepare("INSERT IGNORE INTO active_test (student_id) VALUES (?)");
        $stmt->execute([$studentId]);
    } else {
        $stmt = $pdo->prepare("DELETE FROM active_test WHERE student_id = ?");
        $stmt->execute([$studentId]);
    }
    
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Ошибка базы данных']);
}
?>