<?php

session_start();

echo '<meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/5fd5c795a7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=eLzi3MecVXjSpmHKU3eP66NEtLgiJXv4nKhFvHWYJcLFOdSHm9UHJlfvfD2yrP_6F-b9Wrsip2zKZdOrH-Gu44i2aoHvy9BCrd-qligpsVXXNqnK_aL5_46zr5Jl7M2ooU6Ye-0JSOKQWrwmnoGDbq8vErW6XPyAECjr4xOFmBfuGpKwAUPLq5P0GkGEdNBuj4OK1ryHe9KU14nZ8lyfjzP-h6t9bYq3yxu3I_juHumSGktf9pNJAhFftnDg7o41GZrexeYM2m-RA21ue4XkEOxXoNK6yYD68OQ2CgtlVIPFNqdGCngBazmD4FvWbuN3wFSax1d_Z95X74uphLzQL3ePtHEwUCywJJ5BxpolPWQx7ubA9IuMXDREQ39YprY0bkpl1yCoEMey4hWoSu8qSebNeBks96CxWCJTD_LLcGSLkDcuKvKg3sPa_G9NHEHIvXJcWkGCYhEQUteaigtwnWXBm7uI5q1a7y_1UXIv6yPaX69eEGQOnWAwtBJILPQMrs1Zy1GtAALLZj1M3cbn40M8i5vZ_gp7IBUldcU0nrW1mo2Afn6BLJ3_QEAv4YCRVEUOoDvJ8JsRuZjpWyRrKGrMMEF3l5Eq1oyvgDWddyv2_rbBXGro0wytOfbgtDZoz3rFVzi_Ro_SlazqUv741r8-4ZcUxXO00nAbVGXn0Wg_uJZejPbBN43BOeOXl-iXqV6L0KXW6hD09D-77D_NngnM5u8wPJkML9Dj1Pv1kceEoRYcyMJTz0aopM2Zzm-LDOnWvn0fzKEyIBKJAylx8tQ4GipSFcABoP4_p4Z-kS9Rl2AHdSA8xQfbS0PwAlzYI0Yvsz3MqA4iaIgk7BR0G0FyXneEyKwA27pa0kC8IWpUXNhcEFuSOyPSQAdgvr4qv9mruc4Co_OdSO8EoY6gnTeJ_3MxeyCKF0WZzpV2mfPuPKwxtY0tKPDBoBrZlj66DSqu9gTKC1332L5-oJsLoDz0T5oqcEnBUcxOQdF0nChV79x7-mtFuJrt7wedOgYVnK5Edkw0itOd81Ap-iAXqk1SeHwZyNKx0K6Pfw5tyIt6YwJ-FXkMPKEL3-yM2Hevkh2Z7QV7DeYTOhw0sqV0sMbps-vtE1HCHD1beRh2OcoRf3lT5ez34RsE3Cvp57MoUKW95cIszqE9qiFHAjY8rqkonHWu5DYvg9QNbEPbBviNepf7qoMY0mCyf8OJm3RWiJywozfZOngxHhj3d1CQx8UlQdOY7pyHC4hhiN3JQZqssd2t8rX0VrGhH73cEzj1" nonce="d7e0639ee4c06357cb83aa89d138d621" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>JC account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';


