<?php
    require_once '../include/db.php';
?>
<?php 


function DoctorsView($link){
    $sql = "SELECT * FROM `doctors`";
    $result = mysqli_query($link, $sql);
    $context = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $context;
}

function DocCatView($link){
    $sql = "SELECT * FROM `doctors_category`";
    $result = mysqli_query($link, $sql);
    $context = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $context;
}




?>