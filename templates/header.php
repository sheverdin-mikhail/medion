<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $word['seo_title'] ?> </title>

    <meta name="description" content="<?= $word['seo_description'] ?>">

    <meta name="keywords" content="<?= $word['seo_keys'] ?>">

    <!-- Обнуление стилей -->
    <link rel="stylesheet" href="static/style/css/normalize.css">

    <!-- Подключение swiper slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <!-- Основные стили -->
    <link rel="stylesheet" href="static/style/css/iconsfont.css">
    <link rel="stylesheet" href="static/style/css/style.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZHZBDL');</script>
    <!-- End Google Tag Manager -->

    <!-- favicon settings -->


    <link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/static/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/static/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/static/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/static/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-218823539-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-218823539-2');
    </script>

    <!-- Инициализация яндекс.карты -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-210007706-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-210007706-1');
    </script>


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZHZBDL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <? require_once 'views/headers_view.php' ?>
    <? require_once 'views/footer_view.php' ?>
    <div class="wrapper">
        <?php
        require_once 'include/popup.php';
        ?>
        <!--БЛОК Header-->
        <div class="header">
            <div class="container">
                <div class="header__row">

                    <div class="header__logo">
                        <img src="static/img/medion_logo.png" alt="">
                    </div>
                    <!-- <div class="language-menu">
                        <div class="language-menu__on">
                            <span class="language-menu__header">Рус</span>
                        </div>
                        <div class="language-menu__items hide">
                            <div class="language-menu__item"><span class="language-menu__item_span language-menu__item_span_RU">Рус</span></div>
                            <div class="language-menu__item"><span class="language-menu__item_span language-menu__item_span_UK">Eng</span></div>
                        </div>
                    </div> -->

                    <div class="menu__burger _mobile">
                        <span></span>
                    </div>


                    <div class="header__address">
                        <span class="header__label">
                            Наши адреса
                        </span>
                        <div class="header__addresses">
                        <p class="header__text">
                        <? foreach($clinics as $clinic): ?>
                                <a target="_blank" href="<?=$clinic['map']?>">
                                        <?=$clinic['name_clinics']?> <br>
                                        <?=$clinic['address_clinics']?> <br><br>
                                </a>
                        <? endforeach; ?>
                        </p>
                        </div>
                    </div>
                    <!-- <div class="header__schedule">
                        <span class="header__label">
                            График работы:
                        </span>
                        <p class="header__text">
                            Пн - Сб: 8<sup>00</sup> - 17<sup>00</sup>
                        </p>
                    </div> -->
                    <a href="tel:1223" class="header__button">
                        <span class="header__button_text _icon-communications">
                            Позвонить нам
                        </span>
                    </a>
                </div>
            </div>
            <nav class="header__navigate">
                <div class="container">
                    <ul class="header__menu ">
                        <li>
                            <a href="/index.php" class="header__menu__item">
                                Главная
                            </a>
                        </li>
                        <li><a href="/doctors.php" class="header__menu__item">
                                Врачи
                            </a></li>
                        <li><a href="/services.php" class="header__menu__item">
                                Услуги
                            </a></li>
                        <li>
                            <a href="/cardio.php" class="header__menu__item">
                                Кардиология
                            </a>
                        </li>
                        </li>

                        <li><a href="/medicin.php" class="header__menu__item">
                                Департамент эстетической медицины
                            </a></li>

                        <li><a href="/SPA.php" class="header__menu__item">
                                СПА Комплекс
                            </a></li>
                        <li><a href="/stocks.php" class="header__menu__item">
                                Акции
                            </a></li>
                        <li>
                            <a href="/news.php" class="header__menu__item _pc">
                                О компании
                            </a></li>
                        <li>
                        <li>
                            <a href="/news.php" class="header__menu__item _mobile">
                                Новости
                            </a></li>
                        <li>
                        <li>
                            <a href="/career.php" class="header__menu__item _mobile">
                                Карьера
                            </a></li>
                        <li>
                        <li>
                            <a href="/contacts.php" class="header__menu__item _mobile">
                                Контакты
                            </a></li>
                        <li>
                        <!-- <li><a href="/contacts.php#clinics" class="header__menu__item">
                                Контакты
                            </a></li>
                        <li> -->
                            <div class="header__address _mobile">
                                <span class="header__label ">
                                    Наши адреса:
                                </span>
                                <p class="header__text">
                                <? foreach($clinics as $clinic): ?>
                                        <a target="_blank" href="<?=$clinic['map']?>">
                                                <?=$clinic['name_clinics']?> <br>
                                                <?=$clinic['address_clinics']?> <br><br>
                                        </a>
                                <? endforeach; ?>
                                </p>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="header__schedule _mobile">
                                <span class="header__label">
                                    График работы:
                                </span>
                                <p class="header__text">
                                    Пн - Сб: 8<sup>00</sup> - 17<sup>00</sup>
                                </p>
                            </div>
                        </li> -->
                        <li>
                            <a href="tel:1223" class="header__button _mobile">
                                <span class="header__button_text _icon-communications">
                                    Позвонить нам
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
        <!--Конец блока-->