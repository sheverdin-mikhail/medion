<form action="/views/send_popup.php" method="POST" class="popup" id="popup">
        <div class="popup__body">
                <div class="popup__content popup__content_display">
                <a href="" class="popup__close close-popup"><i class="far fa-times-circle"></i></a>
                <div class="popup__title"><h2>Напишите свой вопрос и наш менеджер с вами свяжется</h2></div>
                <div class="popup__input__block">
                        <label for="name" class="popup__lable">Введите ваше Ф.И.О. </label>
                        <input name="name" id="name"  placeholder="Иванов Иван Иванович" class="popup__input" required>
                </div>
                <div class="popup__input__block">
                        <label for="phone" class="popup__lable">Оставьте ваш номер телефона, чтобы мы могли связаться с вами</label>
                        <input name="phone" id="phone" type="number" placeholder="+998(___)-__-__" class="popup__input" required> 
                </div>
                <div class="popup__input__block">
                        <textarea name="text" id="text" cols="30" rows="10" placeholder="Введите ваше сообщение или название выбранной процедуры" class="popup__textarea" required></textarea>
                </div>
                <div class="popup__input__block">
                        <input type="submit" value="Отправить сообщение" class="popup__button">
                </div>
                </div>
        </div>
</form>

<div class="modal popup" id="popup-modal">
        <div class="container">
                <div class="modal__content popup__content_display">
                        <h2 class="modal__title">Запишитесь на консультацию</h2>
                        <p class="modal__text">Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет выполнять важные задания по разработке форм развития.</p>
                        <form action="/views/send.php" method="POST" class="modal__form">
                        <div class="modal__row">
                                <input type="text" class="modal__input" name="name" placeholder="Ваше имя">
                                <input type="phone" class="modal__input" name="phone" placeholder="Номер телефона">
                        </div>
                        <span class="modal__agree">Отправляя заявку, Вы соглашаетесь на обработку Ваших <a href="" class="modal__href">персональных данных</a></span>
                        <button type="submit" class="modal__button "><span class="_icon-send">Отправить заявку</span></button>
                        </form>
                </div>
        </div>
    </div>

