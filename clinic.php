<? include "templates/header.php" ?>
<?php
require_once 'include/db.php';
?>

<?php
require_once 'views/clinic_view.php';
?>


<?php
$slug = $_GET['slug'];

$clinic = get_clinic($link, $slug)[0];

$clinics_id = $clinic['id_clinics'];
function get_details($link, $clinics_id){
    $sql = "SELECT * FROM clinic_detailed WHERE clinic_detailed.detailed_clinics_id LIKE '$clinics_id'";
    $result = mysqli_query($link, $sql);
    $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $clinics;
}

$detailed = get_details($link, $clinics_id);

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
                <li class="search__navigation_item" style="border-right: 1px solid #ADBAC9;"><a href="/clinics.php">Клиники</a></li>
                <li class="search__navigation_item"><p><?= $clinic['name_clinics'] ?></p></li>
            </ul>
            <h2 class="search__header">
                <?= $clinic['name_clinics'] ?>
            </h2>

        </div>
    </div>
    <!-- конец блока -->


    <div class="offer">
        <div class="container">
            <div class="offer__content">
                <h2 class="offer__title">
                    Что мы предлагаем?
                </h2>
                <ol class="offer__block">
                    <?php foreach($detailed as $detail): ?>
                        <li class="offer__item">
                        <h3 class="offer__item_title">
                           <?= $detail['detailed_title'] ?>
                        </h3>
                        <p class="offer__item_text">
                        <?= $detail['detailed_text'] ?>
                        </p>
                        <a id="popup" href="#popup" class="offer__item_button popup-link ">
                            Узнать больше об этом
                        </a>
                    </li>
                    <?php endforeach; ?>

                </ol>
            </div>
        </div>
    </div>
















</div>
<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>