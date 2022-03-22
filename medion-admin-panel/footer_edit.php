<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/footer_view.php';
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
                                    <h4 class="card-title"> Настройка вида ссылок</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название ссылки подвала
                                                </th>
                                                <th>
                                                    Страница
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['main_page'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="main_page"></input>
                                                                <p>Главная</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['doctors'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="doctors"></input>
                                                                <p>Доктора</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['cardio'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="cardio"></input>
                                                                <p>Кардиология</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">

                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['services'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="services"></input>
                                                                <p>Услуги</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['departament'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="departament"></input>
                                                                <p>Департамент эстетической медицины</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['spa'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="spa"></input>
                                                                <p>СПА-Комплекс</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['stocks'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="stocks"></input>
                                                                <p>Акции</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['news'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="news"></input>
                                                                <p>Новости</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['career'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="career"></input>
                                                                <p>Карьера</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Сохранить</button>
                                                            </td>
                                                        </form>

                                                    </tr>
                                                    <tr>
                                                        <form action="views/send_footer_links.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name" value="<?= $footer['contacts'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden"  name="page" value="contacts"></input>
                                                                <p>Контакты</p>
                                                            </td>
                                                            <td class="text-center">
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
                                    <h4 class="card-title"> Настройка соцсетей</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Facebook
                                                </th>
                                                <th>
                                                    Telegram
                                                </th>
                                                <th>
                                                    Instagram
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <form action="views/send_footer_social.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="facebook" value="<?= $footer['facebook'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="telegram" value="<?= $footer['telegram'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="instagram" value="<?= $footer['instagram'] ?>">
                                                            </td>
                                                            <td class="text-center">
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
                                    <h4 class="card-title"> Настройка копирайта, телефона, почты</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Копирайт
                                                </th>
                                                <th>
                                                    Телефон
                                                </th>
                                                <th>
                                                    Почта
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <form action="views/send_footer_copyright.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="copyright" value="<?= $footer['copyright'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="phone" value="<?= $footer['phone'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="email" value="<?= $footer['email'] ?>">
                                                            </td>
                                                            <td class="text-center">
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
                                    <h4 class="card-title"> Настройка логотипа подвала(формат svg)</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Файл
                                                </th>
                                                <th class="text-center">
                                                    Логотип
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <form action="views/send_footer_logo.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="file" name="logo">
                                                            </td>
                                                            <td class="from-group text-center">
                                                                <img  src="data:image/svg+xml;utf8;base64, <?= base64_encode($footer['logo']) ?>" alt="">
                                                            </td>
                                                            <td class="text-center">
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
                                    <h4 class="card-title"> Настройка политики конфиденциальности</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Файл
                                                </th>
                                                <th class="text-center">
                                                    Политика
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <form action="views/send_footer_politic.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="file" name="politic">
                                                            </td>
                                                            <td class="from-group text-center">
                                                                <a target="_blank" href="/static/politic.pdf">Политика конфиденциальности</a>
                                                            </td>
                                                            <td class="text-center">
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