{include file="/var/www/html/MVC/app/views/header.tpl"}

<html>
<body>

    <div id="wrapper">

        <!-- Navigation -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add a user!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action = "/MVC/public/usercrud/add_a_user" role="form" method="POST">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="u_name" placeholder="AliceBob">
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="alicebob@gmail.com">
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="u_pass" placeholder="***">
                                        </div>
                                        <button type="submit" name=" submit" class="btn btn-default">Submit </button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
{include file="/var/www/html/MVC/app/views/footer.tpl"}