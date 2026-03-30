<?php
    session_start();
    require '../../config.php';
    require '../../vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header("Location: ../login.php");
        exit;
    }

    $groupId = $_GET['group_id'] ?? null;

    try {
        $sql = "
            SELECT 
                u.fio,
                g.name AS group_name,
                r.sten_scores,
                r.secondary_scores,
                r.submitted_at
            FROM test_results r
            JOIN users u ON r.user_id = u.id
            LEFT JOIN student_groups g ON u.group_id = g.id
            " . ($groupId ? "WHERE g.id = :group_id" : "") . "
            ORDER BY g.name, u.fio
        ";

        $stmt = $pdo->prepare($sql);
        if ($groupId) {
            $stmt->bindValue(':group_id', $groupId, PDO::PARAM_INT);
        }
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $primaryFactors = ['A','B','C','E','F','G','H','I','L','M','N','O','Q1','Q2','Q3','Q4'];
        $secondaryFactors = ['F1','F2','F3','F4'];

        $headers = array_merge(
            ['ФИО', 'Группа', 'Дата прохождения'],
            $primaryFactors,
            $secondaryFactors
        );
        
        $sheet->fromArray([$headers], null, 'A1');

        $rowIndex = 2;
        foreach ($results as $result) {
            $sten = json_decode($result['sten_scores'], true) ?: [];
            $secondary = json_decode($result['secondary_scores'], true) ?: [];

            $rowData = [
                $result['fio'],
                $result['group_name'] ?? 'Без группы',
                date('d.m.Y H:i', strtotime($result['submitted_at'])),
            ];

            foreach ($primaryFactors as $f) {
                $rowData[] = $sten[$f] ?? '';
            }

            foreach ($secondaryFactors as $f) {
                $rowData[] = $secondary[$f] ?? '';
            }

            $sheet->fromArray([$rowData], null, 'A' . $rowIndex);
            $rowIndex++;
        }

        foreach (range('A', 'Z') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="16PF_Отчёт_полный_' . date('Y-m-d') . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;

    } catch (Exception $e) {
        die('Ошибка: ' . htmlspecialchars($e->getMessage()));
    }
?>