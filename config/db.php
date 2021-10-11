<?php

/**
* Инициализация подключения к БД
*
*/

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'mysql');
define('DB_NAME', 'myshop');

// соединяемся с БД
try {
	global $pdo;
	$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
	echo 'Ошибка: '.$e->getMessage();
}
