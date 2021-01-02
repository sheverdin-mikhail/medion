<? include "templates/header.php" ?>
<?php 
        require_once 'include/db.php';
?>

<?php 
        require_once 'views/clinic_view.php';
?>



<!-- Блок с основным контентом страницы -->
<div class="page">


      <!-- Блок с поиском -->
      <div class="search">
                <div class="container">
                        <form  action="/views/search.php" class="search__search">
                        <input id="q" name="q" type="text" class="search__input" placeholder="Что-то ищете? Воспользуйтесь поиском по сайту...">
                        <input type="submit" class="search__button" value="Поиск">
                        </form>
                        <ul class="search__navigation">
                                <li class="search__navigation_item"><a href="/index.php">Главная</a></li>
                                <li class="search__navigation_item">Клиники</li>
                        </ul>
                        <h2 class="search__header">
                            Узнайте больше о наших клиниках
                        </h2>
                        <h3 class="search__subheader">
                        Наш центр предоставляет услуги в 3-х направлениях: поликлиника полного цикла, департамент эстетической медицины и диетология
                        </h3>
                </div>
        </div>
        <!-- конец блока -->

    <div class="clinic">
        <div class="container">
            <div class="clinic__content">
                <ul class="side-menu">
                    <li class="side-menu__item ">
                        <a href="" class="side-menu__text _icon-hospital">Поликлиника</a>
                    </li>
                    <li class="side-menu__item">
                        <a href="" class="side-menu__text _icon-test-2">Лаборатория</a>
                    </li>
                    <li class="side-menu__item">
                        <a href="" class="side-menu__text _icon-stethoscope">Функциональная<br>диагностика</a>
                    </li>
                    <li class="side-menu__item">
                        <a href="" class="side-menu__text _icon-surgery ">Операционный блок</a>
                    </li>
                    <li class="side-menu__item">
                        <a href="" class="side-menu__text _icon-dental">Стоматология</a>
                    </li>
                    <li class="side-menu__item">
                        <a href="" class="side-menu__text _icon-heart">MEDION LIFE</a>
                    </li>
                </ul>

                <div class="clinic__block">
                    <?php foreach($clinics as $clinic): ?>
                        <div class="clinic__card">
                        <div class="clinic__imgbox">
                            <?php $img = base64_encode($clinic['clinics_img']);?>
                            <img src="data:image/jpeg;base64,<?= $img ?>" alt="" class="clinic__img">
                        </div>
                        <div class="clinic__info">
                            <h4 class="clinic__title clinics__title">Медицинский центр <?=$clinic['name_clinics'] ?> </h4>
                            <span class="clinic__address clinics__address _icon-pin"><?=$clinic['address_clinics'] ?></span>
                            <p class="clinic__text clinics__text">Поликлиника «MEDION» является крупным многопрофильным лечебно-профилактическим учреждением, оснащенным новейшим лечебно-диагностическим оборудованием. </p>
                            <div class="clinic__buttons clinics__buttons">
                                <a href="" class="clinic__button clinics__button "><span class="_icon-communications">Позвонить</span></a>
                                <a href="" class="clinic__button clinics__button "><span class="_icon-pin">Показать на карте</span></a>
                                <a href="/clinic.php?slug=<?=$clinic['clinics_slug'] ?>" class="clinic__button clinics__button "><span class="_icon-bookmark">Подробнее о клинике</span></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- КОнец блока -->



<? include "templates/footer.php" ?>