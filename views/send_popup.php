<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['text'])) {$text = $_POST['text'];}

 
/* Сюда впишите свою эл. почту */
$myaddres  = "zapis@medion.uz"; // кому отправляем
// $myaddres  = "timbest96@gmail.com"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Запись на прием\nТелефон: $phone\nИмя: $name \n Текст: $text";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявление на консультацию'; //сабж
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="refresh" content="3; url=index.html">
            <title>Спасибо! Мы свяжемся с вами!</title>
            <meta name="generator">
            <script type="text/javascript">
            setTimeout('location.replace("/index.php")', 1500);
            /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
            </script> 
        </head>
        <body>
            <h1>Спасибо! Мы свяжемся с вами!</h1>
    </body>
</html>