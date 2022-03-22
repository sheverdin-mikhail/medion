<?
function getEmServices($link){
    $sql = "SELECT * FROM `estetic_medicine`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}

function getEmCategories($link){
    $sql = "SELECT DISTINCT id_category, name_category FROM `estetic_category` RIGHT JOIN `estetic_medicine` ON estetic_medicine.category=estetic_category.id_category";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}

$services = getEmServices($link);
$categories = getEmCategories($link);

