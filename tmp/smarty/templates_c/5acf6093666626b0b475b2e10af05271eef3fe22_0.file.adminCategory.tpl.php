<?php
/* Smarty version 3.1.39, created on 2021-09-27 19:39:45
  from 'C:\OpenServer\domains\cybershop\views\admin\adminCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6151f3d1ec4e97_95119033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5acf6093666626b0b475b2e10af05271eef3fe22' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\admin\\adminCategory.tpl',
      1 => 1625511454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6151f3d1ec4e97_95119033 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Категории</h2>
	<table border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>№</th>
			<th>ID</th>
			<th>Название</th>
			<th>Родительская категория</th>
			<th>Действие</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item', false, NULL, 'categories', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
?>
			<tr>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null);?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				<td>
					<input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
				</td>
				<td>
					<select id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<option value="0">Главная категория
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMainCategories']->value, 'mainItem');
$_smarty_tpl->tpl_vars['mainItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->value) {
$_smarty_tpl->tpl_vars['mainItem']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] == $_smarty_tpl->tpl_vars['mainItem']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>

						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</td>
				<td>
					<input type="button" value="Сохранить" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table><?php }
}
