<?php
    require_once '../include/db.php';
?>
<?php 

function can_upload($file){
	// если имя пустое, значит файл не выбран
    if($file['name'] == '')
		return false;
	
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if($file['size'] == 0)
		return false;
	
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'jpeg');
	
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return false;
	
	return true;
  }

function make_upload($file, $name){	
// формируем уникальное имя картинки: случайное число и name
	copy($file['tmp_name'], '../../static/img/estetic_med/'.$name);
}

$id_em =  filter_var(trim($_POST['id_em']), FILTER_SANITIZE_STRING);
$em_name =  filter_var(trim($_POST['em_name']), FILTER_SANITIZE_STRING);
$em_description = filter_var(trim($_POST['em_description']), FILTER_SANITIZE_STRING); 
if(!empty($_FILES['main_photo']['name'])){
	$main_photo = addslashes(file_get_contents($_FILES['main_photo']['tmp_name']));
}
if(!empty($_FILES['before_photo']['name'])){
	$before_photo = addslashes(file_get_contents($_FILES['before_photo']['tmp_name']));
}
if(!empty($_FILES['in_photo']['name'])){
	$in_photo = addslashes(file_get_contents($_FILES['in_photo']['tmp_name']));
}
if(!empty($_FILES['after_photo']['name'])){
	$after_photo = addslashes(file_get_contents($_FILES['after_photo']['tmp_name']));
}
$id_category = filter_var(trim($_POST['id_category']), FILTER_SANITIZE_STRING); 
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 



if ($choice == 'add'){
	if(isset($main_photo, $before_photo ,$in_photo ,$after_photo)){
		
		$sql = "INSERT INTO `estetic_medicine` 
        (`em_name`, `em_description`, `main_photo`, `before_photo`, `in_photo`, `after_photo`, `category`)  
        VALUES ('$em_name', '$em_description', '$main_photo','$before_photo','$in_photo','$after_photo','$id_category')";
		$ret = mysqli_query($link, $sql);

	}

	
}elseif($choice=='edit'){
	if(isset($main_photo, $before_photo ,$in_photo ,$after_photo)){
		$sql = "UPDATE `estetic_medicine` 
        SET `em_name` = '$em_name', 
        `category` = $id_category,   
        `em_description`='$em_description', 
        `main_photo`='$main_photo', 
        `before_photo`='$before_photo',
        `in_photo` = '$in_photo',
        `after_photo` = '$after_photo' WHERE `id_em` = $id_em";
        $ret = mysqli_query($link, $sql);
	}else{
		$sql = "UPDATE `estetic_medicine` 
        SET `em_name` = '$em_name', 
        `category` = $id_category,   
        `em_description`='$em_description' ";
        if(isset($main_photo)){
            $sql = $sql.",`main_photo`='$main_photo'";
        }
        if(isset($before_photo)){
            $sql = $sql.",`before_photo`='$before_photo'";
        }
        if(isset($in_photo)){
            $sql = $sql.",`in_photo`='$in_photo'";
        }
        if(isset($after_photo)){
            $sql = $sql.",`after_photo`='$after_photo'";
        }
        $sql = $sql. " WHERE `id_em` = '$id_em'";
        
        $ret = mysqli_query($link, $sql);
    }
}elseif($choice=='delete'){
	
	$sql = "DELETE FROM `estetic_medicine` WHERE `id_em` = '$id_em' ";
	$ret = mysqli_query($link, $sql);
}


if ($ret){
    header('Location: /medion-admin-panel/estetic_med_edit.php');
    exit();
}else{
    $err_message = 'Ошибка при загрузке изображений, добавьте изображения заново и попробуйте снова.';
    setcookie('err_message', $err_message, time()+15, "/");
    header('Location: /medion-admin-panel/estetic_med_edit.php');
}