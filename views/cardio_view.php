<?php

function GetMainSliderView($link){
    $sql = "SELECT * FROM `pages_main_slider` WHERE `page` = 2";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}

function GetCardioView($link){
    $sql = "SELECT * FROM cardio";
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function GetNews($link){
    $sql = "SELECT * FROM `news` WHERE news_cat=1 ORDER BY news_date DESC LIMIT 3";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
function GetVideos($link){
    $sql = "SELECT * FROM `cardio_video`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}




$main_slider = GetMainSliderView($link);
$cardio = GetCardioView($link);
$news = GetNews($link);
$videos = GetVideos($link);