echo '<style>
    body {
    font: 400 15px Montserrat, sans-serif;
    line-height: 1.8;
    color: #818181;
    background-color: white;
    }

    .osnova {
    position:absolute;
    width:100%;
    top:20%;
    text-align:center;
    font-size: 20pt;
    }

    .osnova1 {
    width:20%;
    margin: auto;
    text-align:center;
    top: 20%;
    }

    .container_left{
    max-width: 100%;
    float: left;
    width: 500px;
    }

    .outline{
    font-family: "GFS Didot", serif;
    border: 2px solid white;
    padding: 5px;
    border-radius: 5px;
    position:absolute;
    top:20%;
    text-align:center;
    }

    .header {
    width: 100%;
    padding-top: 30px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    }

    .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    }

    .head {
    position: fixed;
    border-radius: 5px;
    width: 1200px;
    margin: 0;
    padding: 0;
    background-color: #fda035; /*верхушка с кнопками для перехода по сатйу*/
    z-index: 9999;
    border: 0;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    display: block;
    font-family: Montserrat, sans-serif;
    }

    .header__logo {
    font-size: 30px;
    font-weight: 700;
    color: #fff;
    }

    .header__inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .jc {
    text-decoration: none;
    border: 3px solid #668EB9;
    padding: 5px;
    border-radius: 5px;
    background: #668EB9;
    top:20%;
    }

    .nav {
    text-transform: uppercase;
    font-size: 14px;
    display: flex;
    }

    .nav__link {
    display: inline-block;
    vertical-align: top;
    margin: 0 15px;
    position: relative;
    color: #FFE2D2;
    text-decoration: none;
    transition: color .1s linear;
    }

    .nav__link::after {
    content: "";
    display: block;
    width: 100%;
    height: 3px;
    background-color: #FFE2D2;
    opacity: 0;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    transition: opacity .1s linear;
    }

    .cards {
    padding-top: 260px;
    }

    .cards__inner {
    display: flex;
    justify-content: space-evenly;
    }

    .cards__item {
    width: 380px;
    }

    .cards__item:hover .cards__img{
    box-shadow: 1px 1px 50px 3px #668EB9;
    transition: box-shadow 0.5s ease-in-out;
    }

    .cards__img {
    position: relative;
    }

    .cards__img img {
    display: block;
    transition: opacity .10s linear;
    background-size: 100%;
    }

    .cards__item:hover .cards__text {
    opacity: 1;
    }

    h2,h4{
    color: white;
    }

    .colorRed{
    background: #668EB9;
    color: white;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid #668EB9;
    }

    p{
    font-size: large;
    }

    .plo{
    color: #414141;
    font-size: larger;
    text-decoration: none;
    }
    .plo:hover{
    color: #fda036;
    }

    .ramka{
    border-width: thin;
    border-color: rgb(190,190,190);
    border-style: solid;
    margin-left: 10px;
    margin-right: 10px;
    border-radius: 5px;
    }

    .pad{
    padding-top: 20px;
    padding-bottom: 15px;
    }

    </style>';


echo '<body id="myPage">
<header class="header ">
    <div class="container ">
        <div class="head">
            <div class="header__inner ">
                <a href="practica.html#myPage" class="header__logo jc" >JC</a>
                <nav class="nav">
                    <a class="nav__link" href="#" onclick='."hid1()".'>ГЛАВНАЯ</a>
                    <a class="nav__link" href="#" onclick='."hid()".'>ПЛОЩАДКИ</a>
                    <a class="nav__link" href="#" onclick='."hid2()".'>ПЛАТФОРМЫ</a>
                    <li><a href="#" class="nav__link" onclick='."exit1()".'>ВЫХОД</a></li>
                </nav>
            </div>
        </div>
    </div>
</header>';

if ($_SESSION['user_id']>0){
    echo '<div id="main" class="osnova">';
    $connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'JC');
    $query = mysqli_query($connect, 'SELECT name FROM clients WHERE clients.id="'.$_SESSION['user_id'].'"');
    $a=mysqli_fetch_assoc($query);
    echo "<h1><strong>ДОБРО ПОЖАЛОВАТЬ <div class='name'>".$a['name']."</div></strong></h1>";
    echo 'имя пользователя = '.$a['name'].'<br>';
    $query = mysqli_query($connect, 'SELECT surname FROM clients WHERE clients.id="'.$_SESSION['user_id'].'"');
    $a=mysqli_fetch_assoc($query);
    echo 'фамилия пользователя = '.$a['surname'].'<br>';
    $query = mysqli_query($connect, 'SELECT phone_number FROM clients WHERE clients.id="'.$_SESSION['user_id'].'"');
    $a=mysqli_fetch_assoc($query);
    echo 'телефон пользователя = '.$a['phone_number'].'<br>';
    $query = mysqli_query($connect, 'SELECT email FROM clients WHERE clients.id="'.$_SESSION['user_id'].'"');
    $a=mysqli_fetch_assoc($query);
    echo 'email пользователя = '.$a['email'].'<br>';
}

$query=mysqli_query($connect,'SELECT `date_in` as `последнее посещениe` FROM login WHERE id_user="'.$_SESSION['user_id'].'"');
echo "<br>"."<table border='3' class='osnova1'>";
$count=0;
while ($data = mysqli_fetch_assoc($query)) {
    if ($count == 0) {
        echo "<tr>";
        foreach ($data as $key => $value)
            echo "<td>" . $key . "</td>";
        echo "</tr>";
    }
    echo "<tr>";
    foreach ($data as $key => $value)
        echo "<td>" . $value . "</td>";
    echo "</tr>";
    $count+=1;
}
echo "</table>";
echo '</div>';

