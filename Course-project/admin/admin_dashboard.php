<?php
session_start();
require '../config.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Панель администратора</title>
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
    </style>
</head>
<body class="bg-light">
    <div class="container py-4">
        <h2 class="mb-4 text-center">Панель администратора</h2>

        <div class="card">
            <div class="card-header">👁️ Просмотр результатов студента</div>
            <div class="card-body">
                <p class="text-muted mb-3">Выберите группу и студента, чтобы увидеть детальную расшифровку теста.</p>
                <a href="functions/view_results.php" class="btn btn-primary rounded-0">Открыть просмотр</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">📊 Работа с Excel-файлами</div>
            <div class="card-body">
                <form action="functions/user_insert.php" method="post" enctype="multipart/form-data" class="mb-3">
                    <label for="userfile" class="form-label">Загрузите список пользователей (.xlsx)</label>
                    <input class="form-control" type="file" id="userfile" name="userfile" accept=".xlsx" required>
                    <button type="submit" class="btn btn-success rounded-0 mt-2">Импортировать Excel</button>
                </form>
                <p>После импорта, будет автоматически сгенерирован файл с паролями для прохождения теста.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Сгенерировать отчёт по группе</div>
            <div class="card-body">
                <?php
                $groups = $pdo->query("SELECT id, name FROM student_groups ORDER BY name")->fetchAll();
                ?>
                <form method="GET" action="functions/export_results.php" class="row g-2">
                    <div class="col-md-8">
                        <select name="group_id" class="form-select">
                            <option value="">Все группы</option>
                            <?php foreach ($groups as $group): ?>
                                <option value="<?= $group['id'] ?>"><?= htmlspecialchars($group['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-info rounded-0 w-100">Экспорт по группе</button>
                    </div>
                </form>
                <small class="text-muted">Выберите группу, чтобы экспортировать только её результаты.</small>
            </div>
        </div>

        <div class="card">
            <div class="card-header">🗑️ Удаление группы</div>
            <div class="card-body">
                <form action="functions/delete_group.php" method="POST" onsubmit="return confirm('❗ ВСЯ группа (студенты + результаты) будет удалена НАВСЕГДА. Продолжить?');">
                    <div class="mb-3">
                        <label for="group_id" class="form-label">Выберите группу</label>
                        <select name="group_id" id="group_id" class="form-select" required>
                            <option value="">— Выберите группу —</option>
                            <?php
                            $groups = $pdo->query("SELECT id, name FROM student_groups ORDER BY name")->fetchAll();
                            foreach ($groups as $group): ?>
                                <option value="<?= (int)$group['id'] ?>">
                                    <?= htmlspecialchars($group['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger rounded-0">Удалить группу</button>
                </form>
                <p class="text-muted mt-2">
                    <small>⚠️ Удаляются: группа, все её студенты и все их результаты тестирования.</small>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">🔧 Прочие действия</div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="functions/export_results.php" class="btn btn-primary rounded-0">Экспортировать все результаты</a>
                    <a href="clear_results.php" class="btn btn-danger rounded-0"
                       onclick="return confirm('Все данные будут удалены без возможности восстановления. Продолжить?');">
                        Очистить результаты
                    </a>
                    <a href="functions/example.xlsx" class="btn btn-outline-secondary rounded-0">Пример Excel файла</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="../logout.php" class="btn btn-outline-dark rounded-0">Выйти</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>