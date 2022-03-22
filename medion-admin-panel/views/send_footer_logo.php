<?php
    require_once '../include/db.php';

    if(!empty($_FILES['logo']['name'])){
        $logo = file_get_contents($_FILES['logo']['tmp_name']);
    }

    if(isset($logo)){
        $sql = "UPDATE `footer` SET `logo`='$logo' WHERE id=1";
        $ret = mysqli_query($link, $sql);
    }

    if($ret){
        header('Location: /medion-admin-panel/footer_edit.php');
        exit();
    }else{
        echo('Ошибка отправки в БД');
    }