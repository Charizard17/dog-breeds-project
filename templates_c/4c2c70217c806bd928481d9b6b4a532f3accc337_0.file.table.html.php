<?php
/* Smarty version 3.1.36, created on 2020-12-16 15:39:04
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fda2a18017845_03679809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2c70217c806bd928481d9b6b4a532f3accc337' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html',
      1 => 1608133126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fda2a18017845_03679809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<table class="dog-breeds-table">
    <thead>
      <tr>
        <th class="dog-breeds-table-th" scope="col">ID</th>
        <th class="dog-breeds-table-th" scope="col">Name</th>
        <th class="dog-breeds-table-th" scope="col">Picture</th>
        <th class="dog-breeds-table-th" scope="col">Weight(kg)</th>
        <th class="dog-breeds-table-th" scope="col">Height(cm)</th>
        <th class="dog-breeds-table-th" scope="col">Temperament</th>
      </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'fooitem', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['fooitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fooitem']->value) {
$_smarty_tpl->tpl_vars['fooitem']->do_else = false;
?>
            <tr class="dog-breeds-table-tr">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fooitem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' || $_smarty_tpl->tpl_vars['key']->value == 'breed_name' || $_smarty_tpl->tpl_vars['key']->value == 'img' || $_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height' || $_smarty_tpl->tpl_vars['key']->value == 'temperament') {?>
                  <?php if ($_smarty_tpl->tpl_vars['key']->value == 'img') {?>
                    <td class="dog-breeds-table-td"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value,'width'=>"64",'height'=>"64"),$_smarty_tpl);?>
</td>
                  <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height') {?>
                    <td class="dog-breeds-table-td"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</td>
                  <?php } else { ?>
                    <td class="dog-breeds-table-td"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                  <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
