<?php
/* Smarty version 3.1.39, created on 2021-08-13 08:15:52
  from 'C:\OpenServer\domains\myshop.local\views\bootstrap\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61160008423436_94072775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6456c67ec1bdec6e85339eec18e24d352d12a4f6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\bootstrap\\index.tpl',
      1 => 1628831748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61160008423436_94072775 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="ph">
  <div class="container">
  <div class="bs-docs-section">
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
  
  </div>
</section>
<?php }
}
