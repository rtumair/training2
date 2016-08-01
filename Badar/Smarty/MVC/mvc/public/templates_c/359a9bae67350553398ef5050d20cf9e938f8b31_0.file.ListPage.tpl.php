<?php
/* Smarty version 3.1.29, created on 2016-08-01 04:57:50
  from "/var/www/html/MVC/mvc/app/views/home/ListPage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579ed6ce0bd600_64272792',
  'file_dependency' => 
  array (
    '359a9bae67350553398ef5050d20cf9e938f8b31' => 
    array (
      0 => '/var/www/html/MVC/mvc/app/views/home/ListPage.tpl',
      1 => 1470027453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579ed6ce0bd600_64272792 ($_smarty_tpl) {
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
                <h1 class="page-header">List of Students</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->
        <div class="col-lg-12">
            <div class="panel panel-default">

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Father's Name</th>
                                <th>DOB</th>
                                <th>School</th>
                                <th>City</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_std_0_saved_item = isset($_smarty_tpl->tpl_vars['std']) ? $_smarty_tpl->tpl_vars['std'] : false;
$_smarty_tpl->tpl_vars['std'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['std']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['std']->value) {
$_smarty_tpl->tpl_vars['std']->_loop = true;
$__foreach_std_0_saved_local_item = $_smarty_tpl->tpl_vars['std'];
?>
                                <tr> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['id'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['fathers_name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['dob'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['School'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['City'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['Description'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['Status'];?>
</td> <td><form action='http://localhost/MVC/mvc/public/home/Edit' method='post'> <input type='submit' name='edit' value='edit'> <input type='hidden' name='edit12' value = <?php echo $_smarty_tpl->tpl_vars['std']->value['id'];?>
 > </form></td> <td> <form action='http://localhost/MVC/mvc/public/home/Delete' method='post'> <input type='submit' name='Delete' value='Delete'> <input type='hidden' name='del12' value = <?php echo $_smarty_tpl->tpl_vars['std']->value['id'];?>
 > </form></td> </tr>
                            <?php
$_smarty_tpl->tpl_vars['std'] = $__foreach_std_0_saved_local_item;
}
if ($__foreach_std_0_saved_item) {
$_smarty_tpl->tpl_vars['std'] = $__foreach_std_0_saved_item;
}
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

<!--



<h2> List of Students </h2>


<table border='1' cellpadding='10'><tr><td>ID</td><td>Name</td>
        <td>Fathers Name</td><td>DOB</td><td>School</td><td>City</td><td>Description</td><td>Status</td></tr>


        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_std_1_saved_item = isset($_smarty_tpl->tpl_vars['std']) ? $_smarty_tpl->tpl_vars['std'] : false;
$_smarty_tpl->tpl_vars['std'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['std']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['std']->value) {
$_smarty_tpl->tpl_vars['std']->_loop = true;
$__foreach_std_1_saved_local_item = $_smarty_tpl->tpl_vars['std'];
?>
            <tr> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['id'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['fathers_name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['dob'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['School'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['City'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['Description'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['std']->value['Status'];?>
</td> <td><form action='http://localhost/MVC/mvc/public/home/Edit' method='post'> <input type='submit' name='edit' value='edit'> <input type='hidden' name='edit12' value = <?php echo $_smarty_tpl->tpl_vars['std']->value['id'];?>
 > </form></td> <td> <form action='http://localhost/MVC/mvc/public/home/Delete' method='post'> <input type='submit' name='Delete' value='Delete'> <input type='hidden' name='del12' value = <?php echo $_smarty_tpl->tpl_vars['std']->value['id'];?>
 > </form></td> </tr>
        <?php
$_smarty_tpl->tpl_vars['std'] = $__foreach_std_1_saved_local_item;
}
if ($__foreach_std_1_saved_item) {
$_smarty_tpl->tpl_vars['std'] = $__foreach_std_1_saved_item;
}
?>
    </table>

<?php }
}
