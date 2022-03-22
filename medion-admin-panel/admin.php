<? include 'templates/header.php' ?>
<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/admin_view.php';
?>
<body class="">
    <div class="wrapper ">
        <? include 'templates/sidebar.php' ?>
        <div class="main-panel">
            <? include 'templates/navbar.php'; ?>
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
               <? if ($_COOKIE['user'] != ""): ?>
                    <div class="row">
                        <a href="services_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Услуги</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="estetic_med_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Естетическая медицина</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="spa_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">СПА процедуры</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="doctors_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Доктора</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="cardio_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Кардиология</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="clinics_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Клиники</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="career_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Карьера</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="seo_settings.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">SEO</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="pages_settings.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Содержимое страниц</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="footer_edit.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Подвал</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="news_settings.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Новости</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a href="stocks_settings.php" class="col-lg-4">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h5 class="card-category">Создание/изменение</h5>
                                    <h4 class="card-title">Акции</h4>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineChartExample"></canvas>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                <? else: ?>
                    <div class="alert alert-warning">Пожалуйста авторизуйтесь</div>
               <? endif; ?>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="/index.php">
                                    Главная страница
                                </a>
                            </li>
                            <li>
                                <a href="admin.php">
                                    Админ панель
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
        </div>
        <? include 'templates/footer.php' ?>