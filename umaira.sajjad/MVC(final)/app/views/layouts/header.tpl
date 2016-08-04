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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            .black_overlay{
                display: none;
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: black;
                z-index:1001;
                -moz-opacity: 0.8;
                opacity:.80;
                filter: alpha(opacity=80);
            }

            .white_content {
                display: none;
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: white;
                z-index:1002;
                overflow: auto;
            }
        </style>

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
                            {*<button type="button" class="fa fa-sign-out fa-fw"*}
                            {*onclick= "localhost/MVC/public/usercrud/logout" > Logout </button>*}
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
                            <a href="/MVC/public/User/viewuser" ><i class="fa fa-dashboard fa-fw"></i> View Users</a>
                        </li>
                        <li>
                            <a href="/MVC/public/User/export" ><i class="fa fa-dashboard fa-fw"></i> Export user data </a>
                        </li>
                        {*<li>*}
                            <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><i class="fa fa-dashboard fa-fw"></i> Import user data </a>
                            <div id="light" class="white_content">
                                <form enctype="multipart/form-data" role = "form" action= "/MVC/public/User/import" method='POST'>
                                    <input size='50' type='file' name='filename'>
                                    <input type='submit' name='submit' value='Save'>
                                </form>
                                <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"> Close </a>
                            </div>
                            <div id="fade" class="black_overlay"></div>

                        {*</li>*}
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- jQuery -->

        <script src="/MVC/app/lib/sb-admin-clean/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/MVC/app/lib/sb-admin-clean/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/MVC/app/lib/sb-admin-clean/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/MVC/app/lib/sb-admin-clean/dist/js/sb-admin-2.js"></script>

    </body>
</html>
