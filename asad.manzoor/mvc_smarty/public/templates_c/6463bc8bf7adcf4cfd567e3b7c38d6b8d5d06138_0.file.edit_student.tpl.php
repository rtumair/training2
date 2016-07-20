<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 14:59:46
  from "/var/www/html/mvc/app/views/home/edit_student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f91e25dd7e0_07999728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6463bc8bf7adcf4cfd567e3b7c38d6b8d5d06138' => 
    array (
      0 => '/var/www/html/mvc/app/views/home/edit_student.tpl',
      1 => 1469026783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f91e25dd7e0_07999728 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';
echo '?>';?>

<html>
<body>
<div align="center" style="margin-top: 17%">
    <div align="center" style="width: 300px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['student']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <form action="../update_student_record" method="post"><fieldset ><legend>Update Student Record</legend><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
 type="hidden" name="id"/></br></br><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['student_name'];?>
 type="text" name="name"/></br></br><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['dob'];?>
 name="dob"/></br></br><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['father_name'];?>
 name="f_name" /></br></br><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
 name="class" /></br></br><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
 name="address" /></br></br><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['ph_no'];?>
 type="text" name="ph_no" /></br></br><input type="submit" value="update" /></fieldset></form>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
</div>
</body>

</html>
<?php }
}
