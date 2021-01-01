<?php
/* Smarty version 3.1.36, created on 2021-01-01 17:13:22
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fef5832883dd3_03068566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a826f9d3401dfc02e5b38fe0fd850829d471c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html',
      1 => 1609521201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fef5832883dd3_03068566 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="POST">
    <h5 class="text-center">Dog finder!</h5>
    <div class="search-form-container">
        <div class="div1"><span class="grid-element">Breed Name</span></div>
        <div class="div2"><input class="grid-element" type="text" name="breed_name" id="breed_name"></div>
        <div class="div3"><span class="grid-element">Weight (kg)</span></div>
        <div class="div4"><input class="grid-element" type="text" name="minWeight" id="minWeight" placeholder="min"></div>
        <div class="div5"><input class="grid-element" type="text" name="maxWeight" id="maxWeight" placeholder="max"></div>
        <div class="div6"><span class="grid-element">Height (cm)</span></div>
        <div class="div7"><input class="grid-element" type="text" name="minHeight" id="minHeight" placeholder="min"></div>
        <div class="div8"><input class="grid-element" type="text" name="maxHeight" id="maxHeight" placeholder="max"></div>
        <div class="div9"><span class="grid-element">Temperament</span></div>
        <div class="div10"><input class="grid-element" type="text" name="temperament" id="temperament"></div>
        <div class="div11"><input class="grid-element" type="submit" name="submit" value="Search"></div>
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
