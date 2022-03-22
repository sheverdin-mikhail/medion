<?php
    require_once '../include/db.php';

    $phone =  filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $text =  filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING); 
    $vacancy_phone = filter_var(trim($_POST['vacancy_phone']), FILTER_SANITIZE_STRING); 
    $telegram = filter_var(trim($_POST['telegram']), FILTER_SANITIZE_STRING); 

    $sql = "UPDATE `career` SET `text`='$text', `phone`='$phone', `email`='$email', `vacancy_phone`='$vacancy_phone', `telegram`='$telegram' WHERE `id`='1'";
	$ret = mysqli_query($link, $sql);

    if ($ret){
        header('Location: /medion-admin-panel/career_edit.php');
        exit();
        }else{
            echo('Ошибка отправки в БД');
        }
    