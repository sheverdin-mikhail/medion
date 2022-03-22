<? 
function get_news($link){
    $sql = "SELECT * FROM `news` WHERE news_cat=2 ORDER BY news_date DESC";
    $req = mysqli_query($link, $sql);
    return mysqli_fetch_all($req, MYSQLI_ASSOC);
}


$news = get_news($link);