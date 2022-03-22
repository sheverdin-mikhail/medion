<?php
    require_once '../include/db.php';
?>
<?php 

$seo_keys =  filter_var(trim($_POST['seo_keys']), FILTER_SANITIZE_STRING);
$seo_title = filter_var(trim($_POST['seo_title']), FILTER_SANITIZE_STRING); 
$seo_description = filter_var(trim($_POST['seo_description']), FILTER_SANITIZE_STRING); 
$id_page = filter_var(trim($_POST['id_page']), FILTER_SANITIZE_STRING); 




$sql = "UPDATE `seo_words` SET `seo_keys`='$seo_keys',`seo_title`='$seo_title',`seo_description`='$seo_description' WHERE id_page='$id_page'";


$ret = mysqli_query($link, $sql);


if ($ret){
    header('Location: /medion-admin-panel/seo_settings.php');
    exit();
    }else{
        echo('Ошибка отправки в БД');
    }
    