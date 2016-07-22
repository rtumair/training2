<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 12:14:47
  from "/var/www/html/my_work/mvc/app/views/home/editUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f6b37036928_71045476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d9256d9b2542a062e02b736919ebfd56718efa1' => 
    array (
      0 => '/var/www/html/my_work/mvc/app/views/home/editUser.tpl',
      1 => 1469016879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f6b37036928_71045476 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Edit Record</h1>

<form action="/my_work/mvc/public/home/update" method="post">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>


   <input type="hidden" name="id" value='<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'/>
    <label>Name </label><input type='text'  name="name" id="name" required="true" value='<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
'/><br><br>
   <label>Password </label><input type='text'  name="pswd" id="pswd" required="true" value='<?php echo $_smarty_tpl->tpl_vars['row']->value['pswd'];?>
'/><br><br>
    <input type="submit" value="Edit">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</form>
<?php }
}
