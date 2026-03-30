<?php
session_start();

// ✅ Правильные пути к файлам
require '../../config.php';
require '../../user/sten.php';
require '../../user/interpretation.php';

// Проверка прав администратора
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

$selectedGroupId = $_GET['group_id'] ?? '';
$selectedUserId = $_GET['user_id'] ?? '';
$resultData = null;

// Получаем результат тестирования пользователя
if ($selectedUserId) {
    $stmt = $pdo->prepare("
        SELECT 
            r.sten_scores,
            r.secondary_scores,
            r.raw_scores,
            r.submitted_at,
            u.fio,
            g.name AS group_name
        FROM test_results r
        JOIN users u ON r.user_id = u.id
        LEFT JOIN student_groups g ON u.group_id = g.id
        WHERE r.user_id = ?
        ORDER BY r.submitted_at DESC
        LIMIT 1
    ");
    $stmt->execute([$selectedUserId]);
    $resultData = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Получаем все группы
$groups = $pdo->query("SELECT id, name FROM student_groups ORDER BY name")->fetchAll();

// Получаем пользователей выбранной группы
$users = [];
if ($selectedGroupId) {
    $stmt = $pdo->prepare("
        SELECT id, fio 
        FROM users 
        WHERE group_id = ? 
        ORDER BY fio
    ");
    $stmt->execute([$selectedGroupId]);
    $users = $stmt->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Просмотр результатов</title>
    <style>
        .btn.rounded-0 {
            border-radius: 0 !important;
        }
        .card {
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
            margin-bottom: 1.5rem;
        }
        .card-header {
            font-weight: 600;
            background-color: #f8f9fa;
        }
        .factor-card {
            border-left: 4px solid #ccc;
        }
        .factor-card.low {
            border-left-color: #dc3545;
        }
        .factor-card.medium {
            border-left-color: #ffc107;
        }
        .factor-card.high {
            border-left-color: #198754;
        }
        .sten-display {
            font-size: 2rem;
            font-weight: bold;
            color: #0d6efd;
        }
        .factor-badge {
            font-size: 0.75rem;
        }
        .factor-badge.low {
            background-color: #dc3545;
        }
        .factor-badge.medium {
            background-color: #ffc107;
            color: #000;
        }
        .factor-badge.high {
            background-color: #198754;
        }
        .factor-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .secondary-factor {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 1rem;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-4">
        <h2 class="mb-4 text-center">📋 Просмотр результатов тестирования</h2>
        
        <!-- Фильтры: Группа + Пользователь -->
        <div class="card">
            <div class="card-header">🔍 Выберите студента</div>
            <div class="card-body">
                <form method="GET" class="row g-3">
                    <div class="col-md-5">
                        <label for="group_id" class="form-label">Группа</label>
                        <select name="group_id" id="group_id" class="form-select" onchange="this.form.submit()">
                            <option value="">— Выберите группу —</option>
                            <?php foreach ($groups as $group): ?>
                                <option value="<?= $group['id'] ?>" <?= $selectedGroupId == $group['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($group['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="user_id" class="form-label">Студент</label>
                        <select name="user_id" id="user_id" class="form-select" <?= empty($users) ? 'disabled' : '' ?>>
                            <option value="">— Выберите студента —</option>
                            <?php foreach ($users as $user): ?>
                                <option value="<?= $user['id'] ?>" <?= $selectedUserId == $user['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($user['fio']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary rounded-0 w-100">Показать</button>
                    </div>
                </form>
            </div>
        </div>

        <?php if ($resultData): ?>
        <!-- Результаты тестирования -->
        <div class="card">
            <div class="card-header">
                👤 <?= htmlspecialchars($resultData['fio']) ?> 
                <span class="text-muted">(<?= htmlspecialchars($resultData['group_name'] ?? 'Без группы') ?>)</span>
            </div>
            <div class="card-body">
                <p class="text-muted mb-4">
                    📅 Дата прохождения: <?= date('d.m.Y H:i', strtotime($resultData['submitted_at'])) ?>
                </p>
                
                <?php
                $stenScores = json_decode($resultData['sten_scores'], true) ?: [];
                $rawScores = json_decode($resultData['raw_scores'], true) ?: [];
                $secondaryScores = json_decode($resultData['secondary_scores'], true) ?: [];
                ?>
                
                <!-- 16 основных факторов -->
                <h5 class="mb-3">📊 16 основных факторов</h5>
                <div class="row g-4">
                    <?php foreach ($stenScores as $factor => $sten): 
                        $raw = $rawScores[$factor] ?? 0;
                        $interp = $interpretations[$factor] ?? ['name' => $factor, 'low' => '', 'high' => ''];
                        
                        if ($sten <= 3) {
                            $type = 'low';
                            $label = 'Низкий';
                        } elseif ($sten >= 8) {
                            $type = 'high';
                            $label = 'Высокий';
                        } else {
                            $type = 'medium';
                            $label = 'Средний';
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
                                <p class="mb-0 small"><?= $type === 'medium' ? 'Особенности не выражены ярко.' : ($type === 'low' ? $interp['low'] : $interp['high']) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Вторичные факторы -->
                <h5 class="mb-3 mt-5">🧠 Вторичные факторы</h5>
                <div class="row g-3">
                    <?php 
                    $secondaryNames = [
                        'F1' => 'Тревожность',
                        'F2' => 'Экстраверсия',
                        'F3' => 'Восприимчивость',
                        'F4' => 'Независимость'
                    ];
                    foreach ($secondaryScores as $factor => $value): 
                    ?>
                    <div class="col-12 col-md-6">
                        <div class="secondary-factor">
                            <div class="d-flex justify-content-between">
                                <strong><?= $factor ?>. <?= $secondaryNames[$factor] ?? $factor ?></strong>
                                <span class="badge bg-primary"><?= $value ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <?php elseif ($selectedGroupId && empty($users)): ?>
        <div class="alert alert-warning">
            ⚠️ В выбранной группе нет студентов.
        </div>
        <?php endif; ?>
        
        <div class="text-center mt-4">
            <a href="../admin_dashboard.php" class="btn btn-outline-dark rounded-0">← Назад в панель администратора</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Авто-сабмит при выборе группы
    document.getElementById('group_id')?.addEventListener('change', function() {
        document.getElementById('user_id').value = '';
        this.form.submit();
    });
    </script>
</body>
</html>