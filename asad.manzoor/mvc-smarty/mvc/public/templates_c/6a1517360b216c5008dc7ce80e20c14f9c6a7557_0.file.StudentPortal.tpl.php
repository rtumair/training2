<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 04:16:27
  from "/var/www/html/Codes/Pushed/mvc_smarty/app/views/home/StudentPortal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57904c9ba41d59_96167169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1517360b216c5008dc7ce80e20c14f9c6a7557' => 
    array (
      0 => '/var/www/html/Codes/Pushed/mvc_smarty/app/views/home/StudentPortal.tpl',
      1 => 1469074555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57904c9ba41d59_96167169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Welcome Home</h3>

<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2 style="padding-left: 40%"> Register Student</h2>
<form action="student/add_student" method="post">
    <input value="Add Student" type="submit" />
    <a href="export_record">export csv file</a>
</form>

<form action="import_record" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="filename" id="filename">
    <input type="submit"/>
</form>

<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>



        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['student_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['dob'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['father_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['ph_no'];?>
</td><td><a href="edit_student/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" >Edit </a> |<a href="delete_student_record/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Delete</a></td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </table>
</div>
</body>
</html><?php }
}
