<?php
    require_once '../include/db.php';

    $address =  filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
    $clinic =  filter_var(trim($_POST['clinic']), FILTER_SANITIZE_STRING);
    $address_link = filter_var(trim($_POST['address_link']), FILTER_SANITIZE_STRING); 
    $number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING); 

    if(isset($address, $clinic, $address_link, $number)){
        $sql = "UPDATE `footer` SET `address".$number."`='$address', `clinic".$number."`='$clinic', `address_link".$number."`='$address_link' WHERE id=1";
        $ret = mysqli_query($link, $sql);
        
    }

    if($ret){
        header('Location: /medion-admin-panel/footer_edit.php');
        exit();
    }else{
        echo('Ошибка отправки в БД');
    }