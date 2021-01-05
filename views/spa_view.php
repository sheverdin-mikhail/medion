<?php 

    function get_spaCategory($link){
        $sql = "SELECT *
        FROM spa_category";
        $result = mysqli_query($link, $sql);
        $categoriyes = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $categoriyes;
    };

    function get_spaProcedures($link){
        $sql = "SELECT *,
        spa_category.icon_category AS 'icon', 
        spa_category.name_category AS 'category'
        FROM spa_procedure
        LEFT JOIN spa_category ON `spa_procedure`.`id_category-spa` = `spa_category`.`id_category-spa`";
        $result = mysqli_query($link, $sql);
        $procedures = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $procedures;
    }

    $procedures = get_spaProcedures($link);
    $category = get_spaCategory($link);

?>




