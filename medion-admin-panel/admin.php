
<? include "templates/header.php" ?>
<?php
require_once 'include/db.php';
?>
        <div class="page">

            <div class="container">
                <div class="admin">
                    <? if ($_COOKIE['user'] == '') : ?>

                        Вы не авторизованы <a href="login.php">Войти</a>
                        
                    <? else : ?>
                        <p> <?= $_COOKIE['user'] ?> Вы авторизованы/ <a href="views/exit.php">Выйти</a></p>
                    <? endif; ?>
                </div>
            </div>
        </div>

  
<? include "templates/footer.php" ?>