<?php

session_start();

require '../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// if($_SESSION['user']['role'] != 1){
//     die();
// }

function massInsertUsers(){
  if (!isset($_FILES['userfile']) || $_FILES['userfile']['error'] !== UPLOAD_ERR_OK) {
        die('Ошибка: файл не загружен. Код ошибки: ' . ($_FILES['userfile']['error'] ?? 'нет данных'));
    }
    
}

?>