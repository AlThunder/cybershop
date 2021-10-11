<?php
/* Smarty version 3.1.39, created on 2021-10-10 16:04:29
  from 'C:\OpenServer\domains\cybershop\views\bootstrapadmin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6162e4dd1646b1_01271459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6e0375490fa4e1b01030915e5fe0af39b89e06' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrapadmin\\adminHeader.tpl',
      1 => 1633871063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views\\bootstrapadmin\\adminLeftcolumn.tpl' => 1,
  ),
),false)) {
function content_6162e4dd1646b1_01271459 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="/images/main_image.jpeg" type="image/x-icon">
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/templates/bootstrapadmin/css/bootstrap.css">
		<link rel="stylesheet" href="/templates/bootstrapadmin/css/bootstrap.main.css">
		<link rel="stylesheet" href="/templates/bootstrapadmin/css/_variables.scss">
		<link rel="stylesheet" href="/templates/bootstrapadmin/css/_bootswatch.scss">
		
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/js/admin.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/templates/bootstrapadmin/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
	</head>
	<body id="bs5-header">
		

<?php $_smarty_tpl->_subTemplateRender('file:views\bootstrapadmin\adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="ph">
	<div class="container">
	<div class="bs-docs-section">
<div id="centerColumn"><?php }
}
