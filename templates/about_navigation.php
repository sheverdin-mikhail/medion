<?$url = $_SERVER['SCRIPT_NAME'];?>
<nav class="about_nav">
    <div class="container">
        <ul class="about_nav__list">
            <li class="about_nav__item">
                <a href="/news.php" class="<? if($url=='/news.php' || $url=='/news_new.php'):?>active<?endif;?>">Новости</a>
            </li>
            <li class="about_nav__item">
                <a href="/career.php" class="<? if($url=='/career.php'):?>active<?endif;?>">Карьера</a>
            </li>
            <li class="about_nav__item">
                <a href="/contacts.php" class="<? if($url=='/contacts.php' ):?>active<?endif;?>">Контакты</a>
            </li>
        </ul>
    </div>
</nav>