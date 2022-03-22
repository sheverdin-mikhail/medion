<?php
session_start();
?>
<? include 'views/signin_view.php'; ?>
<? include "templates/header3.php" ?>
        <div class="page">
            <div class="container">
                <div class="admin">
                    <? if ($_COOKIE['user'] == '') : ?>

                        <form action="" method="POST" class="admin__form">
                            <div class="admin__blockinput">
                                <label for="username" class="admin__label">Введите логин</label>
                                <input type="text" name="username" id="username" class="admin__input" placeholder="Логин">
                            </div>
                            <div class="admin__blockinput">
                                <label for="password1" class="admin__label">Введите пароль</label>
                                <input type="password" name="password1" id="password1" class="admin__input" placeholder="Пароль">
                            </div>
                            <div class="admin__blockinput">
                                <label for="password2" class="admin__label">Повторите пароль</label>
                                <input type="password" name="password2" id="password2" class="admin__input" placeholder="Повторие пароль">
                            </div>
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                            <p><img src="./?<?php echo session_name()?>=<?php echo session_id()?>"></p>
                            <p><input type="text" name="keystring" class="admin__input"></p>
                            <div class="admin__blockinput">
                                <input type="submit" value="Зарегестрироваться" class="admin__button">
                            </div>
                            
                            <a href="login.php">Войти</a>
                        </form>
                        
                    <? else : ?>
                        <p> <?= $_COOKIE['user'] ?> Вы авторизованы/ <a href="views/exit.php">Выйти</a></p>
                    <? endif; ?>
                </div>
            </div>
        </div>


<? include "templates/footer3.php" ?>