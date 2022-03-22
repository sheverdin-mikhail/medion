<?php
    require_once '../include/db.php';

    $name =  filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $page = filter_var(trim($_POST['page']), FILTER_SANITIZE_STRING); 

    if(isset($name, $page)){
        $sql = "UPDATE `footer` SET `".$page."`='$name' WHERE id=1";
        $ret = mysqli_query($link, $sql);
        
    }

    if($ret){
        header('Location: /medion-admin-panel/footer_edit.php');
        exit();
    }else{
        echo('Ошибка отправки в БД');
    }