<?php
    require_once '../include/db.php';
?>
<?php 

function SeoWordsView($link){
    $sql = "SELECT * FROM `seo_words` ";
    $result = mysqli_query($link, $sql);
    $services = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $services;
}

function PagesView($link){
    $sql = "SELECT * FROM `pages`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
?>