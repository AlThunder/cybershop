<?php
/**
*
* Основные функции
*
*/

/**
* Формирование запрашиваемой страницы
*
* @param string $controllerName название контроллера
* @param string $actionName название функции обработки страниц
*/
function loadPage($smarty, $controllerName, $actionName = 'index') {
	require_once PathPrefix.$controllerName.PathPostfix;

	$function = $actionName.'Action';
	$function($smarty);
}

/**
*
* @param object $smarty объект шаблонизатора
* @param string $templateName название файла шаблона
*/
function loadTemplate($smarty, $templateName) {
	$smarty->display($templateName.TemplatePostfix);
}

/**
* Функции отправки запроса PDO в бд
*
*/
function rs($sql) {
	global $pdo;
	$r = $pdo->query($sql);
	$rs = $r->fetchall(PDO::FETCH_ASSOC);
	return $rs;
}
function rsOne($sql) {
	global $pdo;
	$r = $pdo->query($sql);
	$rs = $r->fetch(PDO::FETCH_ASSOC);
	return $rs;
}
function rsPrep($sql) {
	global $pdo;
	$rs = $pdo->exec($sql);
	return $rs;
}

function rsWhile($sql) {
	global $pdo;
	$r = $pdo->query($sql);
	$array = [];
	while ($row = $r->fetch(PDO::FETCH_ASSOC)) {
		$rsChildren = getPurchaseForOrder($row['id']);
		if($rsChildren) {
			$row['children'] = $rsChildren;
			if ($row['status'] == 1) {
				$row['status'] = 'Заказ оплачен'; 
			} else {$row['status'] = 'Заказ не оплачен';}
			$array[]  = $row;
		}
	}
	return $array;
}

/**
* Функция отладки. Останавливает работу программы, выводя значение переменной
* $value
*
* @param variant $value переменная для вывода ее на страницу
*/
function d($value = null, $die = 1) {
	echo 'Debug: <br /><pre>';
	print_r($value);
	echo '</pre>';

	if($die) die;
}

/**
* Преобразование результата работы функции выборки в ассоциативный массив
*
* @param recordset $rs набор строк - результат работы SELECT
* @return array
*/
function createSmartyRsArray($rs) {
	if(!$rs) return false;
	$smartyRs = [];
	foreach ($rs as $key => $row) {
		$smartyRs[] = $row;
	}
	return $smartyRs;
}
/**
* Редирект
*
* @param string $url адрес для перенаправления
*/       
function redirect ($url) {
	if(!$url) $url = '/';
	header("Location: $url");
	exit;
}