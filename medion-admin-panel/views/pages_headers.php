<?php
    require_once '../include/db.php';
?>
<?php 

$id_header =  filter_var(trim($_POST['id_header']), FILTER_SANITIZE_STRING);
$header_text = filter_var(trim($_POST['header_text']), FILTER_SANITIZE_STRING); 
$header_description = filter_var(trim($_POST['header_description']), FILTER_SANITIZE_STRING); 




$sql = "UPDATE `pages_headers` SET `header_text`='$header_text',`header_description`='$header_description' WHERE `id_header`='$id_header'";
$ret = mysqli_query($link, $sql);


if ($ret){
    header('Location: /medion-admin-panel/pages_settings.php');
    exit();
    }else{
        echo('Ошибка отправки в БД');
    }
    