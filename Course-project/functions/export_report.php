<?php
    require '../dbcon.php';
    require '../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $fio    = trim($_POST['fio'] ?? '');
    $group  = trim($_POST['group'] ?? '');
    $format = $_POST['format'] ?? 'xlsx';

    $sql = "SELECT u.fio, g.group_name, r.result_json
            FROM students s
            JOIN users u ON s.user_id = u.user_id
            JOIN `groups` g ON s.group_id = g.group_id
            LEFT JOIN results r ON u.user_id = r.user_id
            WHERE 1=1";
    $params = [];
    if ($fio !== '') { $sql .= " AND u.fio LIKE ?"; $params[] = "%{$fio}%"; }
    if ($group !== '') { $sql .= " AND g.group_name LIKE ?"; $params[] = "%{$group}%"; }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $factors = ['A','B','C','E','F','G','H','I','L','M','N','O','Q1','Q2','Q3','Q4'];
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->fromArray([array_merge(['ФИО', 'Группа', 'Статус'], $factors)], null, 'A1');

    $row = 2;
    foreach ($data as $d) {
        $sten = $d['result_json'] ? (json_decode($d['result_json'], true)['sten_scores'] ?? []) : [];
        $rowData = [$d['fio'], $d['group_name'], $d['result_json'] ? 'Пройден' : 'Не пройден'];
        foreach ($factors as $f) $rowData[] = $sten[$f] ?? '-';
        $sheet->fromArray([$rowData], null, 'A' . $row);
        $row++;
    }

    foreach (range('A', 'C') as $col) $sheet->getColumnDimension($col)->setAutoSize(true);
    foreach (range('D', 'T') as $col) $sheet->getColumnDimension($col)->setWidth(5);

    $ext = $format === 'ods' ? 'ods' : 'xlsx';
    $writerType = $format === 'ods' ? 'Ods' : 'Xlsx';
    $filename = "report_" . date('Ymd_His') . "." . $ext;

    header('Content-Type: ' . ($ext === 'xlsx' 
        ? 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' 
        : 'application/vnd.oasis.opendocument.spreadsheet'));
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    IOFactory::createWriter($spreadsheet, $writerType)->save('php://output');
    exit;
?>