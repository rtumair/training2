{include file="/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl"}


<div id="wrapper">


    <div id="page-wrapper">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Student Records
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action = "http://localhost/bilal_workspace/SMARTY_MVC/public/Admin/Update_F" method = "post" >
                                <div class="form-group" >
                                    <label>Name</label>
                                    <input class="form-control" name="name" value="{$name}">
                                </div>
                                <div class="form-group">
                                    <label>FName</label>
                                    <input class="form-control" name="fathername" value="{$fathername}">
                                </div>
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input class="form-control" name="dob" value="{$dob}">
                                </div>
                                <div class="form-group">
                                    <label>SchoolName</label>
                                    <input class="form-control" name="schoolname" value="{$schoolname}">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" name="city" value="{$city}">
                                </div>
                                <div class="form-group">
                                    <label>Destination</label>
                                    <input class="form-control" name="destination" value="{$destination}">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" name="status" value="{$status}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="EditStudent" class="btn btn-lg btn-success btn-block">
                                </div>
                                <input type="hidden" name="id" value = '{$id}'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>