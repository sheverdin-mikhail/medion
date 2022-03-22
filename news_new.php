<? $slug = 'news' ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/news_view.php';
?>
<? include "templates/header.php" ?>


<?php
$slug = $_GET['slug'];

// $clinic = get_clinic($link, $slug)[0];

// $clinics_id = $clinic['id_clinics'];
// function get_details($link, $clinics_id){
//     $sql = "SELECT * FROM clinic_detailed WHERE clinic_detailed.detailed_clinics_id LIKE '$clinics_id'";
//     $result = mysqli_query($link, $sql);
//     $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
//     return $clinics;
// }

// $detailed = get_details($link, $clinics_id);

?>

<!-- Блок с основным контентом страницы -->

<div class="page">

    <!-- Блок с поиском -->
    <div class="search">
    <? require_once 'templates/about_navigation.php' ?>
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
                <li class="search__navigation_item" style="border-right: 1px solid #ADBAC9;"><a href="/news.php">Новости</a></li>
                <li class="search__navigation_item">
                    <p><?= $new_get['news_name'] ?></p>
                </li>
            </ul>
            <h2 class="search__header">
                <?= $new_get['news_name'] ?>
            </h2>

        </div>
    </div>
    <!-- конец блока -->

    <div class="news-view">
        <div class="container">
            <div class="news-view__content">
                <div class="news-view__block">
                    <img src="data:image/jpeg;base64, <?= base64_encode($new_get['news_photo']) ?>" alt="" class="news-view__img">
                </div>
                <div class="news-view__block">
                    <p class="news-view__text"><?= $new_get['news_description'] ?></p>
                </div>
            </div>
        </div>
    </div>


</div>


<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>