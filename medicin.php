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
                <h2 class="medicin__header _header">
                    Услуги эстетической медицины
                </h2>
                <!-- Карточка -->
                <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/estetic_med/woman-med.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a id="popup" href="#popup-modal"  class="popup-link medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Блефаропластика</h3>
                        <p class="medicin__text">Глаза выдают реальный возраст, поэтому хирургическая коррекция дает возможность значительно улучшить свой внешний вид.
В основном данная процедура востребована у пациентов средних лет. Первыми признаками возрастных изменений являются морщины и мешки под глазами, из-за которых человек выглядит старше. Иногда эта процедура требуется и в более молодом возрасте, если есть анатомическая предрасположенность к формированию провисаний и грыж. </p>
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
                                            <img src="static/img/estetic_med/before1.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/estetic_med/in-work1.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/estetic_med/after1.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Карточка -->
                <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/estetic_med/mammoplastic.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a id="popup" href="#popup-modal"  class="popup-link medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Маммопластика</h3>
                        <p class="medicin__text">Маммопластика – это пластические операции на молочной железе, которые практически всегда носят эстетический характер. Пластические операции на груди позволяют изменить форму или размер или вернуть былую упругость форм.</p>
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
                                            <img src="static/img/estetic_med/before2.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/estetic_med/in-work2.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/estetic_med/after2.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Карточка -->
                <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/estetic_med/plastic.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a id="popup" href="#popup-modal"  class="popup-link medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Пластика живота</h3>
                        <p class="medicin__text">Операция, направленная на укрепление мышц передней брюшной стенки, устранение избытков кожи и жировых отложений, которые образуются после родов или в силу особенностей строения организма. Пластика живота способствует восстановлению эстетических пропорций.</p>
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
                                            <img src="static/img/estetic_med/before3.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/estetic_med/in-work3.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/estetic_med/after3.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Карточка -->
                <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/estetic_med/rinoplastic.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a id="popup" href="#popup-modal"  class="popup-link medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Ринопластика</h3>
                        <p class="medicin__text">Без сомнений, нос – яркая и выдающаяся деталь человеческого лица – его оптический центр. Изменение формы носа может в корне изменить внешность человека. Неправильная форма, слишком большие размеры или выраженная горбинка становятся причиной тяжелых эмоциональных расстройств и личностных трагедий. В таких случаях на помощь приходит ринопластика (от греч. Rhinos – нос). Этим термином обозначаются операции, разработанные не только для эстетической коррекции формы, но и на восстановления нормального носового дыхания.</p>
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
                                            <img src="static/img/estetic_med/before4.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/estetic_med/in-work4.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/estetic_med/after4.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- Карточка -->
               <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/estetic_med/Rectangle 22.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a id="popup" href="#popup-modal"  class="popup-link medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Удаление гематом</h3>
                        <p class="medicin__text"> Синяк считается легким «последствием» травмы, при которой происходит повреждение только поверхностных капилляров без каких-либо серьезных изменений внутри тканей. Также синяк значительно быстрее «отцветает» и вызывает болевые ощущения только при непосредственном контакте с поврежденными тканями. По сути, синяком можно назвать незначительную подкожную гематому.
Хирург ставит диагноз «подкожная гематома» при наличии видимого кровоподтека и при флюктуации кожи над ним. Часто подтверждение диагноза можно получить только при вскрытии и опорожнении образования, после проведения пункции, МРТ или УЗИ.</p>
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
                                            <img src="static/img/estetic_med/before5.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/estetic_med/in-work5.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/estetic_med/after5.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-button swiper-button-prev works__button works__navigation_prev _mobile"></div>
                                <div class="swiper-button swiper-button-next works__button works__navigation_next _mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
               
               <!-- Карточка -->
               <div class="medicin__card">
                    <div class="medicin__card_block">
                        <img src="static/img/estetic_med/podtjajka.jpg" alt="" class="medicin__img">
                        <div class="medicin__buttons">
                            <a id="popup" href="#popup-modal"  class="popup-link medicin__button">
                                <span>Записаться на прием</span>
                            </a>
                        </div>
                    </div>
                    <div class="medicin__card_block">
                        <h3 class="medicin__title">Круговая подтяжка лица</h3>
                        <p class="medicin__text">Круговая подтяжка лица, или фейслифтинг, - одна из старейших и популярнейших хирургических методик омоложения. Операция эта подразумевает удаление излишков кожи и жировой клетчатки, возвращение мягких тканей к первоначальному положению и придание контурам лица былой четкости.</p>
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
                                            <img src="static/img/estetic_med/before6.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _in">
                                            <img src="static/img/estetic_med/in-work6.jpg" alt="" class="works__image ">
                                        </div>
                                    </div>
                                    <div class="swiper-slide  ">
                                        <div class="works__item _after">
                                            <img src="static/img/estetic_med/after6.jpg" alt="" class="works__image ">
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