<?php
/* Smarty version 3.1.39, created on 2021-10-10 16:03:22
  from 'C:\OpenServer\domains\cybershop\views\bootstrap\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6162e49a0b2b36_15084530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f7a4c457aac38b1129252900248995e04e89b3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\bootstrap\\header.tpl',
      1 => 1633870994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_6162e49a0b2b36_15084530 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/main_image.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="/templates/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/bootstrap/css/bootstrap.main.css">
    <link rel="stylesheet" href="/templates/bootstrap/css/_variables.scss">
    <link rel="stylesheet" href="/templates/bootstrap/css/_bootswatch.scss">
    
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/templates/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    
    
</head>

<body id="bs5-header">
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="about">
    <div class="page-header">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center color1 mb-5">Интернет магазин</h1>
        </div>
      </div>
    </div>
    </section>

<section class="ph">
  <div class="container">
  <div class="bs-docs-section">
<?php }
}
