<!--

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
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                        <a href="http://localhost/MVC/mvc/public/home/index" ><i class="fa fa-dashboard fa-fw"></i>Home</a>
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
                <h1 class="page-header">Students Info</h1>
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
                            {foreach $data as $std}
                                {strip}
                                    <tr>
                                        <td>{$std.id}</td>
                                        <td>{$std.name}</td>
                                        <td>{$std.fathers_name}</td>
                                        <td>{$std.dob}</td>
                                        <td>{$std.School}</td>
                                        <td>{$std.City}</td>
                                        <td>{$std.Description}</td>
                                        <td>{$std.Status}</td>

                                        <td>
                                            <form action='http://localhost/MVC/mvc/public/home/Delete' method='post'>
                                                <input type='submit' name='Delete' value='Delete'>
                                                <input type='hidden' name='del12' value = {$std.id} >
                                            </form></td>

                                    </tr>
                                {/strip}
                            {/foreach}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>






        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New info
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <form role="form" action="http://localhost/MVC/mvc/public/home/EditStu" method ="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="e_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="e_fathername">
                                        </div>
                                        <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="e_dob">
                                        </div>
                                        <div class="form-group">
                                            <label>School</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="e_schoolname">
                                        </div>
                                        <div class="form-group">
                                            <label>Ctiy</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="e_city">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="e_description">
                                        </div>
                                        <input type='hidden' name='edit12' value ='{foreach $data as $std}
                                        {$std.id}
                                    {/foreach}'>

                                        <button type="submit" class="btn btn-default">Edit info</button>
                                    </fieldset>

                                </form>
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
    <script src="http://localhost/MVC/mvc/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/MVC/mvc/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/MVC/mvc/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="http://localhost/MVC/mvc/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/MVC/mvc/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>



-->








<!--


<h2>Edit Student Info</h2>


<table border='1' cellpadding='10'><tr><td>ID</td><td>Name</td>
        <td>Fathers Name</td><td>DOB</td><td>School</td><td>City</td><td>Description</td><td>Status</td></tr>


    {foreach $data as $std}
        {strip}
            <tr>
                <td>{$std.id}</td>
                <td>{$std.name}</td>
                <td>{$std.fathers_name}</td>
                <td>{$std.dob}</td>
                <td>{$std.School}</td>
                <td>{$std.City}</td>
                <td>{$std.Description}</td>
                <td>{$std.Status}</td>

                <td>
                    <form action='http://localhost/MVC/mvc/public/home/Delete' method='post'>
                        <input type='submit' name='Delete' value='Delete'>
                        <input type='hidden' name='del12' value = '{$std.id}' >
                    </form></td>

            </tr>
        {/strip}
    {/foreach}
</table>


<br><br>Please enter new Information<br><br>

<form action="http://localhost/MVC/mvc/public/home/EditStu" id="form1" method ="post">
    <fieldset>
        <legend>ADD STUDENT</legend>
Name       : <input type="text" name="e_name"><br><br>
FName      : <input type="text" name="e_fathername"><br><br>
DOB        : <input type="text" name="e_dob"><br><br>
SchoolName : <input type="text" name="e_schoolname"><br><br>
City       : <input type="text" name="e_city"><br><br>
Description: <input type="text" name="e_description"><br><br>
        <input type="submit" value="Edit_Student">
        <input type='hidden' name='edit12' value = '{foreach $data as $std}
            {$std.id}
        {/foreach}'
        >
    </fieldset>

</form>






