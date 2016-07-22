<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-22 07:32:33
  from "/var/www/html/mvc/app/views/admin/import_record.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5791cc11050c24_48522086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65071766c1b85a19971c3f77bad5cf3696125ae6' => 
    array (
      0 => '/var/www/html/mvc/app/views/admin/import_record.tpl',
      1 => 1469106720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/admin/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/admin/footer.tpl' => 1,
  ),
),false)) {
function content_5791cc11050c24_48522086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"import student record"), 0, false);
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

                            <form action="/mvc/public/student/import_record" method="post" role="form" enctype="multipart/form-data">

                                <fieldset>
                                    <legend> Select file to upload:</legend>
                                    <div class="form-group">
                                        <input class="form-control" type="file" name="filename" id="filename"  style="width:20em " autofocus/>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-success btn-block" style="width:10em;height: 2em "> Upload </button>
                                </fieldset>
                            </form>
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
