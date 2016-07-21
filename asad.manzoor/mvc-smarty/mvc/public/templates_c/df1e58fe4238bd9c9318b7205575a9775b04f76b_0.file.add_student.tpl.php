<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 05:24:42
  from "/var/www/html/mvc/app/views/home/add_student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57905c9a61f471_32759850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1e58fe4238bd9c9318b7205575a9775b04f76b' => 
    array (
      0 => '/var/www/html/mvc/app/views/home/add_student.tpl',
      1 => 1469078598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/home/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/home/footer.tpl' => 1,
  ),
),false)) {
function content_57905c9a61f471_32759850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"add student record"), 0, false);
?>


<html>

<body>
<div align="center" style="margin-top:7%;margin-bottom: 7%">
    <div align="center" style="width: 300px;">
        <form action="/mvc/public/student/save_student_record" method="post">
            <fieldset >
                <legend>Register Student</legend>
                <input placeholder="Enter Name" type="text" name="name" /></br></br>
                <input placeholder="Enter DOB" type="date" name="dob" /></br></br>
                <input placeholder="Enter Father Name" type="text" name="f_name" /></br></br>
                <input placeholder="Enter Class" type="text" name="class" /></br></br>
                <input placeholder="Enter Address" type="text" name="address" /></br></br>
                <input placeholder="Enter Phone No" type="text" name="ph_no" /></br></br>
                <input type="hidden" name="action" value="add_students"/>
                <input type="submit" />
            </fieldset>
        </form>
    </div>
</div>
</body>

</html>

<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>''), 0, false);
}
}
