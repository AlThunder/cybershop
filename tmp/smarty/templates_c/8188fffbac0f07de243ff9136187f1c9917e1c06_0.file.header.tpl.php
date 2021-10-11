<?php
/* Smarty version 3.1.39, created on 2021-08-13 08:10:58
  from 'C:\OpenServer\domains\myshop.local\views\bootstrap\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6115fee2b7d9f2_60821290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8188fffbac0f07de243ff9136187f1c9917e1c06' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop.local\\views\\bootstrap\\header.tpl',
      1 => 1628831454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6115fee2b7d9f2_60821290 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/_variables.scss">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/_bootswatch.scss">
    
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 id="_carbonads_projs" type="text/javascript" src="./Bootswatch_ Sketchy_files/CKYIE23N.json"><?php echo '</script'; ?>
>
</head>

<body id="bs5-header">
    <!-- Navbar
      ================================================== -->
    <div class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-1">
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
                                    <li class="nav-item">
                                        <a class="nav-link active" href="https://bootswatch.com/sketchy/#">Home
                                            <span class="visually-hidden">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://bootswatch.com/sketchy/#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://bootswatch.com/sketchy/#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://bootswatch.com/sketchy/#">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                            href="https://bootswatch.com/sketchy/#" role="button" aria-haspopup="true"
                                            aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="https://bootswatch.com/sketchy/#">Action</a>
                                            <a class="dropdown-item" href="https://bootswatch.com/sketchy/#">Another
                                                action</a>
                                            <a class="dropdown-item" href="https://bootswatch.com/sketchy/#">Something
                                                else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="https://bootswatch.com/sketchy/#">Separated
                                                link</a>
                                        </div>
                                    </li>
                                </ul>
                                <form class="d-flex">
                                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                    
                </div>
                
            </div>
            
        </div>
    </div><br>
    <section class="about">
    <div class="page-header">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center color1 mb-5">Интернет магазин</h1>
        </div>
      </div>
    </div>
    </section>
<?php }
}
