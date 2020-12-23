<?php
/* Smarty version 3.1.36, created on 2020-12-23 16:42:51
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe3738bc5b891_73200706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a826f9d3401dfc02e5b38fe0fd850829d471c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html',
      1 => 1608741770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe3738bc5b891_73200706 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="POST">
    <h4 class="text-center">Dog finder!</h4>
    <div class="search-form-term">
        <span class="search-form-span">Breed Name</span>
        <input class="search-form-input-word" type="text" name="breed_name" id="breed_name">
    </div>
    <div class="search-form-term">
        <span class="search-form-span">Weight (kg)</span>
        <input class="search-form-input-number" type="text" name="minWeight" id="minWeight" placeholder="min">
        <input class="search-form-input-number" type="text" name="maxWeight" id="maxWeight" placeholder="max">
    </div>
    <div class="search-form-term">
        <span class="search-form-span">Height (cm)</span>
        <input class="search-form-input-number" type="text" name="minHeight" id="minHeight" placeholder="min">
        <input class="search-form-input-number" type="text" name="maxHeight" id="maxHeight" placeholder="max">
    </div>
    <div class="search-form-term">
        <span class="search-form-span">Temperament</span>
        <input class="search-form-input-word" type="text" name="temperament" id="temperament">
    </div>
    <div class="search-form-button-container">
        <input class="search-form-button" type="submit" name="submit" value="Search">
    </div>
</form>

<?php if ($_smarty_tpl->tpl_vars['filteredCount']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['filteredCount']->value != $_smarty_tpl->tpl_vars['dogBreedArrayCount']->value) {?>
        <span><?php echo $_smarty_tpl->tpl_vars['filteredCount']->value;?>
 dog breeds found.</span>
    <?php } else {
$_prefixVariable1 = $_smarty_tpl->tpl_vars['dogBreedArrayCount']->value;
$_smarty_tpl->_assignInScope('filteredCount', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <span><?php echo $_smarty_tpl->tpl_vars['filteredCount']->value;?>
 dog breeds found. Please review your search conditions.</span>
    <?php }}
}
}
}
