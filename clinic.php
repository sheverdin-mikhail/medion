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
                                <li class="search__navigation_item">Клиники</li>
                        </ul>
                        <h2 class="search__header">
                            <?= $clinic['name_clinics']?>
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
                    <li class="offer__item">
                        <div class="offer__item_icon _icon-rating"></div>
                        <h3 class="offer__item_title">
                            Индивидуальный подход к спортивным программам
                        </h3>
                        <p class="offer__item_text">
                            Не следует, однако забывать, что рамки и место обучения кадров требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Товарищи! рамки и место обучения кадров требуют от нас анализа соответствующий условий активизации. С другой стороны дальнейшее развитие различных форм деятельности влечет за собой.
                        </p>
                        <a class="offer__item_button" href="">
                            Узнать больше об этом
                        </a>
                    </li>
                    <li class="offer__item">
                        <div class="offer__item_icon _icon-certification"></div>
                        <h3 class="offer__item_title">
                            Квалифицированные тренера и диетологи
                        </h3>
                        <p class="offer__item_text">
                            Не следует, однако забывать, что рамки и место обучения кадров требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Товарищи! рамки и место обучения кадров требуют от нас анализа соответствующий условий активизации. С другой стороны дальнейшее развитие различных форм деятельности влечет за собой.
                        </p>
                        <a class="offer__item_button" href="">
                            Узнать больше об этом
                        </a>
                    </li>
                    <li class="offer__item">
                        <div class="offer__item_icon _icon-dumbell"></div>
                        <h3 class="offer__item_title">
                            Современное и надежное оборудование
                        </h3>
                        <p class="offer__item_text">
                            Не следует, однако забывать, что рамки и место обучения кадров требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Товарищи! рамки и место обучения кадров требуют от нас анализа соответствующий условий активизации. С другой стороны дальнейшее развитие различных форм деятельности влечет за собой.
                        </p>
                        <a class="offer__item_button" href="">
                            Узнать больше об этом
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    
    

      












</div>
<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>