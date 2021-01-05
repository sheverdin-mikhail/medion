
<?php 


    function get_doctors($link){
        $sql = "SELECT 
        *,
        `doctors_category`.`name_doctors-category`
        
        FROM doctors
        LEFT JOIN doctors_category ON `doctors_category`.`id_doctors-category` = `doctors`.`id_doctors-category`";
        $result = mysqli_query($link, $sql);
        $doctors = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $doctors;
    };

    function get_doctorsCategory($link){
        $sql = "SELECT 
            *
        FROM doctors_category";
        $result = mysqli_query($link, $sql);
        $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $category;
    }

    $doctors = get_doctors($link);
    $category = get_doctorsCategory($link);

?>