<? $slug = 'news' ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/career_view.php';
?>
<? include "templates/header.php" ?>


<?php
$slug = $_GET['slug'];
?>

<!-- Блок с основным контентом страницы -->

<div class="page">

    <!-- Блок с поиском -->
    <div class="search">
        <? require_once 'templates/about_navigation.php' ?>
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
                <li class="search__navigation_item" style="border-right: 1px solid #ADBAC9;"><a href="/contacts.php">О компании</a></li>
                <li class="search__navigation_item">
                    <p>Карьера</p>
                </li>
            </ul>
            <h2 class="search__header">
                Карьера
            </h2>
        </div>
    </div>
    <!-- конец блока -->

    <!-- Основной блок -->
    <div class="career">
        <div class="container">
            <div class="career__content">
                <div class="career__info">
                    <p class="career__info_text">
                        <?=$career['text']?>
                    </p>
                    <p class="career__info_contacts">
                        Контакты для связи: <br>
                        телефон: <b><?=$career['phone']?></b><br>
                        e-mail: <b><?=$career['email']?></b>
                    </p>
                </div>
                <ul class="career__list">
                    <? foreach($vacancy as $vac): ?>
                        <li class="career__item">
                        <div class="career__item_close">
                            <p class="career__item_name"><?= $vac['name'] ?></p>
                            <p class="career__item_more"><span>Подробнее</span></p>
                        </div>
                        <div class="career__item_open">
                                <div class="career__item_row">
                                    <h3 class="career__item_title">Требования:</h3>
                                    <p class="career__item_description"><?= $vac['requirements'] ?>
                                </p>
                                </div>
                                <div class="career__item_row">
                                    <h3 class="career__item_title">Обязанности:</h3>
                                    <p class="career__item_description"><?= $vac['responsibilities'] ?></p>
                                </div>
                                <div class="career__item_row">
                                    <h3 class="career__item_title">Условия:</h3>
                                    <p class="career__item_description">
                                    <?= $vac['conditions'] ?>
                                    </p>
                                </div>
                                <div class="career__item_row">
                                    <a href="tel:<?= $career['vacancy_phone'] ?>" class="career__item_button "><span class="_icon-communications">Позвонить нам</span></a>
                                    <a href="https://tlgg.ru/@<?=$career['telegram'] ?>" class="career__item_button "><span class="_icon-telegramm">Telegram</span></a>
                                </div>
                        </div>
                    </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Конец блока-->

<? include "templates/footer.php" ?>