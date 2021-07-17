<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['city'])) {$city = $_POST['city'];}
if (isset($_POST['auto'])) {$auto = $_POST['auto'];}
if (isset($_POST['no-limit'])) {$noLimit = $_POST['no-limit'];}
if (isset($_POST['owner-fio'])) {$ownerFio = $_POST['owner-fio'];}
if (isset($_POST['owner-radio'])) {$ownerRadio = $_POST['owner-radio'];}
if (isset($_POST['has-driver'])) {$hasDriver = $_POST['has-driver'];}
if (isset($_POST['driver1'])) {$driver1 = $_POST['driver1'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['birthday'])) {$birthday = $_POST['birthday'];}
if (isset($_POST['driver-radio'])) {$driverRadio = $_POST['driver-radio'];}
if (isset($_POST['passport-series'])) {$passportSeries = $_POST['passport-series'];}
if (isset($_POST['passport-number'])) {$passportNumber = $_POST['passport-number'];}
if (isset($_POST['birthday-vod'])) {$birthdayvod = $_POST['birthday-vod'];}

/* Сюда впишите свою эл. почту */
$myaddres  = "hromov.labs@gmail.com"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Заявка на оформление осаго\n
Город собственника: $city
Автомобиль: $auto
Без ограничений водителей: $noLimit
Собственник: $ownerFio
Дата рождения: $date
Пол: $ownerRadio
Собственник является водителем: $hasDriver
ВОДИТЕЛЬ 1: $driver1
Дата рождения: $birthday
Пол: $driverRadio
ВОДИТЕЛЬСКОЕ УДОСТОВЕРЕНИЕ РФ: $birthdayvod";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка на оформление осаго'; //сабж
$email='Заказ обратного звонка'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:");

ini_set('short_open_tag', 'On');
?>
<!DOCTYPE html>
    <html lang="ru">
    <head>
        <head>
        <meta charset="utf-8">
    <title>Поздравляем! Ваша заявка принята!</title>
    <style type="text/css">
        body {
        line-height: 1;
        height: 100%;
        font-family: Arial;
        font-size: 15px;
        color: #313e47;
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        }
        h2 {
        margin: 0;
        padding: 0;
        font-size: 36px;
        line-height: 44px;
        color: #313e47;
        text-align: center;
        font-weight: bold;
        }
        a {
        color: #69B9FF;
        }
        .list_info li span {
        width: 150px;
        display: inline-block;
        font-weight: bold;
        font-style: normal;
        }
        .list_info {
        text-align: left;
        display: inline-block;
        list-style: none;
        margin-top: -10px;
        margin-bottom: -11px;
        }
        .list_info li {
            margin: 11px 0px;
        }
        .fail {
        margin: 10px 0 20px 0px;
        text-align: center;
        }
        .email {
        position: relative;
        text-align: center;
        margin-top: 40px;
        }
        .email input {
        height: 30px;
        width: 200px;
        font-size: 14px;
        padding-right: 10px;
        padding-left: 10px;
        outline: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 1px solid #B6B6B6;
        margin-bottom: 10px;
        }
        .block_success {
        max-width: 960px;
        padding: 70px 30px 70px 30px;
        margin: -50px auto;
        }
        .success {
        text-align: center;
        }
    </style>
    </head>
    <body>

    <div class="block_success">
    <h2>Поздравляем! Ваша заявка принята!</h2>
    <p class="success">
        В ближайшее время с вами свяжется оператор для уточнения необходимых деталей. Пожалуйста, включите ваш контактный телефон.
    </p>
    
    <div class="success">
    <br/><span id="submit"></span>
    </div>
    
    <p class="fail success"><a href="/">На главную</a></p>
    </body>
    </html>