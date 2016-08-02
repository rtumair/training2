<?php
/* Smarty version 3.1.29, created on 2016-07-26 12:55:58
  from "/var/www/html/MVC/app/views/update.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57975dde1cc669_06892400',
  'file_dependency' => 
  array (
    '1c20fe5b00a4ceafbcfdbd7cbf793b7a08bae449' => 
    array (
      0 => '/var/www/html/MVC/app/views/update.tpl',
      1 => 1469512635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/MVC/app/views/header.tpl' => 1,
    'file:/var/www/html/MVC/app/views/footer.tpl' => 1,
  ),
),false)) {
function content_57975dde1cc669_06892400 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/MVC/app/views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="en">


<body>

<div id="wrapper">

    <!-- Navigation -->

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update a user!</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action = "/MVC/public/usercrud/update_a_user/<?php echo $_smarty_tpl->tpl_vars['rowID']->value;?>
" role="form" method="POST">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" name="u_name" placeholder="AliceBob">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" placeholder="alicebob@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="u_pass" placeholder="***">
                                    </div>
                                    <button type="submit" name=" submit" class="btn btn-default">Submit </button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

</body>

</html>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/MVC/app/views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
