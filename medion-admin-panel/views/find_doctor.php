
<?php 
$name_doctor =  filter_var(trim($_GET['name_doctor']), FILTER_SANITIZE_STRING);




$sql = "SELECT * FROM `doctors` WHERE `name_doctor` LIKE '%$name_doctor%'";
$ret = mysqli_query($link, $sql);
$searching = true;
$find_doctors = mysqli_fetch_all($ret, MYSQLI_ASSOC);




?>