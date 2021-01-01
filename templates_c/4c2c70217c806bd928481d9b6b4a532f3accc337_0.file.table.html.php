<?php
/* Smarty version 3.1.36, created on 2021-01-01 22:13:24
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fef9e84bd1287_41263961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2c70217c806bd928481d9b6b4a532f3accc337' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html',
      1 => 1609539203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fef9e84bd1287_41263961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<div class="table-row-container table-head">
  <div class="table-col1 item-center table-head-cell"><img class="th-bookmark-icon c-pointer" id="th-bookmark" src="img/star-yellow.png"></div>
  <div class="table-col2 item-center table-head-cell"><span class="c-pointer" id="th-id">ID</span></div>
  <div class="table-col3 item-center table-head-cell">Name</div>
  <div class="table-col4 item-center table-head-cell">Picture</div>
  <div class="table-col5 item-center table-head-cell" id="th-weight"><span class="c-pointer">Weight(kg)</span></div>
  <div class="table-col6 item-center table-head-cell" id="th-height"><span class="c-pointer">Height(cm)</span></div>
  <div class="table-col7 item-center table-head-cell">Temperament</div>
  <div class="table-col8 item-center table-head-cell">Details</div>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreeds']->value, 'dogBreedsItem', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dogBreedsItem']->value) {
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = false;
?>
    <div class="table-row-container">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
          <div class="table-col1 item-center">
            <span value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" id="star<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" class="favourite-star" onclick="myFavourite(this)"></span>
          </div>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' || $_smarty_tpl->tpl_vars['key']->value == 'breed_name' || $_smarty_tpl->tpl_vars['key']->value == 'image' || $_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height' || $_smarty_tpl->tpl_vars['key']->value == 'temperament') {?>
          <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
            <div class="table-col2 item-center"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
          <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'breed_name') {?>
            <div class="table-col3 item-center"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
          <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'image') {?>
            <div class="table-col4 item-center dog-breeds-table-td-image"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
</div>
          <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight') {?>
            <div class="table-col5 item-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
          <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'height') {?>
            <div class="table-col6 item-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
          <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'temperament') {?>
            <div class="table-col7 item-center"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
          <?php }?>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
          <div class="table-col8 item-center dog-breeds-table-details">
            <div name="showDetails">
              <input type="submit" class="show-details" name="detailed-id" id="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" onclick="myFunc(this.id)">
            </div>
          </div>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
