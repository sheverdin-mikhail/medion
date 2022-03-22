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
		$types = array('jpg','png');
		
		// если расширение не входит в список допустимых - return
		if(!in_array($mime, $types))
			return 'Недопустимый тип файла.';
		
		return true;
	}

	function make_upload($file, $name){	
	// формируем уникальное имя картинки: случайное число и name
		copy($file['tmp_name'], '../../static/img/main_slider/'.$name);
	}



$id_slider =  filter_var(trim($_POST['id_slider']), FILTER_SANITIZE_STRING);
$header_slider =  filter_var(trim($_POST['header_slider']), FILTER_SANITIZE_STRING);
$description_slider = filter_var(trim($_POST['description_slider']), FILTER_SANITIZE_STRING); 
$photo = $_FILES['photo'];
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 
$button_link = filter_var(trim($_POST['button_link']), FILTER_SANITIZE_STRING); 
$button_slider = filter_var(trim($_POST['button_slider']), FILTER_SANITIZE_STRING); 

// разбиваем имя файла по точке и получаем массив
$getMime = explode('.', $photo['name']);
// нас интересует последний элемент массива - расширение
$mime = strtolower(end($getMime));


$check = can_upload($_FILES['photo']);



if ($choice == 'add'){
	$sql = "INSERT INTO `pages_main_slider` (`header_slider`, `description_slider`, `button_slider`, `button_link`, `photo`, `page`) VALUES ('$header_slider','$description_slider', '$button_slider', '$button_link', '', '2')";
	$ret = mysqli_query($link, $sql);
	$id_slider = mysqli_insert_id($link);
	if($check){
		make_upload($_FILES['photo'], $id_slider.'.'.$mime);
	}
	$photo_name = $id_slider.'.'.$mime;
	$sql2 = "UPDATE `pages_main_slider` SET `photo`='$photo_name' WHERE `id_slider`='$id_slider'";
	$ret2 = mysqli_query($link, $sql2);
	
}elseif($choice=='edit'){
	if($check && $photo['tmp_name']!=''){
		if($photo['name']){
			$file = '../../static/img/main_slider/'.$id_slider.'.'.$mime;
			if(file_exists($file)){
				unlink($file);
				make_upload($_FILES['photo'], $id_slider.'.'.$mime);
			}else{
				make_upload($_FILES['photo'], $id_slider.'.'.$mime);
			}
			$photo_name = $id_slider.'.'.$mime;
		}
		$sql = "UPDATE `pages_main_slider` SET `header_slider`='$header_slider',`description_slider`='$description_slider', `button_slider`='$button_slider', `button_link`='$button_link', `photo`='$photo_name' WHERE `id_slider`='$id_slider'";
	}else{
		$sql = "UPDATE `pages_main_slider` SET `header_slider`='$header_slider',`description_slider`='$description_slider', `button_slider`='$button_slider', `button_link`='$button_link' WHERE `id_slider`='$id_slider'";
	}
	$ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	$file = '../../static/img/main_slider/'.$id_slider.'.png';
	$file2 = '../../static/img/main_slider/'.$id_slider.'.jpg';
	if(file_exists($file)){
		unlink($file);
	}elseif(file_exists($file2)){
		unlink($file2);
	}
	$sql = "DELETE FROM `pages_main_slider` WHERE `id_slider` = '$id_slider'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/cardio_edit.php');
exit();
}else{
    echo('Ошибка отправки в БД');
	echo $ret;
	echo $ret2;
}
