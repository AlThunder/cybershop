<?php

/**
* Модель для таблицы продукции (purchase)
*
*/

/**
* Внесение в БД продуктовс привязкой к заказу
*
* @param integer $orderId ID заказов
* @param array $cart массив корзины
* @param boolean TRUE в случае успешного добавления в БД
*/
function setPurchaseForOrder($orderId, $cart) {
	$sql = "INSERT INTO `purchase`
			(`order_id`, `products_id`, `price`, `amount`)
			VALUES ";

	$values = [];
	// формируем массив строк запроса для каждого товара
	foreach($cart as $item) {
		$values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
	}

	$sql .= implode(', ', $values);
	
	$rs = rsPrep($sql);

	return $rs; 
}

function getPurchaseForOrder($orderId) {
	$sql = "SELECT `pe`.*, `ps`.`name`
			FROM purchase as `pe`
			JOIN products as `ps` ON `pe`.products_id = `ps` . id
			WHERE `pe`.order_id = $orderId";

	$rs = rs($sql);
	return createSmartyRsArray($rs);
}