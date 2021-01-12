<? include "templates/header.php" ?>


<?php 
        require_once 'include/db.php';
?>

<?php 
        $procedure_id = (int)$_GET['id'];

        function get_spaProcedure($link, $procedure_id){
            $sql = "SELECT *
            FROM spa_procedure WHERE `spa_procedure`.`id_spa-procedure` LIKE $procedure_id ";
            $result = mysqli_query($link, $sql);
            $categoriyes = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $categoriyes;
        };

        function get_spaSimilar($link, $procedure_id){
                $sql = "SELECT * FROM spa_procedure 
                INNER JOIN spa_category 
                ON `spa_category`.`id_category-spa`= $procedure_id 
                AND `spa_procedure`.`id_category-spa`= $procedure_id";
                $result = mysqli_query($link, $sql);
                $similar = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return $similar;
        };

        $procedure = get_spaProcedure($link, $procedure_id)[0];
        $similar = get_spaSimilar($link, $procedure['id_category-spa']);
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
                                <li class="search__navigation_item" style="border-right: 1px solid #ADBAC9;">
                                        <a href="/SPA.php">СПА комплекс</a>
                                </li>
                                <li class="search__navigation_item">
                                        <?=$procedure['name_spa-procedure']?>
                                </li>   
                        </ul>
                        <h2 class="search__header">
                        <?=$procedure['name_spa-procedure']?>
                        </h2>
                </div>
        </div>
        <!-- конец блока -->
      
        

        <div class="procedure__card">
               <div class="container">
                        <div class="procedure__block">
                                <div class="procedure__image-box">
                                        <img src="static/img/spa_img/MRT.jpg" alt="" class="procedure__image">
                                </div>
                                <div class="procedure__info">
                                        <span class="procedure__label">
                                        Описание услуги
                                        </span> 
                                        <h3 class="procedure__name">
                                                <?=$procedure['name_spa-procedure']?>
                                        </h3>
                                        <p class="procedure__description">
                                        <?=$procedure['description_spa-procedure']?>
                                        </p>
                                        <div class="procedure__row">
                                                <span class="procedure__price-label">Стоимость услуги:</span>
                                                <span class="procedure__price-num"><?=$procedure['price_spa-procedure']?> сум за <?=$procedure['quantity_spa-procedure']?></span>
                                        </div>
                                        <div class="procedure__buttons">
                                                <a href="" class="procedure__button">Записаться на прием</a>
                                                <a href="" class="procedure__button">Бесплатная консультация</a>
                                        </div>
                                </div>  
                        </div>
               </div>
        </div>



        <div class="similar">
               <div class="container">
                         <h2 class="similar__title">
                        Похожие виды услуг
                        </h2>
                        <ul class="similar__list">
                                <?php foreach($similar as $sim):?>
                                        <? if($sim['id_spa-procedure'] != $procedure['id_spa-procedure']):?>
                                                <li class="similar__item _icon-<?=$sim['icon_category']?>">
                                                        <h3 class="similar__item_title"><?=$sim['name_spa-procedure']?></h3>
                                                        <p class="similar__item_text"><?=$sim['description_spa-procedure']?> </p>
                                                        <div class="similar__item_row">
                                                                <a href="" class="similar__item_button">Записаться на прием</a>
                                                                <div class="similar__item_price">
                                                                        <label>Стоимость услуги:</label>
                                                                        <span><?=$sim['price_spa-procedure']?> сум<br> за <?=$sim['quantity_spa-procedure']?></span>
                                                                </div>
                                                        </div>
                                        
                                                </li>
                                        <? endif;?>
                                <?php endforeach; ?>
                        </ul>
               </div>
        </div>



<!-- КОнец блока -->

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>



        
       
