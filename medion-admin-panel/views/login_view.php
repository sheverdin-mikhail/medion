<?php
    require_once '../include/db.php';
?>
<?php 
$username =  filter_var(trim($_GET['username']), FILTER_SANITIZE_STRING);
$pass1 = filter_var(trim($_GET['password1']), FILTER_SANITIZE_STRING); 



$pass1 = md5($pass1."safsggddw2e4fd2_asdwe");

$sql = "SELECT * FROM `users` WHERE `user_name` = '$username' AND `user_pass` = '$pass1'";
$ret = mysqli_query($link, $sql);
$user = mysqli_fetch_all($ret, MYSQLI_ASSOC);
if (count($user)==0){
    echo("Пользователь не найден");
    exit();
}
if ($ret){
    setcookie('user', $user[0]['user_name'], time()+3600*24, "/");
    header('Location: /medion-admin-panel/admin.php');
exit();
}else{
    echo('Ошибка отправки в БД');
}

?>