<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/pages_view.php';
?>
<?php
$headers = HeadersView($link);
$pages = PagesView($link);
$main_slider = MainSliderView($link);
$about = AboutInfoView($link);
$about = $about[0];
$about_photos = AboutPhotosView($link);
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
                                    <h4 class="card-title"> Настройка главного слайдера</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Заголовок
                                                </th>
                                                <th>
                                                    Описание
                                                </th>
                                                <th>
                                                    Кнопка
                                                </th>
                                                <th>
                                                    Ссылка кнопки
                                                </th>
                                                <th class="text-center">
                                                    Фотография
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-right">

                                                </th>
                                            </thead>
                                            <tbody>
                                                <form action="views/send_main_slider.php" method=POST enctype="multipart/form-data">
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="header_slider" value="">
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="description_slider"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="button_slider"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="button_link"></textarea>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="file" name="photo" value="">
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
                                                <? foreach ($main_slider as $slide) : ?>
                                                    <tr>
                                                        <form action="views/send_main_slider.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="number" name="id_slider" value="<?= $slide['id_slider'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="header_slider" value="<?= $slide['header_slider'] ?>">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="description_slider"><?= $slide['description_slider'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="button_slider"><?= $slide['button_slider'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="button_link"><?= $slide['button_link'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="photo" value="">
                                                                <? if (mb_strlen($slide['photo']) > 0) : ?>
                                                                    <img src="../../static/img/main_slider/<?= $slide['photo'] ?>" alt="" width="150px">
                                                                <? else : ?>
                                                                    <p>Нет фотографии</p>
                                                                <? endif; ?>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Настройка хедера(заголовока) страниц</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Заголовок
                                                </th>
                                                <th>
                                                    Описание
                                                </th>
                                                <th class="text-center">
                                                    Страница
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <? foreach ($headers as $header) : ?>
                                                    <tr>
                                                        <form action="views/pages_headers.php" method=POST>
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="number" name="id_header" value="<?= $header['id_header'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="header_text" value="<?= $header['header_text'] ?>">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="header_description"><?= $header['header_description'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <p class='text-center'>
                                                                    <? foreach ($pages as $page) : ?>
                                                                        <? if ($page['id_page'] == $header['id_page']) : ?>
                                                                            <?= $page['page_name'] ?>
                                                                            <input class='text-center' name="id_page" value="<?= $page['id_page'] ?>" style="display: none;">
                                                                        <? endif; ?>
                                                                    <? endforeach; ?>
                                                                </p>

                                                            </td>
                                                            <td class="text-right">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
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
                                    <h4 class="card-title"> Блок главной страницы с описанием центра</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Заголовок
                                                </th>
                                                <th>
                                                    Описание
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="views/send_about.php" method=POST>
                                                        <td class="from-group" style="display: none;">
                                                            <input style="display" class="form-control" type="number" name="id_about" value="<?= $about['id_about'] ?>">
                                                        </td>
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="header" value="<?= $about['header'] ?>">
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" type="text" name="description"><?= $about['description'] ?></textarea>
                                                        </td>
                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Сохранить</button>
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
                                    <h4 class="card-title"> Настройка фотографий слайдера блока с описанием (главная страница 2 блок)</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Фотография
                                                </th>
                                                <th>
                                                    Фотография на замену
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-right">

                                                </th>
                                            </thead>
                                            <tbody>
                                                <form action="views/send_about_slider.php" method=POST enctype="multipart/form-data">
                                                    <td class="from-group" style="display: none;">
                                                        <input style="display" class="form-control" type="number" name="id_slide" value="">
                                                    </td>
                                                    <td class="from-group">

                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="file" name="photo_file" value="">
                                                    </td>
                                                    <td>
                                                        <select name="choice" id="" class="form-control">
                                                            <option value="add" selected>Добавить</option>
                                                        </select>

                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Добавить новую фотографию</button>
                                                    </td>
                                                </form>
                                                <? foreach ($about_photos as $photo) : ?>
                                                    <tr>
                                                        <form action="views/send_about_slider.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group" style="display: none;">
                                                                <input class="form-control" type="number" name="id_slide" value="<?= $photo['id_slide'] ?>">
                                                            </td>
                                                            <td class="from-group" style="display: none;">
                                                                <input class="form-control" type="text" name="photo_name" value="<?= $photo['photo'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <p><?= $photo['photo'] ?></p><img src="../../static/img/about_slider/<?= $photo['photo'] ?>" alt="" width="150px">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="photo_file" value="">
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