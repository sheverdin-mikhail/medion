<? 
// include '../include/db.php';

if (isset($_GET['month'])) {$month = $_GET['month'];}
if (isset($_GET['year'])) {$year = $_GET['year'];}


    
if(isset($_GET['month'], $_GET['year'])){
    $sql = "SELECT * FROM news WHERE MONTH(news_date) = $month and YEAR(news_date) = $year";
    $req = mysqli_query($link, $sql);
    $news = mysqli_fetch_all($req, MYSQLI_ASSOC);
}
    
    

