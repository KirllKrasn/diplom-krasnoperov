<?php
require '../dbcon.php';
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['group_id']) || !isset($_POST['format'])) {
    die('Неверные параметры запроса.');
}

$groupId = (int)$_POST['group_id'];
$format  = trim($_POST['format']); 

$allowedFormats = ['xlsx', 'ods'];
if (!in_array($format, $allowedFormats)) {
    die('Неподдерживаемый формат файла.');
}

$sql = "
    SELECT u.fio, u.login, r.result_json 
    FROM students s
    JOIN users u ON s.user_id = u.user_id
    LEFT JOIN results r ON s.user_id = r.user_id
    WHERE s.group_id = ?
    ORDER BY u.fio ASC
";

$stmt = $pdo->prepare($sql);
$stmt->execute([$groupId]);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($students)) {
    die('В выбранной группе нет студентов.');
}

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->fromArray(['ФИО', 'Логин', 'Статус', 'A', 'B', 'C', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'Q1', 'Q2', 'Q3', 'Q4'], null, 'A1');
$sheet->getStyle('A1:S1')->getFont()->setBold(true);

$rowIndex = 2;
foreach ($students as $student) {
    $sheet->setCellValue('A' . $rowIndex, $student['fio']);
    $sheet->setCellValue('B' . $rowIndex, $student['login']);

    if ($student['result_json']) {
        $data = json_decode($student['result_json'], true);
        
        if (isset($data['sten_scores'])) {
            $sheet->setCellValue('C' . $rowIndex, 'Пройден');
            
            $sheet->getStyle('C' . $rowIndex)->getFont()->getColor()->setARGB('FF008000');
            
            $factors = ['A', 'B', 'C', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'Q1', 'Q2', 'Q3', 'Q4'];
        $colIndex = 4; 
        foreach ($factors as $factor) {
            $score = $data['sten_scores'][$factor] ?? 0;
            $colLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colIndex);
            $sheet->setCellValue($colLetter . $rowIndex, $score);
            $colIndex++;
        }
        } else {
             $sheet->setCellValue('C' . $rowIndex, 'Ошибка данных');
        }
    } else {
        $sheet->setCellValue('C' . $rowIndex, 'Не проходил');
        $sheet->getStyle('C' . $rowIndex)->getFont()->getColor()->setARGB('FFFF0000');
    }

    $rowIndex++;
}

foreach (range('A', 'C') as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}
for ($i = 4; $i <= 19; $i++) { 
    $sheet->getColumnDimensionByColumn($i)->setWidth(5);
}

$writerType = ($format === 'ods') ? 'Ods' : 'Xlsx';
$filename = 'report_' . date('Y-m-d') . '.' . $format;

header('Content-Type: ' . ($format === 'xlsx' 
    ? 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' 
    : 'application/vnd.oasis.opendocument.spreadsheet'));
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, $writerType);
$writer->save('php://output');
exit;
?>