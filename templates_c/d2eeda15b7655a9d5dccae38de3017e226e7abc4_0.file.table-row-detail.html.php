<?php
/* Smarty version 3.1.36, created on 2021-01-05 17:14:19
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table-row-detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff49e6b8ac3d8_85054519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2eeda15b7655a9d5dccae38de3017e226e7abc4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table-row-detail.html',
      1 => 1609866841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff49e6b8ac3d8_85054519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<!-- The Modal -->
<div class="modal-container" id="table-row-detail-modal">
    <div class="modal-content2">
        <span class="modal-close c-pointer">&times;</span>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedDetails']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' || $_smarty_tpl->tpl_vars['key']->value == 'breed_name' || $_smarty_tpl->tpl_vars['key']->value == 'image' || $_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height' || $_smarty_tpl->tpl_vars['key']->value == 'origin' || $_smarty_tpl->tpl_vars['key']->value == 'life_span' || $_smarty_tpl->tpl_vars['key']->value == 'temperament' || $_smarty_tpl->tpl_vars['key']->value == 'breed_group' || $_smarty_tpl->tpl_vars['key']->value == 'bred_for') {?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == 'image') {?>
                    <div class="modal-line-container">
                        <div class="modal-line-left"><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['key']->value, 'UTF-8'),'_',' ');?>
</div>
                        <div class="modal-line-right modal-image"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
</div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height') {?>
                    <div class="modal-line-container">
                        <div class="modal-line-left"><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['key']->value, 'UTF-8'),'_',' ');?>
</div>
                        <div class="modal-line-right"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
                    </div>
                <?php } else { ?>
                    <div class="modal-line-container">
                        <div class="modal-line-left"><?php echo smarty_modifier_replace(mb_strtoupper($_smarty_tpl->tpl_vars['key']->value, 'UTF-8'),'_',' ');?>
</div>
                        <div class="modal-line-right"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
                    </div>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
