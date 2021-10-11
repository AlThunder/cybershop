<?php
/* Smarty version 3.1.39, created on 2021-09-27 16:33:48
  from 'C:\OpenServer\domains\cybershop\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6151c83cea8131_02319876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3caaf207c00a35ee622422124fdb97a40377a219' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cybershop\\views\\default\\header.tpl',
      1 => 1626361210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views\\default\\leftcolumn.tpl' => 1,
  ),
),false)) {
function content_6151c83cea8131_02319876 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="/<?php echo TemplateWebPath;?>
css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/<?php echo TemplateWebPath;?>
css/main.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div id="header">
        <h1>my shop - интернет магазин</h1>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:views\default\leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <div id="centerColumn"><?php }
}
