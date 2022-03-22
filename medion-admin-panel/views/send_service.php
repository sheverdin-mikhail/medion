<?php
    require_once '../include/db.php';
?>
<?php 
$name_service =  filter_var(trim($_POST['name_service']), FILTER_SANITIZE_STRING);
$description_service = filter_var(trim($_POST['description_service']), FILTER_SANITIZE_STRING); 
$price_service = filter_var(trim($_POST['price_service']), FILTER_SANITIZE_STRING); 
$id_division = filter_var(trim($_POST['id_division']), FILTER_SANITIZE_STRING); 


$sql = "INSERT INTO `services` (name_service,description_service,price_service) VALUES ('$name_service', '$description_service', '$price_service')";
$ret = mysqli_query($link, $sql);
$id_service = mysqli_insert_id($link);


$sql2 = "INSERT INTO `services_division` (id_service, id_division) VALUES ('$id_service', '$id_division')";
$ret2 = mysqli_query($link, $sql2);
if ($ret && $ret2){
    header('Location: /medion-admin-panel/services_edit.php');
    exit();
    }else{
        echo('Ошибка отправки в БД');
    }
    