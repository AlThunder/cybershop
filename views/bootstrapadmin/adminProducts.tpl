<h2 class="text-center">Товар</h2>
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
					{foreach $rsCategories as $itemCat}
						<option value="{$itemCat['id']}">{$itemCat['name']}
					{/foreach}
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
		{foreach $rsProducts as $item name=products}
			<tr>
				<td>{$smarty.foreach.products.iteration}</td>
				<td>{$item['id']}</td>
				<td>
					<input class="form-control" type="edit" id="itemName_{$item['id']}" value="{$item['name']}"/>
				</td>
				<td>
					<input class="form-control" type="edit" id="itemPrice_{$item['id']}" value="{$item['price']}"/>
				</td>
				<td>
					<select class="form-select" id="itemCatId_{$item['id']}">
						<option value="0">Главная категория
						{foreach $rsCategories as $itemCat}
							<option value="{$itemCat['id']}" {if $item['category_id'] == $itemCat['id']}selected{/if}>{$itemCat['name']}
						{/foreach}
					</select>
				</td>
				<td>
					<textarea class="form-control" rows="6" id="itemDesc_{$item['id']}">
						{$item['description']}
					</textarea>
				</td>
				<td>
					<input class="form-check-input" type="checkbox" id="itemStatus_{$item['id']}" {if $item['status'] == 0} checked="checked"{/if}/>
				</td>
				<td>
					{if $item['image']}
					<img src="/images/products/{$item['image']}" width="100"/>
					{/if}
					<form action="/admin/upload/" method="post" enctype="multipart/form-data">
						<input class="form-control" type="file" name="filename">
						<input type="hidden" name="itemId" value="{$item['id']}">
						<input class="btn btn-primary" type="submit" value="Загрузить"><br>
					</form>
				</td>
				<td>
					<input class="btn btn-primary" type="button" value="Сохранить" onclick="updateProduct('{$item['id']}');"/>
				</td>
			</tr>
		{/foreach}

	</table>