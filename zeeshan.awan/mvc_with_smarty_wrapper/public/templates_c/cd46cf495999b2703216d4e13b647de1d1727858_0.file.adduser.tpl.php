<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 11:41:01
  from "/var/www/html/my_work/mvc/app/views/admin/adduser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790b4cd1d0264_90696221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd46cf495999b2703216d4e13b647de1d1727858' => 
    array (
      0 => '/var/www/html/my_work/mvc/app/views/admin/adduser.tpl',
      1 => 1469101028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5790b4cd1d0264_90696221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add User
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/my_work/mvc/public/admin/insert">

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" placeholder="Enter name" name="name">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter password" name="pswd">
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
