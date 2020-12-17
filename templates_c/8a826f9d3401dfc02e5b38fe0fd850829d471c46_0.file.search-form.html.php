<?php
/* Smarty version 3.1.36, created on 2020-12-17 12:48:00
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fdb5380342f01_78413854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a826f9d3401dfc02e5b38fe0fd850829d471c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html',
      1 => 1608209278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb5380342f01_78413854 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="POST">
    <h4 class="text-center">Dog finder!</h4>
    <div class="search-form-term">
        <span class="search-form-span">Breed Name</span>
        <input class="search-form-input-word" type="text" name="breed_name" id="breed_name">
    </div>
    <div class="search-form-term">
        <span class="search-form-span">Weight (kg)</span>
        <input class="search-form-input-number" type="text" name="minWeight" id="minWeight" placeholder="Min">
        <input class="search-form-input-number" type="text" name="maxWeight" id="maxWeight" placeholder="Max">
    </div>
    <div class="search-form-term">
        <span class="search-form-span">Height (cm)</span>
        <input class="search-form-input-number" type="text" name="minHeight" id="minHeight" placeholder="Min">
        <input class="search-form-input-number" type="text" name="maxHeight" id="maxHeight" placeholder="Max">
    </div>
    <div class="search-form-term">
        <span class="search-form-span">Temperament</span>
        <input class="search-form-input-word" type="text" name="temperament" id="temperament">
    </div>
    <div class="search-form-button-container">
        <input class="search-form-button" type="submit" name="submit" value="Search">
    </div>
</form><?php }
}
