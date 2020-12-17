<?php
/* Smarty version 3.1.36, created on 2020-12-17 11:13:47
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table-row-detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fdb3d6b53fc66_88601599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2eeda15b7655a9d5dccae38de3017e226e7abc4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table-row-detail.html',
      1 => 1608203625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdb3d6b53fc66_88601599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<!-- The Modal -->
<div id="table-row-detail-modal" class="modal-container">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <table class="modal-table">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreeds']->value, 'dogBreedsItem', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dogBreedsItem']->value) {
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = false;
?>
                <tr class="modal-table-tr">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' || $_smarty_tpl->tpl_vars['key']->value == 'breed_name' || $_smarty_tpl->tpl_vars['key']->value == 'img' || $_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height' || $_smarty_tpl->tpl_vars['key']->value == 'origin' || $_smarty_tpl->tpl_vars['key']->value == 'life_span' || $_smarty_tpl->tpl_vars['key']->value == 'temperament' || $_smarty_tpl->tpl_vars['key']->value == 'breed_group' || $_smarty_tpl->tpl_vars['key']->value == 'bred_for') {?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'img') {?>
                            <th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
                            <td><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value,'width'=>"64",'height'=>"64"),$_smarty_tpl);?>
</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height') {?>
                            <th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
                            <td class="modal-table-td"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</td>
                        <?php } else { ?>
                            <th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
                            <td class="modal-table-td"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
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
        </table>
    </div>

</div><?php }
}
