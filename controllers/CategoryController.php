<?php

/**
* categoryController.php
*
* Контроллер страницы категории(/category/1)
*
*/

// подключаем модели
require_once 'models/CategoriesModel.php';
require_once 'models/ProductsModel.php';

/**
* Формирование страницы категории
*
* @param object $smarty шаблонизатор
*/
function indexAction($smarty) {
	$catId = isset($_GET['id']) ? ucfirst($_GET['id']) : null;
	if(!$catId) exit();
	$rsChildCats = null;
	$rsProducts = null;
	$rsCategory = getCatById($catId);
	// если главная категория,  то показываем дочерние категории
	//иначе показываем товар
	if($rsCategory['parent_id'] == 0){
		$rsChildCats = getChildrenForCat($catId);
	} else {
		$rsProducts = getProductsByCat($catId);
	}

	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', 'Товары категории'.$rsCategory['name']);

	$smarty->assign('rsCategory', $rsCategory);
	$smarty->assign('rsProducts', $rsProducts);
	$smarty->assign('rsChildCats', $rsChildCats);

	$smarty->assign('rsCategories', $rsCategories);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'category');
	loadTemplate($smarty, 'footer');

}

