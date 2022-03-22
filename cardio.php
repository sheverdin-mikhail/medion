<? $slug = 'cardio' ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/seo_view.php';
?>
<? include "templates/header.php" ?>




<?php
require_once 'views/cardio_view.php';
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

    <!-- Блок с описанием страницы -->
    <? foreach($cardio as $car): ?>
        <div class="news-view">
        <div class="container">
            <div class="news-view__content">
                <div class="news-view__block">
                    <img src="data:image/jpeg;base64, <?= base64_encode($car['photo']) ?>" alt="" class="news-view__img">
                </div>
                <div class="news-view__block">
                    <p class="news-view__text"><?= $car['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <? endforeach; ?>
    <!-- Конец блока -->


    <!-- Блок с слайдером видео -->
        <div class="cardio__slider swiper-container">
            <div class="swiper-wrapper">
                <? foreach ($videos as $video) : ?>
                    <div class="swiper-slide">
                        <div class="search__content" style="justify-content: center;">
                        <video  loop='loop' controls="controls"  >
                            <? if(explode('.', $video['name'])[1]=='mp4'): ?>
                                <source src="../static/video/<?=$video['name']?>" type="video/mp4">
                            <? elseif(explode('.', $video['name'])[1]=='ogv'): ?>
                                <source src="../static/video/<?=$video['name']?>" type='video/ogg; codecs="theora, vorbis"'>
                            <? elseif(explode('.', $video['name'])[1]=='webm'): ?>
                                <source src="../static/video/<?=$video['name']?>" type='video/webm; codecs="vp8, vorbis"'>
                            <? endif; ?>
                        </video>     
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
            <!-- <div class="swiper-button swiper-button-prev"></div>
                    <div class="swiper-button swiper-button-next"></div> -->
            <div class="swiper-pagination search__pagination "></div>

        </div>
    <!-- Конец блока -->
</div>


<? include "templates/modal.php" ?>

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


<? include 'templates/footer.php' ?>