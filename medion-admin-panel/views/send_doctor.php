<?php
    require_once '../include/db.php';
?>
<?php 
$name_doctor =  filter_var(trim($_POST['name_doctor']), FILTER_SANITIZE_STRING);
$post_doctor = filter_var(trim($_POST['post_doctor']), FILTER_SANITIZE_STRING); 
$experience_doctor = filter_var(trim($_POST['experience_doctor']), FILTER_SANITIZE_STRING); 
$id_cat = filter_var(trim($_POST['id_doctors-category']), FILTER_SANITIZE_STRING); 


$sql = "INSERT INTO `doctors` (`name_doctor`, `post_doctor`, `experience_doctor`, `id_doctors-category`)  VALUES ('$name_doctor', '$post_doctor', '$experience_doctor','$id_cat')";
$ret = mysqli_query($link, $sql);
$id_service = mysqli_insert_id($link);



if ($ret){
    header('Location: /medion-admin-panel/doctors_edit.php');
    exit();
    }else{
        echo('Ошибка отправки в БД');
    }
    