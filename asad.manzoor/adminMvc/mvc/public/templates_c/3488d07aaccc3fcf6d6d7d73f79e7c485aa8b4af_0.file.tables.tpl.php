<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 13:12:59
  from "/var/www/html/mvc/app/views/admin/tables.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790ca5bdee8c6_64624475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3488d07aaccc3fcf6d6d7d73f79e7c485aa8b4af' => 
    array (
      0 => '/var/www/html/mvc/app/views/admin/tables.tpl',
      1 => 1469106738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/admin/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/admin/footer.tpl' => 1,
  ),
),false)) {
function content_5790ca5bdee8c6_64624475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"table student record"), 0, false);
?>



<body>

<div id="wrapper">



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Student Table</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Student Records Management
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">

                            <table class="table table-striped table-bordered table-hover" ">
                                <thead>
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
                                </thead>
                                <tbody>
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
</td><td><a href="/mvc/public/student/edit_student/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" >Edit </a> |<a href="/mvc/public/student/delete_student_record/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Delete</a></td></tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php echo '<script'; ?>
 src="/mvc/lib/template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="/mvc/lib/template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="/mvc/lib/template/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- DataTables JavaScript -->
<?php echo '<script'; ?>
 src="/mvc/lib/template/bower_components/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/mvc/lib/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="/mvc/lib/template/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
<?php echo '</script'; ?>
>

</body>

</html>
<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"add student record"), 0, false);
?>

<?php }
}
