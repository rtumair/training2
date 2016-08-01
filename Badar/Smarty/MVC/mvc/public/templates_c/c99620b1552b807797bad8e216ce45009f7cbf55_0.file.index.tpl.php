<?php
/* Smarty version 3.1.29, created on 2016-08-01 06:07:08
  from "/var/www/html/MVC/mvc/app/views/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579ee70c8a3409_39474959',
  'file_dependency' => 
  array (
    'c99620b1552b807797bad8e216ce45009f7cbf55' => 
    array (
      0 => '/var/www/html/MVC/mvc/app/views/home/index.tpl',
      1 => 1470031626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579ee70c8a3409_39474959 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/MVC/mvc/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/MVC/mvc/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    <form action="http://localhost/MVC/mvc/public/home/login" method= "post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="user_name" type="username" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="http://localhost/MVC/mvc/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/MVC/mvc/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/MVC/mvc/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/MVC/mvc/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    function display(form){
        if (form.email.value=="admin") {
            if (form.password.value=="admin") {
                location="index.tpl"
            } else {
                alert("Invalid Password")
            }
        } else {  alert("Invalid Username")
        }
    }
<?php echo '</script'; ?>
>

</body>

</html><?php }
}
