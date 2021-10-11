<?php
/* Smarty version 3.1.39, created on 2021-09-23 17:20:52
  from 'C:\OpenServer\domains\cybershop\views\bootstrap\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c8d44263f59_40726829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '467cc44a91ba9a05edf141ddc532645ade573568' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrap\\product.tpl',
      1 => 1632406842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c8d44263f59_40726829 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="bs-component">
            <div class="card mb-3">
                <h3 class="card-header"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>
                <div class="card-body">
                    <h5 class="card-title">Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</h5>
                </div>
                <img width="500" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
                <div class="card-body">
                <p class="card-text"> Описание: <br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
                </div>
                <div class="card-body">
                    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> alt="Удалить из корзины" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" class="card-link">Удалить из корзины</a>
                    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> alt="Добавить в корзину" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" class="card-link">Добавить в корзину</a>
                </div>
            </div>
        </div>
    </div>
<?php }
}
