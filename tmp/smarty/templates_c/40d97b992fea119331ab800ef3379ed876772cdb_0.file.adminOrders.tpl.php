<?php
/* Smarty version 3.1.39, created on 2021-09-27 19:39:57
  from 'C:\OpenServer\domains\cybershop\views\admin\adminOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6151f3ddb22c61_24784649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d97b992fea119331ab800ef3379ed876772cdb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\admin\\adminOrders.tpl',
      1 => 1625845848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6151f3ddb22c61_24784649 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Заказы</h2>
<?php if (!$_smarty_tpl->tpl_vars['rsOrders']->value) {?>
	Нет заказов
<?php } else { ?>
	<table border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>№</th>
			<th>Действия</th>
			<th>ID заказа</th>
			<th width="110">Статус</th>
			<th>Дата создания</th>
			<th>Дата оплаты</th>
			<th>Дополнительная информация</th>
			<th>Дата изменения заказа</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsOrders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>
			<tr>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>
</td>
				<td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;">Показать товар заказа</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
				<td>
					<input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?> checked="checked"<?php }?> onclick="updateOrderStatus('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>Закрыт
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
				<td>
					<input id="datePayment_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
"/>
					<input type="button" value="Сохранить" onclick="updateDatePayment('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_modification'];?>
</td>
			</tr>

			<tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<td colspan="8">
				<?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
					<table border="1" cellpadding="1" cellspacing="1" width="100%">
						<tr>
							<th>№</th>
							<th>ID</th>
							<th>Название</th>
							<th>Цена</th>
							<th>Количество</th>
						</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
					<tr>
						<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
</td>
						<td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				<?php }?>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
<?php }
}
}
