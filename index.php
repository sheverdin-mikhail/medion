<? $slug = 'main_page' ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/seo_view.php';
?>
<? include "templates/header.php" ?>
<? require_once 'views/footer_view.php' ?>



<?php
require_once 'views/index_view.php';
?>


<!-- Блок с основным контентом страницы -->
<div class="page">

        <!-- Блок с поиском -->
        <div class="search" style="background: url('static/img/search-bg (2).jpg') no-repeat; background-size: cover; background-position: 50% 50%; ">
                <style>
                        @media screen and (min-width: 319px) and (max-width: 990px) {
                                .search {
                                        background: url('static/img/main_page_bg_mob.jpg') center no-repeat !important;
                                        background-size: cover !important;
                                        padding: 0;
                                }
                        }
                </style>
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

                        <div class="search__slider swiper-container">
                                <div class="swiper-wrapper">
                                        <? foreach ($main_slider as $slide) : ?>
                                                <div class="swiper-slide">
                                                        <div class="search__content">
                                                                <div class="search__content_block">
                                                                        <h2 class="search__title"><?= $slide['header_slider'] ?></h2>
                                                                        <? if (isset($slide['description_slider']) && $slide['description_slider'] != "") : ?><p class="search__subtitle"><?= $slide['description_slider'] ?></p><? endif; ?>
                                                                        <? if (isset($slide['button_slider']) && $slide['button_slider'] != "") : ?><a href="<?= $slide['button_link'] ?>" class="search__button search__slider__button"><?= $slide['button_slider'] ?></a><? endif; ?>
                                                                </div>
                                                                <div class="search__content_block">
                                                                        <img src="static/img/main_slider/<?= $slide['photo'] ?>" alt="" class="search__img">
                                                                </div>
                                                        </div>
                                                </div>
                                        <? endforeach; ?>
                                </div>
                                <!-- <div class="swiper-button swiper-button-prev"></div>
                                <div class="swiper-button swiper-button-next"></div> -->
                                <div class="swiper-pagination search__pagination "></div>

                        </div>
                </div>
        </div>
        <!-- конец блока -->

        <!-- Блок о нас -->
        <div class="about">
                <div class="container">
                        <div class="about__content">
                                <div class="about__block about__block_left">
                                        <h2 class="about__header _header"><?= $about_info['header'] ?></h2>
                                        <div class="about__text">
                                                <?= $about_info['description'] ?>
                                        </div>
                                        <a id="popup" href="#popup" class="about__sendbtn _pc popup-link"><span class="">Отправить заявку</span></a>
                                </div>
                                <div class="about__block">
                                        <div class="about__slider swiper-container">
                                                <div class="swiper-wrapper">
                                                        <? foreach ($about_photo as $photo) : ?>
                                                                <div class="swiper-slide about__slide">
                                                                        <img src="static/img/about_slider/<?= $photo['photo'] ?>" alt="">
                                                                </div>
                                                        <? endforeach; ?>
                                                </div>
                                                <div class="swiper-button swiper-button-prev about__navigation"></div>
                                                <div class="swiper-button swiper-button-next about__navigation"></div>
                                                <div class="swiper-pagination about__pagination"></div>
                                        </div>
                                        <a id="popup" href="#popup" class="about__sendbtn popup-link _mobile"><span>Отправить заявку</span></a>
                                </div>
                        </div>
                </div>
        </div>
        <!-- конец блока -->

        <!-- Блок почему выбирают нас -->
        <div class="why">
                <div class="container">
                        <h2 class="why__header _header">
                                Почему выбирают нас?
                        </h2>
                        <div class="why__block">
                                <div class="why__item">
                                        <div class="why__imageBox">
                                                <img src="static/img/hands.svg" alt="" class="why__image">
                                        </div>
                                        <p class="why__text">Индивидуальный подход к каждому пациенту</p>

                                </div>
                                <div class="why__item">
                                        <div class="why__imageBox">
                                                <img src="static/img/family.svg" alt="" class="why__image">
                                        </div>
                                        <p class="why__text">Программы для всей семьи</p>

                                </div>
                                <div class="why__item">
                                        <div class="why__imageBox">
                                                <img src="static/img/pin2.svg" alt="" class="why__image">
                                        </div>
                                        <p class="why__text">Удобное расположение клиники</p>

                                </div>
                                <div class="why__item">
                                        <div class="why__imageBox">
                                                <img src="static/img/calendar.svg" alt="" class="why__image">
                                        </div>
                                        <p class="why__text">Работа центра без выходных</p>

                                </div>
                        </div>
                </div>

        </div>
        <!-- конец блока -->



        <!-- Блок с направлениями центра -->
        <div class="directions">
                <div class="container">
                        <div class="directions__content">
                                <h2 class="directions__header _header">
                                        Направления медицинского центра
                                </h2>
                                <ol class="directions__block card__container">
                                        <?php foreach ($divisions as $division) : ?>
                                                <li class="directions__card card">
                                                        <a href="/services.php?division_slug=<?= $division['slug'] ?>#<?= $division['slug'] ?>">
                                                                <p class="_icon-<?= $division['icon'] ?> directions__icon card__icon">
                                                                        <h3 class="card__title"><?= $division['name'] ?></h3>
                                                                        <!-- <p class="card__text"><?= $division['description'] ?></p> -->
                                                                        <a href="/services.php?division_slug=<?= $division['slug'] ?>" class="card__more">Подробнее</a>
                                                        </a>
                                                </li>
                                        <?php endforeach; ?>

                                </ol>
                        </div>
                </div>
        </div>
        <!-- конец блока -->
</div>
<!-- КОнец блока -->


<!-- Блок footer -->
<div class="footer">
        <div class="footer__map map">
                <div id="map" style="width: 100%; height: 100%"></div>
        </div>
        <!-- Блок акции, новости... -->
        <div class="stocks">
                <div class="container">
                        <div class="stocks__row">
                                <h2 class="stocks__header">
                                        Последние новости
                                </h2>
                                <!-- <a href="" class="stocks__button _pc">Читать все статьи</a> -->
                        </div>
                        <div class="stocks__slider swiper-container">
                                <div class="stocks__wrapper">
                                        <? foreach ($news as $new) : ?>
                                                <div class="stocks-slide">
                                                        <div class="stocks__slide">
                                                                <img src="data:image/jpeg;base64, <?= base64_encode($new['news_photo']) ?>" alt="" class="stocks__img">
                                                                <span class="stocks__date"><?= $new['news_date'] ?></span>
                                                                <p class="stocks__text"><?= $new['news_name'] ?></p>
                                                                <a href="/news_new.php?id=<?= $new['id_news'] ?>" class="stocks__button">Читать подробнее</a>
                                                        </div>
                                                </div>
                                        <? endforeach; ?>
                                </div>
                                <div class="swiper-pagination stocks__pagination"></div>
                        </div>
                        <div class="stocks__row">
                                <a href="/news.php" class="stocks__button stocks__all"><span>Читать подробнее</span></a>
                        </div>
                </div>
        </div>
        <!-- Конец блока -->

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