<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-22 04:14:01
  from "/var/www/html/mvc/app/views/admin/add_record.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_57919d89355c53_39540020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a63221e4b37f45327aa21349b731ba5b0df3e999' => 
    array (
      0 => '/var/www/html/mvc/app/views/admin/add_record.tpl',
      1 => 1469160821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/admin/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/admin/footer.tpl' => 1,
  ),
),false)) {
function content_57919d89355c53_39540020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"add student record"), 0, false);
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
                                    <form action="/mvc/public/student/save_student_record" method="post">
                                        <fieldset >
                                            <legend>Register Student</legend>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Name" type="text" name="name" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter DOB" type="date" name="dob" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Father Name" type="text" name="f_name" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Class" type="text" name="class" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Address" type="text" name="address" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Phone No" type="text" name="ph_no" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="hidden" name="action" value="add_students" style="width:18em;"/>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="submit" value="Register" style="width:18em;background-color:limegreen"/>
                                            </div>
                                        </fieldset>
                                    </form>
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
