<?php
    require_once '../include/db.php';

    function can_upload($file){
        // если имя пустое, значит файл не выбран
        if($file['name'] == '')
            return 'Вы не выбрали файл.';
        
        /* если размер файла 0, значит его не пропустили настройки 
        сервера из-за того, что он слишком большой */
        if($file['size'] == 0)
            return 'Файл слишком большой.';
        
        // разбиваем имя файла по точке и получаем массив
        $getMime = explode('.', $file['name']);
        // нас интересует последний элемент массива - расширение
        $mime = strtolower(end($getMime));
        // объявим массив допустимых расширений
        $types = array('pdf');
        
        // если расширение не входит в список допустимых - return
        if(!in_array($mime, $types))
            return 'Недопустимый тип файла.';
        
        return true;
      }

    function make_upload($file, $name){	
        // формируем уникальное имя картинки: случайное число и name
            return copy($file['tmp_name'], $name);
        }


    if(!empty($_FILES['politic']['name'])){
        $politic = file_get_contents($_FILES['politic']['tmp_name']);
    }

    if(isset($politic)){
        $check = can_upload($_FILES['politic']);
        $filename='../../static/politic.pdf';
        if($check){
            if(file_exists($filename)){
                unlink($filename);
            }
        }
        $ret = make_upload($_FILES['politic'], $filename);
    }

    if($ret){
        header('Location: /medion-admin-panel/footer_edit.php');
        exit();
    }else{
        echo('Ошибка загрузки файла');
    }