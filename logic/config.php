<?php
session_start();
$logo = "<span class='logo1'>TEST</span><span class='logo2'>CHANGE</span>"; // название обменника, менять только TEST и CHANGE
$site_name = "TestChange"; // название обменника
$supportTG = "https://t.me/tgsupport"; // тг линк тех. поддержки
$trustpilotLink = "https://bestchange.ru"; // ссылка на бестчендж

//база данных
$host="localhost";
$database_name ="название бд";
$database_user_login="юзер бд";
$database_user_password="пароль бд";

//админка
$your_username = "логин";
$your_pass = "пароль";

//не трогать
 $dsn = 'mysql:host='.$host.';dbname=' . $database_name;
 $pdo = new PDO($dsn, $database_user_login, $database_user_password);
