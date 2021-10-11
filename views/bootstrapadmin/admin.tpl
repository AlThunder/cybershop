<h2 class="text-center">Категории</h2>
	
    <div class="row col-lg-4" id="blockNewCategory" >
		Новая категория
		<input class="form-control form-control-lg" name="newCategoryName" id="newCategoryName" type="text" placeholder="Ввести новую категорию" value="" />
		является подкатегорией для
		<select class="form-select" name="generalCatId">
			<option value="0">Главная категория
			{foreach $rsMainCategories as $item}
				<option value="{$item['id']}">{$item['name']}
			{/foreach}		
		</select>
		<br><br>
		
	</div><br>
	<input class="btn btn-primary" type="button" onclick="newCategory();" value="Добавить категорию" /><br><br>
    
	<table class="table table-dark" border="1" cellpadding="1" cellspacing="1">
		<tr class="table-primary">
			<th>№</th>
			<th>ID</th>
			<th>Название</th>
			<th>Родительская категория</th>
			<th>Действие</th>
		</tr>
		{foreach $rsCategories as $item name=categories}
			<tr>
				<td>{$smarty.foreach.categories.iteration}</td>

				<td>{$item['id']}</td>
				<td>
					<input class="form-control" type="edit" id="itemName_{$item['id']}" value="{$item['name']}"/>
				</td>
				<td>
					<select class="form-select" id="parentId_{$item['id']}">
						<option value="0">Главная категория
						{foreach $rsMainCategories as $mainItem}
							<option value="{$mainItem['id']}" {if $item['parent_id'] == $mainItem['id']}selected{/if}>{$mainItem['name']}
						{/foreach}
					</select>
				</td>
				<td>
					<input class="btn btn-primary" type="button" value="Сохранить" onclick="updateCat({$item['id']});"/>
				</td>
			</tr>
		{/foreach}
	</table>
	