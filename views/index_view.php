<?php


    function get_divisions($link){
        $sql = "SELECT 
        division.slug_division AS 'slug', 
        division.division_icon AS 'icon', 
        division.name_division AS 'name', 
        division.division_description AS 'description' 
        
        FROM division";
        $result = mysqli_query($link, $sql);
        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $divisions;
    }

    $divisions = get_divisions($link);

?>
