<?php

session_start();
require '../dbcon.php';
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function massInsertUsers(){



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
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
            <form method="POST">
              <div class="card w-100">
                <div class="card-header">
                  Добавить студентов 
                </div>
                <div class="card-body">
                  <form action="functions/user_insert.php" method="post" enctype="multipart/form-data" class="mb-3">
                      <label for="userfile" class="form-label">Загрузите список пользователей (.xlsx/.ods)</label>
                      <input class="form-control" type="file" id="userfile" name="userfile" accept=".xlsx" required>
                      <button type="submit" class="btn btn-success rounded-0 mt-2">Добавить пользователей</button>
                  </form>
                  <p>После импорта, будет автоматически сгенерирован файл с паролями для прохождения теста.</p>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="v-pills-activeTest" role="tabpanel" aria-labelledby="v-pills-activeTest-tab">
            <form method="POST">
                <div class="card mb-3">
                  <div class="card-header bg-light fw-bold">Фильтры</div>
                  <div class="card-body">
                    <form method="GET" action="">
                      <div class="row g-3">
                        <div class="col-md-4">
                          <label for="filter_fio" class="form-label">ФИО студента</label>
                          <input type="text" class="form-control" id="filter_fio" name="filter_fio" 
                                placeholder="Например: Иванов А.А." 
                                value="<?= htmlspecialchars($_GET['filter_fio'] ?? '') ?>">
                        </div>

                        <div class="col-md-4">
                          <label for="filter_group" class="form-label">Группа</label>
                          <input type="text" class="form-control" id="filter_group" name="filter_group" 
                                placeholder="Например: ПС-23" 
                                value="<?= htmlspecialchars($_GET['filter_group'] ?? '') ?>">
                        </div>

                        <div class="col-md-4">
                          <label for="filter_active" class="form-label">Статус тестирования</label>
                          <select class="form-select" id="filter_active" name="filter_active">
                            <option value="">Все</option>
                            <option value="1" <?= ($_GET['filter_active'] ?? '') === '1' ? 'selected' : '' ?>>Есть</option>
                            <option value="0" <?= ($_GET['filter_active'] ?? '') === '0' ? 'selected' : '' ?>>Нет</option>
                          </select>
                        </div>
                      </div>

                      <div class="mt-3 d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Применить фильтры</button>
                      </div>
                    </form>
                  </div>
                </div>
            </form>
          </div>
          <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
            <form method="POST">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="../bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>