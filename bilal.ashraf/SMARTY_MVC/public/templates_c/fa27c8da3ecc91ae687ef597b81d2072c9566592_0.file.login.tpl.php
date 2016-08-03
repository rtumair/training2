<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-29 08:17:20
  from "/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579b4950611c95_26084833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa27c8da3ecc91ae687ef597b81d2072c9566592' => 
    array (
      0 => '/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/login.tpl',
      1 => 1469794621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579b4950611c95_26084833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/bilal_workspace/SMARTY_MVC/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <!--"../bower_components/metisMenu/dist/metisMenu.min.css"-->
    <!-- MetisMenu CSS -->
    <link href="http://localhost/bilal_workspace/SMARTY_MVC/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/bilal_workspace/SMARTY_MVC/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/bilal_workspace/SMARTY_MVC/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="http://localhost/bilal_workspace/SMARTY_MVC/public/Admin/Login">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" type="name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="http://localhost/bilal_workspace/SMARTY_MVC/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/bilal_workspace/SMARTY_MVC/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/bilal_workspace/SMARTY_MVC/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/bilal_workspace/SMARTY_MVC/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
