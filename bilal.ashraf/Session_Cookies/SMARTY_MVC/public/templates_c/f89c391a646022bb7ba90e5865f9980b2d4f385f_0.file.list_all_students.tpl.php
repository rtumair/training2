<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-28 17:02:23
  from "C:\wamp\www\bilal_workspace\SMARTY_MVC\app\views\home\list_all_students.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579a3a9f0e1670_69189929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89c391a646022bb7ba90e5865f9980b2d4f385f' => 
    array (
      0 => 'C:\\wamp\\www\\bilal_workspace\\SMARTY_MVC\\app\\views\\home\\list_all_students.tpl',
      1 => 1469725333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579a3a9f0e1670_69189929 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 5px;
    }
</style>

<a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/AddStudent'>Add Student</a>;
<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>FatherName</th>
        <th>DOB</th>
        <th>SchoolName</th>
        <th>City</th>
        <th>Destination</th>
        <th>Status</th>
        <th></th>
        <th></th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    <tr><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['fathername'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['dob'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['schoolname'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['destination'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
 </td><td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/UpdateStd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Edit</a></td><td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/DeleteStd/}<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Delete</a></td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<?php }
}
