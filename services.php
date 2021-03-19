<? include "templates/header.php"; ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/services_view.php';
?>


<!-- Блок с основным контентом страницы -->
<div class="page">

        <!-- Блок с поиском -->
        <div class="search">
                <div class="container">
                        <form action="" class="search__search">
                                <div class="search__block">
                                        <input autocomplete="off" id="q" name="q" type="text" class="search__input" placeholder="Поиск по сайту">
                                        <input type="submit" class="search__button" value="Поиск">
                                </div>
                                <div class="search__block">
                                        <ul class="search__list" id="search_list">

                                        </ul>
                                </div>
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
                                <ul class="services__menu side-menu _pc">
                                        <?php
                                        foreach ($divisions as $division) {
                                                printf('<li class="services__menu__item side-menu__item">
                                                                        <a href="#%s" class="services__menu__item_text _icon-%s side-menu__text">%s</a>
                                                                </li>', $division['Ссылка'], $division['Icon'], $division['Подразделение']);
                                        }
                                        ?>
                                </ul>
                                <p class="services__label _mobile">Выберите направление:</p>
                                <ol class="services__list">

                                        <?php foreach ($divisions as $division) : ?>
                                                <li class="services__item" id="<?= $division['Ссылка'] ?>">
                                                        <div class="services__item_row _icon-<?= $division['Icon'] ?>">
                                                                <div class="services__item_title">
                                                                        <span>Услуги</span>
                                                                        <?= $division['Подразделение'] ?>
                                                                </div>
                                                                <span class="services__item_more _pc">Подробнее об услуге</span>
                                                                <span class="services__item_more _mobile">Подробнее</span>
                                                        </div>
                                                        <ul class="services__sublist hide">
                                                                <?php
                                                                $services = get_services($link, $division['ID']);
                                                                $clinics = get_clinics($link, $division['ID']);
                                                                foreach ($services as $service) : ?>
                                                                        <li class="services__sublist_item">
                                                                                <div class="services__sublist_item_row">
                                                                                        <p class="services__item_text"><?= $service['name_service'] ?></p>
                                                                                        <hr>
                                                                                        <span class="services__more" id="more-<?= $service['id_service'] ?>">подробнее</span>
                                                                                        <span class="services__price">от <?= $service['price_service'] ?>р.</span>
                                                                                </div>
                                                                                <div class="services__sublist_item_row hide">
                                                                                        <div class="services__description description ">
                                                                                                <span class="description__label">Описание услуги</span>
                                                                                                <p class="description__text"><?= $service['description_service'] ?></p>
                                                                                                <div class="description__buttons">
                                                                                                        <a href="" class="description__button description__button_1">Записаться на прием</a>
                                                                                                        <a href="" class="description__button description__button_2">Бесплатная консультация</a>
                                                                                                </div>

                                                                                                <div class="description__clinics clinics">
                                                                                                        <h2 class="clinics__title">
                                                                                                                Клиники, в которых оказывается услуга
                                                                                                        </h2>
                                                                                                        <div class="clinics__row">
                                                                                                                <?php foreach ($clinics as $clinic) : ?>
                                                                                                                        <div class="clinics__item">
                                                                                                                                <?php $img = base64_encode($clinic['clinics_img']); ?>
                                                                                                                                <img src="data:image/jpeg;base64,<?= $img ?>" alt="" class="clinics__img">
                                                                                                                                <span class="clinics__name"><?= $clinic['name_clinics'] ?> </span>
                                                                                                                                <span class="clinics__address _icon-pin"><?= $clinic['address_clinics'] ?></span>
                                                                                                                                <div class="clinics__buttons">
                                                                                                                                        <a href="/clinic.php?slug=<?= $clinic['clinics_slug'] ?>" class="clinics__button "><span class="_icon-bookmark">Подробнее о клинике</span></a>
                                                                                                                                        <a href="" class="clinics__button _icon-communications"></a>
                                                                                                                                        <a href="" class="clinics__button _icon-pin"></a>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                <?php endforeach; ?>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </li>
                                                                <?php endforeach; ?>
                                                        </ul>
                                                </li>
                                        <?php endforeach; ?>

                                </ol>
                        </div>
                </div>
        </div>

        <div class="doctors">
                <div class="container">
                        <div class="doctors__row">
                                <h2 class="doctors__title">Наши врачи</h2>
                                <a href="/doctors.php" class="doctors__button _pc"><span>Все врачи и специалисты</span></a>
                        </div>
                        <div class="doctors__row">
                                <div class="doctors__slider swiper-container">
                                        <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                        <div class="doctors__card">
                                                                <img src="static/img/doctor.jpg" alt="" class="doctors__img">
                                                                <div class="doctors__card_info">
                                                                        <span class="doctors__label">Врач-педиатр высшей категории</span>
                                                                        <p class="doctors__name">Ильясов Дониёр Ходжиакбарович</p>
                                                                        <p class="doctors__position">Главный врач. Врач высшей категории — отоларинголог</p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="swiper-slide">
                                                        <div class="doctors__card">
                                                                <img src="static/img/doctor.jpg" alt="" class="doctors__img">
                                                                <div class="doctors__card_info">
                                                                        <span class="doctors__label">Врач-педиатр высшей категории</span>
                                                                        <p class="doctors__name">Ильясов Дониёр Ходжиакбарович</p>
                                                                        <p class="doctors__position">Главный врач. Врач высшей категории — отоларинголог</p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="swiper-slide">
                                                        <div class="doctors__card">
                                                                <img src="static/img/doctor.jpg" alt="" class="doctors__img">
                                                                <div class="doctors__card_info">
                                                                        <span class="doctors__label">Врач-педиатр высшей категории</span>
                                                                        <p class="doctors__name">Ильясов Дониёр Ходжиакбарович</p>
                                                                        <p class="doctors__position">Главный врач. Врач высшей категории — отоларинголог</p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="swiper-slide">
                                                        <div class="doctors__card">
                                                                <img src="static/img/doctor.jpg" alt="" class="doctors__img">
                                                                <div class="doctors__card_info">
                                                                        <span class="doctors__label">Врач-педиатр высшей категории</span>
                                                                        <p class="doctors__name">Ильясов Дониёр Ходжиакбарович</p>
                                                                        <p class="doctors__position">Главный врач. Врач высшей категории — отоларинголог</p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="swiper-slide">
                                                        <div class="doctors__card">
                                                                <img src="static/img/doctor.jpg" alt="" class="doctors__img">
                                                                <div class="doctors__card_info">
                                                                        <span class="doctors__label">Врач-педиатр высшей категории</span>
                                                                        <p class="doctors__name">Ильясов Дониёр Ходжиакбарович</p>
                                                                        <p class="doctors__position">Главный врач. Врач высшей категории — отоларинголог</p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-button swiper-button-prev doctors__navigation doctors__navigation_prev"></div>
                                        <div class="swiper-button swiper-button-next doctors__navigation doctors__navigation_next"></div>
                                        <div class="swiper-pagination doctors__pagination"></div>
                                </div>
                               
                        </div>
                        <a href="/doctors.php" class="doctors__button _mobile"><span>Все врачи и специалисты</span></a>
                </div>
        </div>

</div>
<!-- КОнец блока -->



<? include "templates/footer.php" ?>
<script src="static/js/scroll-to-service.js"></script>