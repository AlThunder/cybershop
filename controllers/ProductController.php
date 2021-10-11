<?php
/**
* ProductController.php
* 
* Контроллер страницы товара (/product/1)
*
*/

// подключаем модели
require_once 'models/CategoriesModel.php';
require_once 'models/ProductsModel.php';

/**
* Формирование страницы продукта
*
* @param object $smarty шаблонизатор
*/
function indexAction($smarty) {
	$itemId = isset($_GET['id']) ? $_GET['id'] : null;
	if(!$itemId) exit();

	//получить данные продукта
	$rsProduct = getProductById($itemId);
	
	// получить все категории
	$rsCategories = getAllMainCatsWithChildren();
	
	$smarty->assign('itemInCart', 0);
	if(in_array($itemId, $_SESSION['cart'])) {
		$smarty->assign('itemInCart', 1);
	}

	$smarty->assign('pageTitle', '');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProduct', $rsProduct);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'product');
	loadTemplate($smarty, 'footer');
}