<?php
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header("Location: ../login.php");
        exit;
    }
    require '../../config.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['group_id'])) {
        header("Location: admin_dashboard.php");
        exit;
    }

    $groupId = (int)$_POST['group_id'];

    if ($groupId <= 0) {
        $_SESSION['error'] = 'Некорректный ID группы.';
        header("Location: admin_dashboard.php");
        exit;
    }

    try {
        $pdo->beginTransaction();

        $stmt = $pdo->prepare("
            DELETE tr 
            FROM test_results tr
            INNER JOIN users u ON tr.user_id = u.id
            WHERE u.group_id = ?
        ");
        $stmt->execute([$groupId]);

        $stmt = $pdo->prepare("DELETE FROM users WHERE group_id = ?");
        $stmt->execute([$groupId]);

        $stmt = $pdo->prepare("DELETE FROM student_groups WHERE id = ?");
        $stmt->execute([$groupId]);

        $pdo->commit();
        $_SESSION['success'] = 'Группа и все связанные данные успешно удалены.';

    } catch (Exception $e) {
        $pdo->rollback();
        $_SESSION['error'] = 'Ошибка при удалении: ' . htmlspecialchars($e->getMessage());
    }

    header("Location: ../admin_dashboard.php");
    exit;
?>