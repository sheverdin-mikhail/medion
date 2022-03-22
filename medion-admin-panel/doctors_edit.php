<? include 'templates/header.php' ?>
<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/doctors_view.php';
require_once 'views/send_photo.php';
?>
<?php
$doctors = DoctorsView($link);
$catigories = DocCatView($link);
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
                                    <h4 class="card-title"> Добавить фото доктора</h4>
                                    <h5 class="alert alert-warning"><b>Внимание!</b> <span>
                                            Перед отправкой файла убедитесь, что название добавляемого файла совпадает с ФИО доктора изображенного на фотографии.
                                            <br><br>Иначе фото не отобразится на странице. <br>
                                            Фото должно быть в формате jpg, другие не будут работать.
                                        </span></h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Фотография
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="views/send_photo.php" enctype="multipart/form-data" method=POST>
                                                        <td class="from-group">
                                                            <input class="form-control" type="file" name="file">
                                                        </td>
                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Добавить</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Добавить доктора</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ФИО
                                                </th>
                                                <th>
                                                    Должность
                                                </th>
                                                <th>
                                                    Стаж
                                                </th>
                                                <th>
                                                    Категория
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <?php $divisions = DoctorsView($link); ?>
                                                <tr>
                                                    <form action="views/send_doctor.php" method=POST>
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="name_doctor" value="<?= $doc['name_doctor'] ?>">
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" type="text" name="post_doctor"><?= $doc['post_doctor'] ?></textarea>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text" name="experience_doctor" value="<?= $doc['experience_doctor'] ?>">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" type="text" name="id_doctors-category">
                                                                <? foreach ($catigories as $cat) : ?>
                                                                    <option value="<?= $cat['id_doctors-category'] ?>" <? if ($cat['id_doctors-category'] == $doc['id_doctors-category']) : ?> selected="" <? endif; ?>>
                                                                        <?= ($cat['name_doctors-category']) ?></option>
                                                                <? endforeach; ?>
                                                            </select>
                                                        </td>

                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Найти доктора</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ФИО доктора
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="" method=GET>

                                                        <td class="">
                                                            <input class="form-control" type="text" name="name_doctor">
                                                        </td>
                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Поиск</button>
                                                        </td>
                                                    </form>
                                                    <? include 'views/find_doctor.php' ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Изменить информацию о докторах</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ФИО
                                                </th>
                                                <th>
                                                    Должность
                                                </th>
                                                <th>
                                                    Стаж
                                                </th>
                                                <th>
                                                    Категория
                                                </th>
                                                <th>
                                                    Фото
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <? if ($searching && count($find_doctors) > 0) : ?>
                                                <tbody>

                                                    <? foreach ($find_doctors as $doc) : ?>
                                                        <tr>
                                                            <form action="views/edit_doctor.php" enctype="multipart/form-data" method=POST>
                                                                <td class="from-group" style="display: none;">
                                                                    <input style="display" class="form-control" type="number" name="id_doctor" value="<?= $doc['id_doctor'] ?>">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="name_doctor" value="<?= $doc['name_doctor'] ?>">
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" type="text" name="post_doctor"><?= $doc['post_doctor'] ?></textarea>
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="text" name="experience_doctor" value="<?= $doc['experience_doctor'] ?>">
                                                                </td>
                                                                <td>
                                                                    <select class="form-control" type="text" name="id_doctors-category">
                                                                        <? foreach ($catigories as $cat) : ?>
                                                                            <option value="<?= $cat['id_doctors-category'] ?>" <? if ($cat['id_doctors-category'] == $doc['id_doctors-category']) : ?> selected="" <? endif; ?>>
                                                                                <?= ($cat['name_doctors-category']) ?></option>
                                                                        <? endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="file" name="file">
                                                                </td>
                                                                <td class="">
                                                                    <select class="form-control" name="choice" id="choice">
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
                                            <? elseif ($searching && count($find_doctors) == 0) : ?>
                                                <div class="alert alert-danger">По вашему запросу ничего не найдено. <b><a style="color: #fff;" href="doctors_edit.php">Отменить запрос</a></b></div>
                                            <? else : ?>
                                                <tbody>

                                                    <? foreach ($doctors as $doc) : ?>
                                                        <tr>
                                                            <form action="views/edit_doctor.php" method=POST enctype="multipart/form-data">
                                                                <td class="from-group" style="display: none;">
                                                                    <input style="display" class="form-control" type="number" name="id_doctor" value="<?= $doc['id_doctor'] ?>">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="name_doctor" value="<?= $doc['name_doctor'] ?>">
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" type="text" name="post_doctor"><?= $doc['post_doctor'] ?></textarea>
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="text" name="experience_doctor" value="<?= $doc['experience_doctor'] ?>">
                                                                </td>
                                                                <td>
                                                                    <select class="form-control" type="text" name="id_doctors-category">
                                                                        <? foreach ($catigories as $cat) : ?>
                                                                            <option value="<?= $cat['id_doctors-category'] ?>" <? if ($cat['id_doctors-category'] == $doc['id_doctors-category']) : ?> selected="" <? endif; ?>>
                                                                                <?= ($cat['name_doctors-category']) ?></option>
                                                                        <? endforeach; ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="file" name="file">
                                                                </td>
                                                                <td class="">
                                                                    <select class="form-control" name="choice" id="choice">
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
                                            <? endif; ?>
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