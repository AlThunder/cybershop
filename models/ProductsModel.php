<?php

/**
* Модель для таблицы продукции (products)
*
*/

/**
* Получаем последние добавленные товары
*
* @param integer $limit Лимит товаров
* @return array Массив товаров
*/
function getLastProducts($limit = null) {
	$sql = "SELECT *
		FROM `products`
		WHERE `status` = 1
		/*ORDER BY `id` DESC*/";
	if($limit) {
		$sql .= " LIMIT $limit";
	}
	
	$rs = rs($sql);
	return createSmartyRsArray($rs);
}
/**
* Получить продукты для категории $itemId
*
* @param integer $itemId ID категории
* @param array массив продуктов
*/
function getProductsByCat($itemId) {
	$itemId = intval($itemId);
	$sql = "SELECT *
		FROM `products`
		WHERE `category_id` = '$itemId' AND `status` = 1";
	$rs = rs($sql);
	return createSmartyRsArray($rs);
}

/**
* Получить данные продукта по Id
*
* @param integer $item ID продукта
* @return array массив данных продукта
*/
function getProductById($itemId) {
	$itemId = intval($itemId);
	$sql = "SELECT *
		FROM `products`
		WHERE `id` = '$itemId'";
	$rs = rsOne($sql);
	return $rs;
}
/**
* Получить список продуктов из массива идентификаторов(ID`s)
*
* @param type $itemsIds массив идентификаторов
* @return array массив данных продуктов
*/
function getProductsFromArray($itemsIds) {
	if($itemsIds) {
	$strIds = implode(', ', $itemsIds);
	$sql = "SELECT *
		FROM `products`
		WHERE `id` in ($strIds)";
	$rs = rs($sql);
	return $rs;
	} 
}

/**
* Получить список всех продуктов
*
* @return массив с продуктами
*/
function getProducts() {

	$sql = "SELECT *
			FROM `products`
			ORDER BY `category_id`";

	$rs = rs($sql);

	return createSmartyRsArray($rs);
}

/**
* Добавление нового товара
*
* @param string $itemName Название продукта
* @param integer $itemPrice Цена
* @param string $itemDesc Описание
* @param integer $itemCat ID категории
* @return type
*/
function insertProduct($itemName, $itemPrice, $itemDesc, $itemCat) {
	$sql = "INSERT INTO `products`
			SET 
				`name` = '$itemName',
				`price` = '$itemPrice',
				`description` = '$itemDesc',
				`category_id` = '$itemCat'";

	$rs = rsPrep($sql);
	return $rs;
}
/**
* Обновление информации о продукте
*
*/
function updateProduct($itemId, $itemName, $itemPrice,
						$itemStatus, $itemDesc, $itemCat, $newFileName = null){
	$set = [];

	if($itemName) {
		$set[] = "`name` = '$itemName'";
	}

	if($itemPrice > 0) {
		$set[] = "`price` = '$itemPrice'";
	}

	if($itemStatus !== null) {
		$set[] = "`status` = '$itemStatus'";
	}

	if($itemDesc) {
		$set[] = "`description` = '$itemDesc'";
	}

	if($itemCat) {
		$set[] = "`category_id` = '$itemCat'";
	}

	if($newFileName) {
		$set[] = "`image` = '$newFileName'";
	}

	$setStr = implode(", ", $set);
	$sql = "UPDATE `products`
			SET $setStr
			WHERE `id` = '$itemId'";

	$rs = rsPrep($sql);

	return $rs;
}

function updateProductImage($itemId, $newFileName) {
	$rs = updateProduct($itemId, null, null,
						null, null, null, $newFileName);

	return $rs;
}