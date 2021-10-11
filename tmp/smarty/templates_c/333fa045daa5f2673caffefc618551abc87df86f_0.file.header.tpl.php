<?php
/* Smarty version 3.1.39, created on 2021-07-14 02:28:42
  from 'W:\domains\myshop.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ee21aa96d5f2_76008178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333fa045daa5f2673caffefc618551abc87df86f' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\default\\header.tpl',
      1 => 1626218920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views\\default\\leftcolumn.tpl' => 1,
  ),
),false)) {
function content_60ee21aa96d5f2_76008178 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo TemplateWebPath;?>
css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="/<?php echo TemplateWebPath;?>
css/main.css"/>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
	</head>
<body>
	<div id="header">
		<h1>my shop - интернет магазин</h1>
	</div>

<?php $_smarty_tpl->_subTemplateRender('file:views\default\leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="centerColumn">
	
<?php }
}
