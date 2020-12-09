<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Обнуление стилей -->
    <link rel="stylesheet" href="static/style/css/normalize.css">
    <!-- Основные стили -->
    <link rel="stylesheet" href="static/style/css/style.css">

    <!-- Подключение Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


</head>
<body>
    
    <div class="wrapper">
        <!--БЛОК Header-->
        <div class="header">
            <div class="container">
                <div class="header__row">
                    
                        <div class="header__logo">
                            <img src="static/img/medion_logo.jpg" alt="">
                        </div>
                        <ul class="language-menu language-menu_header">
                            <div class="language-menu__on" @click="show_list"><span>Рус</span></div>
                            <li class="language-menu__item hide" :class="{ hide : active }">Рус</li>
                            <li class="language-menu__item">Eng</li>
                        </ul>
                        <div class="header__address">
                            <span class="header__label">
                                Наш адрес:
                            </span>
                            <p class="header__text">
                                г.Ташкент, ул.Зульфияхонум 18
                            </p>
                        </div>
                        <div class="header__schedule">
                            <span class="header__label">
                                График работы:
                            </span>
                            <p class="header__text">
                                Пн - Сб:  8<sup>00</sup> - 17<sup>00</sup>
                            </p>
                        </div>
                        <a href="#" class="header__button">
                            <span class="header__button_text">
                                Позвонить нам 
                            </span>
                        </a>
                    </div>
                </div>
                <nav class="header__navigate">
                    <div class="container">
                        <ul class="header__menu menu">
                            <li><a href="/index.php" class="menu__item">
                                Главная
                            </a></li>
                            <li class="menu__item submenu">
                                <ul class="">
                                    <span class="submenu__header">Клиника</span>
                                    <li class="submenu__item"></li>
                                </ul>
                            </li>
                            <li><a href="/services.php" class="menu__item">
                                Услуги
                            </a></li>
                            <li><a href="" class="menu__item">
                                Департамент эстетической медицины 
                            </a></li>
                            <li><a href="" class="menu__item">
                                Врачи
                            </a></li>
                            <li><a href="" class="menu__item">
                                СПА Комплекс
                            </a></li>
                            <li><a href="" class="menu__item">
                                Технологии 
                            </a></li>
                            <li><a href="" class="menu__item">
                                Контакты 
                            </a></li>
                        </ul>
                    </div>
                </nav>
           
        </div>
        <!--Конец блока-->

        

