<? include "templates/header.php" ?>

<?php
require_once 'include/db.php';
?>

<?php
$doc_id = (int)$_GET['id_doctor'];
function doctorView($link, $doc_id)
{
    $sql = "SELECT *
        FROM doctors WHERE `doctors`.`id_doctor` LIKE $doc_id ";
    $result = mysqli_query($link, $sql);
    $doctor = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $doctor;
};

function get_doctorSimilar($link, $procedure_id)
{
    $sql = "SELECT * FROM doctors
        INNER JOIN doctors_category ON `doctors_category`.`id_doctors-category`=$procedure_id AND
        `doctors`.`id_doctors-category` = $procedure_id";
    $result = mysqli_query($link, $sql);
    $similar = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $similar;
};

$doctor = doctorView($link, $doc_id)[0];
$doctors = get_doctorSimilar($link, $doctor['id_doctors-category']);


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
                <li class="search__navigation_item" style="border-right: 1px solid #ADBAC9;"><a href="/doctors.php">Врачи</a></li>
                <li class="search__navigation_item"><?= $doctor['name_doctor'] ?></li>
            </ul>
            <h2 class="search__header">
                <?= $doctor['name_doctor'] ?>
            </h2>

        </div>
    </div>
    <!-- конец блока -->


    <!-- о враче -->


    <div class="specialist">
        <div class="container">
            <div class="specialist__content">
                <div class="specialist__photo">
                    <img class="specialist__img" src="static/img/doctor.jpg" alt="" class="doctors__img">
                </div>
                <div class="specialist__block">
                    <p class="specialist__about">
                        О враче клиники
                    </p>
                    <h2 class="specialist__neme">
                        <?= $doctor['name_doctor'] ?>
                    </h2>
                    <div class="specialist__position">

                        <p class="specialist__label _icon-doctor">
                            <?= $doctor['post_doctor'] ?>
                        </p>
                        <p class="specialist__label-1">
                            <span><?= $doctor['experience_doctor'][0] . $doctor['experience_doctor'][1] ?></span> лет опыта
                        </p>
                    </div>
                    <p class="specialist__text">
                        Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности представляет собой интересный эксперимент проверки направлений прогрессивного развития. Не следует, однако забывать, что реализация намеченных плановых заданий играет важную роль в формировании новых предложений. Товарищи! консультация с широким активом позволяет оценить значение дальнейших направлений развития. С другой стороны сложившаяся структура организации позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.
                    </p>
                    <a class="specialist__button" href="">
                        Записаться на прием к врачу
                    </a>

                </div>
            </div>
        </div>
    </div>



    <div class="doctors">
        <div class="container">
            <div class="doctors__row">
                <h2 class="doctors__title">Другие врачи направления - <?= $doctors[0]['name_doctors-category'] ?> </h2>
            </div>
            <div class="doctors__row">
                <div class="doctors__slider swiper-container">
                   <div class="swiper-wrapper">
                    <?php foreach ($doctors as $doc) : ?>
                            <?php if ($doc['id_doctor'] != $doctor['id_doctor']) : ?>
                                <li class="swiper-slide">
                                    <div class="doctors__card">
                                    <img src="static/img/doctors_photo/<?=$doc['name_doctor'] ?>.jpg" alt="no photo" class="doctors__img">
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
                   </div>
                </div>
            </div>
        </div>
    </div>






</div>

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>