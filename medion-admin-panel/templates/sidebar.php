
<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="/index.php" class="simple-text logo-normal">
            Medion
        </a>
    </div>
    <? if ($_COOKIE['user'] != ""): ?>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="">
                <a href="services_edit.php">
                    <i class="now-ui-icons _icon-test"></i>
                    <p>Услуги</p>
                </a>
            </li>
            <li class="">
                <a href="estetic_med_edit.php">
                    <i class="now-ui-icons _icon-test"></i>
                    <p>Естетическая медицина</p>
                </a>
            </li>
            <li class="">
                <a href="spa_edit.php">
                    <i class="now-ui-icons _icon-massage"></i>
                    <p>СПА процедуры</p>
                </a>
            </li>
            <li class="">
                <a href="doctors_edit.php">
                    <i class="now-ui-icons _icon-pediatrician"></i>
                    <p>Врачи</p>
                </a>
            </li>
            <li class="">
                <a href="cardio_edit.php">
                    <i class="now-ui-icons _icon-pediatrician"></i>
                    <p>Кардиология</p>
                </a>
            </li>
            <li class="">
                <a href="clinics_edit.php">
                    <i class="now-ui-icons _icon-pediatrician"></i>
                    <p>Клиники</p>
                </a>
            </li>
            <li class="">
                <a href="career_edit.php">
                    <i class="now-ui-icons _icon-bookmark"></i>
                    <p>Карьера</p>
                </a>
            </li>
            <li class="">
                <a href="seo_settings.php">
                    <i class="now-ui-icons _icon-bookmark"></i>
                    <p>SEO</p>
                </a>
            </li>
            <li class="">
                <a href="pages_settings.php">
                    <i class="now-ui-icons _icon-bookmark"></i>
                    <p>Содержимое страниц</p>
                </a>
            </li>
            <li class="">
                <a href="footer_edit.php">
                    <i class="now-ui-icons _icon-bookmark"></i>
                    <p>Подвал</p>
                </a>
            </li>
            <li class="">
                <a href="news_settings.php">
                    <i class="now-ui-icons _icon-bookmark"></i>
                    <p>Новости</p>
                </a>
            </li>
            <li class="">
                <a href="stocks_settings.php">
                    <i class="now-ui-icons _icon-bookmark"></i>
                    <p>Акции</p>
                </a>
            </li>
        </ul>
    </div>
    <? endif;?>
</div>