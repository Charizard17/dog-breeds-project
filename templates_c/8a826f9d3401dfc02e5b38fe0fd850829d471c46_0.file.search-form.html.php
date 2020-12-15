<?php
/* Smarty version 3.1.36, created on 2020-12-15 14:08:27
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd8c35b9179a8_69093910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a826f9d3401dfc02e5b38fe0fd850829d471c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html',
      1 => 1608040705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8c35b9179a8_69093910 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="mt-2 mr-5 ml-5" action="index.php" method="POST">
    <h2 class="text-center">Find your dog!</h2>
    <div class="input-group mb-3 ">
        <div class="input-group-prepend">
            <span class="input-group-text">Breed Name</span>
        </div>
        <input type="text" class="form-control mr-3" name="breed_name" id="breed_name">
        <div class="input-group-prepend">
            <span class="input-group-text">Weight (kg)</span>
        </div>
        <input type="text" class="form-control" name="minWeight" id="minWeight" placeholder="Min">
        <input type="text" class="form-control mr-3" name="maxWeight" id="maxWeight" placeholder="Max">
        <div class="input-group-prepend">
            <span class="input-group-text">Height (cm)</span>
        </div>
        <input type="text" class="form-control" name="minHeight" id="minHeight" placeholder="Min">
        <input type="text" class="form-control mr-3" name="maxHeight" id="maxHeight" placeholder="Max">
        <div class="input-group-prepend">
            <span class="input-group-text">Temperament</span>
        </div>
        <input type="text" class="form-control" name="temperament" id="temperament">
    </div>
    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Search">
</form><?php }
}
