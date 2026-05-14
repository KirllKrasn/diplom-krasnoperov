<?php
    require '../dbcon.php';
    header('Content-Type: application/json');

    $fio   = trim($_POST['fio'] ?? '');
    $group = trim($_POST['group'] ?? '');

    $sql = "SELECT u.user_id, u.fio, g.group_name, r.result_json
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

    $result = [];
    foreach ($data as $row) {
        $sten = null;
        if ($row['result_json']) {
            $json = json_decode($row['result_json'], true);
            $sten = $json['sten_scores'] ?? null;
        }
        $result[] = [
            'user_id'    => $row['user_id'],
            'fio'        => $row['fio'],
            'group_name' => $row['group_name'],
            'has_result' => !empty($sten),
            'sten_scores'=> $sten
        ];
    }
    echo json_encode($result);
?>