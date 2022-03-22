<?php
    require_once '../include/db.php';
?>
<?php 

$id_service =  filter_var(trim($_POST['id_service']), FILTER_SANITIZE_STRING);
$name_service =  filter_var(trim($_POST['name_service']), FILTER_SANITIZE_STRING);
$description_service = filter_var(trim($_POST['description_service']), FILTER_SANITIZE_STRING); 
$price_service = filter_var(trim($_POST['price_service']), FILTER_SANITIZE_STRING); 
$id_division = filter_var(trim($_POST['id_division']), FILTER_SANITIZE_STRING); 
$choice = filter_var(trim($_POST['choice']), FILTER_SANITIZE_STRING); 
$id_clinics = $_POST['id_clinics'];


if ($choice == 'edit'){
    $sql = "UPDATE `services` SET name_service='$name_service',description_service='$description_service',price_service='$price_service' WHERE id_service='$id_service'";
    $sql2 = "UPDATE `services_division` SET id_service='$id_service', id_division='$id_division' WHERE id_service='$id_service'";
    $sql3 = "DELETE FROM `clinic_services` WHERE `id_service`='$id_service'";
    $ret3 = mysqli_query($link, $sql3);
    if(count($id_clinics) >= 1):
        foreach($id_clinics as $id_clinic):
            $sql4 = "INSERT INTO `clinic_services` (id_service, id_clinics) VALUES ('$id_service', '$id_clinic')";
            $ret4 = mysqli_query($link, $sql4);
        endforeach;
    endif;
    $ret = mysqli_query($link, $sql);
    $ret2 = mysqli_query($link, $sql2);

}elseif ($choice == 'delete'){

    $sql = "DELETE FROM `services` WHERE `id_service`='$id_service' ";
    $sql2 = "DELETE FROM `services_division` WHERE `id_service`='$id_service' ";
    $ret2 = mysqli_query($link, $sql2);
    $ret = mysqli_query($link, $sql);
}




if ($ret){
    header('Location: /medion-admin-panel/services_edit.php');
    exit();
}else{
    echo('Ошибка отправки в БД');
}
    