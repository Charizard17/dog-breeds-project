<?php
/* Smarty version 3.1.36, created on 2020-12-21 14:16:06
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe0ae265bb481_27628696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a826f9d3401dfc02e5b38fe0fd850829d471c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/search/search-form.html',
      1 => 1608560165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe0ae265bb481_27628696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<form action="index.php" method="POST">
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

<?php if ($_smarty_tpl->tpl_vars['filteredCount']->value != 0) {?>
<span><?php echo $_smarty_tpl->tpl_vars['filteredCount']->value;?>
 dog breeds found.</span>
<?php }?>

<div class="">
    <span class="">&times;</span>
    <table class="">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedDetails']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr class="">
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' || $_smarty_tpl->tpl_vars['key']->value == 'breed_name' || $_smarty_tpl->tpl_vars['key']->value == 'image' || $_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height' || $_smarty_tpl->tpl_vars['key']->value == 'origin' || $_smarty_tpl->tpl_vars['key']->value == 'life_span' || $_smarty_tpl->tpl_vars['key']->value == 'temperament' || $_smarty_tpl->tpl_vars['key']->value == 'breed_group' || $_smarty_tpl->tpl_vars['key']->value == 'bred_for') {?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'image') {?>
                        <th class=""><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['key']->value, 'UTF-8'),'_',' ');?>
</th>
                        <td class=""><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value,'width'=>"200",'height'=>"200"),$_smarty_tpl);?>
</td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height') {?>
                        <th class=""><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['key']->value, 'UTF-8'),'_',' ');?>
</th>
                        <td class=""><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</td>
                    <?php } else { ?>
                        <th class=""><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['key']->value, 'UTF-8'),'_',' ');?>
</th>
                        <td class=""><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                    <?php }?>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div><?php }
}
