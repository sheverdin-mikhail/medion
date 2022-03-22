<? $slug = 'estetic_med' ?>
<? $id_page = 2; ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/seo_view.php';
require_once 'views/estetic_med.php';
?>
<? include "templates/header.php" ?>
<? $header = GetHeadersView($link, $id_page);
$header = $header[0];
$categories = getEmCategories($link);
$services = getEmServices($link);
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
                <li class="search__navigation_item">Эстетическая медицина</li>
            </ul>
            <h2 class="search__header">
                <?= $header['header_text'] ?>
            </h2>
            <h3 class="search__subheader">
                <?= $header['header_description'] ?>
            </h3>
        </div>
    </div>
    <!-- конец блока -->


    <div class="medicin">
        <div class="container">
            <div class="medicin__content">

                <? foreach ($categories as $category) : ?>
                        <h2 class="medicin__header _header">
                            <?=$category['name_category']?>
                        </h2>
                        <? foreach ($services as $service) : ?>
                            <? if ($service['category'] == $category['id_category']) : ?>
                                <!-- Карточка -->
                                <div class="medicin__card">
                                    <div class="medicin__card_block">
                                    <img src="data:image/jpeg;base64, <?= base64_encode($service['main_photo']) ?>" alt="" class="news__img">
                                        <div class="medicin__buttons">
                                            <a id="popup" href="#popup-modal" class="popup-link medicin__button">
                                                <span>Записаться на прием</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="medicin__card_block">
                                        <h3 class="medicin__title"><?= $service['em_name'] ?></h3>
                                        <p class="medicin__text"><?= $service['em_description'] ?></p>
                                        <div class="medicin__works works">
                                            <div class="works__row swiper-container">
                                                <div class="works__header">
                                                    <h4 class="works__title">
                                                        Примеры наших работ:
                                                    </h4>
                                                    <div class="work__buttons works__navigation _pc">
                                                        <!-- <div class="swiper-button swiper-button-prev works__button works__navigation_prev"></div>
                                        <div class="swiper-button swiper-button-next works__button works__navigation_next"></div> -->
                                                    </div>
                                                </div>
                                                <div class="swiper-wrapper works__wrapper">
                                                    <div class="swiper-slide works_slide ">
                                                        <div class="works__item _before">
                                                        <img src="data:image/jpeg;base64, <?= base64_encode($service['before_photo']) ?>" alt="" class="news__img">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide  ">
                                                        <div class="works__item _in">
                                                        <img src="data:image/jpeg;base64, <?= base64_encode($service['in_photo']) ?>" alt="" class="news__img">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide  ">
                                                        <div class="works__item _after">
                                                        <img src="data:image/jpeg;base64, <?= base64_encode($service['after_photo']) ?>" alt="" class="news__img">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endif; ?>
                        <? endforeach; ?>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- КОнец блока -->

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>