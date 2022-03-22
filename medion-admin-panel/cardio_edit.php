<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/cardio_view.php';
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
                                                <form action="views/send_cardio_slider.php" method=POST enctype="multipart/form-data">
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
                                                <? foreach ($slider as $slide) : ?>
                                                    <tr>
                                                        <form action="views/send_cardio_slider.php" method=POST enctype="multipart/form-data">
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
                                    <h4 class="card-title"> Настройка блока информации кардиологии</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Текст блока
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
                                            <tr>
                                                    <form action="views/send_cardio.php" method=POST enctype="multipart/form-data">
                                                        <td class="from-group" style="display: none;">
                                                            <input  class="form-control" type="number" name="id">
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" type="text" name="description"></textarea>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="file" name="photo" value="">
                                                        </td>
                                                        <td>
                                                            <select name="choice" id="" class="form-control">
                                                                <option value="add">Добавить</option>
                                                            </select>
                                                        </td>
                                                        <td class="text-right">
                                                            <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                        </td>
                                                    </form>

                                                </tr>
                                                <? foreach($cardio as $car): ?>
                                                    <tr>
                                                    <form action="views/send_cardio.php" method=POST enctype="multipart/form-data">
                                                        <td class="from-group" style="display: none;">
                                                            <input  class="form-control" type="number" name="id" value="<?= $car['id'] ?>">
                                                        </td>
                                                        <td>
                                                            <textarea class="form-control" type="text" name="description"><?= $car['description'] ?></textarea>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="file" name="photo" value="">
                                                            <? if (mb_strlen($car['photo']) > 0) : ?>
                                                                <img src="data:image/jpeg;base64, <?= base64_encode($car['photo']) ?>" alt="" width="150px">
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
                                    <h4 class="card-title">Настройка видео слайдера кардиологии</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th class="text-center">
                                                    Видео
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-right">

                                                </th>
                                            </thead>
                                            <tbody>
                                                <form action="views/send_cardio_video.php" method=POST enctype="multipart/form-data">

                                                    <td>
                                                        <input class="form-control" type="file" name="video" value="">
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
                                                <? foreach ($videos as $video) : ?>
                                                    <tr>
                                                        <form action="views/send_cardio_video.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="number" name="id" value="<?= $video['id'] ?>">
                                                            </td>
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="text" name="name" value="<?= $video['name'] ?>">
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="video" value="">
                                                                <? if (mb_strlen($video['name']) > 0) : ?>
                                                                    <video  loop='loop' controls="controls" width="200px" >
                                                                        <? if(explode('.', $video['name'])[1]=='mp4'): ?>
                                                                            <source src="../static/video/<?=$video['name']?>" type="video/mp4">
                                                                        <? elseif(explode('.', $video['name'])[1]=='ogv'): ?>
                                                                            <source src="../static/video/<?=$video['name']?>" type='video/ogg; codecs="theora, vorbis"'>
                                                                        <? elseif(explode('.', $video['name'])[1]=='webm'): ?>
                                                                            <source src="../static/video/<?=$video['name']?>" type='video/webm; codecs="vp8, vorbis"'>
                                                                        <? endif; ?>
                                                                    </video>        
                                                                <? else : ?>
                                                                    <p>Нет видео</p>
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