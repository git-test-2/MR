<?php
//$host = '127.0.0.1';
//$db   = 'marlin';
//$user = 'root';
//$password = '';
//$charset = 'utf8';
//
//
//$options = [                                                //дополнительные настройки PDO.  PDO::ATTR_ERRMODE - обязательная настройка
//    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    PDO::ATTR_EMULATE_PREPARES   => false,
//];
//
////1.адрес сервера, имя БД, кодировка,  2. имя пользоватедя БД, пароль
////$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset",'root','',$options); // помещаем соединение в try-catch
//
//
//try {
//    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset",'root','',$options);
//} catch (PDOException $e) { //в catch указываем исключение каких классов будем ловить ошибки, в $e будут содержаться информация об ошибке
//    die("Не могу подключится к БД");
//}

error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$db = mysqli_connect('127.0.0.1','root','','marlin') or die(mysqli_error($db));
