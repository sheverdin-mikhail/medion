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




$id_clinics =  filter_var(trim($_POST['id_clinics']), FILTER_SANITIZE_STRING);
$name_clinics =  filter_var(trim($_POST['name_clinics']), FILTER_SANITIZE_STRING);
$address_clinics =  filter_var(trim($_POST['address_clinics']), FILTER_SANITIZE_STRING);
$map =  filter_var(trim($_POST['map']), FILTER_SANITIZE_STRING);
$clinics_slug =  filter_var(trim($_POST['clinics_slug']), FILTER_SANITIZE_STRING);
$clinic_text =  filter_var(trim($_POST['clinic_text']), FILTER_SANITIZE_STRING);
if(!empty($_FILES['clinics_img']['name'])){
	$clinics_img = addslashes(file_get_contents($_FILES['clinics_img']['tmp_name']));
}
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 







if ($choice == 'add'){
	if(isset($clinics_img)){
		$sql = "INSERT INTO `clinics` (`name_clinics`, `address_clinics`, `map`, `clinics_slug`, `clinic_text`, `clinics_img`) VALUES ('$name_clinics', '$address_clinics', '$map', '$clinics_slug', '$clinic_text', '$clinics_img')";
		$ret = mysqli_query($link, $sql);
	}	
}elseif($choice=='edit'){
	if(isset($clinics_img)){
		$sql = "UPDATE `clinics` SET `name_clinics`='$name_clinics', `address_clinics`='$address_clinics', `map`='$map', `clinics_slug`='$clinics_slug', `clinic_text`='$clinic_text', `clinics_img`='$clinics_img' WHERE `id_clinics`='$id_clinics'";
	}elseif($_FILES['news_photo']['file_name']==""){
		$sql = "UPDATE `clinics` SET `name_clinics`='$name_clinics', `address_clinics`='$address_clinics', `map`='$map', `clinics_slug`='$clinics_slug', `clinic_text`='$clinic_text' WHERE `id_clinics`='$id_clinics'";
	}
	$ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	
	$sql = "DELETE FROM `clinics` WHERE `id_clinics` = '$id_clinics'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/clinics_edit.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
