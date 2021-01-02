<?php 
        require_once '../include/db.php';
?>


<?php 
    
    function search($link){
        $q = $_GET['search'];
        $sql = "SELECT services.name_service FROM services WHERE services.name_service LIKE '%$q%' LIMIT 10";

        $result = mysqli_query($link, $sql);
        $responce = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        return $responce;
    }

    $responces = search($link);
    

?>

<?php foreach($responces as $responce):?>
    <li><?=$responce['name_service'];?></li>
<?php endforeach; ?>
