<? $slug = 'spa' ?>
<?  $id_page = 2; ?>
<?php 
        require_once 'include/db.php';
?>

<?php 
        require_once 'views/seo_view.php';
?>
<? include "templates/header.php" ?>
<? $header = GetHeadersView($link, $id_page);
    $header = $header[0];
?>
<?php
require_once 'views/spa_view.php';
?>
<!-- Блок с основным контентом страницы -->
<div class="page">


    <!-- Блок с поиском -->
    <div class="search">
        <div class="container">
            <form action="" class="search__search">
                <div class="search__block">
                    <input autocomplete="off" id="q" name="q" type="text" class="search__input" placeholder="Поиск услуг">
                    <input type="submit" class="search__button" value="Поиск">
                </div>
                <div class="search__block">
                    <ul class="search__list" id="search_list">

                    </ul>
                </div>
            </form>
            <ul class="search__navigation">
                <li class="search__navigation_item"><a href="/index.php">Главная</a></li>
                <li class="search__navigation_item">СПА комплекс</li>
            </ul>
                        <h2 class="search__header">
                <?=$header['header_text']?>
            </h2>
            <h3 class="search__subheader">
                <?=$header['header_description']?>
            </h3>
        </div>
    </div>
    <!-- конец блока -->

    <div class="spa">
        <div class="container">
            <div class="spa__content">
                <h2 class="spa__title">Мы предоставляем процедуры: </h2>
                <div class="spa__navigation">
                    <?php foreach ($category as $cat) : ?>
                        <a class="spa__navigation_object _icon-<?= $cat['icon_category'] ?> " data-filter="<?= $cat['name_category'] ?>" href="#cards">
                            <span class="spa__label"><?= $cat['description_category'] ?></span>
                            <span class="spa__name"><?= $cat['name_category'] ?></span>
                        </a>
                    <?php endforeach; ?>
                    <div class="spa__navigation_object active" data-filter="all">
                        <span class="spa__label">Услуг: <?= count($procedures) ?></span>
                        <span class="spa__name">Показать все услуги</span>
                    </div>
                </div>
                <ol class="spa__list card__container" id="cards">
                    <?php foreach ($procedures as $procedure) : ?>
                        <li class="card" data-cat="<?= $procedure['category'] ?>">
                            <a href="/spa-procedure.php?id=<?= $procedure["id_spa-procedure"] ?>">
                                <p class="card__icon _icon-<?= $procedure['icon'] ?>"></p>
                                <h3 class="card__title"><?= $procedure['name_spa-procedure'] ?></h3>
                                <p class="card__text"><?= $procedure['description_spa-procedure'] . " " . $procedure['quantity_spa-procedure'] ?></p>
                                <a href="/spa-procedure.php?id=<?= $procedure["id_spa-procedure"] ?>" class="card__more">Подробнее об услуге</a>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>






    <!-- КОнец блока -->

    <? include "templates/modal.php" ?>

    <? include "templates/footer.php" ?>