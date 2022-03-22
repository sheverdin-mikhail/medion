<?php
    require_once '../include/db.php';
?>
<?php 
if(count($_POST)>0){
    if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['keystring']){
        $username =  filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
        $pass1 = filter_var(trim($_POST['password1']), FILTER_SANITIZE_STRING); 
        $pass2 = filter_var(trim($_POST['password2']), FILTER_SANITIZE_STRING); 

        if (mb_strlen($username)>25 || mb_strlen($username)<5){
            echo('Недопустимая длина логина (Минимальная длина 5 символов)');
            exit();
        }else if(mb_strlen($pass1)<8){
            echo('Слишком короткий пароль (минимальная длина 8 символов)');
            exit();
        }else if($pass1 != $pass2){
            echo('Пароли не совпадают');
            exit();
        }

        $pass1 = md5($pass1."safsggddw2e4fd2_asdwe");

        $sql = "INSERT INTO `users` (user_name, user_pass) VALUES ('$username', '$pass1')";
        $ret = mysqli_query($link, $sql);
        if ($ret){
        header('Location: /medion-admin-panel/login.php');
        exit();
        }else{
            $alert =  "Ошибка отправки в БД.";
				?>
				<? if ($alert!==""): ?>
					<div class="alert__container" ><span class="alert"><?=$alert?></span></div>
				<? endif; ?><?}
    }else{
        $alert =  "Неверно введен ключ, повторите попытку.";
        ?>
        <? if ($alert!==""): ?>
            <div class="alert__container" ><span class="alert"><?=$alert?></span></div>
            <a href="signin.php">Назад</a>
        <? endif; ?>
    <?
    exit();
    }
}

?>