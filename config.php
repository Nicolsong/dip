<?php
 /**
 * Конфигурационный файл
 * Регистрация пользователя письмом
 */


 //Ключ защиты
 if(!defined('CNE_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./404.html'));
 }

 //Адрес базы данных
 define('CNE_DBSERVER','localhost');

 //Логин БД
 define('CNE_DBUSER','root');

 //Пароль БД
 define('CNE_DBPASSWORD','');

 //БД
 define('CNE_DATABASE','bez_reg');

 //Префикс БД
 define('CNE_DBPREFIX','bez_');

 //Errors
 define('CNE_ERROR_CONNECT','Немогу соеденится с БД');

 //Errors
 define('CNE_NO_DB_SELECT','Данная БД отсутствует на сервере');

 //Адрес хоста сайта
 define('CNE_HOST','http://localhost/pdo/index.php'. $_SERVER['HTTP_HOST'] .'/');
 
 //Адрес почты от кого отправляем
 define('CNE_MAIL_AUTOR','095i063@gmail.com');
 ?>