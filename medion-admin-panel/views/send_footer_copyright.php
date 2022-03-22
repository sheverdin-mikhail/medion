<?php
    require_once '../include/db.php';

    $copyright =  filter_var(trim($_POST['copyright']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING); 
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 

    if(isset($copyright, $phone, $email)){
        $sql = "UPDATE `footer` SET `copyright`='$copyright', `phone`='$phone', `email`='$email' WHERE id=1";
        $ret = mysqli_query($link, $sql);
        
    }

    if($ret){
        header('Location: /medion-admin-panel/footer_edit.php');
        exit();
    }else{
        echo('Ошибка отправки в БД');
    }