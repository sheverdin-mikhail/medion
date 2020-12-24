<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'mysql');
    define('DB_PASSWORD', 'mysql');
    define('DB_NAME', 'medion_db');

    $mysql = new mysqli(DB_HOST,
    DB_USER,
    DB_PASSWORD,
    DB_NAME);
    if($mysql->connect_errno) exit('Ошибка подулючения к ДБ');
    $mysql->set_charset('utf8');
    $mysql->close();

    $link = mysqli_connect('localhost', 'mysql', 'mysql', 'medion_db')
?>