<?php
    require_once '../include/db.php';
?>
<?php 



function emServicesView($link){
    $sql = "SELECT * FROM `estetic_medicine`";
    $result = mysqli_query($link, $sql);
    $context = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $context;
}

function emCategories($link){
    $sql = "SELECT * FROM `estetic_category`";
    $result = mysqli_query($link, $sql);
    $context = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $context;
}




?>