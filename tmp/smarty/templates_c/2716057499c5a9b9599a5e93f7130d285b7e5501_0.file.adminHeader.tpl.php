<?php
/* Smarty version 3.1.39, created on 2021-09-27 19:38:50
  from 'C:\OpenServer\domains\cybershop\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6151f39aecca51_94374758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2716057499c5a9b9599a5e93f7130d285b7e5501' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\admin\\adminHeader.tpl',
      1 => 1625503645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views\\admin\\adminLeftcolumn.tpl' => 1,
  ),
),false)) {
function content_6151f39aecca51_94374758 (Smarty_Internal_Template $_smarty_tpl) {
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
