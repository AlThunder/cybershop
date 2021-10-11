<?php
/* Smarty version 3.1.39, created on 2021-07-05 19:47:30
  from 'W:\domains\myshop.local\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e337a2424586_25321289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a67f64fd59a94930ea37e5eb0028c6d52233fe5b' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\admin\\adminHeader.tpl',
      1 => 1625503645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views\\admin\\adminLeftcolumn.tpl' => 1,
  ),
),false)) {
function content_60e337a2424586_25321289 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="/<?php echo TemplateWebPath;?>
css/main.css" type="text/css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/js/admin.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div id="header">
			<h1>Управление сайтом</h1>
		</div>
<?php $_smarty_tpl->_subTemplateRender('file:views\admin\adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="centerColumn"><?php }
}
