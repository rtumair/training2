<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/adminPanel/app/views/Student/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790cd5f80ac34_08677223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d670acd0206ca5b0af5906cd11be9bb9fc58ab4' => 
    array (
      0 => '/var/www/html/adminPanel/app/views/Student/header.tpl',
      1 => 1469107547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5790cd5f80ac34_08677223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "no title" : $tmp);?>
</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Management Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="/adminPanel/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/adminPanel/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/adminPanel/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/adminPanel/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/adminPanel/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/adminPanel/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

    <?php echo '<script'; ?>
>
    
        function confirmation(id){

        var r = confirm("Are you sure you want to delete?");
        if (r == true) {
        window.location="delete/"+id;
        }
        }
    
    <?php echo '</script'; ?>
>


</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/adminPanel/public/Student/index">Student Management Portal</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
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
                <li><a href="/adminPanel/public/Home/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
    </ul>


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>

                <li>
                    <a href="/adminPanel/public/Student/index"><i class="fa fa-table fa-fw"></i>Manage Students</a>
                </li>
                <li>
                    <a href="/adminPanel/public/Student/addStudent"><i class="fa fa-edit fa-fw"></i>Add Student</a>
                </li>
                <li>
                    <a href="/adminPanel/public/Student/importStudents"><i class="fa fa-edit fa-fw"></i>Import</a>
                </li>
                <li>
                    <a href=/adminPanel/public/Student/export><i class="fa fa-edit fa-fw"></i>Export</a>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>


</nav><?php }
}
