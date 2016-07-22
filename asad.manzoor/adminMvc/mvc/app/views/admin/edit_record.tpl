{include file="/var/www/html/mvc/app/views/admin/header.tpl" title="edit student record"}

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
                                    {foreach $student as $user}
                                        {strip}
                                            {$user.student_name}
                                            <form action="/mvc/public/student/update_student_record" method="post">
                                                <fieldset >
                                                    <legend>Update Student Record</legend>
                                                    <input class="form-control" value={$user.id} type="hidden" name="id" style="width:18em;"/></br></br>
                                                    <input class="form-control" value={$user.student_name} type="text" name="name" style="width:18em"/></br></br>
                                                    <input class="form-control" value={$user.dob} type="date" name="dob" style="width:18em"/></br></br>
                                                    <input class="form-control" value={$user.father_name} type="text" name="f_name" style="width:18em"/></br></br>
                                                    <input class="form-control" value={$user.class} type="text" name="class" style="width:18em"/></br></br>
                                                    <input class="form-control" value={$user.address} type="text" name="address" style="width:18em"/></br></br>
                                                    <input class="form-control" value={$user.ph_no} type="text" name="ph_no" style="width:18em"/></br></br>
                                                    <input class="form-control" type="submit" value="update" style="width:18em;background-color:limegreen"/>
                                                </fieldset>
                                            </form>
                                        {/strip}
                                    {/foreach}

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
