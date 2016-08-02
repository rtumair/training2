<?php
/* Smarty version 3.1.29, created on 2016-08-02 05:51:17
  from "/var/www/html/MVC/app/views/layouts/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a034d55119f2_15861779',
  'file_dependency' => 
  array (
    'dc3fbdf008fc0ecb1158823c5f1387829613b18e' => 
    array (
      0 => '/var/www/html/MVC/app/views/layouts/header.tpl',
      1 => 1470117022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a034d55119f2_15861779 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="/MVC/app/lib/sb-admin-clean/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="/MVC/app/lib/sb-admin-clean/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/MVC/app/lib/sb-admin-clean/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/MVC/app/lib/sb-admin-clean/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            
                            
                            <a href="/MVC/public/User/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-User -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/MVC/public/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/MVC/public/User/add_helper"> <i class="fa fa-dashboard fa-fw"></i> Add User</a>
                        </li>
                        <li>
                            <a href="/MVC/public/User/search_helper"> <i class="fa fa-dashboard fa-fw"></i> Search </a>
                        </li>
                        <li>
                            <a href="/MVC/public/User/viewuser" ><i class="fa fa-dashboard fa-fw"></i> View Users</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

        <!-- Bootstrap Core JavaScript -->
        <?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!-- Metis Menu Plugin JavaScript -->
        <?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

        <!-- Custom Theme JavaScript -->
        <?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

    </body>
</html>
<?php }
}
