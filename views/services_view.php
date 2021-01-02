
<?php 


    function get_divisions($link){
        $sql = "SELECT
        division.id_division AS 'ID',
        division.name_division AS 'Подразделение',
        division.slug_division AS 'Ссылка',
        division.division_icon AS 'Icon',
        (SELECT GROUP_CONCAT(services.name_service SEPARATOR ', ') FROM services_division, services WHERE 
         services.id_service=services_division.id_service and 
         division.id_division=services_division.id_division) AS 'Услуга',
         (SELECT GROUP_CONCAT(clinics.name_clinics SEPARATOR ', ') FROM clinic_division, clinics WHERE 
         clinics.id_clinics=clinic_division.id_clinics and 
         clinic_division.id_division=division.id_division) AS 'Клиника'
         
         FROM division
        
        
         ";

        $result = mysqli_query($link, $sql);

        $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $divisions;
    }
   

    function get_services($link, $id_division){
        $sql = "SELECT * FROM services, services_division
        WHERE services_division.id_division = $id_division AND
        services.id_service = services_division.id_service        
        ";
        $result = mysqli_query($link, $sql);
        $services = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $services;
    }

    function get_clinics($link, $id_division){
        $sql = "SELECT * FROM clinics, clinic_division
        WHERE clinic_division.id_division = $id_division AND
        clinics.id_clinics= clinic_division.id_clinics       
        ";
        $result = mysqli_query($link, $sql);
        $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $clinics;
    }

    $divisions = get_divisions($link);




    
 
?>
