<?php
    require_once '../include/db.php';
?>
<?php 

$id_about =  filter_var(trim($_POST['id_about']), FILTER_SANITIZE_STRING);
$header = filter_var(trim($_POST['header']), FILTER_SANITIZE_STRING); 
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING); 





$sql = "UPDATE `pages_main_about` SET `header`='$header',`description`='$description' WHERE id_about='$id_about'";


$ret = mysqli_query($link, $sql);


if ($ret){
    header('Location: /medion-admin-panel/pages_settings.php');
    exit();
    }else{
        echo('Ошибка отправки в БД');
    }
    