<?php

session_start();

require '../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function translit(string $tWord){
    $map = [
        'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh',
        'з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o',
        'п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'ts',
        'ч'=>'ch','ш'=>'sh','щ'=>'shch','ъ'=>'','ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya',
        'А'=>'A','Б'=>'B','В'=>'V','Г'=>'G','Д'=>'D','Е'=>'E','Ё'=>'Yo','Ж'=>'Zh',
        'З'=>'Z','И'=>'I','Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N','О'=>'O',
        'П'=>'P','Р'=>'R','С'=>'S','Т'=>'T','У'=>'U','Ф'=>'F','Х'=>'H','Ц'=>'Ts',
        'Ч'=>'Ch','Ш'=>'Sh','Щ'=>'Shch','Ъ'=>'','Ы'=>'Y','Ь'=>'','Э'=>'E','Ю'=>'Yu','Я'=>'Ya'
    ];
    return strtr($tWord, $map);
}

function loginGenerator($fio, $group){
    global $pdo;
    $transFio = strtolower(translit($fio));
    $transFio = preg_replace('/[^a-z0-9]/', '', $transFio);
    $transFio = mb_substr($transFio, 0, 6);

    $transGroup = strtolower(translit($group));
    $transGroup = preg_replace('/[^a-z0-9]/', '', $transGroup);
    $transGroup = mb_substr($transGroup, 0, 4);

    $postfixx = bin2hex(random_bytes(3)); 
    $newLogin = $transFio . $transGroup . $postfixx;

    $stmt = $pdo->prepare("SELECT 1 FROM users WHERE login = ?");
    $stmt->execute([$newLogin]);
    if ($stmt->fetch()) {
        $newLogin = $transFio . $transGroup . bin2hex(random_bytes(3));
    }

    return $newLogin;

}

function passwordGenerator($length = 8){
    $password = '';
    $arr = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
    );
 
    for ($i = 0; $i < $length; $i++) {
        $password .= $arr[random_int(0, count($arr) - 1)];
    }
    return $password;
}

function massInsert($document) {
    global $pdo;
    
    $spreadsheet = IOFactory::load($document['tmp_name']);
    $worksheet   = $spreadsheet->getActiveSheet();
    $inserted    = [];

    foreach ($worksheet->getRowIterator(2) as $row) {
        $rowIndex = $row->getRowIndex();
        
        if ($row->isEmpty()) {
            continue;
        }

        $fio   = trim($worksheet->getCell('A' . $rowIndex)->getValue() ?? '');
        $group = trim($worksheet->getCell('B' . $rowIndex)->getValue() ?? '');
        
        if ($fio === '' || $group === '') {
            continue;
        }

        $login    = loginGenerator($fio, $group);
        $password = passwordGenerator(8);
        $hash     = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("SELECT group_id FROM `groups` WHERE group_name = ?");
        $stmt->execute([$group]);
        $groupId = $stmt->fetchColumn();

        if (!$groupId) {
            $stmt = $pdo->prepare("INSERT INTO `groups` (group_name) VALUES (?)");
            $stmt->execute([$group]);
            $groupId = $pdo->lastInsertId();
        }

        $stmt = $pdo->prepare("INSERT INTO users (fio, login, password, role_id) VALUES (?, ?, ?, 3)");
        $stmt->execute([$fio, $login, $hash]);
        $userId = $pdo->lastInsertId();

        $stmt = $pdo->prepare("INSERT INTO students (user_id, group_id) VALUES (?, ?)");
        $stmt->execute([$userId, $groupId]);

        $inserted[] = [
            'fio'      => $fio,
            'group'    => $group,
            'login'    => $login,
            'password' => $password
        ];
    }

    return $inserted;
}

function generateDocument($document, $result) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->fromArray(['ФИО', 'Группа', 'Логин', 'Пароль'], null, 'A1');

    if (is_array($result) && !empty($result)) {
        $sheet->fromArray($result, null, 'A2');
    }

    foreach (range('A', 'D') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }

    $type = strtolower($document['type'] ?? 'xlsx');
    $ext = ($type === 'ods') ? 'ods' : 'xlsx';
    $writerType = ucfirst($ext);

    $filename = 'passwords_' . date('Ymd_His') . '.' . $ext;
    $filepath = __DIR__ . '/../uploads/' . $filename;

    if (!is_dir(dirname($filepath))) {
        mkdir(dirname($filepath), 0755, true);
    }

    $writer = IOFactory::createWriter($spreadsheet, $writerType);
    $writer->save($filepath);

    $spreadsheet->disconnectWorksheets();
    unset($spreadsheet);

    return '/uploads/' . $filename;
}



?>