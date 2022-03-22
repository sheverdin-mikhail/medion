<?php 
setcookie('user', $user[0]['user_name'], time()-3600*24, "/");
header('Location: /medion-admin-panel/admin.php');
?>