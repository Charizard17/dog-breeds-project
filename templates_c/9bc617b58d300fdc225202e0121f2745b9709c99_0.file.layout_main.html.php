<?php
/* Smarty version 3.1.36, created on 2020-12-22 17:21:30
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/layout_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe22b1a4e3af7_44977101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc617b58d300fdc225202e0121f2745b9709c99' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/layout_main.html',
      1 => 1608657352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search/search-form.html' => 1,
    'file:table/table.html' => 1,
    'file:table/table-row-detail.html' => 1,
  ),
),false)) {
function content_5fe22b1a4e3af7_44977101 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Dog Breeds</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <a class="navbar-brand" href="/">Dog Breeds</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="favourite">Favourite</a>
            </li>
          </ul>
        </div>
      </nav>


    <div class="qwerty">
        <div class="item1"><?php $_smarty_tpl->_subTemplateRender("file:search/search-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
        <div class="item2"><?php $_smarty_tpl->_subTemplateRender("file:table/table.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:table/table-row-detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    


    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-compat/3.0.0-alpha1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
