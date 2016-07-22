<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/adminPanel/app/views/Student/import_students.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790cea2d0abf6_81466883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a683752f0b0f25a29cb217216b57b0e80bb2f102' => 
    array (
      0 => '/var/www/html/adminPanel/app/views/Student/import_students.tpl',
      1 => 1469107872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/adminPanel/app/views/Student/header.tpl' => 1,
    'file:/var/www/html/adminPanel/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_5790cea2d0abf6_81466883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Student/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Import | SMP"), 0, false);
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Import</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Import
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        <form role="form" action="import" method="post" enctype="multipart/form-data">
                            Select CSV file to upload:
                            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                            <br><button type="submit" class="btn btn-primary">Import</button>
                        </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Student/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
