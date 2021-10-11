<?php

/**
* Модель для таблицы категорий (categories)
*
*/


/**
* Получить дочерние категории для категории $catId
*
* @param integer $catId - ID категории
* @return array массив дочерних категорий
*/
function getChildrenForCat($catId) {
	$sql = "SELECT *
	FROM `categories`
	WHERE `parent_id` = $catId";
	$rs = rs($sql);
	return createSmartyRsArray($rs);
}

/**
* Получить главные категории с привязками дочергних
*
* @return array массив категорий
*/
function getAllMainCatsWithChildren() {
	$sql = 'SELECT *
	FROM `categories`
	WHERE `parent_id` = 0';
	
	$rs = rs($sql);
	$smartyRs = [];
	foreach ($rs as $key => $row) {
		$rsChildren = getChildrenForCat($row['id']);
		if($rsChildren){
			$row['children'] = $rsChildren;
		}
		$smartyRs[] = $row;
	}
	return $smartyRs;
}

/**
* Получить данные категории по id
* 
* @param integer $catId ID категории
* @return array массив - строка категории
*/
function getCatById($catId) {
	$catId = intval($catId);
	$sql = "SELECT *
		FROM `categories`
		WHERE `id` = '$catId'";
	$rs = rsOne($sql);

	return $rs;
}

/**
* Получить все главные категории (которые не являются дочерними)
*
* @return array массив категорий
*/
function getAllMainCategories() {

	$sql = 'SELECT *
			FROM `categories`
			WHERE `parent_id` = 0';

	$rs = rs($sql);

	return createSmartyRsArray($rs);
}

/**
*
* Добавление новой категории
* @param string $catName название категории
* @param integer $catParentId ID родительской категории
* @return integer id новой категории
*/
function insertCat($catName, $catParentId = 0) {
	// готовим запрос
	$sql = "INSERT INTO
			`categories` (`parent_id`, `name`)
			VALUES ('$catParentId', '$catName')";

	// выполняем запрос
	rsPrep($sql);

	// получаем id добавленной записи
	global $pdo;
	$id = $pdo->lastInsertId();
	
	return $id;
}

/**
* Получить все категории
*
* @return array массив категорий
*/
function getAllCategories() {
	$sql = 'SELECT *
			FROM `categories`
			ORDER BY `parent_id` ASC';

	$rs = rs($sql);

	return createSmartyRsArray($rs);
}

/**
* Обновление категории
*
* @param integer $item ID категории
* @param integer $parentId ID главной категории
* @param string $newName новое имя категории
* @return type
*/
function updateCategoryData($itemId, $parentId = -1, $newName = '') {
	$set = [];

	if($newName) {
		$set[] = "`name` = '$newName'";
	}

	if($parentId > -1) {
		$set[] = "`parent_id` = '$parentId'";
	}

	$setStr = implode(", ", $set);
	$sql = "UPDATE `categories`
			SET $setStr
			WHERE `id` = '$itemId'";

	$rs = rsPrep($sql);

	return $rs;
}