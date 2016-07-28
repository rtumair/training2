{include file="/var/www/html/MVC/app/views/header.tpl"}

<!DOCTYPE html>
<html lang="en">



<body>

<div id="wrapper">

    <!-- Navigation -->

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading" align = "center">
                        <h1> User Information! <h1>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">>
                                <thead>
                                    <tr>
                                        <td align="left"><b>#</b></td>
                                        <td align="left"><b>Username</b></td>
                                        <td align="left"><b>Email</b></td>
                                        <td align="left"><b>Update</b></td>
                                        <td align="left"><b>Delete</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$tabledata item=row}
                                        <tr>
                                            <td align="left"> {$row['user_id']} </td>
                                            <td align="left"> {$row['user_name']} </td>
                                            <td align="left"> {$row['user_email']} </td>
                                            <td align="left"><form action="/MVC/public/usercrud/updateuser_helper" method = "GET">
                                                    <input type="hidden" name = "rowID" value = "{$row['user_id']}">
                                                    <input type="submit" name = "update" value ="Update"/></form></td>
                                            <td align="left"> <form action="/MVC/public/usercrud/delete_a_user" method = "GET">
                                                    <input type="hidden" name = "rowID" value = "{$row['user_id']}">
                                                    <input type="submit" name="delete" value ="Delete"/></form></td>
                                        </tr>
                                    {/foreach}
                                <tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

</body>

</html>
{include file="/var/www/html/MVC/app/views/footer.tpl"}
