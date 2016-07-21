<?php
/* Smarty version 3.1.29, created on 2016-07-21 07:53:11
  from "/var/www/html/smartypractice/views/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57907f67ab1479_10570538',
  'file_dependency' => 
  array (
    'a565a116b7848b15e9d9184514357380e0d78ab9' => 
    array (
      0 => '/var/www/html/smartypractice/views/index.tpl',
      1 => 1469087590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57907f67ab1479_10570538 ($_smarty_tpl) {
?>



<br/>


<?php
$_from = $_smarty_tpl->tpl_vars['people']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>

    <?php echo $_smarty_tpl->tpl_vars['p']->value;?>



<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_local_item;
}
if ($__foreach_p_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_item;
}
}
}
