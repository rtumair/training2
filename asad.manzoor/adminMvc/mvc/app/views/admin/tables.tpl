{include file="/var/www/html/mvc/app/views/admin/header.tpl" title="table student record"}


<body>

<div id="wrapper">



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Student Table</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Student Records Management
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">

                            <table class="table table-striped table-bordered table-hover" ">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Dob</th>
                                    <th>Father Name</th>
                                    <th>Class</th>
                                    <th>Address</th>
                                    <th>Phone no</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach $students as $user}
                                    {strip}
                                        <tr>
                                            <td>{$user.id}</td>
                                            <td>{$user.student_name}</td>
                                            <td>{$user.dob}</td>
                                            <td>{$user.father_name}</td>
                                            <td>{$user.class}</td>
                                            <td>{$user.address}</td>
                                            <td>{$user.ph_no}</td>
                                            <td>
                                                <a href="/mvc/public/student/edit_student/{$user.id}" >Edit </a> |
                                                <a href="/mvc/public/student/delete_student_record/{$user.id}">Delete</a>
                                            </td>
                                        </tr>
                                    {/strip}
                                {/foreach}

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/mvc/lib/template/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/mvc/lib/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/mvc/lib/template/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="/mvc/lib/template/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/mvc/lib/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/mvc/lib/template/dist/js/sb-admin-2.js"></script>

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
{include file="/var/www/html/mvc/app/views/admin/footer.tpl" title="add student record"}
