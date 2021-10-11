<?php
/* Smarty version 3.1.39, created on 2021-07-03 19:35:34
  from 'W:\domains\myshop.local\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e091d68cca77_77078909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294a6a5d9f4dcdc774f8f3142899facf543e2c55' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\admin\\adminHeader.tpl',
      1 => 1625329333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminLeftcolumn.tpl' => 1,
  ),
),false)) {
function content_60e091d68cca77_77078909 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/admin.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div id="header">
			<h1>Управление сайтом</h1>
		</div>
<?php $_smarty_tpl->_subTemplateRender('file:adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="centerColumn"><?php }
}
