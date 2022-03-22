<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/seo_view.php';
?>
<?php
$words = SeoWordsView($link);
$pages = PagesView($link);
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
                                    <h4 class="card-title"> Настройка SEO</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Ключевые слова страницы
                                                </th>
                                                <th>
                                                    Заголовок страницы
                                                </th>
                                                <th>
                                                    Краткое описание страницы
                                                </th>
                                                <th class="text-center">
                                                    Страница
                                                </th>
                                                <th class="text-right">
                                                    Действие
                                                </th>
                                            </thead>
                                            <tbody>
                                                <? foreach ($words as $word) : ?>
                                                    <tr>
                                                        <form action="views/send_seo.php" method=POST>
                                                            <td class="from-group" style="display: none;">
                                                                <input style="display" class="form-control" type="number" name="id_words" value="<?= $word['id_words'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="seo_keys" value="<?= $word['seo_keys'] ?>">
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="seo_title"><?= $word['seo_title'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea class="form-control" type="text" name="seo_description"><?= $word['seo_description'] ?></textarea>
                                                            </td>
                                                            <td>
                                                                <p class='text-center'>
                                                                    <? foreach ($pages as $page) : ?>
                                                                        <? if ($page['id_page'] == $word['id_page']) : ?>
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