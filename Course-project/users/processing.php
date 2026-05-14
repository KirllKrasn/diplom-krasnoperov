<?php

session_start();
require '../dbcon.php';
require 'sten.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SESSION['user']['user_id'])) {
    exit;
}

$userId = (int)$_SESSION['user']['user_id'];

$answers = [];
$allValid = true;
for ($i = 1; $i <= 187; $i++) {
    $key = "answer-$i";
    if (!isset($_POST[$key]) || !in_array($_POST[$key], ['a', 'b', 'c'], true)) {
        $allValid = false;
        break;
    }
    $answers[$i] = $_POST[$key];
}

if (!$allValid) {
    header('Location: kettel-test.php');
    exit;
}

$stmt = $pdo->prepare("SELECT student_id FROM students WHERE user_id = ?");
$stmt->execute([$userId]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$student) {
    exit;
}
$studentId = (int)$student['student_id'];

$factors = ['A','B','C','E','F','G','H','I','L','M','N','O','Q1','Q2','Q3','Q4'];
$rawScores = array_fill_keys($factors, 0);

$scoringKey = [
    3   => ['factor' => 'A', 'a' => 2, 'b' => 1, 'c' => 0],
    26  => ['factor' => 'A', 'a' => 0, 'b' => 1, 'c' => 2],
    27  => ['factor' => 'A', 'a' => 0, 'b' => 1, 'c' => 2],
    51  => ['factor' => 'A', 'a' => 0, 'b' => 1, 'c' => 2],
    52  => ['factor' => 'A', 'a' => 0, 'b' => 1, 'c' => 2],
    76  => ['factor' => 'A', 'a' => 0, 'b' => 1, 'c' => 2],
    101 => ['factor' => 'A', 'a' => 2, 'b' => 1, 'c' => 0],
    126 => ['factor' => 'A', 'a' => 2, 'b' => 1, 'c' => 0],
    151 => ['factor' => 'A', 'a' => 0, 'b' => 1, 'c' => 2],
    176 => ['factor' => 'A', 'a' => 2, 'b' => 1, 'c' => 0],

    28  => ['factor' => 'B', 'a' => 0, 'b' => 1, 'c' => 0],
    53  => ['factor' => 'B', 'a' => 0, 'b' => 1, 'c' => 0],
    54  => ['factor' => 'B', 'a' => 0, 'b' => 1, 'c' => 0],
    77  => ['factor' => 'B', 'a' => 0, 'b' => 0, 'c' => 1],
    78  => ['factor' => 'B', 'a' => 0, 'b' => 1, 'c' => 0],
    102 => ['factor' => 'B', 'a' => 0, 'b' => 0, 'c' => 1],
    103 => ['factor' => 'B', 'a' => 0, 'b' => 1, 'c' => 0],
    127 => ['factor' => 'B', 'a' => 0, 'b' => 0, 'c' => 1],
    128 => ['factor' => 'B', 'a' => 0, 'b' => 1, 'c' => 0],
    152 => ['factor' => 'B', 'a' => 1, 'b' => 0, 'c' => 0],
    153 => ['factor' => 'B', 'a' => 0, 'b' => 0, 'c' => 1],
    177 => ['factor' => 'B', 'a' => 1, 'b' => 0, 'c' => 0],
    178 => ['factor' => 'B', 'a' => 1, 'b' => 0, 'c' => 0],

    4   => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],
    5   => ['factor' => 'C', 'a' => 0, 'b' => 1, 'c' => 2],
    29  => ['factor' => 'C', 'a' => 0, 'b' => 1, 'c' => 2],
    30  => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],
    55  => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],
    79  => ['factor' => 'C', 'a' => 0, 'b' => 1, 'c' => 2],
    80  => ['factor' => 'C', 'a' => 0, 'b' => 1, 'c' => 2],
    104 => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],
    105 => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],
    129 => ['factor' => 'C', 'a' => 0, 'b' => 1, 'c' => 2],
    130 => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],
    154 => ['factor' => 'C', 'a' => 0, 'b' => 1, 'c' => 2],
    179 => ['factor' => 'C', 'a' => 2, 'b' => 1, 'c' => 0],

    6   => ['factor' => 'E', 'a' => 0, 'b' => 1, 'c' => 2],
    7   => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],
    31  => ['factor' => 'E', 'a' => 0, 'b' => 1, 'c' => 2],
    32  => ['factor' => 'E', 'a' => 0, 'b' => 1, 'c' => 2],
    56  => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],
    57  => ['factor' => 'E', 'a' => 0, 'b' => 1, 'c' => 2],
    81  => ['factor' => 'E', 'a' => 0, 'b' => 1, 'c' => 2],
    106 => ['factor' => 'E', 'a' => 0, 'b' => 1, 'c' => 2],
    131 => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],
    155 => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],
    156 => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],
    180 => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],
    181 => ['factor' => 'E', 'a' => 2, 'b' => 1, 'c' => 0],

    8   => ['factor' => 'F', 'a' => 0, 'b' => 1, 'c' => 2],
    33  => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],
    58  => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],
    82  => ['factor' => 'F', 'a' => 0, 'b' => 1, 'c' => 2],
    83  => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],
    107 => ['factor' => 'F', 'a' => 0, 'b' => 1, 'c' => 2],
    108 => ['factor' => 'F', 'a' => 0, 'b' => 1, 'c' => 2],
    132 => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],
    133 => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],
    157 => ['factor' => 'F', 'a' => 0, 'b' => 1, 'c' => 2],
    158 => ['factor' => 'F', 'a' => 0, 'b' => 1, 'c' => 2],
    182 => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],
    183 => ['factor' => 'F', 'a' => 2, 'b' => 1, 'c' => 0],

    9   => ['factor' => 'G', 'a' => 0, 'b' => 1, 'c' => 2],
    34  => ['factor' => 'G', 'a' => 0, 'b' => 1, 'c' => 2],
    59  => ['factor' => 'G', 'a' => 0, 'b' => 1, 'c' => 2],
    84  => ['factor' => 'G', 'a' => 0, 'b' => 1, 'c' => 2],
    109 => ['factor' => 'G', 'a' => 2, 'b' => 1, 'c' => 0],
    134 => ['factor' => 'G', 'a' => 2, 'b' => 1, 'c' => 0],
    159 => ['factor' => 'G', 'a' => 0, 'b' => 1, 'c' => 2],
    160 => ['factor' => 'G', 'a' => 2, 'b' => 1, 'c' => 0],
    184 => ['factor' => 'G', 'a' => 2, 'b' => 1, 'c' => 0],
    185 => ['factor' => 'G', 'a' => 2, 'b' => 1, 'c' => 0],

    10  => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],
    35  => ['factor' => 'H', 'a' => 0, 'b' => 1, 'c' => 2],
    36  => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],
    60  => ['factor' => 'H', 'a' => 0, 'b' => 1, 'c' => 2],
    61  => ['factor' => 'H', 'a' => 0, 'b' => 1, 'c' => 2],
    85  => ['factor' => 'H', 'a' => 0, 'b' => 1, 'c' => 2],
    86  => ['factor' => 'H', 'a' => 0, 'b' => 1, 'c' => 2],
    110 => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],
    111 => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],
    135 => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],
    136 => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],
    161 => ['factor' => 'H', 'a' => 0, 'b' => 1, 'c' => 2],
    186 => ['factor' => 'H', 'a' => 2, 'b' => 1, 'c' => 0],

    11  => ['factor' => 'I', 'a' => 0, 'b' => 1, 'c' => 2],
    12  => ['factor' => 'I', 'a' => 2, 'b' => 1, 'c' => 0],
    37  => ['factor' => 'I', 'a' => 2, 'b' => 1, 'c' => 0],
    62  => ['factor' => 'I', 'a' => 0, 'b' => 1, 'c' => 2],
    87  => ['factor' => 'I', 'a' => 0, 'b' => 1, 'c' => 2],
    112 => ['factor' => 'I', 'a' => 2, 'b' => 1, 'c' => 0],
    137 => ['factor' => 'I', 'a' => 0, 'b' => 1, 'c' => 2],
    138 => ['factor' => 'I', 'a' => 2, 'b' => 1, 'c' => 0],
    162 => ['factor' => 'I', 'a' => 0, 'b' => 1, 'c' => 2],
    163 => ['factor' => 'I', 'a' => 2, 'b' => 1, 'c' => 0],

    13  => ['factor' => 'L', 'a' => 0, 'b' => 1, 'c' => 2],
    38  => ['factor' => 'L', 'a' => 2, 'b' => 1, 'c' => 0],
    63  => ['factor' => 'L', 'a' => 0, 'b' => 1, 'c' => 2],
    64  => ['factor' => 'L', 'a' => 0, 'b' => 1, 'c' => 2],
    88  => ['factor' => 'L', 'a' => 2, 'b' => 1, 'c' => 0],
    89  => ['factor' => 'L', 'a' => 0, 'b' => 1, 'c' => 2],
    113 => ['factor' => 'L', 'a' => 2, 'b' => 1, 'c' => 0],
    114 => ['factor' => 'L', 'a' => 2, 'b' => 1, 'c' => 0],
    139 => ['factor' => 'L', 'a' => 0, 'b' => 1, 'c' => 2],
    164 => ['factor' => 'L', 'a' => 2, 'b' => 1, 'c' => 0],

    14  => ['factor' => 'M', 'a' => 0, 'b' => 1, 'c' => 2],
    15  => ['factor' => 'M', 'a' => 0, 'b' => 1, 'c' => 2],
    39  => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    40  => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    65  => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    90  => ['factor' => 'M', 'a' => 0, 'b' => 1, 'c' => 2],
    91  => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    115 => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    116 => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    140 => ['factor' => 'M', 'a' => 2, 'b' => 1, 'c' => 0],
    141 => ['factor' => 'M', 'a' => 0, 'b' => 1, 'c' => 2],
    165 => ['factor' => 'M', 'a' => 0, 'b' => 1, 'c' => 2],
    166 => ['factor' => 'M', 'a' => 0, 'b' => 1, 'c' => 2],

    16  => ['factor' => 'N', 'a' => 0, 'b' => 1, 'c' => 2],
    17  => ['factor' => 'N', 'a' => 2, 'b' => 1, 'c' => 0],
    41  => ['factor' => 'N', 'a' => 0, 'b' => 1, 'c' => 2],
    42  => ['factor' => 'N', 'a' => 2, 'b' => 1, 'c' => 0],
    66  => ['factor' => 'N', 'a' => 0, 'b' => 1, 'c' => 2],
    67  => ['factor' => 'N', 'a' => 0, 'b' => 1, 'c' => 2],
    92  => ['factor' => 'N', 'a' => 0, 'b' => 1, 'c' => 2],
    117 => ['factor' => 'N', 'a' => 2, 'b' => 1, 'c' => 0],
    142 => ['factor' => 'N', 'a' => 2, 'b' => 1, 'c' => 0],
    167 => ['factor' => 'N', 'a' => 2, 'b' => 1, 'c' => 0],

    18  => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    19  => ['factor' => 'O', 'a' => 0, 'b' => 1, 'c' => 2],
    43  => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    44  => ['factor' => 'O', 'a' => 0, 'b' => 1, 'c' => 2],
    68  => ['factor' => 'O', 'a' => 0, 'b' => 1, 'c' => 2],
    69  => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    93  => ['factor' => 'O', 'a' => 0, 'b' => 1, 'c' => 2],
    94  => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    118 => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    119 => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    143 => ['factor' => 'O', 'a' => 2, 'b' => 1, 'c' => 0],
    144 => ['factor' => 'O', 'a' => 0, 'b' => 1, 'c' => 2],
    168 => ['factor' => 'O', 'a' => 0, 'b' => 1, 'c' => 2],

    20  => ['factor' => 'Q1', 'a' => 2, 'b' => 1, 'c' => 0],
    21  => ['factor' => 'Q1', 'a' => 0, 'b' => 1, 'c' => 2],
    45  => ['factor' => 'Q1', 'a' => 0, 'b' => 1, 'c' => 2],
    46  => ['factor' => 'Q1', 'a' => 2, 'b' => 1, 'c' => 0],
    70  => ['factor' => 'Q1', 'a' => 2, 'b' => 1, 'c' => 0],
    95  => ['factor' => 'Q1', 'a' => 0, 'b' => 1, 'c' => 2],
    120 => ['factor' => 'Q1', 'a' => 0, 'b' => 1, 'c' => 2],
    145 => ['factor' => 'Q1', 'a' => 2, 'b' => 1, 'c' => 0],
    169 => ['factor' => 'Q1', 'a' => 2, 'b' => 1, 'c' => 0],
    170 => ['factor' => 'Q1', 'a' => 0, 'b' => 1, 'c' => 2],

    22  => ['factor' => 'Q2', 'a' => 0, 'b' => 1, 'c' => 2],
    47  => ['factor' => 'Q2', 'a' => 2, 'b' => 1, 'c' => 0],
    71  => ['factor' => 'Q2', 'a' => 2, 'b' => 1, 'c' => 0],
    72  => ['factor' => 'Q2', 'a' => 2, 'b' => 1, 'c' => 0],
    96  => ['factor' => 'Q2', 'a' => 0, 'b' => 1, 'c' => 2],
    97  => ['factor' => 'Q2', 'a' => 0, 'b' => 1, 'c' => 2],
    121 => ['factor' => 'Q2', 'a' => 0, 'b' => 1, 'c' => 2],
    122 => ['factor' => 'Q2', 'a' => 0, 'b' => 1, 'c' => 2],
    146 => ['factor' => 'Q2', 'a' => 2, 'b' => 1, 'c' => 0],
    171 => ['factor' => 'Q2', 'a' => 2, 'b' => 1, 'c' => 0],

    23  => ['factor' => 'Q3', 'a' => 0, 'b' => 1, 'c' => 2],
    24  => ['factor' => 'Q3', 'a' => 0, 'b' => 1, 'c' => 2],
    48  => ['factor' => 'Q3', 'a' => 2, 'b' => 1, 'c' => 0],
    73  => ['factor' => 'Q3', 'a' => 2, 'b' => 1, 'c' => 0],
    98  => ['factor' => 'Q3', 'a' => 2, 'b' => 1, 'c' => 0],
    123 => ['factor' => 'Q3', 'a' => 0, 'b' => 1, 'c' => 2],
    147 => ['factor' => 'Q3', 'a' => 0, 'b' => 1, 'c' => 2],
    148 => ['factor' => 'Q3', 'a' => 2, 'b' => 1, 'c' => 0],
    172 => ['factor' => 'Q3', 'a' => 0, 'b' => 1, 'c' => 2],
    173 => ['factor' => 'Q3', 'a' => 2, 'b' => 1, 'c' => 0],

    25  => ['factor' => 'Q4', 'a' => 0, 'b' => 1, 'c' => 2],
    49  => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    50  => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    74  => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    75  => ['factor' => 'Q4', 'a' => 0, 'b' => 1, 'c' => 2],
    99  => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    100 => ['factor' => 'Q4', 'a' => 0, 'b' => 1, 'c' => 2],
    124 => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    125 => ['factor' => 'Q4', 'a' => 0, 'b' => 1, 'c' => 2],
    149 => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    150 => ['factor' => 'Q4', 'a' => 0, 'b' => 1, 'c' => 2],
    174 => ['factor' => 'Q4', 'a' => 2, 'b' => 1, 'c' => 0],
    175 => ['factor' => 'Q4', 'a' => 0, 'b' => 1, 'c' => 2],
];

