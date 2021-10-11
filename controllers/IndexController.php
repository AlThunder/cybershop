<?php

/**
*
*
* Контроллер главной страницы
*
*/
// подключаем модели
require_once 'models/CategoriesModel.php';
require_once 'models/ProductsModel.php';

/**
* Формирование главной страницы сайта
*
* @param object $smarty шаблонизатор
*/
function indexAction($smarty) {

	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getLastProducts();

	$smarty->assign('pageTitle', 'Главная страница сайта');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');

}
