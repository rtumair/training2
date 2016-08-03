<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-22 09:06:17
  from "/var/www/html/my_work/mvc/app/views/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5791e209bfe899_00438450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9af4ac45b10ae69ee15de43ba4605e75755d652' => 
    array (
      0 => '/var/www/html/my_work/mvc/app/views/admin/index.tpl',
      1 => 1469178370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5791e209bfe899_00438450 (Smarty_Internal_Template $_smarty_tpl) {
?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->

    <link href="/my_work/mvc/app/lib/admin_template/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/my_work/mvc/app/lib/admin_template/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/my_work/mvc/app/lib/admin_template/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/my_work/mvc/app/lib/admin_template/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    <form role="form" method="post" action="/my_work/mvc/public/admin/home">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="uname" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pswd" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="1">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                           <input type="submit" class="btn btn-lg btn-success btn-block" value="Login"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="/my_work/mvc/app/lib/admin_template/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="/my_work/mvc/app/lib/admin_template/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="/my_work/mvc/app/lib/admin_template/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="/my_work/mvc/app/lib/admin_template/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html>

<?php }
}
