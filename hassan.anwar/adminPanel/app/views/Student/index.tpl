{include file="/var/www/html/adminPanel/app/views/Student/header.tpl" title="Home | SMP"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Students</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All students
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sr#</th>
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
                            {foreach $data as $row}

                                <tr>
                                    <td>{$count++}</td>
                                    <td>{$row.student_name}</td>
                                    <td>{$row.dob}</td>
                                    <td>{$row.father_name}</td>
                                    <td>{$row.class}</td>
                                    <td>{$row.address}</td>
                                    <td>{$row.phone_no}</td>
                                    <td><a href="updateStudent/{$row.id}" >Update</a>|<a href="javascript:void(0)" onclick="confirmation({$row.id})" >Delete</a> </td>

                                </tr>

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

        <!-- /.col-lg-6 -->
    </div>

</div>


{include file="/var/www/html/adminPanel/app/views/Student/footer.tpl"}




