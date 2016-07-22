<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 09:45:26
  from "/var/www/html/mvc/app/views/home/edit_student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579099b6ef2bc3_58990227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6463bc8bf7adcf4cfd567e3b7c38d6b8d5d06138' => 
    array (
      0 => '/var/www/html/mvc/app/views/home/edit_student.tpl',
      1 => 1469094191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/home/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/home/footer.tpl' => 1,
  ),
),false)) {
function content_579099b6ef2bc3_58990227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"add student record"), 0, false);
?>


<html>
<body>
<div align="center" style="margin-top:7%;margin-bottom: :7%">
    <div align="center" style="width: 300px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['student']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <form action="/mvc/public/student/update_student_record" method="post"><fieldset ><legend>Update Student Record</legend><input value=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
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
<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>''), 0, false);
?>

<?php }
}
