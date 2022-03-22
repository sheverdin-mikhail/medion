<?php
    require_once '../include/db.php';
?>
<?php 



$id =  filter_var(trim($_POST['id_spa-procedure']), FILTER_SANITIZE_STRING);
$name =  filter_var(trim($_POST['name_spa-procedure']), FILTER_SANITIZE_STRING);
$description =  filter_var(trim($_POST['description_spa-procedure']), FILTER_SANITIZE_STRING);
$price =  filter_var(trim($_POST['price_spa-procedure']), FILTER_SANITIZE_STRING);
$quantity =  filter_var(trim($_POST['quantity_spa-procedure']), FILTER_SANITIZE_STRING);
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 
$category = filter_var(trim($_POST['id_category-spa']), FILTER_SANITIZE_STRING); 







if ($choice == 'add'){
	
    $sql = "INSERT INTO `spa_procedure` (`name_spa-procedure`, `description_spa-procedure`, `price_spa-procedure`, `quantity_spa-procedure`, `id_category-spa`) VALUES ('$name', '$description', '$price', '$quantity', '$category')";
    $ret = mysqli_query($link, $sql);


	
}elseif($choice=='edit'){
		$sql = "UPDATE `spa_procedure` SET `name_spa-procedure`='$name', `description_spa-procedure`='$description', `price_spa-procedure`='$price', `quantity_spa-procedure`='$quantity', `id_category-spa`='$category' WHERE `id_spa-procedure`='$id'";
	    $ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	
	$sql = "DELETE FROM `spa_procedure` WHERE `id_spa-procedure` = '$id'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/spa_edit.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
