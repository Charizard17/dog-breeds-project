<?php
/* Smarty version 3.1.36, created on 2020-12-15 14:08:27
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/layout_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd8c35b914bd1_77754339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc617b58d300fdc225202e0121f2745b9709c99' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/layout_main.html',
      1 => 1608040705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search/search-form.html' => 1,
  ),
),false)) {
function content_5fd8c35b914bd1_77754339 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Dog Breeds</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico"/>
    
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:search/search-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 src="js/cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><?php echo '</script'; ?>
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
