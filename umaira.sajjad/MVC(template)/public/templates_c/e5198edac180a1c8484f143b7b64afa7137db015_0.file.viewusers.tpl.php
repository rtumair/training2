<?php
/* Smarty version 3.1.29, created on 2016-07-22 12:53:38
  from "/var/www/html/MVC/app/views/viewusers.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579217520b7c93_04541835',
  'file_dependency' => 
  array (
    'e5198edac180a1c8484f143b7b64afa7137db015' => 
    array (
      0 => '/var/www/html/MVC/app/views/viewusers.tpl',
      1 => 1469192017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579217520b7c93_04541835 ($_smarty_tpl) {
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

    <!-- DataTables CSS -->
    <link href="/MVC/app/lib/sb-admin-clean/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/MVC/app/lib/sb-admin-clean/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
            <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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
                    <li><a href="../../views/home/login.tpl"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

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
                                            <td align="left"> <?php echo $_smarty_tpl->tpl_vars['row']->value['user_email'];?>
 </td>
                                            <td align="left"><form action="usercrud/index" method = "GET">
                                                    <input type="hidden" name = "rowID" value = "<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                                    <input type="submit" name = "update" value ="Update"/></form></td>
                                            <td align="left"> <form action="usercrud/delete_a_user" method = "GET">
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

<!-- DataTables JavaScript -->
<?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/bower_components/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="/MVC/app/lib/sb-admin-clean/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
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
