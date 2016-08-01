<?php
/* Smarty version 3.1.29, created on 2016-08-01 04:59:00
  from "/var/www/html/MVC/mvc/app/views/home/ViewOne.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579ed714448011_09035465',
  'file_dependency' => 
  array (
    'a1d0aa644ff183154e97b2c22e28046d77abc427' => 
    array (
      0 => '/var/www/html/MVC/mvc/app/views/home/ViewOne.tpl',
      1 => 1470027522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579ed714448011_09035465 ($_smarty_tpl) {
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
    <link href="http://localhost/MVC/mvc/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="http://localhost/MVC/mvc/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="http://localhost/MVC/mvc/public/home/AddStudents"><i class="fa fa-dashboard fa-fw"></i> Add Student</a>
                    </li>
                    <li>
                        <a href="http://localhost/MVC/mvc/public/home/students" ><i class="fa fa-dashboard fa-fw"></i>Home</a>
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
                <h1 class="page-header">Select by ID</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <form role="form" action="http://localhost/MVC/mvc/public/home/SelectOne" method ="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="SlctoneTxt">
                                        </div>

                                        <button type="submit" class="btn btn-default">Select</button>
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>




    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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

<!-- DataTables JavaScript -->
<?php echo '<script'; ?>
 src="http://localhost/MVC/mvc/bower_components/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://localhost/MVC/mvc/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="dist/js/sb-admin-2.js"><?php echo '</script'; ?>
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

<?php }
}
