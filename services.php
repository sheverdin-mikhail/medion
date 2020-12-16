<? include "templates/header.php" ?>




<!-- Блок с основным контентом страницы -->
<div class="page">
        
        <!-- Блок с поиском -->
        <div class="search">
                <div class="container">
                        <form action="" class="search__search">
                                <input type="text" class="search__input" placeholder="Что-то ищете? Воспользуйтесь поиском по сайту...">
                                <input type="submit" class="search__button" value="Поиск">
                        </form>
                        <ul class="search__navigation">
                                <li class="search__navigation_item"><a href="/index.php">Главная</a></li>
                                <li class="search__navigation_item">Услуги</li>
                        </ul>
                        <h2 class="search__header">
                                Ознакомьтесь с перечнем доступных услуги клиники
                        </h2>
                </div>
        </div>
        <!-- конец блока -->

        <div class="services">
                <div class="services__blueBlock"></div>
               <div class="container">
                        <div class="services__content">
                                <ul class="services__menu">
                                        <li class="services__menu__item">
                                                <img src="static/img/broken-bone.svg" alt="" class="services__menu__item_img">
                                                <span class="sevices__menu__item_text">Травматолог</span>
                                        </li>
                                        <li class="services__menu__item">
                                                <img src="static/img/broken-bone.svg" alt="" class="services__menu__item_img">
                                                <span class="sevices__menu__item_text">Травматолог</span>
                                        </li>
                                        <li class="services__menu__item">
                                                <img src="static/img/broken-bone.svg" alt="" class="services__menu__item_img">
                                                <span class="sevices__menu__item_text">Травматолог</span>
                                        </li>
                                        <li class="services__menu__item">
                                                <img src="static/img/broken-bone.svg" alt="" class="services__menu__item_img">
                                                <span class="sevices__menu__item_text">Травматолог</span>
                                        </li>
                                </ul>

                                <ol class="services__list">
                                        <li class="services__item">
                                                <img src="" alt="" class="services__item_img">
                                                <div class="services__item_title">
                                                        <span>Услуги</span>
                                                        Травматолог
                                                </div>
                                                <ul class="services__sublist">
                                                        <li class="services__sublist_item">
                                                                <p class="services__item_text">Лечение мигрени</p>
                                                                <hr>
                                                                <span class="services__more">подробнее</span>
                                                                <span class="services__price">от 1000р.</span>
                                                        </li>
                                                        <li class="services__sublist_item">
                                                                <p class="services__item_text">Лечение мигрени</p>
                                                                <hr>
                                                                <span class="services__more">подробнее</span>
                                                                <span class="services__price">от 1000р.</span>
                                                        </li>
                                                </ul>
                                        </li>
                                </ol>
                        </div>
               </div>
        </div>

</div>
<!-- КОнец блока -->



<? include "templates/footer.php" ?>