<?php
/* Smarty version 3.1.39, created on 2021-09-28 17:03:42
  from 'C:\OpenServer\domains\cybershop\views\bootstrapadmin\adminProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615320be915952_02911577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984c5f277106cf8795b875b5c2c3275d46ec730d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrapadmin\\adminProducts.tpl',
      1 => 1632837819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615320be915952_02911577 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="text-center">Товар</h2>
	<caption>Добавить продукт</caption>
	<table class="table table-dark" border="1" cellpadding="1" cellspacing="1">
		
		<tr class="table-primary">
			<th>Название</th>
			<th>Цена</th>
			<th>Категория</th>
			<th>Описание</th>
			<th>Сохранить</th>
		</tr>

		<tr>
			<td>
				<input class="form-control" type="edit" id="newItemName" value=""/>
			</td>
			<td>
				<input class="form-control" type="edit" id="newItemPrice" value=""/>
			</td>

			<td>
				<select class="form-select" id="newItemCatId">
					<option value="0">Главная категория
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'itemCat');
$_smarty_tpl->tpl_vars['itemCat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</td>
			<td>
				<textarea class="form-control" id="newItemDesc"></textarea>
			</td>
			<td>
				<input class="btn btn-primary" type="button" value="Сохранить" onclick="addProduct();"/>
			</td>
		</tr>
	</table>
	<caption>Редактировать</caption>
	<table class="table table-dark" border="1" cellpadding="1" cellspacing="1">
		
		<tr class="table-primary">
			<th>№</th>
			<th>ID</th>
			<th>Название</th>
			<th>Цена</th>
			<th>Категория</th>
			<th>Описание</th>
			<th>Удалить</th>
			<th>Изображение</th>
			<th>Сохранить</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
			<tr>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				<td>
					<input class="form-control" type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
				</td>
				<td>
					<input class="form-control" type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
				</td>
				<td>
					<select class="form-select" id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<option value="0">Главная категория
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'itemCat');
$_smarty_tpl->tpl_vars['itemCat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id'] == $_smarty_tpl->tpl_vars['itemCat']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</td>
				<td>
					<textarea class="form-control" rows="6" id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

					</textarea>
				</td>
				<td>
					<input class="form-check-input" type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?> checked="checked"<?php }?>/>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
					<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
					<?php }?>
					<form action="/admin/upload/" method="post" enctype="multipart/form-data">
						<input class="form-control" type="file" name="filename">
						<input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<input class="btn btn-primary" type="submit" value="Загрузить"><br>
					</form>
				</td>
				<td>
					<input class="btn btn-primary" type="button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	</table><?php }
}
