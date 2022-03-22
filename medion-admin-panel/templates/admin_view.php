<?php
    require_once '../include/db.php';
?>
<?php 

function ServicesView($link){
    $sql = "SELECT
    services.id_service AS 'id_service',
    services.name_service AS 'name_service',
    services.description_service AS 'description_service',
    services.price_service AS 'price_service',
    
        (SELECT services_division.id_division FROM services_division WHERE 
     services_division.id_service=services.id_service LIMIT 1) AS 'id_division'
    FROM `services`;";
    $result = mysqli_query($link, $sql);
    $services = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $services;
}

function DivisionsView($link){
    $sql = "SELECT * FROM `division`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
?>