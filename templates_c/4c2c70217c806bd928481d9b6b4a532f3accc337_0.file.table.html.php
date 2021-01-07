<?php
/* Smarty version 3.1.36, created on 2021-01-07 13:05:17
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff7070d0b6853_79634900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2c70217c806bd928481d9b6b4a532f3accc337' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html',
      1 => 1610024715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff7070d0b6853_79634900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<form action="index.php" method="post">
  <div class="table-outer">
    <div class="table-row-container table-head">
      <div class="table-col1 text-center"><img class="th-bookmark-icon c-pointer no-self-bg" id="th-bookmark" src="img/star-yellow.png"></div>
      <div class="table-col2 text-center"><span class="c-pointer no-self-bg" id="th-id">ID</span></div>
      <div class="table-col3 text-center">Name</div>
      <div class="table-col4 text-center">Picture</div>
      <div class="table-col5 text-center" id="th-weight"><span class="c-pointer no-self-bg">Weight(kg)</span></div>
      <div class="table-col6 text-center" id="th-height"><span class="c-pointer no-self-bg">Height(cm)</span></div>
      <div class="table-col7 text-center">Temperament</div>
      <div class="table-col8 text-center">Details</div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['dogBreeds']->value != array()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreeds']->value, 'dogBreedsItem', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dogBreedsItem']->value) {
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = false;
?>
        <div class="table-row-container table-body">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
              <div class="table-col1 text-center">
                <input type="button" class="table-row-input-style c-pointer favourite-star" name="detailed-id" id="star<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" onclick="myFavourite(this)">
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
                <div class="table-col2 text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'breed_name') {?>
                <div class="table-col3 text-left"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'image') {?>
                <div class="table-col4 text-center dog-breed-image"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight') {?>
                <div class="table-col5 text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'height') {?>
                <div class="table-col6 text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'temperament') {?>
                <div class="table-col7 text-left"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
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
              <div class="table-col8 text-center">
                <div name="showDetails">
                  <input type="submit" class="table-row-input-style c-pointer show-details" name="detailed-id" id="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" onclick="openModal(this.id)">
                </div>
              </div>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
      <span>No dog breed found.</span>
      <!-- this row will not be visible. if there is no element in "favourite",
      this row will visible as invisible. we need that just for protect our grid-areas -->
        <div class="table-row-container invisible">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invisibleDogBreed']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
              <div class="invisible table-col1">
                <span value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" class="invisible favourite-star" ></span>
              </div>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invisibleDogBreed']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' || $_smarty_tpl->tpl_vars['key']->value == 'breed_name' || $_smarty_tpl->tpl_vars['key']->value == 'image' || $_smarty_tpl->tpl_vars['key']->value == 'weight' || $_smarty_tpl->tpl_vars['key']->value == 'height' || $_smarty_tpl->tpl_vars['key']->value == 'temperament') {?>
              <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
                <div class="invisible table-col2"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'breed_name') {?>
                <div class="invisible table-col3"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'image') {?>
                <div class="invisible table-col4"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'weight') {?>
                <div class="invisible table-col5"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'height') {?>
                <div class="invisible table-col6"><?php echo $_smarty_tpl->tpl_vars['item']->value['metric'];?>
</div>
              <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'temperament') {?>
                <div class="invisible table-col7"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
              <?php }?>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invisibleDogBreed']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
              <div class="invisible table-col8">
                <div class="invisible">
                  <input type="submit" class="invisible" name="detailed-id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
">
                </div>
              </div>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
  </div>
</form><?php }
}
