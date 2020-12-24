<?php 
        require_once 'include/db.php';
?>

<?php 

    function get_clinics($link) {
        $sql = "SELECT * FROM clinics";

        $result = mysqli_query($link, $sql);


        $clinics = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $clinics;
    };

    $clinics = get_clinics($link)

?>

<pre>
<?
    print_r($clinics)
?>
</pre>



    
<?php foreach ($clinics as $clinic): ?>
            <h2> <?= $clinic['name_clinics'] ?></h2>
<?php endforeach; ?>
