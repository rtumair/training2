{include file="/var/www/html/mvc/app/views/admin/header.tpl" title="add student record"}

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
                            <div align="center" style="margin-top:2%;margin-bottom:7%">
                                <div align="center" style="width: 300px;">
                                    <form action="/mvc/public/student/save_student_record" method="post">
                                        <fieldset >
                                            <legend>Register Student</legend>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Name" type="text" name="name" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter DOB" type="date" name="dob" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Father Name" type="text" name="f_name" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Class" type="text" name="class" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Address" type="text" name="address" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Phone No" type="text" name="ph_no" style="width:18em;"/></br></br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="hidden" name="action" value="add_students" style="width:18em;"/>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="submit" value="Register" style="width:18em;background-color:limegreen"/>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
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
