<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-28 17:24:11
  from "C:\wamp\www\bilal_workspace\SMARTY_MVC\app\views\home\Edit_Std.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579a3fbb5a71f3_73304196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5b9e7ff083642b0bd73cef9f04d71cd9733fe1' => 
    array (
      0 => 'C:\\wamp\\www\\bilal_workspace\\SMARTY_MVC\\app\\views\\home\\Edit_Std.tpl',
      1 => 1469725312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579a3fbb5a71f3_73304196 (Smarty_Internal_Template $_smarty_tpl) {
?>




<form action="http://localhost/bilal_workspace/SMARTY_MVC/public/Student/Update_F" method="post">
    <fieldset>
        <legend>EDIT STUDENT</legend>
        Name:         <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br><br>
        FName:        <input type="text" name="fathername" value="<?php echo $_smarty_tpl->tpl_vars['fathername']->value;?>
"><br><br>
        DOB:           <input type="text" name="dob" value="<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
"><br><br>
        SchoolName:   <input type="text" name="schoolname" value="<?php echo $_smarty_tpl->tpl_vars['schoolname']->value;?>
"><br><br>
        City:         <input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
"><br><br>
        Destination:  <input type="text" name="destination" value="<?php echo $_smarty_tpl->tpl_vars['destination']->value;?>
"><br><br>
        Status:       <input type="text" name="status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"><br><br>
        <input type="submit" value="EDIT_Student">
        <input type="hidden" name="id" value = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
    </fieldset>

</form>


<?php }
}
