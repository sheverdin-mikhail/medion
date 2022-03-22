<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/stocks_view.php';
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
                                    <h4 class="card-title"> Настройка главного новостей</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Заголовок акции
                                                </th>
                                                <th>
                                                    Полный текст акции
                                                </th>
                                                <th class="text-center">
                                                    Краткое описание
                                                </th>
                                                <th class="text-center">
                                                    Адрес проведения
                                                </th>
                                                <th class="text-center">
                                                    Правила проведения
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
                                                <form action="views/send_stocks.php" method=POST enctype="multipart/form-data">
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="news_name" value="">
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="news_description"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="news_short"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="news_address"></textarea>
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="news_rules"></textarea>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="file" name="news_photo" value="">
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
                                                <? foreach ($news as $new) : ?>
                                                    <tr>
                                                        <form action="views/send_stocks.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="number" name="id_news" value="<?= $new['id_news'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="news_name" value="<?= $new['news_name'] ?>">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="news_description"><?= $new['news_description'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="news_short"><?= $new['news_short'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="news_address"><?= $new['news_address'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="news_rules"><?= $new['news_rules'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="file" name="news_photo" value="">
                                                                <? if (mb_strlen($new['news_photo']) > 0) : ?>
                                                                    <img src="data:image/jpeg;base64, <?= base64_encode($new['news_photo']) ?>" alt="" width="150px">
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