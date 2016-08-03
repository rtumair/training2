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
                <h1 class="page-header">Add Student</h1>
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

        <form role="form" action="http://localhost/MVC/mvc/public/home/studentadd" method ="post">
            <fieldset>

                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" placeholder="Enter text" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>Father's Name</label>
                    <input class="form-control" placeholder="Enter text" type="text" name="fathername">
                </div>
                <div class="form-group">
                    <label>Date Of Birth</label>
                    <input class="form-control" placeholder="Enter text" type="text" name="dob">
                </div>
                <div class="form-group">
                    <label>School</label>
                    <input class="form-control" placeholder="Enter text" type="text" name="schoolname">
                </div>
                <div class="form-group">
                    <label>Ctiy</label>
                    <input class="form-control" placeholder="Enter text" type="text" name="city">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input class="form-control" placeholder="Enter text" type="text" name="description">
                </div>

                <button type="submit" class="btn btn-default">Add Student</button>
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

<!--





<!--
<h2>Add Student</h2>

<form action="http://localhost/MVC/mvc/public/home/studentadd" method ="post">
    <fieldset>
        <legend>ADD STUDENT</legend>
        Name       : <input type="text" name="name"><br><br>
        FName      : <input type="text" name="fathername"><br><br>
        DOB        : <input type="text" name="dob"><br><br>
        SchoolName : <input type="text" name="schoolname"><br><br>
        City       : <input type="text" name="city"><br><br>
        Description: <input type="text" name="description"><br><br>
        <input type="submit" value="Add_Student">
    </fieldset>

</form>

