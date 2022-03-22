<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/career_view.php';
?>

<body class="">
    <div class="wrapper ">
    <? include 'templates/sidebar.php' ?>
        <div class="main-panel">
            <? include 'templates/navbar.php'; ?>
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <? if ($_COOKIE['user'] != "") : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Данных страницы Карьера</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Текст на странице
                                                </th>
                                                <th>
                                                    Телефон обратной связи
                                                </th>
                                                <th>
                                                    E-Mail
                                                </th>
                                                <th>
                                                    Телефон для вакансий
                                                </th>
                                                <th>
                                                    Телеграм для вакансий
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <form action="views/send_career.php" method=POST enctype="multipart/form-data">
                                                    <td class="from-group">
                                                        <textarea class="form-control" type="text" name="text" ><?=$career['text']?></textarea>
                                                    </td>
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="phone" value="<?=$career['phone']?>">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="email" value="<?=$career['email']?>"></input>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="vacancy_phone" value="<?=$career['vacancy_phone']?>"></input>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="telegram" value="<?=$career['telegram']?>"></input>
                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Сохранить</button>
                                                    </td>
                                                </form>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Настройка вакансий</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название вакансии
                                                </th>
                                                <th>
                                                    Требования
                                                </th>
                                                <th>
                                                    Обязанности
                                                </th>
                                                <th>
                                                    Условия
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-right">

                                                </th>
                                            </thead>
                                            <tbody>
                                                <form action="views/send_vacancy.php" method=POST enctype="multipart/form-data">
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="name" value="">
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="requirements"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="responsibilities"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="conditions"></textarea>
                                                    </td>
                                                    <td>
                                                        <select name="choice" class="form-control" id="">
                                                            <option value="add" selected="">Добавить</option>
                                                        </select>
                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Добавить слайд</button>
                                                    </td>
                                                </form>
                                                <? foreach ($vacancy as $vac) : ?>
                                                    <tr>
                                                        <form action="views/send_vacancy.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="number" name="id" value="<?= $vac['id'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $vac['name'] ?>">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="requirements"><?= $vac['requirements'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="responsibilities"><?= $vac['responsibilities'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="conditions"><?= $vac['conditions'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <select name="choice" id="" class="form-control">
                                                                    <option value="edit">Изменить</option>
                                                                    <option value="delete">Удалить</option>
                                                                </select>
                                                            </td>
                                                            <td class="text-right">
                                                                <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                <? endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? else : ?>
                    <div class="alert alert-warning">Пожалуйста авторизуйтесь</div>
                <? endif; ?>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<? include 'templates/footer.php' ?>