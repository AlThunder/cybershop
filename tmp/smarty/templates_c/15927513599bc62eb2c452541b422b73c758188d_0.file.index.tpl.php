<?php
/* Smarty version 3.1.39, created on 2021-09-23 16:51:15
  from 'C:\OpenServer\domains\cybershop\views\bootstrap\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c86535561b8_88494636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15927513599bc62eb2c452541b422b73c758188d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrap\\index.tpl',
      1 => 1632405072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c86535561b8_88494636 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
          <div class="col-lg-4">
          <div class="bs-component">
            <div class="card border-danger mb-3 style="max-width: 20rem;" >
              <div class="card-body text-center">
                  <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="250" height="300">
                  </a><br>
                  <a class="navbar-brand text-white" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
              </div>
              <div class="line"></div>
            </div>
          </div>
          </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
