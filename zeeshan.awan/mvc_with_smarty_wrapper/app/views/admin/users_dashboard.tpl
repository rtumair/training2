{include file="./header.tpl" }

    <div id="page-wrapper">

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Users Table
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>password</th>
                            <th>created_at</th>
                            <th>udpated_at</th>

                        </tr>
                        </thead>
                        <tbody>
                        {foreach $users as $row}
                            <tr><td> {$row.id } </td><td> {$row.name} </td>
                                <td> {$row.pswd} </td><td> {$row.created_at}</td>
                                <td> {$row.updated_at}</td>

                                <td><a href='/my_work/mvc/public/admin/editUser?id={$row.id}'>Edit</a></td>
                                <td><a href='/my_work/mvc/public/admin/delete?id={$row.id}'>Delete</a></td></tr>


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

    <!-- /.col-lg-6 -->
</div>
        </div>

{include file="./footer.tpl" }