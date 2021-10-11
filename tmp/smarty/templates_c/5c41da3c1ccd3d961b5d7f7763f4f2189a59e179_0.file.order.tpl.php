<?php
/* Smarty version 3.1.39, created on 2021-09-30 20:40:51
  from 'C:\OpenServer\domains\cybershop\views\bootstrap\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155f6a31bde28_88657019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c41da3c1ccd3d961b5d7f7763f4f2189a59e179' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrap\\order.tpl',
      1 => 1633023647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155f6a31bde28_88657019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
<table class="table table-dark">
	<tr class="table-primary">
		<td>№</td>
		<td>Наименование</td>
		<td>Количество</td>
		<td>Цена за единицу</td>
		<td>Стоимость</td>
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
			<td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
			<td>
				<span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<input class="form-control" type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
"/>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

				</span>
			</td>
			<td>
				<span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<input class="form-control" type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

				</span>
			</td>
			<td>
				<span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<input class="form-control" type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
"/>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

				</span>
			</td>
		</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('buttonClass', '');?>
	<h2>Данные заказчика</h2>
	<div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
>
		<?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['arUser']->value['name']);?>
		<?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['arUser']->value['phone']);?>
		<?php $_smarty_tpl->_assignInScope('adress', $_smarty_tpl->tpl_vars['arUser']->value['adress']);?>
		<table class="table">
			<tr>
				<td>Имя*</td>
				<td><input class="form-control" type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/></td>
			</tr>
			<tr>
				<td>Тел.*</td>
				<td><input class="form-control" type="text" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/></td>
			</tr>
			<tr>
				<td>Адрес*</td>
				<td><textarea class="form-control" id="adress" name="adress" ><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea></td>
			</tr>
		</table>
	</div>	
<?php } else { ?>

	<div id="loginBox">
		<div class="menuCaption">Авторизация</div>
		<table>
		<tr>
			<td>Логин</td>
			<td><input class="form-control" type="text" id="loginEmail" name="loginEmail" value=""/></td>
		</tr>
		<tr>
			<td>Пароль</td>
			<td><input class="form-control" type="password" id="loginPwd" name="loginPwd" value=""/></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-primary" type="button" onclick="login();" value="Войти"/></td>
		</tr>
		</table>
	</div>

	<div class="col-lg-2" id="registerBox">или<br>
	<div class="menuCaption">Регистрация нового пользователя:</div>
		email*:<br>
		<input class="form-control" type="textarea" id="email" name="email" value=""/><br>
		пароль*:<br>
		<input class="form-control" type="password" id="pwd1" name="pwd1" value=""/><br>
		повторить пароль*:<br>
		<input class="form-control" type="password" id="pwd2" name="pwd2" value=""/><br>

		Имя* :<br>
		<input class="form-control" type="text" id="name" name="name" value=""/><br>
		Тел.* :<br>
		<input class="form-control" type="text" id="phone" name="phone" value=""/><br>
		Адрес* :<br>
		<textarea class="form-control" id="adress" name="adress"/></textarea><br>

		<input class="btn btn-primary" type="button" onclick="registerNewUser();" value="Зарегистрироваться">
	</div>
	<?php $_smarty_tpl->_assignInScope('buttonClass', "class='hideme btn btn-primary'");
}?>

<input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();"/>
</form><?php }
}
