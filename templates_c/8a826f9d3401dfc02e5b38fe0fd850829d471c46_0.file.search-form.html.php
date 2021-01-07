<?php
/* Smarty version 3.1.36, created on 2021-01-07 13:14:40
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff70940954fe7_99778484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a826f9d3401dfc02e5b38fe0fd850829d471c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html',
      1 => 1610025279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff70940954fe7_99778484 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="POST">
    <div class="search-form-container">
        <div class="div0"><span class="search-header">Dog finder!</span></div>
        <div class="div1"><span class="search-element">Breed Name</span></div>
        <div class="div2"><input class="search-element" type="text" name="breed_name" id="breed_name"></div>
        <div class="div3"><span class="search-element">Weight (kg)</span></div>
        <div class="div4"><input class="search-element" type="text" name="minWeight" id="minWeight" placeholder="min"></div>
        <div class="div5"><input class="search-element" type="text" name="maxWeight" id="maxWeight" placeholder="max"></div>
        <div class="div6"><span class="search-element">Height (cm)</span></div>
        <div class="div7"><input class="search-element" type="text" name="minHeight" id="minHeight" placeholder="min"></div>
        <div class="div8"><input class="search-element" type="text" name="maxHeight" id="maxHeight" placeholder="max"></div>
        <div class="div9"><span class="search-element">Temperament</span></div>
        <div class="div10"><input class="search-element" type="text" name="temperament" id="temperament"></div>
        <div class="div11"><input class="search-element search-button c-pointer" type="submit" name="submit" value="Search"></div>
    </div>
</form>

<?php if ($_smarty_tpl->tpl_vars['filteredCount']->value != 0) {?>
    <?php if ($_smarty_tpl->tpl_vars['filteredCount']->value != $_smarty_tpl->tpl_vars['dogBreedArrayCount']->value) {?>
        <span class="search-element"><?php echo $_smarty_tpl->tpl_vars['filteredCount']->value;?>
 dog breeds found.</span>
    <?php } else {
$_prefixVariable1 = $_smarty_tpl->tpl_vars['dogBreedArrayCount']->value;
$_smarty_tpl->_assignInScope('filteredCount', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <span class="search-element"><?php echo $_smarty_tpl->tpl_vars['filteredCount']->value;?>
 dog breeds found.</span>
    <?php }}
} elseif ($_smarty_tpl->tpl_vars['filteredCount']->value == 0 && $_smarty_tpl->tpl_vars['dogBreeds']->value == array()) {?>
    <span class="search-element">Please review the search terms.</span>
<?php }
}
}
