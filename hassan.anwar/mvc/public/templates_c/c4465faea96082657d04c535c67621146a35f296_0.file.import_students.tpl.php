<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/mvc/app/views/Student/import_students.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f414c3c6560_19864930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4465faea96082657d04c535c67621146a35f296' => 
    array (
      0 => '/var/www/html/mvc/app/views/Student/import_students.tpl',
      1 => 1469006090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/Student/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_578f414c3c6560_19864930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Import | SMP"), 0, false);
?>


<form action="import" method="post" enctype="multipart/form-data">
    Select CSV file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" value="import" name="action"/>
    <input type="submit" value="Upload">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
