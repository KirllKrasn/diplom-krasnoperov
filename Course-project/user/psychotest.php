<?php
    session_start();
        if(!isset($_SESSION['fio'])){
        header("Location: login.php");
        exit;
    }

    $questions = null;
    $total = 187;

    if (!isset($_GET['step']) || (int)$_GET['step'] > 0) {
        $questions = json_decode(file_get_contents(__DIR__ . '/questions.json'), true);
        if (!$questions || !is_array($questions)) {
            die('Ошибка: не удалось загрузить вопросы.');
        }
        $total = count($questions);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['start_test'])) {
            header("Location: " . $_SERVER['PHP_SELF'] . "?step=1");
            exit;
        }

        $step = (int)($_POST['step'] ?? 0);
        $answer = $_POST['answer'] ?? null;

        if ($answer && in_array($answer, ['a', 'b', 'c']) && $step >= 1 && $step <= $total) {
            $_SESSION['responses'][$step] = $answer;
        }

        if ($step < $total) {
            header("Location: " . $_SERVER['PHP_SELF'] . "?step=" . ($step + 1));
            exit;
        } else {
            header("Location: process_results.php");
            exit;
        }
    }
    $step = isset($_GET['step']) ? (int)$_GET['step'] : 0; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>16PF — Тест Кеттелла</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <?php if ($step === 0): ?>
                        <h4 class="text-center mb-4">Тест Кеттелла 16PF (Форма А)</h4>
                        <div class="instructions">
                            <p>
                                Наиболее популярный опросник для оценки индивидуально-психологических особенностей личности. Стандартизованный многофакторный личностный опросник Р. Кеттелла 16PF (версия А) состоит из 187 вопросов и оценивает личность по 16 факторам. Адаптированный вариант опросника на русскоязычной выборке разработан В.И. Похилько, А.С. Соловейчиком, А.Г. Шмелевым. Предназначен для обследования лиц с образованием не ниже 8–9 классов.
                            </p>
                            <p><strong>Инструкция к тесту</strong></p>
                            <p>
                                Вам предлагается ответить на ряд вопросов, цель которых – выяснить особенности Вашего характера, склонностей и интересов. Отвечая на вопрос, Вы можете выбрать один из трех предложенных вариантов ответов.
                            </p>
                            <p><strong>Пожалуйста, помните:</strong></p>
                            <ul>
                                <li>Не существует «верных» и «неверных» ответов — каждый прав по отношению к своим собственным взглядам.</li>
                                <li>Не тратьте времени на раздумья — давайте первый естественный ответ, который приходит Вам в голову.</li>
                                <li>Старайтесь избегать промежуточных, «неопределённых» ответов.</li>
                                <li>Обязательно отвечайте на все вопросы подряд — не пропускайте ни одного.</li>
                            </ul>
                        </div>
                        <div class="text-center mt-4">
                            <form method="POST">
                                <button type="submit" name="start_test" class="btn btn-primary">Начать тест</button>
                            </form>
                        </div>

                    <?php else: ?>
                        <?php
                        if (!$questions) die('Ошибка: вопросы не загружены.');
                        $current = $questions[$step - 1];
                        ?>
                        <div class="text-center text-muted mb-3">
                            Вопрос <?php echo $step; ?> из <?php echo $total; ?>
                        </div>
                        <div class="progress mb-4" style="height: 8px;">
                            <div class="progress-bar bg-primary" role="progressbar"
                                style="width: <?php echo round(($step / $total) * 100); ?>%">
                            </div>
                        </div>

                        <div class="mb-4">
                            <strong>Вопрос №<?php echo $current['id']; ?></strong><br>
                            <?php echo htmlspecialchars($current['text']); ?>
                        </div>

                        <form method="POST" id="questionForm">
                            <input type="hidden" name="step" value="<?php echo $step; ?>">
                            <input type="hidden" name="answer" id="selectedAnswer" required>

                            <div class="mb-4">
                                <?php foreach ($current['options'] as $opt): ?>
                                    <div class="option-card" data-value="<?php echo $opt['code']; ?>">
                                        <?php echo htmlspecialchars($opt['text']); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="d-flex justify-content-between">
                                <?php if ($step > 1): ?>
                                    <a href="?step=<?php echo $step - 1; ?>" class="btn btn-outline-secondary">← Назад</a>
                                <?php else: ?>
                                    <div></div>
                                <?php endif; ?>
                                <button type="submit" class="btn btn-primary" id="nextBtn">
                                    <?php echo $step === $total ? 'Завершить тест' : 'Далее →'; ?>
                                </button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.option-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                document.getElementById('selectedAnswer').value = this.getAttribute('data-value');
            });
        });

        document.getElementById('questionForm')?.addEventListener('submit', function(e) {
            if (!document.getElementById('selectedAnswer').value) {
                e.preventDefault();
                alert('Пожалуйста, выберите один из вариантов ответа.');
            }
        });
    </script>
</body>
</html>