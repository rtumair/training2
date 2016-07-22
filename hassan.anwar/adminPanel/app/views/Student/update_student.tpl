{include file="/var/www/html/adminPanel/app/views/Student/header.tpl" title="Update Student | SMP"}


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Student</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Student Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form  action="../update/{$data.id}" method="post" role="form">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input value="{$data.student_name}" class="form-control" type="text" name="name" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>DOB:</label>
                                    <input value="{$data.dob}" class="form-control" placeholder="Date of Birth" type="text" onfocus="(this.type='date')"  name="dob" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Father Name:</label>
                                    <input value="{$data.father_name}" class="form-control" placeholder="Enter Father Name" type="text" name="fathername" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>Class:</label>
                                    <input value="{$data.class}" class="form-control" placeholder="Enter Class" type="text" name="class" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input value="{$data.address}" class="form-control" placeholder="Enter Address" type="text" name="address" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>Phone no:</label>
                                    <input value="{$data.phone_no}" class="form-control" placeholder="Enter Phone No" type="text" name="phoneno" required autofocus />
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>


{include file="/var/www/html/adminPanel/app/views/Student/footer.tpl"}