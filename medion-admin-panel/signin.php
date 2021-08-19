<? include "templates/header.php" ?>

        <div class="page">

            <div class="container">
                <div class="admin">
                    <? if ($_COOKIE['user'] == '') : ?>

                        <form action="views/signin_view.php" method="POST" class="admin__form">
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
                            <div class="admin__blockinput">
                                <input type="submit" value="Войти" class="admin__button">
                            </div>
                            
                            <a href="login.php">Войти</a>
                        </form>
                        
                    <? else : ?>
                        <p> <?= $_COOKIE['user'] ?> Вы авторизованы/ <a href="exit.php">Выйти</a></p>
                    <? endif; ?>
                </div>
            </div>
        </div>


<? include "templates/footer.php" ?>