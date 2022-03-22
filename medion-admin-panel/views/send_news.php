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




$id_news =  filter_var(trim($_POST['id_news']), FILTER_SANITIZE_STRING);
$news_name =  filter_var(trim($_POST['news_name']), FILTER_SANITIZE_STRING);
$news_description =  filter_var(trim($_POST['news_description']), FILTER_SANITIZE_STRING);
$news_short =  filter_var(trim($_POST['news_short']), FILTER_SANITIZE_STRING);
$news_cat = 1;
if(!empty($_FILES['news_photo']['name'])){
	$news_photo = addslashes(file_get_contents($_FILES['news_photo']['tmp_name']));
}
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 







if ($choice == 'add'){
	if(isset($news_photo)){
		
		$sql = "INSERT INTO `news` (`news_name`, `news_description`, `news_short`, `news_cat`, `news_photo`) VALUES ('$news_name', '$news_description', '$news_short', '$news_cat', '$news_photo')";
		$ret = mysqli_query($link, $sql);

	}

	
}elseif($choice=='edit'){
	if(isset($news_photo)){
		$sql = "UPDATE `news` SET `news_name`='$news_name', `news_description`='$news_description', `news_short`='$news_short', `news_cat`='$news_cat', `news_photo`='$news_photo' WHERE `id_news`='$id_news'";
	}elseif($_FILES['news_photo']['file_name']==""){
		$sql = "UPDATE `news` SET `news_name`='$news_name', `news_description`='$news_description', `news_short`='$news_short', `news_cat`='$news_cat' WHERE `id_news`='$id_news'";
	}
	$ret = mysqli_query($link, $sql);
}elseif($choice=='delete'){
	
	$sql = "DELETE FROM `news` WHERE `id_news` = '$id_news'";
	$ret = mysqli_query($link, $sql);
}




if ($ret){
header('Location: /medion-admin-panel/news_settings.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}
