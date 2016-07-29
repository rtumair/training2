{include file="/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl"}


<div id="wrapper">


    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Student Records</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action = "http://localhost/bilal_workspace/SMARTY_MVC/public/Admin/Add_Student_I" method = "post" >
                                <div class="form-group" >
                                    <label>Name</label>
                                    <input class="form-control" name="name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group">
                                    <label>FName</label>
                                    <input class="form-control" name="fathername" placeholder="Enter FatherName">
                                </div>
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input class="form-control" name="dob" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label>SchoolName</label>
                                    <input class="form-control" name="schoolname" placeholder="Enter your School Name">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" name="city" placeholder="Enter your city">
                                </div>
                                <div class="form-group">
                                    <label>Destination</label>
                                    <input class="form-control" name="destination" placeholder="Enter your destination">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" name="status" placeholder="Enter your status">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="AddStudent" class="btn btn-lg btn-success btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>

</div>