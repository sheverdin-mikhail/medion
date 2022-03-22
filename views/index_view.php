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

    function GetMainSliderView($link){
        $sql = "SELECT * FROM `pages_main_slider` WHERE `page` = 1";
        $result = mysqli_query($link, $sql);
        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $divisions;
    }
    function GetAboutInfo($link){
        $sql = "SELECT * FROM `pages_main_about`";
        $result = mysqli_query($link, $sql);
        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $divisions;
    }
    function GetAboutPhoto($link){
        $sql = "SELECT * FROM `page_main_slider_about`";
        $result = mysqli_query($link, $sql);
        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $divisions;
    }
    function GetNews($link){
        $sql = "SELECT * FROM `news` WHERE news_cat=1 ORDER BY news_date DESC LIMIT 3";
        $result = mysqli_query($link, $sql);
        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $divisions;
    }

    $main_slider = GetMainSliderView($link);
    $about_info = GetAboutInfo($link);
    $about_info = $about_info[0];
    $about_photo = GetAboutPhoto($link);
    $divisions = get_divisions($link);
    $news = GetNews($link);
    


?>
