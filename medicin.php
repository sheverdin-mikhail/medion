<? include "templates/header.php" ?>




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
                <li class="search__navigation_item">Эстетическая медицина</li>
            </ul>
            <h2 class="search__header">
                Эстетическая медицина
            </h2>
            <h3 class="search__subheader">
                Мы бы хотели пригласить Вас к нам в гости. Показать, как выглядит наш центр. Почувствовать ауру. Прислушаться к внутреннему голосу и принять разумное решение.
            </h3>
        </div>
    </div>
    <!-- конец блока -->


    <div class="medicin">
        <div class="container">
            <div class="medicin__content">
                <h2 class="medicin__header">
                    Услуги эстетической медицины
                </h2>
                <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/woman-med.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a href="" class="medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                            <a href="" class="medicin__button">
                                <span>Подробнее об услуге</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Блефаропластика</h3>
                        <p class="medicin__text">Таким образом новая модель организационной деятельности в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что новая модель организационной деятельности влечет за собой процесс внедрения и модернизации форм развития. </p>
                        <div class="medicin__works works">
                            <div class="works__row swiper-container">
                                <div class="works__header">
                                    <h4 class="works__title">
                                        Примеры наших работ:
                                    </h4>
                                    <div class="work__buttons works__navigation _pc">
                                        <div class="swiper-button swiper-button-prev works__button works__navigation_prev"></div>
                                        <div class="swiper-button swiper-button-next works__button works__navigation_next"></div>
                                    </div>
                                </div>
                                <div class="swiper-wrapper works__wrapper">
                                    <div class="swiper-slide works_slide ">
                                        <div class="works__item _before">
                                            <img src="static/img/woman.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/in-work.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/after-work.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/after-work.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- КОнец блока -->

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>