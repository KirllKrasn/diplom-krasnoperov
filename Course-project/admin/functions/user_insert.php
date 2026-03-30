<?php
    session_start();
    
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header("Location: ../../login.php");
        exit;
    }

    require '../../vendor/autoload.php';
    require '../../config.php';

    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    if (!isset($_FILES['userfile']) || $_FILES['userfile']['error'] !== UPLOAD_ERR_OK) {
        die('Ошибка: файл не загружен. Код ошибки: ' . ($_FILES['userfile']['error'] ?? 'нет данных'));
    }

    $tmpFile = $_FILES['userfile']['tmp_name'];

    try {
        $pdo->beginTransaction();

        $spreadsheet = IOFactory::load($tmpFile);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();
        $outputData = [['ФИО', 'Группа', 'Пароль']];

        foreach ($rows as $index => $row) {
            if ($index === 0) continue;

            $fio = trim($row[0] ?? '');
            $group_name = trim($row[1] ?? '');

            if (empty($fio) && empty($group_name)) {
                continue;
            }

            $password = substr(str_shuffle('ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789'), 0, 8);
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("SELECT id FROM student_groups WHERE name = ?");
            $stmt->execute([$group_name]);
            $group = $stmt->fetch();

            if ($group) {
                $group_id = $group['id'];
            } else {
                $stmt = $pdo->prepare("INSERT INTO student_groups (name) VALUES (?)");
                $stmt->execute([$group_name]);
                $group_id = $pdo->lastInsertId();
            }

            $stmt = $pdo->prepare("INSERT INTO users (fio, group_id, password) VALUES (?, ?, ?)");
            $stmt->execute([$fio, $group_id, $hash]);

            $outputData[] = [$fio, $group_name, $password];
        }

        $pdo->commit();

        $outputSpreadsheet = new Spreadsheet();
        $sheet = $outputSpreadsheet->getActiveSheet();
        $sheet->fromArray($outputData, null, 'A1');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="imported_passwords_' . date('Y-m-d') . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($outputSpreadsheet);
        $writer->save('php://output');
        exit;

    } catch (Exception $e) {
        if (isset($pdo)) {
            $pdo->rollback();
        }
        die('Ошибка при импорте: ' . htmlspecialchars($e->getMessage()));
    }
?>