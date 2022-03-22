<? 
function get_news($link){
    $sql = "SELECT * FROM `news` ORDER BY news_date DESC";
    $req = mysqli_query($link, $sql);
    return mysqli_fetch_all($req, MYSQLI_ASSOC);
}
function get_new($link, $id){
    $sql = "SELECT * FROM `news` WHERE `id_news` = '$id'";
    $req = mysqli_query($link, $sql);
    return mysqli_fetch_all($req, MYSQLI_ASSOC)[0];
}

if(isset($_GET['id'])){
    $news_id = $_GET['id'];
    $new_get = get_new($link, $news_id);
}


$news = get_news($link);