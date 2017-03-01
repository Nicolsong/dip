<?php
 /**
 *  Дипломная работа
 * 
 *  Подключение к базе данных
 */

 //Ключ защиты
 if(!defined('CNE_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./../404.html'));
 }

//Подключение к базе данных mySQL с помощью PDO
try {
    $db = new PDO('mysql:host=localhost;dbname='.CNE_DATABASE, CNE_DBUSER, CNE_DBPASSWORD, array(
    	PDO::ATTR_PERSISTENT => true
    	));

} catch (PDOException $e) {
    print "Ошибка соединеия!: " . $e->getMessage() . "<br/>";
    die();
}

