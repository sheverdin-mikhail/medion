<? require_once 'include/db.php';
function getCareerView($link){
    $sql = "SELECT * FROM career LIMIT 1";
    $result  = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
}
function getVacancyView($link){
    $sql = "SELECT * FROM career_vacancy";
    $result  = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$career = getCareerView($link);
$vacancy = getVacancyView($link);