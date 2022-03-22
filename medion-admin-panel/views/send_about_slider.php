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

	function make_upload($file, $name){	
	// формируем уникальное имя картинки: случайное число и name
		copy($file['tmp_name'], '../../static/img/about_slider/'.$name);
	}



$id_slide =  filter_var(trim($_POST['id_slide']), FILTER_SANITIZE_STRING);
$photo_name =  filter_var(trim($_POST['photo_name']), FILTER_SANITIZE_STRING);
$photo = $_FILES['photo_file'];
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 



$check = can_upload($_FILES['photo_file']);



if ($choice == 'add'){
	if($check){
		$name = rand(1000,10000).$photo['name'];
		$sql = "INSERT INTO `page_main_slider_about` (`photo`) VALUES ('$name')";
		$ret = mysqli_query($link, $sql);
		make_upload($_FILES['photo_file'], $name);
	}

	
}elseif($choice=='edit'){
	$name = rand(1000,10000).$photo['name'];
	$sql = "UPDATE `page_main_slider_about` SET `photo`='$name' WHERE `id_slide`='$id_slide'";
	if($check){
		if($photo['name']){
			$file = '../../static/img/about_slider/'.$photo_name;
			$file2 = '../../static/img/about_slider/'.$name;
			if(file_exists($file)){
				unlink($file);
				make_upload($_FILES['photo_file'], $name);
			}else{
				make_upload($_FILES['photo_file'], $name);
			}
		}
	}
	$ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	
	$file = '../../static/img/about_slider/'.$photo_name;
	if(file_exists($file)){
		unlink($file);
	}else{
		echo 'Ошибка удаления фотографии, возможно ее не было изначально.';
	}
	$sql = "DELETE FROM `page_main_slider_about` WHERE `id_slide` = '$id_slide'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/pages_settings.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
