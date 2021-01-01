<?php
/* Smarty version 3.1.36, created on 2021-01-01 18:18:49
  from '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fef6789cdb4a0_94009025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2c70217c806bd928481d9b6b4a532f3accc337' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/templates/table/table.html',
      1 => 1609525002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fef6789cdb4a0_94009025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/My-Works/dog-breeds-project/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),));
?>
<form action="index.php" method="post">
  <table id="dog-breeds-table" class="dog-breeds-table">
      <thead>
        <tr>
          <th class="dog-breeds-table-th c-pointer" scope="col"><img class="th-bookmark-icon" id="th-bookmark" src="img/star-yellow.png"></th>
          <th class="dog-breeds-table-th c-pointer" scope="col" id="th-id">ID</th>
          <th class="dog-breeds-table-th" scope="col">Name</th>
          <th class="dog-breeds-table-th" scope="col">Picture</th>
          <th class="dog-breeds-table-th c-pointer" scope="col" id="th-weight">Weight(kg)</th>
          <th class="dog-breeds-table-th c-pointer" scope="col" id="th-height">Height(cm)</th>
          <th class="dog-breeds-table-th" scope="col">Temperament</th>
          <th class="dog-breeds-table-th" scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
          <?php if ($_smarty_tpl->tpl_vars['dogBreeds']->value == array()) {?>
              <tr>
                <td>
                  <span>Favourites are empty.</span>
                </td>
              </tr>
          <?php } else { ?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreeds']->value, 'dogBreedsItem', false, NULL, 'outer', array (
));
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dogBreedsItem']->value) {
$_smarty_tpl->tpl_vars['dogBreedsItem']->do_else = false;
?>
                  <tr class="dog-breeds-table-tr">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
                        <td class="dog-breeds-table-td">
                          <span value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" id="star<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" class="favourite-star" onclick="myFavourite(this)"></span>
                        </td>
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
                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 'image') {?>
                          <td class="dog-breeds-table-td dog-breeds-table-td-image"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogBreedsItem']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
                        <td class="dog-breeds-table-details">
                          <div name="showDetails">
                            <input type="submit" class="show-details" name="detailed-id" id="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" onclick="myFunc(this.id)">
                          </div>
                        </td>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
      </tbody>
  </table>
</form>
<?php }
}
