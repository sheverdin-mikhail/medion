<?php
    require_once '../include/db.php';
?>
<?php 

$name_category =  filter_var(trim($_POST['name_category']), FILTER_SANITIZE_STRING);
$id_category =  filter_var(trim($_POST['id_category']), FILTER_SANITIZE_STRING);
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 



if ($choice == 'add'){
    $sql = "INSERT INTO `estetic_category` 
    (`name_category`)  
    VALUES ('$name_category')";
    $ret = mysqli_query($link, $sql);

	
}elseif($choice=='edit'){
    $sql = "UPDATE `estetic_category` 
    SET `name_category` = '$name_category' WHERE `id_category` = $id_category";
    $ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	
	$sql = "DELETE FROM `estetic_category` WHERE `id_category` = '$id_category' ";
	$ret = mysqli_query($link, $sql);
}


if ($ret){
    header('Location: /medion-admin-panel/estetic_med_edit.php');
    exit();
}else{
    $err_message = 'Ошибка отправки в базу данных';
    setcookie('err_message', $err_message, time()+15, "/");
    header('Location: /medion-admin-panel/estetic_med_edit.php');
}