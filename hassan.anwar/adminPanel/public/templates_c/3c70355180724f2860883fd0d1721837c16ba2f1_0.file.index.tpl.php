<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/adminPanel/app/views/Student/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790c31d78d800_93525754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c70355180724f2860883fd0d1721837c16ba2f1' => 
    array (
      0 => '/var/www/html/adminPanel/app/views/Student/index.tpl',
      1 => 1469104922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/adminPanel/app/views/Student/header.tpl' => 1,
    'file:/var/www/html/adminPanel/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_5790c31d78d800_93525754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Student/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Home | SMP"), 0, false);
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Students</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All students
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
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
                            </thead>
                            <tbody>
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
" >Update</a>|<a href="javascript:void(0)" onclick="confirmation(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <!-- /.col-lg-6 -->
    </div>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Student/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
