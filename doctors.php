<? include "templates/header.php" ?>

<?php 
        require_once 'include/db.php';
?>

<?php 
        require_once 'views/doctors_view.php';
?>




<!-- Блок с основным контентом страницы -->
<div class="page">


      <!-- Блок с поиском -->
      <div class="search">
                <div class="container">
                        <form action="" class="search__search">
                                <input  autocomplete="off" id="q" name="q" type="text" class="search__input" placeholder="Что-то ищете? Воспользуйтесь поиском по сайту...">
                                <input type="submit" class="search__button" value="Поиск">
                        </form>
                        <ul class="search__list" id="search_list">

                        </ul>
                        <ul class="search__navigation">
                                <li class="search__navigation_item"><a href="/index.php">Главная</a></li>
                                <li class="search__navigation_item">Врачи</li>
                        </ul>
                        <h2 class="search__header">
                            Наши врачи  
                        </h2>
                        <h3 class="search__subheader">
                            Высокая грамотность и многолетний опыт работы наших специалистов позволяет прочувствовать желания каждого пациента и предоставить ему комфортные условия пребывания и лечения в клинике.
                        </h3>
                </div>
        </div>
        <!-- конец блока -->

        <div class="medic">
            <div class="container">
                <div class="medic__content">
                    <h2 class="medic__title">Специалисты нашего центра</h2>

                    <ul class="medic__list">
                        <?php foreach($category as $cat): ?>
                            <li class="medic__item">
                                <div class="medic__direction">
                                    <span class="medic__direction_name"><?= $cat['name_doctors-category']?></span>
                                    <span class="medic__direction_numb">4 специалиста</span>
                                </div>
                                <ul class="medic__doctors">
                                    <?php foreach($doctors as $doc): ?>
                                        <?php if($doc['name_doctors-category'] == $cat['name_doctors-category']):?>
                                            <li class="medic__doctors_item">
                                                <div class="doctors__card">
                                                    <img src="static/img/doctor.jpg" alt="" class="doctors__img">
                                                    <div class="doctors__card_info">
                                                        <span class="doctors__label"><?=$doc['post_doctor'] ?></span>
                                                        <p class="doctors__name"><?=$doc['name_doctor'] ?></p>
                                                        <p class="doctors__position"> <? 
                                                            if($doc['experience_doctor']!= (NULL || ' ') )
                                                                {echo 'Стаж работы '.$doc['experience_doctor'].'в области педиатрии и диагностики детских заболеваний';}; ?>
                                                        </p>
                                                        <a href="/doctor.php?id_doctor=<?=$doc['id_doctor']?>" class="doctors__more">Подробнее о враче</a>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
      

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>