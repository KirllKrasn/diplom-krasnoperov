<?php

session_start();
require '../dbcon.php';
require '../vendor/autoload.php';
require '../functions/admin-functions.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$filePath = null;
if(!empty($_SESSION['user'])){
    if($_SESSION['user']['role'] != 1 && $_SESSION['user']['role'] != 2){
        $_SESSION['error'] = "Вы не администратор, отключение от страницы";
        header("Location: ../error.php");
    }
}else{
    $_SESSION['error'] = "Вы не вошли в аккаунт!";
    header("Location: ../error.php");
}

$stmt = $pdo->query("SELECT group_id, group_name FROM `groups` ORDER BY group_name");
$groupsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] === "POST"){
  if(isset($_POST["add_students"])){
    $file = $_FILES['document'];
    if($file['type'] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $file['type'] == "application/vnd.oasis.opendocument.spreadsheet"){
      $result = massInsert($file);
      $filePath = generateDocument($file, $result);
      $_SESSION['export_path'] = $filePath;
    }else{
      $_SESSION['export_path'] = null;
      $message = "Неверный тип файла!";
    }
  } else if(isset($_POST["selection"])){
    echo "Назначить активное тестирование";
  } else if(isset($_POST["generate-report"])){
    echo "Генерировать отчёт";
  }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дашборд</title>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap-grid.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img class="img-thumbnail" style="max-width: 200px;" src="../imgs/nav-logo.png" alt="">
    <h3>Панель администратора психологиского тестирования Кеттелла</h1>
  </div>
</nav>
<div class="container">
  <div class="card my-5">
    <div class="card-body min-vh">
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-students-tab" data-bs-toggle="pill" data-bs-target="#v-pills-students" type="button" role="tab" aria-controls="v-pills-students" aria-selected="true">Студенты</button>
          <button class="nav-link" id="v-pills-activeTest-tab" data-bs-toggle="pill" data-bs-target="#v-pills-activeTest" type="button" role="tab" aria-controls="v-pills-activeTest" aria-selected="false">Тесты</button>
          <button class="nav-link" id="v-pills-reports-tab" data-bs-toggle="pill" data-bs-target="#v-pills-reports" type="button" role="tab" aria-controls="v-pills-reports" aria-selected="false">Генератор отчётов</button>
        </div>
        <div class="vr"></div>
        <div class="tab-content mx-5 w-100" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
              <div class="card w-100">
                <div class="card-header">
                  Добавить студентов 
                </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" class="mb-3">
                            <label for="document" class="form-label">Загрузите список пользователей (.xlsx/.ods)</label>
                            <input class="form-control" type="file" id="document" name="document" accept=".xlsx, .ods" required>
                            <button name="add_students" type="submit" class="btn btn-success mt-2">Добавить пользователей</button>
                        </form>
                        <?php if (!empty($_SESSION['export_path'])): ?>
                            <div class="mt-3">
                                <a href="<?= htmlspecialchars($_SESSION['export_path']) ?>" class="btn btn-primary btn-sm ms-2" download>
                                    Скачать
                                </a>
                            </div>
                        <?php endif; ?>

                        <p><?php if(isset($message)){echo '<div class="alert alert-danger">'.$message.'</div>';}?></p>
                    </div>
              </div>
          </div>
            <div class="tab-pane fade" id="v-pills-activeTest" role="tabpanel">
                <div id="alert-container"></div>
                
                <div class="card mb-3">
                    <div class="card-header bg-light fw-bold">Фильтры</div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="filter_fio" class="form-label">ФИО студента</label>
                                <input type="text" class="form-control" id="filter_fio" name="filter_fio" 
                                    placeholder="Например: Иванов А.А.">
                            </div>
                            <div class="col-md-4">
                                <label for="filter_group" class="form-label">Группа</label>
                                <input type="text" class="form-control" id="filter_group" name="filter_group" 
                                    placeholder="Например: ПС-23">
                            </div>
                            <div class="col-md-4">
                                <label for="filter_active" class="form-label">Статус тестирования</label>
                                <select class="form-select" id="filter_active" name="filter_active">
                                    <option value="">Все</option>
                                    <option value="1">Проходят тестирование</option>
                                    <option value="0">Не проходят тестирование</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3 d-flex gap-2">
                            <button type="button" id="applyFilters" class="btn btn-primary">Применить фильтры</button>
                            <button type="button" id="resetFilters" class="btn btn-outline-secondary">Сбросить</button>
                        </div>
                    </div>
                </div>

                <div id="results-container" style="display: none;">
                    <div class="card">
                        <div class="card-header">
                            Студенты (найдено: <span id="count">0</span>)
                        </div>
                        <div class="card-body">
                            <div id="students-list"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
                <form action="../functions/generate_report.php" method="POST">
                    <div class="card">
                        <div class="card-header bg-light fw-bold">Генератор отчётов</div>
                        <div class="card-body">
                            
                            <div class="mb-3">
                                <label for="group_select" class="form-label">Выберите группу</label>
                                <select class="form-select" id="group_select" name="group_id" required>
                                    <option value="" selected disabled>-- Список групп --</option>
                                    <?php foreach ($groupsList as $g): ?>
                                        <option value="<?= $g['group_id'] ?>"><?= htmlspecialchars($g['group_name']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Формат файла</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="format" id="format_xlsx" value="xlsx" checked>
                                    <label class="form-check-label" for="format_xlsx">
                                        Excel (.xlsx) — Рекомендуется
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="format" id="format_ods" value="ods">
                                    <label class="form-check-label" for="format_ods">
                                        OpenDocument (.ods) — Для LibreOffice
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Скачать отчёт по группе
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
        <a class="btn btn-danger mt-5" href="../logout.php">Выйти</a>
    </div>
  </div>
</div>

<script src="../bootstrap/js/bootstrap.bundle.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const applyBtn = document.getElementById('applyFilters');
        const resetBtn = document.getElementById('resetFilters');
        const resultsContainer = document.getElementById('results-container');
        const studentsList = document.getElementById('students-list');
        const alertContainer = document.getElementById('alert-container');
        
        applyBtn.addEventListener('click', function() {
            const fio = document.getElementById('filter_fio').value.trim();
            const group = document.getElementById('filter_group').value.trim();
            const active = document.getElementById('filter_active').value;
            
            studentsList.innerHTML = '<div class="text-center py-3"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Загрузка...</span></div></div>';
            resultsContainer.style.display = 'block';
            alertContainer.innerHTML = '';
            
            fetch('../functions/filter_students.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `fio=${encodeURIComponent(fio)}&group=${encodeURIComponent(group)}&active=${encodeURIComponent(active)}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alertContainer.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
                    resultsContainer.style.display = 'none';
                    return;
                }
                
                if (data.students.length === 0) {
                    studentsList.innerHTML = '<div class="alert alert-info">Студенты не найдены</div>';
                    document.getElementById('count').textContent = '0';
                } else {
                    let html = '<div class="table-responsive"><table class="table table-hover align-middle"><thead class="table-light"><tr><th>ФИО</th><th>Группа</th><th>Логин</th><th>Статус</th><th>Действие</th></tr></thead><tbody>';
                    
                    data.students.forEach(student => {
                        const statusBadge = student.in_test 
                            ? '<span class="badge bg-success">Проходит тестирование</span>' 
                            : '<span class="badge bg-secondary">Не проходит</span>';
                        
                        const actionBtn = student.in_test
                            ? `<button class="btn btn-sm btn-outline-danger toggle-test" data-id="${student.student_id}" data-action="remove">Удалить с тестирования</button>`
                            : `<button class="btn btn-sm btn-outline-success toggle-test" data-id="${student.student_id}" data-action="add">Добавить на тестирование</button>`;
                        
                        html += `<tr>
                            <td>${student.fio}</td>
                            <td><span class="badge bg-secondary">${student.group_name}</span></td>
                            <td><code>${student.login}</code></td>
                            <td>${statusBadge}</td>
                            <td>${actionBtn}</td>
                        </tr>`;
                    });
                    
                    html += '</tbody></table></div>';
                    studentsList.innerHTML = html;
                    document.getElementById('count').textContent = data.students.length;
                    
                    document.querySelectorAll('.toggle-test').forEach(btn => {
                        btn.addEventListener('click', function() {
                            toggleTest(this.dataset.id, this.dataset.action);
                        });
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alertContainer.innerHTML = '<div class="alert alert-danger">Ошибка при загрузке данных</div>';
                resultsContainer.style.display = 'none';
            });
        });
        
        resetBtn.addEventListener('click', function() {
            document.getElementById('filter_fio').value = '';
            document.getElementById('filter_group').value = '';
            document.getElementById('filter_active').value = '';
            resultsContainer.style.display = 'none';
            alertContainer.innerHTML = '';
        });
        
        function toggleTest(studentId, action) {
            fetch('../functions/toggle_test.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `student_id=${studentId}&action=${action}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('applyFilters').click();
                } else {
                    alertContainer.innerHTML = `<div class="alert alert-danger">${data.error || 'Ошибка'}</div>`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alertContainer.innerHTML = '<div class="alert alert-danger">Ошибка при выполнении операции</div>';
            });
        }
    });
</script>

</body>
</html>