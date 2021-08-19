<? include "templates/header.php" ?>

<div class="admin">
<form action="views/login_view.php" method="GET" class="admin__form">
    <div class="admin__blockinput">
        <label for="username" class="admin__label">Введите логин</label>
        <input type="text" name="username" id="username" class="admin__input" placeholder="Логин">
    </div>
    <div class="admin__blockinput">
        <label for="password1" class="admin__label">Введите пароль</label>
        <input type="password" name="password1" id="password1" class="admin__input" placeholder="Пароль">
    </div>
    <div class="admin__blockinput">
        <input type="submit" value="Войти" class="admin__button">
    </div>
    <a href="signin.php">Регистрация</a>
</form>

</div>
<? include "templates/footer.php" ?>