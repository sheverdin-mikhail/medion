
<?php 


    function get_divisions($link){
        $sql = "SELECT
        division.id_division AS 'ID',
        division.name_division AS 'Подразделение',
        division.slug_division AS 'Ссылка',
        division.division_icon AS 'Icon',
        (SELECT GROUP_CONCAT(services.name_service SEPARATOR ', ') FROM services_division, services WHERE 
         services.id_service=services_division.id_service and 
         division.id_division=services_division.id_division) AS 'Услуга'
         FROM division
         ";

        $result = mysqli_query($link, $sql);

        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $divisions;
    }
   

    function get_services($link, $id_division){
        $sql = "SELECT  *,        
        (SELECT GROUP_CONCAT(clinics.name_clinics SEPARATOR ', ') FROM clinic_services, clinics WHERE 
              clinics.id_clinics=clinic_services.id_clinics and 
              clinic_services.id_service=services.id_service) AS 'name_clinics' 

            FROM services, services_division WHERE services_division.id_division = '$id_division' AND
                    services.id_service = services_division.id_service   
        ";
        $result = mysqli_query($link, $sql);
        $services = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $services;
    }

    function get_clinics($link, $id_service){
        $sql = "SELECT * FROM clinics, clinic_services
        WHERE clinic_services.id_service = '$id_service' AND
        clinics.id_clinics= clinic_services.id_clinics       
        ";
        $result = mysqli_query($link, $sql);
        $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $clinics;
    }

    function get_doctors($link){
        $sql = "SELECT *, `doctors_category`.`name_doctors-category` FROM doctors
        LEFT JOIN doctors_category ON `doctors_category`.`id_doctors-category` = `doctors`.`id_doctors-category` LIMIT 20" ;
        $result = mysqli_query($link, $sql);
        $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $clinics;
    }

    $doctors = get_doctors($link);
    $divisions = get_divisions($link);




    
 
?>
