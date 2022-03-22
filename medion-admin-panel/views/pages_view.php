<?php
    require_once '../include/db.php';
?>
<?php 


function PagesView($link){
    $sql = "SELECT * FROM `pages`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
function HeadersView($link){
    $sql = "SELECT * FROM `pages_headers`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
function MainSliderView($link){
    $sql = "SELECT * FROM `pages_main_slider` WHERE `page` = 1";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
function AboutInfoView($link){
    $sql = "SELECT * FROM `pages_main_about`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
function AboutPhotosView($link){
    $sql = "SELECT * FROM `page_main_slider_about`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}


?>