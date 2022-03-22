
<?php 
$name_service =  filter_var(trim($_GET['name_service']), FILTER_SANITIZE_STRING);
$choice = filter_var(trim($_GET['choice']), FILTER_SANITIZE_STRING); 



if($choice == 'name'){
    $sql = "SELECT * FROM `services` WHERE `name_service` LIKE '%$name_service%'";
    $ret = mysqli_query($link, $sql);
    $searching = true;
    $find_services = mysqli_fetch_all($ret, MYSQLI_ASSOC);
}else if($choice == 'division'){
    $sql2 = "SELECT * FROM `division` WHERE `name_division`='$name_service'";
    $ret2 = mysqli_query($link, $sql2);
    $division = mysqli_fetch_all($ret2, MYSQLI_ASSOC);
    $id_division = $division[0]['id_division'];
    $searching = true;
    $sql = "SELECT * FROM services, services_division WHERE services_division.id_division = '$id_division' AND
    services.id_service = services_division.id_service";
    $ret = mysqli_query($link, $sql);
    $find_services = mysqli_fetch_all($ret, MYSQLI_ASSOC);
    
}



?>