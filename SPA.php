<? include "templates/header.php" ?>




<!-- Блок с основным контентом страницы -->
<div class="page">


      <!-- Блок с поиском -->
      <div class="search">
                <div class="container">
                        <form action="/views/search.php" class="search__search">
                                <input id="q" name="q" type="text" class="search__input" placeholder="Что-то ищете? Воспользуйтесь поиском по сайту...">
                                <input type="submit" class="search__button" value="Поиск">
                        </form>
                        <ul class="search__navigation">
                                <li class="search__navigation_item"><a href="/index.php">Главная</a></li>
                                <li class="search__navigation_item">Эстетическая медицина</li>
                        </ul>
                        <h2 class="search__header">
                        SPA-комплекс
                        </h2>
                        <h3 class="search__subheader">
                        Клиника MEDION предлагает Вам широкий выбор SPA-услуг, оказывающих благотворный физиотерапевтический и релаксирующий эффект на организм.
                        </h3>
                </div>
        </div>
        <!-- конец блока -->
      
        <div class="spa">
            <div class="container">
                <div class="spa__content">
                    <h2 class="spa__title">Мы предоставляем процедуры: </h2>
                    <div class="spa__navigation">
                        <div class="spa__navigation_object _icon-facial active">
                            <span class="spa__label">Услуги косметолога</span>
                            <span class="spa__name">Уход за лицом</span>
                        </div>
                        <div class="spa__navigation_object _icon-stones">
                            <span class="spa__label">Профилактические услуги</span>
                            <span class="spa__name">SPA-услуги</span>
                        </div>
                        <div class="spa__navigation_object _icon-nail">
                            <span class="spa__label">Маникюр и педикюр  </span>
                            <span class="spa__name">Ногтевой сервис</span>
                        </div>
                        <div class="spa__navigation_object">
                            <span class="spa__label">16 услуг</span>
                            <span class="spa__name">Показать все услуги</span>
                        </div>
                    </div>
                    <ol class="spa__list card__container">
                        <li class="card">
                            <p class="card__icon _icon-bath"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-hand"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-massage"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-peeler"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-bath"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-hand"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-massage"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                        <li class="card">
                            <p class="card__icon _icon-peeler"></p>
                            <h3 class="card__title">Углекислая ванна</h3>
                            <p class="card__text">Эта удивительная взаимосвязь с природой не прервалась и по сей день.</p>
                            <a href="" class="card__more">Подробнее об услуге</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        





<!-- КОнец блока -->

<? include "templates/modal.php" ?>

<? include "templates/footer.php" ?>