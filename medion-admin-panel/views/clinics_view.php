<? require_once 'include/db.php';
function getClinicsView($link){
    $sql = "SELECT * FROM clinics";
    $result  = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


$clinics = getClinicsView($link);
