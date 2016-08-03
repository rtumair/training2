<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-29 07:39:56
  from "/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579b408c59a663_30450613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6457b277f4bca41a361f27651853dca4029659f4' => 
    array (
      0 => '/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/index.tpl',
      1 => 1469792322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl' => 1,
  ),
),false)) {
function content_579b408c59a663_30450613 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="wrapper">


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Student Records</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
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
                                        </thead>
                                        <tbody>

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
 </td><td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Admin/UpdateStd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Edit</a></td><td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Admin/DeleteStd/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Delete</a></td></tr>
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
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-lg-8">
                                <div id="morris-bar-chart"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
        </div>
    <!-- /#page-wrapper -->
    </div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Morris Charts JavaScript -->
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/bower_components/raphael/raphael-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/bower_components/morrisjs/morris.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/js/morris-data.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="/bilal_workspace/SMARTY_MVC/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
