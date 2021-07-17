<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['auto'])) {$auto = $_POST['auto'];}
if (isset($_POST['distance'])) {$distance = $_POST['distance'];}
if (isset($_POST['driver'])) {$driver = $_POST['driver'];}
if (isset($_POST['driver1'])) {$driver1 = $_POST['driver1'];}
if (isset($_POST['driver2'])) {$driver2 = $_POST['driver2'];}
if (isset($_POST['driver3'])) {$driver3 = $_POST['driver3'];}
if (isset($_POST['location'])) {$location = $_POST['location'];}
if (isset($_POST['city'])) {$city = $_POST['city'];}
if (isset($_POST['time1'])) {$time1 = $_POST['time1'];}
if (isset($_POST['time2'])) {$time2 = $_POST['time2'];}

/* Сюда впишите свою эл. почту */
$myaddres  = "hromov.labs@gmail.com"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Заявка на оформление каско\n
Автомобиль: $auto
Пробег: $distance
Водитель: $driver $driver1 $driver2 $driver3
Прописка собственника: $location
Город преимущественной эксплуатации: $city
Срок страхования с: $time1
Срок страхования по: $time2";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка на оформление каско'; //сабж
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