<?php 

function get_all($link){
    $sql = "SELECT * FROM clinics";
    $result = mysqli_query($link, $sql);
    $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $clinics;
}

function get_divisions($link){
    $sql = "SELECT division.slug_division AS 'slug', division.division_icon AS 'icon', division.name_division AS 'name' FROM division";
    $result = mysqli_query($link, $sql);
    $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $clinics;
}




function get_clinic($link, $slug){
    $sql = "SELECT * FROM clinics
        WHERE clinics.clinics_slug LIKE '$slug'";
        $result = mysqli_query($link, $sql);
        $clinic = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $clinic;
}

$clinics = get_all($link);
$divisions = get_divisions($link);

?>