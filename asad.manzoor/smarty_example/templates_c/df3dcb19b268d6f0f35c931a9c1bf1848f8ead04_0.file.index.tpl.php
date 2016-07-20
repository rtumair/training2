<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 08:21:03
  from "/var/www/html/smarty_example/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f346f3a6b15_08904224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3dcb19b268d6f0f35c931a9c1bf1848f8ead04' => 
    array (
      0 => '/var/www/html/smarty_example/index.tpl',
      1 => 1469002848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f346f3a6b15_08904224 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/smarty_example/lib/smarty/plugins/function.cycle.php';
?>
<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#dddddd"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa,#bbbbbb"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table><?php }
}
