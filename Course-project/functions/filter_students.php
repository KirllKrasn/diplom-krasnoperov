<?php
session_start();
require '../dbcon.php';
header('Content-Type: application/json');

$fio = trim($_POST['fio'] ?? '');
$group = trim($_POST['group'] ?? '');
$active = $_POST['active'] ?? '';

$sql = "
    SELECT 
        s.student_id,
        u.fio,
        u.login,
        g.group_name,
        at.student_id as in_test
    FROM students s
    JOIN users u ON s.user_id = u.user_id
    JOIN `groups` g ON s.group_id = g.group_id
    LEFT JOIN active_test at ON s.student_id = at.student_id
    WHERE 1=1
";

$params = [];

if ($fio !== '') {
    $sql .= " AND u.fio LIKE ?";
    $params[] = "%{$fio}%";
}

if ($group !== '') {
    $sql .= " AND g.group_name LIKE ?";
    $params[] = "%{$group}%";
}

if ($active === '1') {
    $sql .= " AND at.student_id IS NOT NULL";
} elseif ($active === '0') {
    $sql .= " AND at.student_id IS NULL";
}

$sql .= " ORDER BY g.group_name, u.fio";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode(['students' => $students]);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Ошибка базы данных']);
}
?>