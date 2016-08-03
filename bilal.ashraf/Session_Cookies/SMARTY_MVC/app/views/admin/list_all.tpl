
{include file="/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl"}


<div id="wrapper">


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>FatherName</th>
                                    <th>DOB</th>
                                    <th>SchoolName</th>
                                    <th>City</th>
                                    <th>Destination</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                {foreach $result as $row}
                                    {strip}
                                        <tr>
                                            <td> {$row['id'] }</td>
                                            <td> {$row['name'] }</td>
                                            <td> {$row['fathername']} </td>
                                            <td> {$row['dob']} </td>
                                            <td>  {$row['schoolname']} </td>
                                            <td>  {$row['city'] } </td>
                                            <td>  {$row['destination'] } </td>
                                            <td>  {$row['status']} </td>
                                            <td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Admin/UpdateStd/{$row['id']}'>Edit</a></td>
                                            <td><a href='http://localhost/bilal_workspace/SMARTY_MVC/public/Student/DeleteStd/{$row['id']}'>Delete</a></td>
                                        </tr>
                                    {/strip}
                                {/foreach}

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-4 (nested) -->
                    <div class="col-lg-8">
                        <div id="morris-bar-chart"></div>
                    </div>
                    <!-- /.col-lg-8 (nested) -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /#page-wrapper -->
    </div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/bilal_workspace/SMARTY_MVC/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/bilal_workspace/SMARTY_MVC/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/bilal_workspace/SMARTY_MVC/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/bilal_workspace/SMARTY_MVC/bower_components/raphael/raphael-min.js"></script>
<script src="/bilal_workspace/SMARTY_MVC/bower_components/morrisjs/morris.min.js"></script>
<script src="/bilal_workspace/SMARTY_MVC/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/bilal_workspace/SMARTY_MVC/dist/js/sb-admin-2.js"></script>

</body>

</html>