<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/clinics_view.php';
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
                                    <h4 class="card-title"> Настройка Клиник</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название клиники
                                                </th>
                                                <th>
                                                    Адрес
                                                </th>
                                                <th>
                                                    Ссылка на карту
                                                </th>
                                                <th>
                                                    Ссылка для сайта(slug)
                                                </th>
                                                <th>
                                                    Картинка
                                                </th>
                                                <th>
                                                    Описание клиники
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                            <form action="views/send_clinics.php" method=POST enctype="multipart/form-data">
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="name_clinics" value="">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="address_clinics" value="">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="map" value="">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="clinics_slug" value="">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="file" name="clinics_img" value="">
                                                                </td>
                                                                <td class="from-group">
                                                                <textarea class="form-control" type="text" name="clinic_text"><?= $clinic['clinic_text'] ?></textarea>
                                                                </td>
                                                                <td class="">
                                                                    <select class="form-control" name="choice" id="choice">
                                                                        <option value="add">Добавить</option>
                                                                    </select>
                                                                </td>
                                                                <td class="text-center">
                                                                    <button class="btn btn-primary " type="submit">Добавить</button>
                                                                </td>
                                                            </form>
                                                        </tr>
                                                    <? foreach($clinics as $clinic): ?>
                                                        <tr>
                                                            <form action="views/send_clinics.php" method=POST enctype="multipart/form-data">
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="name_clinics" value="<?= $clinic['name_clinics'] ?>">
                                                                    <input type="hidden"  name="id_clinics" value="<?= $clinic['id_clinics'] ?>"></input>
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="address_clinics" value="<?= $clinic['address_clinics'] ?>">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="map" value="<?= $clinic['map'] ?>">
                                                                </td>
                                                                <td class="from-group">
                                                                    <input class="form-control" type="text" name="clinics_slug" value="<?= $clinic['clinics_slug'] ?>">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" type="file" name="clinics_img" value="">
                                                                    <? if (mb_strlen($clinic['clinics_img']) > 0) : ?>
                                                                        <img src="data:image/jpeg;base64, <?= base64_encode($clinic['clinics_img']) ?>" alt="" width="150px">
                                                                    <? else : ?>
                                                                        <p>Нет фотографии</p>
                                                                    <? endif; ?>
                                                                </td>
                                                                <td class="from-group">
                                                                    <textarea class="form-control" type="text" name="clinic_text"><?= $clinic['clinic_text'] ?></textarea>
                                                                </td>
                                                                <td class="">
                                                                    <select class="form-control" name="choice" id="choice">
                                                                        <option value="edit">Изменить</option>
                                                                        <option value="delete">Удалить</option>
                                                                    </select>
                                                                </td>
                                                                <td class="text-center">
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