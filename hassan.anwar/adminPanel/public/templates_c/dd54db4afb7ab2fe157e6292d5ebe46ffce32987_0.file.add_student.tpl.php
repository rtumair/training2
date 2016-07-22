<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/adminPanel/app/views/Student/add_student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790c85874dcc3_35319709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd54db4afb7ab2fe157e6292d5ebe46ffce32987' => 
    array (
      0 => '/var/www/html/adminPanel/app/views/Student/add_student.tpl',
      1 => 1469106261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/adminPanel/app/views/Student/header.tpl' => 1,
    'file:/var/www/html/adminPanel/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_5790c85874dcc3_35319709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Student/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Add Student | SMP"), 0, false);
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Student</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Student Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form  action="create" method="post" role="form">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input class="form-control" placeholder="Enter Name" type="text" name="name" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>DOB:</label>
                                    <input class="form-control" placeholder="Date of Birth" type="text" onfocus="(this.type='date')"  name="dob" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Father Name:</label>
                                    <input class="form-control" placeholder="Enter Father Name" type="text" name="fathername" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>Class:</label>
                                    <input class="form-control" placeholder="Enter Class" type="text" name="class" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input class="form-control" placeholder="Enter Address" type="text" name="address" required autofocus />
                                </div>
                                <div class="form-group">
                                    <label>Phone no:</label>
                                    <input class="form-control" placeholder="Enter Phone No" type="text" name="phoneno" required autofocus />
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Student/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
