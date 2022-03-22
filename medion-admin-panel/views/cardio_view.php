<? require_once 'include/db.php';
function getCardio($link){
    $sql = "SELECT * FROM cardio";
    $result = mysqli_query($link, $sql);
    $context = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $context;
}

function MainSliderView($link){
    $sql = "SELECT * FROM `pages_main_slider` WHERE `page` = 2";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}
function getVideoView($link){
    $sql = "SELECT * FROM `cardio_video`";
    $result = mysqli_query($link, $sql);
    $divisions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $divisions;
}

$cardio = getCardio($link);
$slider = MainSliderView($link);
$videos = getVideoView($link);