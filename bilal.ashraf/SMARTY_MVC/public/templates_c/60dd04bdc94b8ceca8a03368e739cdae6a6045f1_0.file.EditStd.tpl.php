<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-29 07:40:10
  from "/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/EditStd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_579b409aa08f94_39645819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60dd04bdc94b8ceca8a03368e739cdae6a6045f1' => 
    array (
      0 => '/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/EditStd.tpl',
      1 => 1469792349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl' => 1,
  ),
),false)) {
function content_579b409aa08f94_39645819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/bilal_workspace/SMARTY_MVC/app/views/admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
                                    <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label>FName</label>
                                    <input class="form-control" name="fathername" value="<?php echo $_smarty_tpl->tpl_vars['fathername']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input class="form-control" name="dob" value="<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label>SchoolName</label>
                                    <input class="form-control" name="schoolname" value="<?php echo $_smarty_tpl->tpl_vars['schoolname']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label>Destination</label>
                                    <input class="form-control" name="destination" value="<?php echo $_smarty_tpl->tpl_vars['destination']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" name="status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="EditStudent" class="btn btn-lg btn-success btn-block">
                                </div>
                                <input type="hidden" name="id" value = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><?php }
}
