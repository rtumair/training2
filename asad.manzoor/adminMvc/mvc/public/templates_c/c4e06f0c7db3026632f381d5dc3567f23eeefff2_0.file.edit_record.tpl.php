<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-22 07:53:43
  from "/var/www/html/mvc/app/views/admin/edit_record.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5791d1079b7659_65325068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e06f0c7db3026632f381d5dc3567f23eeefff2' => 
    array (
      0 => '/var/www/html/mvc/app/views/admin/edit_record.tpl',
      1 => 1469174014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/admin/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/admin/footer.tpl' => 1,
  ),
),false)) {
function content_5791d1079b7659_65325068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"edit student record"), 0, false);
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
                            <div align="center" style="margin-top:2%;margin-bottom:7%">
                                <div align="center" style="width: 300px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['student']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                        <?php echo $_smarty_tpl->tpl_vars['user']->value['student_name'];?>
<form action="/mvc/public/student/update_student_record" method="post"><fieldset ><legend>Update Student Record</legend><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
 type="hidden" name="id" style="width:18em;"/></br></br><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['student_name'];?>
 type="text" name="name" style="width:18em"/></br></br><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['dob'];?>
 type="date" name="dob" style="width:18em"/></br></br><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['father_name'];?>
 type="text" name="f_name" style="width:18em"/></br></br><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
 type="text" name="class" style="width:18em"/></br></br><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
 type="text" name="address" style="width:18em"/></br></br><input class="form-control" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['ph_no'];?>
 type="text" name="ph_no" style="width:18em"/></br></br><input class="form-control" type="submit" value="update" style="width:18em;background-color:limegreen"/></fieldset></form>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                </div>
                            </div>
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
