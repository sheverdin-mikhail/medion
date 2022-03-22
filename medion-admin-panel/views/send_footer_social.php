<?php
    require_once '../include/db.php';

    $facebook =  filter_var(trim($_POST['facebook']), FILTER_SANITIZE_STRING);
    $telegram = filter_var(trim($_POST['telegram']), FILTER_SANITIZE_STRING); 
    $instagram = filter_var(trim($_POST['instagram']), FILTER_SANITIZE_STRING); 

    if(isset($facebook, $telegram, $instagram)){
        $sql = "UPDATE `footer` SET `facebook`='$facebook', `telegram`='$telegram', `instagram`='$instagram' WHERE id=1";
        $ret = mysqli_query($link, $sql);
        
    }

    if($ret){
        header('Location: /medion-admin-panel/footer_edit.php');
        exit();
    }else{
        echo('Ошибка отправки в БД');
    }