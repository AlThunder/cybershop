<?php
/* Smarty version 3.1.39, created on 2021-07-03 20:56:16
  from 'W:\domains\myshop.local\views\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e0a4c084b461_72312791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabf685eba7ee4cde7195f0bccfd9cbb15b66cf4' => 
    array (
      0 => 'W:\\domains\\myshop.local\\views\\admin\\admin.tpl',
      1 => 1625334956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e0a4c084b461_72312791 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blockNewCategory">
	Новая категория:
	<input name="newCategoryName" id="newCategoryName" type="text" value="" />
	<br />

	Является подкатегорией для
	<select name="generalCatId">
		<option value="0">Главная категория
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
	</select>
	<br/>
	<input type="button" onclick="newCategory();" value="Добавить категорию" />
</div><?php }
}
