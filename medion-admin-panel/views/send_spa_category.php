<?php
    require_once '../include/db.php';
?>
<?php 



$id_category =  filter_var(trim($_POST['id_category-spa']), FILTER_SANITIZE_STRING);
$name_category =  filter_var(trim($_POST['name_category']), FILTER_SANITIZE_STRING);
$description_category =  filter_var(trim($_POST['description_category']), FILTER_SANITIZE_STRING);
$icon_category =  filter_var(trim($_POST['icon_category']), FILTER_SANITIZE_STRING);
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 







if ($choice == 'add'){
	
    $sql = "INSERT INTO `spa_category` (`name_category`, `description_category`, `icon_category`) VALUES ('$name_category', '$description_category', '$icon_category')";
    $ret = mysqli_query($link, $sql);

	
}elseif($choice=='edit'){

		$sql = "UPDATE `spa_category` SET `name_category`='$name_category', `description_category`='$description_category', `icon_category`='$icon_category' WHERE `id_category-spa`='$id_category'";
	    $ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	
	$sql = "DELETE FROM `spa_category` WHERE `id_category-spa` = '$id_category'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/spa_edit.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
