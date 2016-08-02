<?php
/* Smarty version 3.1.29, created on 2016-07-21 10:21:02
  from "/var/www/html/MVC (smarty practice)/app/views/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5790a20e34b7c8_37450995',
  'file_dependency' => 
  array (
    'a9816068d65403330f78ba384952bab1abe5d652' => 
    array (
      0 => '/var/www/html/MVC (smarty practice)/app/views/home/index.tpl',
      1 => 1469096460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5790a20e34b7c8_37450995 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
      <h1 align="center"> USER INFORMATION </h1>
      <table align="left"
             cellspacing="5" cellpadding="8">

          <tr>
              <td align="left"><b>#</b></td>
              <td align="left"><b>Username</b></td>
              <td align="left"><b>Email</b></td>
              <td align="left"><b>Update</b></td>
              <td align="left"><b>Delete</b></td>
          </tr>
          <?php
$_from = $_smarty_tpl->tpl_vars['tabledata']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
              <tr>
                  <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
 </td>
                  <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
 </td>
                  <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_email'];?>
 </td>
                  <td align="left"><form action="usercrud/index" method = "GET">
                          <input type="hidden" name = "rowID" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                          <input type="submit" name = "update" value ="Update"/></form></td>
                  <td align="left"> <form action="usercrud/delete_a_user" method = "GET">
                          <input type="hidden" name = "rowID" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                          <input type="submit" name="delete" value ="Delete"/></form></td>
              </tr>
          <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
      </table>

      <form action="usercrud/index" method="post">
          <input type="submit" name= "add" value="Add User" /> </form>
</body>
</html><?php }
}
