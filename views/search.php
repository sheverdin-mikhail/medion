<?php 
        require_once '../include/db.php';
?>


<?php 
    
    function search($link){
        $q = $_GET['search'];
        $sql = "SELECT 
        services.name_service,
        services.id_service AS 'ID',
        (SELECT division.slug_division FROM division, services_division WHERE 
         division.id_division = services_division.id_division AND
         services.id_service = services_division.id_service) AS 'slug'
         
        FROM services WHERE services.name_service LIKE '%$q%' LIMIT 10
        ";

        $result = mysqli_query($link, $sql);
        $responce = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        return $responce;
    }

    $responces = search($link);
    

?>

<?php foreach($responces as $responce):?>
    <li><a href="/services.php?division_slug=<?=$responce['slug']?>&id_service=<?=(int)$responce['ID']?>"><?=$responce['name_service'];?></a></li>

<?php endforeach; ?>
