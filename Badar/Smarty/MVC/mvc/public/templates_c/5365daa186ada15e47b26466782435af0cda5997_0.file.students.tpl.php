<?php
/* Smarty version 3.1.29, created on 2016-08-02 12:11:43
  from "/var/www/html/MVC/mvc/app/views/home/students.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a08dffa7c015_02988155',
  'file_dependency' => 
  array (
    '5365daa186ada15e47b26466782435af0cda5997' => 
    array (
      0 => '/var/www/html/MVC/mvc/app/views/home/students.tpl',
      1 => 1470139840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a08dffa7c015_02988155 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel </title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="http://localhost/MVC/mvc/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/MVC/mvc/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/morrisjs/morris.css" rel="stylesheet">

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

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- /.navbar-header -->


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav nav-second-level" id="side-menu">

                    <li>
                        <a href="http://localhost/MVC/mvc/public/home/AddStudents"><i class="fa fa-dashboard fa-fw"></i> Add Student</a>

                    </li>
                    <li>
                        <a href="http://localhost/MVC/mvc/public/home/logout" ><i class="fa fa-dashboard fa-fw"></i>Logout</a>
                    </li>




                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div></div>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/MVC/mvc/public/home/allStu">
                        <div class="panel-footer">
                            <span class="pull-left">View List</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/MVC/mvc/public/home/ViewOne">
                        <div class="panel-footer">
                            <span class="pull-left">View One</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div></div>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/MVC/mvc/public/home/ViewPK">
                        <div class="panel-footer">
                            <span class="pull-left">View By PK</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div></div>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost/MVC/mvc/public/home/DeletePK">
                        <div class="panel-footer">
                            <span class="pull-left">Delete by PK</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php echo '<script'; ?>
 src="bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Morris Charts JavaScript -->
<?php echo '<script'; ?>
 src="bower_components/raphael/raphael-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="bower_components/morrisjs/morris.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/morris-data.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html>



<!--
<h2>Manage Students</h2>

<form action="http://localhost/MVC/mvc/public/home/Add" method = "post">
    <input type = "submit" name = "add" value = "add">

</form>

<form action="http://localhost/MVC/mvc/public/home/allStu" method = "post">
        <input type = "submit" name = "Listall" value = "Listall">
</form>

<form action="http://localhost/MVC/mvc/public/home/SelectOne" method = "post">
    <input type="text" name="SlctoneTxt"  >
    <input type = "submit" name = "SelectOne" value = "SelectOne">
</form>


<form action="http://localhost/MVC/mvc/public/home/SelectPK" method = "post">
    <input type="text" name="SlctPkTxt"  >
    <input type = "submit" name = "SelectPK" value = "SelectBYPK">
</form>


<form action="http://localhost/MVC/mvc/public/home/DeletebyPK" method = "post">
    <input type="text" name="DeletePkTxt"  >
    <input type = "submit" name = "SelectPK" value = "DeletebyPK">
</form>

<?php }
}