foreach ($scoringKey as $qNum => $rule) {
    if (!isset($answers[$qNum])) continue;
    
    $answer = $answers[$qNum];
    $factor = $rule['factor'];
    
    if (isset($rawScores[$factor]) && isset($rule[$answer])) {
        $rawScores[$factor] += $rule[$answer];
    }
}

$stenScores = [];
foreach ($factors as $f) {
    $raw = $rawScores[$f];
    $sten = 1;
    
    foreach ($stenConversion[$f] as $idx => $range) {
        if ($raw >= $range[0] && $raw <= $range[1]) {
            $sten = $idx + 1;
            break;
        }
    }
    if ($raw > $stenConversion[$f][9][1]) $sten = 10;
    elseif ($raw < $stenConversion[$f][0][0]) $sten = 1;
    
    $stenScores[$f] = $sten;
}

$resultJson = json_encode([
    'answers' => $answers,
    'raw_scores' => $rawScores,
    'sten_scores' => $stenScores,
    'submitted_at' => date('Y-m-d H:i:s'),
    'user_id' => $userId
], JSON_UNESCAPED_UNICODE);

try {
    $pdo->beginTransaction();

    $insertSql = "INSERT INTO results (user_id, result_json, result_date) VALUES (?, ?, NOW())";
    $stmt = $pdo->prepare($insertSql);
    $stmt->execute([$userId, $resultJson]);

    $deleteSql = "DELETE FROM active_test WHERE student_id = ?";
    $stmt = $pdo->prepare($deleteSql);
    $stmt->execute([$studentId]);

    $pdo->commit();

    $_SESSION['error'] = "Тестирование завершено!";
    header('Location: ../error.php');
    exit;

} catch (PDOException $e) {
    $pdo->rollBack();
    header("Location: kettel-test.php");
    exit;
}
?>