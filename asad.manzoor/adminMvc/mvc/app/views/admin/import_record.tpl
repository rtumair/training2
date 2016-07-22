{include file="/var/www/html/mvc/app/views/admin/header.tpl" title="import student record"}


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

                            <form action="/mvc/public/student/import_record" method="post" role="form" enctype="multipart/form-data">

                                <fieldset>
                                    <legend> Select file to upload:</legend>
                                    <div class="form-group">
                                        <input class="form-control" type="file" name="filename" id="filename"  style="width:20em " autofocus/>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-success btn-block" style="width:10em;height: 2em "> Upload </button>
                                </fieldset>
                            </form>
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
