<?php
    require_once '../include/db.php';
?>
<?php 

$id =  filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
$name =  filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$requirements =  filter_var(trim($_POST['requirements']), FILTER_SANITIZE_STRING);
$responsibilities = filter_var(trim($_POST['responsibilities']), FILTER_SANITIZE_STRING); 
$conditions = filter_var(trim($_POST['conditions']), FILTER_SANITIZE_STRING); 
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 



if ($choice == 'add'){
	$sql = "INSERT INTO `career_vacancy` (`name`, `requirements`, `responsibilities`, `conditions`) VALUES ('$name', '$requirements','$responsibilities', '$conditions')";
	$ret = mysqli_query($link, $sql);
}elseif($choice=='edit'){
	$sql = "UPDATE `career_vacancy` SET `name`='$name', `requirements`='$requirements',`responsibilities`='$responsibilities', `conditions`='$conditions'  WHERE `id`='$id'";
	$ret = mysqli_query($link, $sql);
    echo $sql;
}elseif($choice=='delete'){
	$sql = "DELETE FROM `career_vacancy` WHERE `id` = '$id'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
    header('Location: /medion-admin-panel/career_edit.php');
    exit();
}else{
    echo('Ошибка отправки в БД');
}
