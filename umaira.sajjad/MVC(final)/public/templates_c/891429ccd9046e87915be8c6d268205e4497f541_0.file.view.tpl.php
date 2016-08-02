<?php
/* Smarty version 3.1.29, created on 2016-08-02 05:52:36
  from "/var/www/html/MVC/app/views/User/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a03524804b85_80599582',
  'file_dependency' => 
  array (
    '891429ccd9046e87915be8c6d268205e4497f541' => 
    array (
      0 => '/var/www/html/MVC/app/views/User/view.tpl',
      1 => 1470045295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/MVC/app/views/layouts/header.tpl' => 1,
    'file:/var/www/html/MVC/app/views/layouts/footer.tpl' => 1,
  ),
),false)) {
function content_57a03524804b85_80599582 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/MVC/app/views/layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!DOCTYPE html>
<html lang="en">



<body>

<div id="wrapper">

    <!-- Navigation -->

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading" align = "center">
                        <h1> User Information! <h1>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">>
                                <thead>
                                    <tr>
                                        <td align="left"><b>#</b></td>
                                        <td align="left"><b>Username</b></td>
                                        <td align="left"><b>City</b></td>
                                        <td align="left"><b>Email</b></td>
                                        <td align="left"><b>Update</b></td>
                                        <td align="left"><b>Delete</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['tabledata']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                        <tr>
                                            <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
 </td>
                                            <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
 </td>
                                            <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_city'];?>
 </td>
                                            <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_email'];?>
 </td>
                                            <td align="left"><form action="/MVC/public/User/update_helper" method = "GET">
                                                    <input type="hidden" name = "rowID" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                                    <input type="submit" name = "update" value ="Update"/></form></td>
                                            <td align="left"> <form action="/MVC/public/User/delete" method = "GET">
                                                    <input type="hidden" name = "rowID" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                                    <input type="submit" name="delete" value ="Delete"/></form></td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                                <tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

</body>

</html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/MVC/app/views/layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
