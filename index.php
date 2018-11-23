<?php


// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__)); //инициализируем константу содержащую расположение директории сайта на сервере
define('TMPL', '/views/default/'); //инициализируем константу содержащую путь до текущего оформления сайта
define('ADM_TMPL', '/views/adm_default/'); //инициализируем константу содержащую путь до текущего оформления сайта
define('LIB', '/lib/'); //инициализируем константу содержащую путь до текущего оформления сайта
define('DOMAIN', 'http://blog.local'); //инициализируем константу содержащую домен сайта
define('IMG_CONT', '/images/content/'); //инициализируем константу содержащую домен сайта

require_once(ROOT . '/components/Autoload.php');


// 3. Подключение к БД


// 4. Вызов router

$router = new Router(); //вызываем класс роутер
$router->run(); //

/*
$domain = 'blog.local';
echo "Domain: ";
echo $_SERVER['HTTP_HOST'];
echo "<br /> Запрос: ";
echo $_SERVER['REQUEST_URI'];
echo "<br />";
echo $_SERVER['SERVER_ADMIN'];
echo "<br />";
echo $_SERVER['SERVER_NAME'];
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
$request = $_SERVER['HTTP_HOST'];

$zapros = rtrim($request, $domain);

if(!empty($zapros)) echo "Вы на поддомене " . $zapros;
else echo "Вы на главном домене " . $domain;

/*

 * Domain: one.blog.local
 
Запрос: /dfgdfg/fghtf/echo1?id=1234
yaslonane@yandex.ru
one.blog.local

Вы на поддомене one
*/