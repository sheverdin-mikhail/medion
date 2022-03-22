<? $slug = 'news' ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/news_view.php';
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
                <li class="search__navigation_item">
                    <p>Новости</p>
                </li>
            </ul>
            <h2 class="search__header">
                Новости клиники Medion
            </h2>

        </div>
    </div>
    <!-- конец блока -->


    <div class="news">
        <div class="container">
            <div class="news__content">
                <div class="news__row">
                    <form method="GET" class="news__form">
                        <input type="number" required min="0" class="news__input news__form-item" name="month" placeholder="Месяц">
                        <input type="number" required min="1" class="news__input news__form-item" name="year" placeholder="Год">
                        <button type="submit" class="news__button news__button-search news__form-item">Искать</button>
                    </form>
                    <? require_once 'views/news_find.php'; ?>
                </div>
                <div class="news__row">
                    <? if (!empty($news)) : ?>
                        <? foreach ($news as $new) : ?>
                            <? if ($new['news_cat'] == 1) : ?>
                                <div class="news__card news__card_news" data-link='<?= $new['id_news'] ?>'>
                                    <div class="news__block news__block-img">
                                        <img src="data:image/jpeg;base64, <?= base64_encode($new['news_photo']) ?>" alt="" class="news__img">
                                    </div>
                                    <div class="news__block news__block-content">
                                        <h3 class="news__title"><?= $new['news_name'] ?></h3>
                                        <p class="news__date"><?= $new['news_date'] ?></p>
                                        <p class="news__text"><? if (strlen($new['news_short']) < 200) : ?><?= $new['news_short'] ?><? else :
                                                                                                                                    $string = substr($new['news_short'], 0, 200);
                                                                                                                                    $string = rtrim($string, "!,.-");
                                                                                                                                    $string = substr($string, 0, strrpos($string, ' '));
                                                                                                                                    echo $string . "… ";
                                                                                                                                endif;
                                                                                                                                    ?></p>
                                        <a href="#" class="news__more"><span>Подробнее </span></a>
                                    </div>
                                </div>
                            <? endif; ?>
                        <? endforeach; ?>
                    <? else : ?>
                        Новостей не найдено <br>
                        <a class="news__button " href="/news.php">Сбросить результаты поиска</a>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Блок footer -->
<div class="footer">
<div class="container">
                <div class="footer__footer">
                        <div class="footer__row ">
                                <div class="footer__column">
                                        <img src="data:image/svg+xml;utf8;base64, <?= base64_encode($footer['logo']) ?>" alt="" class="footer__logo">

                                        <!-- <div class="language-menu _pc">
                                <div class="language-menu__on">
                                    <span class="language-menu__header">Рус</span>
                                </div>
                                <div class="language-menu__items hide">
                                    <div class="language-menu__item"><span class="language-menu__item_span language-menu__item_span_RU">Рус</span></div>
                                    <div class="language-menu__item"><span class="language-menu__item_span language-menu__item_span_UK">Eng</span></div>
                                </div>
                            </div> -->

                                </div>
                                <div class="footer__column">
                                        <?if(trim($footer['main_page'])!=""):?><a href="/" class="footer__links"><?=$footer['main_page']?></a><?endif;?>
                                        <?if(trim($footer['doctors'])!=""):?><a href="/doctors.php" class="footer__links"><?=$footer['doctors']?></a><?endif;?>
                                        <?if(trim($footer['cardio'])!=""):?><a href="/cardio.php" class="footer__links"><?=$footer['cardio']?></a><?endif;?>
                                        <?if(trim($footer['services'])!=""):?><a href="/services.php" class="footer__links"><?=$footer['services']?></a><?endif;?>
                                        <?if(trim($footer['departament'])!=""):?><a href="/medicin.php" class="footer__links"><?=$footer['departament']?></a><?endif;?>
                                        <?if(trim($footer['spa'])!=""):?><a href="/SPA.php" class="footer__links"><?=$footer['spa']?></a><?endif;?>
                                </div>
                                <div class="footer__column">
                                        <?if(trim($footer['stocks'])!=""):?><a href="/stocks.php" class="footer__links"><?=$footer['stocks']?></a><?endif;?>
                                        <?if(trim($footer['news'])!=""):?><a href="/news.php" class="footer__links"><?=$footer['news']?></a><?endif;?>
                                        <?if(trim($footer['career'])!=""):?><a href="/career.php" class="footer__links"><?=$footer['career']?></a><?endif;?>
                                        <!-- <a href="" class="footer__links">Технологии</a> -->
                                        <?if(trim($footer['contacts'])!=""):?><a href="/contacts.php#clinics" class="footer__links"><?=$footer['contacts']?></a><?endif;?>
                                </div>
                                <div class="footer__column">
                                        <!-- <div class="footer__info">
                                <div class="footer__label">График работы:</div>
                                <div class="footer__text">Пн - Сб: <br>
                                    8:00 - 17:00</div>
                            </div> -->
                            <div class="footer__info">
                                                <div class="footer__label">Адреса центра:</div>
                                                <div class="footer__text footer__text_address">
                                                <? foreach($clinics as $clinic): ?>
                                                        <a target="_blank" href="<?=$clinic['map']?>">
                                                                <?=$clinic['name_clinics']?> <br>
                                                                <?=$clinic['address_clinics']?> <br><br>
                                                        </a>
                                                <? endforeach; ?>
                                                </div>
                                        </div>
                                </div>
                                <div class="footer__column">
                                        <div class="footer__info">
                                                <div class="footer__label">Телефоны центра:</div>
                                                <div class="footer__text footer__text_numbers">
                                                        <a href="tel:1223" class="footer__phone">Call-center <?=$footer['phone']?></a>
                                                </div>
                                        </div>
                                        <div class="footer__info">
                                                <div class="footer__label">E-mail:</div>
                                                <a href="mailto:info@medion.uz" class="footer__text footer__text_email"><?=$footer['email']?></a>
                                        </div>
                                </div>
                        </div>
                        <div class="footer__row">
                                <div class="footer__column footer__column_link">
                                        <a href="/static/politic.pdf" target="_blank" class="footer__links">Политика конфиденциальности</a>
                                </div>
                                <div class="footer__column footer__column_copyright">
                                        <p class="footer__copyright"><?=$footer['copyright']?></p>
                                </div>
                                <div class="footer__column footer__column_social">
                                        <?if(trim($footer['facebook'])!=""):?><a href="<?=$footer['facebook']?>" class="footer__social footer__social_facebook"></a><?endif;?>
                                        <?if(trim($footer['telegram'])!=""):?><a href="<?=$footer['telegram']?>" class="footer__social footer__social_telegramm"></a><?endif;?>
                                        <?if(trim($footer['instagram'])!=""):?><a href="<?=$footer['instagram']?>" class="footer__social footer__social_instagramm"></a><?endif;?>
                                </div>
                        </div>
                </div>
        </div>
</div>
<!-- Конец блока -->
</div>

<!-- Подключение jquery -->
<script src="static/js/jquery.js"></script>
<script src="static/js/language-menu.js"></script>
<!-- Подключние seiper slider -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Настройки слайдера -->
<script src="static/js/slider.js"></script>

<script src="static/js/script.js"></script>

<script src="static/js/search.js"></script>
<script src="static/js/popup.js"></script>

</body>

</html>