echo '<div style="display: none" id="ploschdka" class="container-fluid">
  <div class="text-center">
    <h2>fff</h2>
    <h4>fff</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-body">
            <a><img src="assets\images\about\green.png" alt=""></a>
        </div>
        <div class="panel-footer">
          <h3><br>Площадка для продажи запчастей для всех видов техники</h3>
          <h4>fff</h4>
          <a href="https://greenparts.ru" target="_blank"><button class="colorRed btn-lg" type="submit">Перейти на сайт</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
       <div class="panel-body">
            <a ><img src="assets\images\about\web.png" alt=""></a>
        </div>
        <div class="panel-footer">
          <h3><br>Площадка объявлений о купле-продаже в вашем городе</h3>
          <h4>fff</h4>
          <a href="https://www.wiweb.ru" target="_blank"><button class="colorRed btn-lg" type="submit">Перейти на сайт</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
       <div class="panel-body">
            <a><img src="assets\images\about\22.png" alt=""></a>
        </div>
        <div class="panel-footer">
          <h3><br>Интернет-маркет техники: автомобили, спецтехника, водная и авиатехника</h3>
          <h4>fff</h4>
          <a href="https://www.qx9.ru" target="_blank" ><button class="colorRed btn-lg" type="submit">Перейти на сайт</button></a>
        </div>
      </div>
    </div>
  </div>
</div>';

echo '<div style="display: none" id="platform" class="container-fluid">
  <div class="text-center">
    <h2>fff</h2>
    <h4>fff</h4>
  </div>
  <div class="row slideanim">
  <div class="col-sm-4 col-xs-12 ">
      <div class="panel panel-default text-center pad ramka">
        <div class="panel-heading ">
          <h1 ><strong>JcCode</strong></h1>
        </div>
        <div class="panel-body">
          <p><br><br>Программа для <br>автоматизации
          работы магазина по<br> продаже  автозапчастей с
          <br> автоматической публикацией <br>объявлений
          на <br> рекламных площадках Интернета.<br><br></p>
        </div>
        <div class="panel-footer">
            <a href="https://promo.jccode.ru/" target="_blank" class="plo" >Подробнее</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12 ">
      <div class="panel panel-default text-center pad ramka">
        <div class="panel-heading">
          <h1><strong>JcAssist.ru</strong></h1>
        </div>
        <div class="panel-body">
          <p><br>Сервис защиты онлайн-сделок<br> для
           покупателей и продавцов.<br>
          Особенно востребован на <br> площадках
          объявлений. <br>Проверка состояния товара,<br>
          фотоопись. Минимизирует риски,<br>
          гарантирует оплату, <br>исключает мошенничество.</p>
        </div>
        <div class="panel-footer">
          <a href="https://jcassist.ru/" target="_blank" class="plo">Подробнее</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 col-xs-12 ">
      <div class="panel panel-default text-center pad ramka">
        <div class="panel-heading" >
          <h1><strong>JcCLOUD</strong></h1>
        </div>
        <div class="panel-body">
          <p><br><br>Простое управление <br>складами,
          быстрая <br>синхронизация,
          любые товары.<br>Автоматизация работы
          <br>магазина по продаже
          товаров<br><br><br></p>
        </div>
        <div class="panel-footer">
           <a href="https://jccloud.ru/" target="_blank" class="plo">Подробнее</a>
        </div>
      </div>
    </div>
  </div>
</div>';

mysqli_close($connect);

echo "<script type=\"text/javascript\">

    function exit1(){
    fetch('/apiPractica.php?action=exit')
            .then(
                    async (rez) => {
                      await rez.text();
                      window.location.href='practica.html';

                    })
            .catch(
                    (e) => {
                      let obj = {errorCode: 1, errorDesc: 'ошибка добаления записи', result: []};
                      console.log(e+'вы не вошли');
                    }
            );

    }

    function hid(){
    document.getElementById('ploschdka').setAttribute('style','display: block');
    document.getElementById('main').setAttribute('style','display: none');
    document.getElementById('platform').setAttribute('style','display: none');
    }

    function hid1(){
    document.getElementById('ploschdka').setAttribute('style','display: none');
    document.getElementById('platform').setAttribute('style','display: none');
    document.getElementById('main').setAttribute('style','display: block');
    }

    function hid2(){
    document.getElementById('ploschdka').setAttribute('style','display: none');
    document.getElementById('main').setAttribute('style','display: none');
    document.getElementById('platform').setAttribute('style','display: block');
    }

</script>";
