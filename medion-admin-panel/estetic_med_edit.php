<? include 'templates/header.php' ?>
<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/em_view.php';
require_once 'views/send_photo.php';
?>
<?php
$em_services = emServicesView($link);
$catigories = emCategories($link);
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
                                    <h4 class="card-title"> Изменение категорий</h4>
                                    <? if (isset($_COOKIE['s_message'])) : ?>
                                        <div class="alert alert-success"><span><?= $_COOKIE['s_message'] ?></span></div>
                                    <? elseif (isset($_COOKIE['err_message'])) : ?>
                                        <div class="alert alert-danger"><span><?= $_COOKIE['err_message'] ?></span></div>
                                    <? endif; ?>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="views/send_em_cat.php" method=POST enctype="multipart/form-data">
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="name_category" value="">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" type="text" name="choice">
                                                                <option value="add">Добавить</option>
                                                            </select>
                                                        </td>

                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                                <? foreach ($catigories as $cat) : ?>
                                                    <tr>
                                                        <form action="views/send_em_cat.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name_category" value="<?= $cat['name_category'] ?>">
                                                                <input class="form-control" type="hidden" name="id_category" value="<?= $cat['id_category'] ?>">
                                                            </td>
                                                            <td>
                                                                <select class="form-control" type="text" name="choice">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Изменение услуг эстетической медицины</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название
                                                </th>
                                                <th>
                                                    Описание
                                                </th>
                                                <th>
                                                    Главное изображение
                                                </th>
                                                <th>
                                                    Фото "До"
                                                </th>
                                                <th>
                                                    Фото "В процессе"
                                                </th>
                                                <th>
                                                    Фото "После"
                                                </th>
                                                <th>
                                                    Категория
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="views/send_em.php" method=POST enctype="multipart/form-data">
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="em_name" value="">
                                                            <input class="form-control" type="hidden" name="id_em" value="">
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" type="text" name="em_description"></textarea>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="file" name="main_photo">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="file" name="before_photo">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="file" name="in_photo">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="file" name="after_photo">
                                                        </td>
                                                        <td>
                                                            <select class="form-control" type="text" name="id_category">
                                                                <? foreach ($catigories as $cat) : ?>
                                                                    <option value="<?= $cat['id_category'] ?>" <? if ($cat['id_category'] == $ems['category']) : ?> selected="" <? endif; ?>>
                                                                        <?= ($cat['name_category']) ?></option>
                                                                <? endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td class="">
                                                            <select class="form-control" name="choice" id="choice">
                                                                <option value="add">Добавить</option>
                                                            </select>
                                                        </td>
                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                                <? foreach ($em_services as $ems) : ?>
                                                    <tr>
                                                        <form action="views/send_em.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="em_name" value="<?= $ems['em_name'] ?>">
                                                                <input class="form-control" type="hidden" name="id_em" value="<?= $ems['id_em'] ?>">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="em_description"><?= $ems['em_description'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="main_photo">
                                                                <? if (mb_strlen($ems['main_photo']) > 0) : ?>
                                                                    <img src="data:image/jpeg;base64, <?= base64_encode($ems['main_photo']) ?>" alt="" width="150px">
                                                                <? else : ?>
                                                                    <p>Нет фотографии</p>
                                                                <? endif; ?>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="before_photo">
                                                                <? if (mb_strlen($ems['before_photo']) > 0) : ?>
                                                                    <img src="data:image/jpeg;base64, <?= base64_encode($ems['before_photo']) ?>" alt="" width="150px">
                                                                <? else : ?>
                                                                    <p>Нет фотографии</p>
                                                                <? endif; ?>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="in_photo">
                                                                <? if (mb_strlen($ems['in_photo']) > 0) : ?>
                                                                    <img src="data:image/jpeg;base64, <?= base64_encode($ems['in_photo']) ?>" alt="" width="150px">
                                                                <? else : ?>
                                                                    <p>Нет фотографии</p>
                                                                <? endif; ?>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="after_photo">
                                                                <? if (mb_strlen($ems['after_photo']) > 0) : ?>
                                                                    <img src="data:image/jpeg;base64, <?= base64_encode($ems['after_photo']) ?>" alt="" width="150px">
                                                                <? else : ?>
                                                                    <p>Нет фотографии</p>
                                                                <? endif; ?>
                                                            </td>
                                                            <td>
                                                                <select class="form-control" type="text" name="id_category">
                                                                    <? foreach ($catigories as $cat) : ?>
                                                                        <option value="<?= $cat['id_category'] ?>" <? if ($cat['id_category'] == $ems['category']) : ?> selected="" <? endif; ?>>
                                                                            <?= ($cat['name_category']) ?></option>
                                                                    <? endforeach; ?>
                                                                </select>
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
                            document.write(ems Date().getFullYear())
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