	{*левый столбец/навигационная панель*}

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
							{foreach $rsCategories as $item}
							<li class="nav-item dropdown">
								<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
									<button type="button" class="btn btn-primary"><a class="nav-link" href="/?controller=category&id={$item['id']}">{$item['name']}</a></button>
									<div class="btn-group" role="group">
										<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											{if isset($item['children'])}
											{foreach $item['children'] as $itemChild}
											<a class="dropdown-item" href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a>
											{/foreach}
											{/if}
										</div>
									</div>
								</div>
							</li>
							{/foreach}
						</ul>
					</div>
					<div class="collapse navbar-collapse" id="navbarColor01">
						<ul class="navbar-nav me-auto">

							{if isset($arUser)}

							<div id="userBox">
								<a href="/user/" id="userLink">{$arUser['displayName']}</a><br>
								<a href="/user/logout/" onclick="logout()">Выход</a>				
							</div>

							{else}

							<div id="userBox" class="hideme">
								<a href="#" id="userLink"></a><br>
								<a href="/user/logout/" onclick="logout();">Выход</a>
							</div>

							{if ! isset($hideLoginBox)}

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

							{/if}
						{/if}
						</ul>
						<form class="d-flex">
							<div class="menuCaption">
							<a class="btn btn-secondary my-2 my-sm-0" href="/cart/" type="button" title="Перейти в корзину">Корзина
							<br>В корзине товаров: 
							<span id="cartCntItems">
								{if $cartCntItems > 0} {$cartCntItems} {else}пусто{/if}
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
</div><br>