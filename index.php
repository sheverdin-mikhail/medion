<? include "templates/header.php" ?>

<?php 
        require_once 'include/db.php';
?>

<?php 
        require_once 'views/index_view.php';
?>


<!-- Блок с основным контентом страницы -->
<div class="page">
        <!-- Блок с поиском -->
        <div class="search" style="background: url('static/img/search-bg.jpg') center no-repeat; background-size: cover; ">
                <style>
                        @media screen and ( min-width: 319px ) and ( max-width: 990px){
                                .search{
                                        background: url('static/img/main_page_bg_mob.jpg') center no-repeat !important; 
                                        background-size: cover !important; 
                                }
                        }
                </style>
                <div class="container">
                        <form action="" class="search__search">
                                <div class="search__block">
                                <input  autocomplete="off" id="q" name="q" type="text" class="search__input" placeholder="Поиск по сайту">
                                <input type="submit" class="search__button" value="Поиск">
                                </div>
                                <div class="search__block">
                                <ul class="search__list" id="search_list">

                                </ul>
                                </div>
                        </form>
                        
                        <div class="search__slider swiper-container">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <div class="search__content">
                                                        <h2 class="search__title">Профессиональная диагностика здоровья в центре “Medion”</h2>
                                                        <p class="search__subtitle">MEDION- инновационный центр, имеющий отделения: радиологии, диагностики, эстетической медицины, дерматологии, пластической хирургии, SPA и диетологии.</p>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="search__content">
                                                        <h2 class="search__title">Профессиональная диагностика здоровья в центре “Medion”</h2>
                                                        <p class="search__subtitle">MEDION- инновационный центр, имеющий отделения: радиологии, диагностики, эстетической медицины, дерматологии, пластической хирургии, SPA и диетологии.</p>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="search__content">
                                                        <h2 class="search__title">Профессиональная диагностика здоровья в центре “Medion”</h2>
                                                        <p class="search__subtitle">MEDION- инновационный центр, имеющий отделения: радиологии, диагностики, эстетической медицины, дерматологии, пластической хирургии, SPA и диетологии.</p>
                                                </div>
                                        </div>


                                </div>
                                <div class="swiper-button swiper-button-prev"></div>
                                <div class="swiper-button swiper-button-next"></div>
                                <div class="swiper-pagination "></div>

                        </div>
                </div>
        </div>
        <!-- конец блока -->

        <!-- Блок о нас -->
        <div class="about">
                <div class="container">
                        <div class="about__content">
                                <div class="about__block about__block_left">
                                        <h2 class="about__header">О нашем центре</h2>
                                        <div class="about__text">
                                                <p class="about__text_text">Медицинский Центр «MEDION», расположенный в самом центре города Ташкента, предлагает своим клиентам насладиться лучшими традициями гостеприимства, оценить качество наших услуг, ощутить чуткое отношение и индивидуальный подход. «MEDION» — это путь к гармонии души и тела, которую так трудно обрести в ритме большого города.</p>
                                                <p class="about__text_text">Высокая грамотность и многолетний опыт работы наших специалистов позволяет прочувствовать желания каждого пациента и предоставить ему комфортные условия пребывания и лечения в клинике. Тепло и забота о пациентах – наша цель. Именно поэтому, мы уверены, что «MEDION» поможет Вам обрести здоровье, красоту и гармонию души и тела!</p>
                                        </div>
                                        <a href="" class="about__sendbtn _pc"><span>Отправить заявку</span></a>
                                </div>
                                <div class="about__block">
                                        <div class="about__slider swiper-container">
                                                <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                                <img src="static/img/about-img.jpg" alt="">
                                                        </div>
                                                        <div class="swiper-slide">
                                                                <img src="static/img/about-img.jpg" alt="">
                                                        </div>
                                                </div>
                                                <div class="swiper-button swiper-button-prev about__navigation"></div>
                                                <div class="swiper-button swiper-button-next about__navigation"></div>
                                                <div class="swiper-pagination about__pagination"></div>
                                        </div>
                                        <a href="" class="about__sendbtn _mobile"><span>Отправить заявку</span></a>
                                </div>
                        </div>
                </div>
        </div>
        <!-- конец блока -->

        <!-- Блок почему выбирают нас -->
        <div class="why">
                <div class="container">
                        <h2 class="why__header">
                                Почему выбирают нас?
                        </h2>
                        <div class="why__block">
                                <div class="why__item">
                                        <p class="why__text">Индивидуальный подход к каждому пациенту</p>
                                        <div class="why__imageBox">
                                                <img src="static/img/why-img.png" alt="" class="why__image">
                                        </div>
                                </div>
                                <div class="why__item">
                                        <p class="why__text">Программы для всей семьи</p>
                                        <div class="why__imageBox">
                                                <img src="static/img/why-img(2).png" alt="" class="why__image">
                                        </div>
                                </div>
                                <div class="why__item">
                                        <p class="why__text">Удобное расположение</p>
                                        <div class="why__imageBox">
                                                <img src="static/img/why-img(3).png" alt="" class="why__image">
                                        </div>
                                </div>
                                <div class="why__item">
                                        <p class="why__text">Работа центра без выходных</p>
                                        <div class="why__imageBox">
                                                <img src="static/img/why-img(1).png" alt="" class="why__image">
                                        </div>
                                </div>
                        </div>
                </div>

        </div>
        <!-- конец блока -->


        <!-- Блок акции, новости... -->
        <div class="stocks">
                <div class="container">
                        <div class="stocks__row">
                                <h2 class="stocks__header">
                                        Акции, новости и конкурсы
                                </h2>
                                <a href="" class="stocks__button _pc">Читать все статьи</a>
                        </div>
                        <div class="stocks__slider swiper-container">
                                <div class="swiper-wrapper stocks__wrapper">
                                        <div class="swiper-slide">
                                               <div class="stocks__slide">
                                                        <img src="static/img/stocks-img.jpg" alt="" class="stocks__img">
                                                        <span class="stocks__date">22.10.2020г</span>
                                                        <p class="stocks__text">Поступление нового стоматологического оборудования из Германии</p>
                                                        <a href="" class="stocks__button">Читать подробнее</a>
                                               </div> 
                                        </div>
                                        <div class="swiper-slide">
                                               <div class="stocks__slide">
                                                        <img src="static/img/stocks-img.jpg" alt="" class="stocks__img">
                                                        <span class="stocks__date">22.10.2020г</span>
                                                        <p class="stocks__text">Поступление нового стоматологического оборудования из Германии</p>
                                                        <a href="" class="stocks__button">Читать подробнее</a>
                                               </div> 
                                        </div>
                                        <div class="swiper-slide">
                                               <div class="stocks__slide">
                                                        <img src="static/img/stocks-img.jpg" alt="" class="stocks__img">
                                                        <span class="stocks__date">22.10.2020г</span>
                                                        <p class="stocks__text">Поступление нового стоматологического оборудования из Германии</p>
                                                        <a href="" class="stocks__button">Читать подробнее</a>
                                               </div> 
                                        </div>
                                        <div class="swiper-slide">
                                               <div class="stocks__slide">
                                                        <img src="static/img/stocks-img.jpg" alt="" class="stocks__img">
                                                        <span class="stocks__date">22.10.2020г</span>
                                                        <p class="stocks__text">Поступление нового стоматологического оборудования из Германии</p>
                                                        <a href="" class="stocks__button">Читать подробнее</a>
                                               </div> 
                                        </div>

                                </div>
                                <div class="swiper-pagination stocks__pagination"></div>
                        </div>
                        <div class="swiper-button swiper-button-prev stocks__navigation stocks__navigation_prev"></div>
                        <div class="swiper-button swiper-button-next stocks__navigation stocks__navigation_next"></div>
                        <a href="" class="stocks__button _mobile">Читать все статьи</a>
                </div>
        </div>
        <!-- Конец блока -->


        <!-- Блок с направлениями центра -->
        <div class="directions">
                <div class="container">
                        <div class="directions__content">
                                <h2 class="directions__header">
                                        Направления медицинского центра
                                </h2>
                                <ol class="directions__block card__container">
                                        <?php foreach($divisions as $division):?>
                                                <li class="directions__card card">
                                                        <a href="/services.php?division_slug=<?=$division['slug']?>#<?=$division['slug']?>">
                                                                <p class="_icon-<?=$division['icon']?> directions__icon card__icon">
                                                                <h3 class="card__title"><?=$division['name']?></h3>
                                                                <p class="card__text"><?=$division['description']?></p>
                                                                <a href="/services.php?division_slug=<?=$division['slug']?>" class="card__more">Подробнее</a>
                                                        </a>
                                                </li>
                                        <?php endforeach;?>
                                       
                                </ol>
                        </div>
                </div>
        </div>
        <!-- конец блока -->
</div>
<!-- КОнец блока -->



<? include "templates/footer.php" ?>