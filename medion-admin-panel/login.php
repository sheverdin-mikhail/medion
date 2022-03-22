<?php
session_start();
?>
<? include 'views/login_view.php'; ?>
<? include "templates/header3.php" ?>
<div class="admin">
    <form action="" method="GET" class="admin__form">
        <div class="admin__blockinput">
            <label for="username" class="admin__label">Введите логин</label>
            <input type="text" name="username" id="username" class="admin__input" placeholder="Логин">
        </div>
        <div class="admin__blockinput">
            <label for="password1" class="admin__label">Введите пароль</label>
            <input type="password" name="password1" id="password1" class="admin__input" placeholder="Пароль">
        </div>
        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
        <p><img src="./?<?php echo session_name()?>=<?php echo session_id()?>"></p>
        <p><input type="text" name="keystring" class="admin__input"></p>
        <div class="admin__blockinput">
            <input type="submit" value="Войти" class="admin__button">
        </div>
    </form>
</div>
<?
unset($_SESSION['captcha_keystring']);?>
<? include "templates/footer3.php" ?>

