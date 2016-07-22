<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 10:51:13
  from "/var/www/html/my_work/mvc/app/views/admin/users_dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790a921086026_25634522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344574936c5ddafabe1835d3ce681079f870ba7a' => 
    array (
      0 => '/var/www/html/my_work/mvc/app/views/admin/users_dashboard.tpl',
      1 => 1469098140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5790a921086026_25634522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div id="page-wrapper">

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Users Table
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>password</th>
                            <th>created_at</th>
                            <th>udpated_at</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 </td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['pswd'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['created_at'];?>
</td>
                                <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['updated_at'];?>
</td>

                                <td><a href='/my_work/mvc/public/admin/editUser?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Edit</a></td>
                                <td><a href='/my_work/mvc/public/admin/delete?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->

    <!-- /.col-lg-6 -->
</div>
        </div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
