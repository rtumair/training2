<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/mvc/app/views/Student/manageStudents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f47ef18e165_66446925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0effe1d1f2f9d927473899b849c5dbb29a3765af' => 
    array (
      0 => '/var/www/html/mvc/app/views/Student/manageStudents.tpl',
      1 => 1469007825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/Student/header_main.tpl' => 1,
    'file:/var/www/html/mvc/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_578f47ef18e165_66446925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/header_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Student Managemnent Portal"), 0, false);
?>


<h2 style="padding-left: 40%; padding-right: 40%">Manage Students</h2>

<div>

    <a href="addStudent">Add Student</a><br/><br/>
    <a href="importStudents">Import</a><br/><br/>
    <a href="export" target="_blank">Export</a><br/><br/>

    <table>
        <tbody>

        <tr>
            <th>Sr#</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['student_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dob'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['father_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['class'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone_no'];?>
</td>
                <td><a href="updateStudent/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" >Update</a> | <a href="javascript:void(0)" onclick="confirmation(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" >Delete</a> </td>

            </tr>


        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </tbody>
    </table>

</div>





<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
