<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medion</title>

    <!-- Обнуление стилей -->
    <link rel="stylesheet" href="static/style/css/normalize.css">

    <!-- Подключение swiper slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <!-- Основные стили -->
    <link rel="stylesheet" href="static/style/css/iconsfont.css">
    <link rel="stylesheet" href="static/style/css/style.css">



    <!-- Инициализация яндекс.карты -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>




</head>

<body>

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
                            Medion Clinic, Aesthetic & SPA <br>
                            Шайхантахурский район, ул. Зульфияханум 18 <br><br>
                            Medion Innovation  <br>
                            Шайхантахурский район, ул. Абдуллы Кадыри, 39  <br><br>
                            Medion Family Hospital <br>
                            Шайхантахурский район, ул. Истирохат 258  <br><br>
                        </p>
                        </div>
                    </div>
                    <div class="header__schedule">
                        <span class="header__label">
                            График работы:
                        </span>
                        <p class="header__text">
                            Пн - Сб: 8<sup>00</sup> - 17<sup>00</sup>
                        </p>
                    </div>
                    <a  href="tel:1223" class="header__button">
                        <span class="header__button_text _icon-communications">
                            Позвонить нам
                        </span>
                    </a>
                </div>
            </div>
            <nav class="header__navigate">
                <div class="container">
                    <ul class="header__menu ">
                        <li > 
                            <a href="/index.php" class="header__menu__item">
                                Главная
                            </a>
                        </li>
                        <li >
                            <a href="/clinics.php" class="header__menu__item">
                                Клиники
                            </a>
                        </li>
                        </li>
                        <li><a href="/services.php" class="header__menu__item">
                                Услуги
                            </a></li>
                        <li><a href="/medicin.php" class="header__menu__item">
                                Департамент эстетической медицины
                            </a></li>
                        <li><a href="/doctors.php" class="header__menu__item">
                                Врачи
                            </a></li>
                        <li><a href="/SPA.php" class="header__menu__item">
                                СПА Комплекс
                            </a></li>
                        <!-- <li><a href="/clinics.php" class="header__menu__item">
                                Технологии
                            </a></li> -->
                        <li><a href="/contacts.php#clinics" class="header__menu__item">
                                Контакты
                            </a></li>
                        <li>
                            <div class="header__address _mobile">
                                <span class="header__label ">
                                    Наши адреса:
                                </span>
                                <p class="header__text">
                                MEDION CLINIC, AESTHETIC & SPA <br>
                                Шайхантахурский район, ул. Зульфияханум 18 <br><br>
                                MEDION INNOVATION  <br>
                                Шайхантахурский район, ул. Абдулла Кодирий 39  <br><br>
                                MEDION FAMILY HOSPITAL <br>
                                Шайхантахурский район, ул. Истирохат 258  <br><br>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="header__schedule _mobile">
                                <span class="header__label">
                                    График работы:
                                </span>
                                <p class="header__text">
                                    Пн - Сб: 8<sup>00</sup> - 17<sup>00</sup>
                                </p>
                            </div>
                        </li>
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