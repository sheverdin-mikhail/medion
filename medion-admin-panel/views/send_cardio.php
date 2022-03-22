<?php
    require_once '../include/db.php';
?>
<?php 
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
		$types = array('jpg','png', 'jpeg');
		
		// если расширение не входит в список допустимых - return
		if(!in_array($mime, $types))
			return 'Недопустимый тип файла.';
		
		return true;
	}





$id =  filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
$description =  filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
if(!empty($_FILES['photo']['name'])){
	$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
}
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 







if ($choice == 'add'){
	if(isset($photo)){
		$sql = "INSERT INTO `cardio` (`description`, `photo`) VALUES ('$description', '$photo')";
		$ret = mysqli_query($link, $sql);
	}
}elseif($choice=='edit'){
	$sql = "UPDATE `cardio` SET  `description`='$description'";
	if(isset($photo)){
		$sql= $sql.", `photo`='$photo'";
	}
	$sql = $sql." WHERE `id`='$id'";
	$ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	$sql = "DELETE FROM `cardio` WHERE `id` = '$id'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/cardio_edit.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
