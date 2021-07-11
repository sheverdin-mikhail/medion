<?php 

 header("Content-Type: text/html; charset=UTF-8");
//Заполнить все что ниже, до пунктира
$host = "Хост сервера"; //Пример: a355412.mysql.mchost.ru
$db_admin_name = "Имя админа базы данных"; //Иногда совпадает с именем админа хоста, надо смотреть в настройках
$db_pass = "Пароль базы данных";
$db_name = "Название базы данных";
//-------------------------------------------------------------------------------------------


$link = mysqli_connect($host,
$db_admin_name,
$db_pass,
$db_name,);
mysqli_set_charset($link, "utf8mb4");


      
?>