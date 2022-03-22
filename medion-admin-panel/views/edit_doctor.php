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
	$types = array('jpg');
	
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';
	
	return true;
  }

function make_upload($file, $name){	
// формируем уникальное имя картинки: случайное число и name
	copy($file['tmp_name'], '../../static/img/doctors_photo/'.$name);
}

$id_doctor =  filter_var(trim($_POST['id_doctor']), FILTER_SANITIZE_STRING);
$name_doctor =  filter_var(trim($_POST['name_doctor']), FILTER_SANITIZE_STRING);
$post_doctor = filter_var(trim($_POST['post_doctor']), FILTER_SANITIZE_STRING); 
$experience_doctor = filter_var(trim($_POST['experience_doctor']), FILTER_SANITIZE_STRING); 
$id_cat = filter_var(trim($_POST['id_doctors-category']), FILTER_SANITIZE_STRING); 
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 
  
 

$check = can_upload($_FILES['file']);
$filename = '../../static/img/doctors_photo/'.$name_doctor.'.jpg';



if ($choice == 'edit'){

    $sql = "UPDATE `doctors` SET `name_doctor`='$name_doctor',`post_doctor`='$post_doctor',`experience_doctor`='$experience_doctor', `id_doctors-category`='$id_cat'  WHERE id_doctor='$id_doctor'";
	$check = can_upload($_FILES['file']);
	if($check){
		if(file_exists($filename)){
			unlink($filename);
		}
	}
	make_upload($_FILES['file'], $name_doctor.'.jpg');
	

}else if($choice == 'delete'){
    $sql = "DELETE FROM `doctors` WHERE `id_doctor`='$id_doctor' ";
	$check = can_upload($_FILES['file']);
	if($check){
		if(file_exists($filename)){
			unlink($filename);
		}
	}

}


$ret = mysqli_query($link, $sql);


if ($ret){
    header('Location: /medion-admin-panel/doctors_edit.php');
    exit();
    }else{
        echo('Ошибка отправки в БД');
    }
    