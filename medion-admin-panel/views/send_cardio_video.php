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
		$types = array('mp4','ovg', 'webm');
		
		// если расширение не входит в список допустимых - return
		if(!in_array($mime, $types))
			return 'Недопустимый тип файла.';
		
		return true;
	}

	function make_upload($file, $name){	
	// формируем уникальное имя картинки: случайное число и name
		copy($file['tmp_name'], $name);
	}


$id =  filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
$name =  $_POST['name'];
$video = $_FILES['video'];
$choice = $_POST['choice'];

// разбиваем имя файла по точке и получаем массив
$getMime = explode('.', $photo['name']);
// нас интересует последний элемент массива - расширение
$mime = strtolower(end($getMime));


$check = can_upload($_FILES['video']);


if ($choice == 'add'){
	if($check){
		$video_name = rand(1,999999999).$video['name'].$mime;
		$sql = "INSERT INTO `cardio_video` (`name`) VALUES ('$video_name')";
		$ret = mysqli_query($link, $sql);
		$id_slider = mysqli_insert_id($link);
		$new_file = '../../static/video/'.$video_name;
		make_upload($_FILES['video'], $new_file);
	}
}elseif($choice=='edit'){
	if($check){
		if($video['name']){
			$file = '../../static/video/'.$name;
			$video_name = rand(1,999999999).$video['name'].$mime;
			$new_file = '../../static/video/'.$video_name;
			if(file_exists($file)){
				unlink($file);
				make_upload($_FILES['video'], $new_file);
			}else{
				make_upload($_FILES['video'], $new_file);
			}
			$sql = "UPDATE `cardio_video` SET `name`='$video_name' WHERE `id`='$id'";
			$ret = mysqli_query($link, $sql);
		}
	}
	
}elseif($choice=='delete'){
	$file = '../../static/video/'.$name;
	if(file_exists($file)){
		unlink($file);
		$sql = "DELETE FROM `cardio_video` WHERE `id` = '$id'";
		$ret = mysqli_query($link, $sql);
	}
	
}




if ($ret){
header('Location: /medion-admin-panel/cardio_edit.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
