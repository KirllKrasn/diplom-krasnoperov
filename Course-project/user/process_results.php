<?php
    session_start();

    require '../vendor/autoload.php';
    require '../config.php';
    require 'keys.php';
    require 'sten.php';
    require 'interpretation.php';

    if(!isset($_SESSION['fio'])){
        header("Location: login.php");
        exit;
    }
    $rawScores = [];
    $answers = $_SESSION['responses'] ?? [];

    foreach ($scoringKey as $factor => $items) {
        $score = 0;
        foreach ($items as [$qId, $validAnswers]) {
            if (isset($answers[$qId]) && in_array($answers[$qId], $validAnswers)) {
                $score++;
            }
        }
        $rawScores[$factor] = $score;
    }

    function rawToSten($factor, $raw, $stenConversion) {
        $ranges = $stenConversion[$factor];
        for ($i = 0; $i < 10; $i++) {
            [$min, $max] = $ranges[$i];
            if ($raw >= $min && $raw <= $max) return $i + 1;
        }
        return ($raw < $ranges[0][0]) ? 1 : 10;
    }

    $stenScores = [];
    foreach ($rawScores as $factor => $raw) {
        $stenScores[$factor] = rawToSten($factor, $raw, $stenConversion);
    }

        try {
        global $pdo;

        if (!isset($_SESSION['user_id'])) {
            throw new Exception('Отсутствует user_id в сессии');
        }
        $userId = (int)$_SESSION['user_id'];

        $rawAnswersJson = json_encode($answers, JSON_UNESCAPED_UNICODE);
        $rawScoresJson  = json_encode($rawScores, JSON_UNESCAPED_UNICODE);
        $stenScoresJson = json_encode($stenScores, JSON_UNESCAPED_UNICODE);

        $L = $stenScores['L'] ?? 0;
        $O = $stenScores['O'] ?? 0;
        $Q4 = $stenScores['Q4'] ?? 0;
        $C = $stenScores['C'] ?? 0;
        $H = $stenScores['H'] ?? 0;
        $Q3 = $stenScores['Q3'] ?? 0;
        $A = $stenScores['A'] ?? 0;
        $E = $stenScores['E'] ?? 0;
        $F = $stenScores['F'] ?? 0;
        $Q2 = $stenScores['Q2'] ?? 0;
        $N = $stenScores['N'] ?? 0;
        $I = $stenScores['I'] ?? 0;
        $M = $stenScores['M'] ?? 0;
        $Q1 = $stenScores['Q1'] ?? 0;
        $G = $stenScores['G'] ?? 0;

        $secondary = [
            'F1' => round((38 + (2*$L + 3*$O + 4*$Q4) - 2*$C - 2*$H - 2*$Q3) / 10, 1),
            'F2' => round((2*$A + 3*$E + 4*$F + 5*$H - 2*$Q2 - 11) / 10, 1),
            'F3' => round((77 + 2*$C + 2*$E + 2*$F + 2*$N - 4*$A - 6*$I - 2*$M) / 10, 1),
            'F4' => round((4*$E + 3*$M + 4*$Q1 + 4*$Q2 - 3*$A - 2*$G) / 10, 1),
        ];
        $secondaryJson = json_encode($secondary, JSON_UNESCAPED_UNICODE);

        $stmt = $pdo->prepare("
            INSERT INTO test_results 
            (user_id, raw_answers, raw_scores, sten_scores, secondary_scores) 
            VALUES (?, ?, ?, ?, ?)
        ");

        $stmt->execute([$userId, $rawAnswersJson, $rawScoresJson, $stenScoresJson, $secondaryJson]);

        unset($_SESSION['responses']);

    } catch (Exception $e) {
        error_log("Ошибка сохранения: " . $e->getMessage());
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Результаты теста 16PF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <h1 class="text-center mb-5">Профиль личности по 16PF (Форма А)</h1>
        <div class="row g-4">
            <?php foreach ($stenScores as $factor => $sten): 
                $raw = $rawScores[$factor];
                $interp = $interpretations[$factor];

                if ($sten <= 3) {
                    $type = 'low';
                    $label = 'Низкий уровень';
                    $desc = $interp['low'];
                } elseif ($sten >= 8) {
                    $type = 'high';
                    $label = 'Высокий уровень';
                    $desc = $interp['high'];
                } else {
                    $type = 'medium';
                    $label = 'Средний уровень';
                    $desc = 'Особенности не выражены ярко.';
                }
            ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card factor-card <?= $type ?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="factor-name"><?= $factor ?>. <?= $interp['name'] ?></div>
                            <span class="factor-badge <?= $type ?> badge"><?= $label ?></span>
                        </div>

                        <div class="sten-display"><?= $sten ?></div>
                        <p class="text-muted small mb-2">Сырой балл: <?= $raw ?></p>

                        <p class="mb-0"><?= $desc ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5">
            <a href="../logout.php" class="btn btn-outline-primary">Завершить тестирование</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>