<?php
/* Smarty version 3.1.39, created on 2021-09-30 20:49:49
  from 'C:\OpenServer\domains\cybershop\views\bootstrap\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155f8bd2e8d71_95891683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c5721b3701e5f7a0cdcfd088a78357d2d42442e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrap\\leftcolumn.tpl',
      1 => 1633024177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155f8bd2e8d71_95891683 (Smarty_Internal_Template $_smarty_tpl) {
?>	
<div id="leftColumn">

<!-- Navbar
================================================== -->
<div id="leftMenu" class="bs-docs-section clearfix">
  	<div class="row">
	  <div class="col-lg-12">
		
		

		<div class="bs-component">
			
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container-fluid">
					<a class="navbar-brand" href="/">Главная страница</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false"
						 aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarColor01">
						<ul class="navbar-nav me-auto">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
							<li class="nav-item dropdown">
								<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
									<button type="button" class="btn btn-primary"><a class="nav-link" href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></button>
									<div class="btn-group" role="group">
										<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
											<a class="dropdown-item" href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										</div>
									</div>
								</div>
							</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					<div class="collapse navbar-collapse" id="navbarColor01">
						<ul class="navbar-nav me-auto">

							<?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>

							<div id="userBox">
								<a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br>
								<a href="/user/logout/" onclick="logout()">Выход</a>				
							</div>

							<?php } else { ?>

							<div id="userBox" class="hideme">
								<a href="#" id="userLink"></a><br>
								<a href="/user/logout/" onclick="logout();">Выход</a>
							</div>

							<?php if (!(isset($_smarty_tpl->tpl_vars['hideLoginBox']->value))) {?>

							<li class="nav-item dropdown" id="loginBox">
							<a class="nav-link" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Авторизация</a>
								<div class="dropdown-menu" id="loginBox">
									<div class="dropdown-item">
										<div class="form-group row">
											<label for="exampleInputEmail1" class="form-label mt-4">Логин(email)</label>
											<input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="Введите логин">
										  	<label for="exampleInputPassword1" class="form-label mt-4">Пароль</label>
											<input type="password" class="form-control " id="loginPwd" name="loginPwd" placeholder="Введите пароль">
										</div>
										<br>
										<input type="button" class="btn btn-primary" onclick="login();" value="Войти">
									</div>
								</div>
                     		</li>
							<li class="nav-item dropdown" id="registerBox">
							<a class="nav-link" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Регистрация</a>
								<div class="dropdown-menu">
									<div class="dropdown-item">
										<div class="form-group row">
											<label for="exampleInputEmail1" class="form-label mt-4">Email</label>
											<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Введите email">
										  	<label for="exampleInputPassword1" class="form-label mt-4">Пароль</label>
											<input type="password" class="form-control " id="pwd1" name="pwd1" placeholder="Введите пароль">
											<label for="exampleInputPassword1" class="form-label mt-4">Повторить пароль</label>
											<input type="password" class="form-control " id="pwd2" name="pwd2" placeholder="Повторите пароль">
										</div>
										<br>
										<input type="button" class="btn btn-primary" onclick="registerNewUser();" value="Зарегистрироваться">
									</div>
								</div>
                     		</li>

							<?php }?>
						<?php }?>
						</ul>
						<form class="d-flex">
							<div class="menuCaption">
							<a class="btn btn-secondary my-2 my-sm-0" href="/cart/" type="button" title="Перейти в корзину">Корзина
							<br>В корзине товаров: 
							<span id="cartCntItems">
								<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
 <?php } else { ?>пусто<?php }?>
							</span></br>
							</a>
							</div>
						</form>
					</div>
				</div>
			</nav>
			  
		</div>
		  
	</div>
	  
  </div>
</div><br><?php }
}
