<?php
    require_once '../include/db.php';
	if(count($_GET)>0){
		if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_GET['keystring']){
			$username =  filter_var(trim($_GET['username']), FILTER_SANITIZE_STRING);
			$pass1 = filter_var(trim($_GET['password1']), FILTER_SANITIZE_STRING); 
			$keystring = filter_var(trim($_GET['keystring']), FILTER_SANITIZE_STRING); 



			$pass1 = md5($pass1."safsggddw2e4fd2_asdwe");

			$sql = "SELECT * FROM `users` WHERE `user_name` = '$username' AND `user_pass` = '$pass1'";
			$ret = mysqli_query($link, $sql);
			$user = mysqli_fetch_all($ret, MYSQLI_ASSOC);
			if (count($user)==0){
				$alert =  "Пользователь не найден.";
				?>
				<? if ($alert!=""): ?>
					<div class="alert__container" ><span class="alert"><?=$alert?></span></div>
					<a href="login.php">Назад</a>
				<? endif; ?>
			<?
				exit();
			}
			if ($ret){
				setcookie('user', $user[0]['user_name'], time()+3600*24, "/");
				header('Location: /medion-admin-panel/admin.php');
			}else{
				$alert =  "Ошибка отправки в БД.";
				?>
				<? if ($alert!==""): ?>
					<div class="alert__container" ><span class="alert"><?=$alert?></span></div>
				<? endif; ?><?
			}
			exit();
		}else{
			$alert =  "Неверно введен ключ, повторите попытку.";
			?>
			<? if ($alert!==""): ?>
				<div class="alert__container" ><span class="alert"><?=$alert?></span></div>
				<a href="login.php">Назад</a>
			<? endif; ?>
		<?
		exit();
		}
		
	}
?>
