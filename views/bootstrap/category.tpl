{* Страница категории *}
<h1>Товары категории {$rsCategory['name']}</h1>
{if !$rsProducts & !$rsChildCats}
	<h2>Товары не найдены!</h2>
{else}
	<div class="row">
		{foreach $rsProducts as $item name=products}
		<div class="col-lg-4">
		<div class="bs-component">
		  <div class="card border-danger mb-3 style="max-width: 20rem;" >
			<div class="card-body text-center">
				<a href="/product/{$item['id']}/">
				  <img src="/images/products/{$item['image']}" width="250" height="300">
				</a><br>
				<a class="navbar-brand text-white" href="/product/{$item['id']}/">{$item['name']}</a>
			</div>
			<div class="line"></div>
		  </div>
		</div>
		</div>
		{/foreach}
  </div>
{/if}
{foreach $rsChildCats as $item name=childCats}
	<h2><a href="/category/{$item['id']}/"> {$item['name']}</a></h2>
{/foreach}
