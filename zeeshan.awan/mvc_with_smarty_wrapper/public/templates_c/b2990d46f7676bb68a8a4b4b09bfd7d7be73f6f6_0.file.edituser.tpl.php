<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-21 11:39:54
  from "/var/www/html/my_work/mvc/app/views/admin/edituser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790b48a7100d6_62580964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2990d46f7676bb68a8a4b4b09bfd7d7be73f6f6' => 
    array (
      0 => '/var/www/html/my_work/mvc/app/views/admin/edituser.tpl',
      1 => 1469101184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5790b48a7100d6_62580964 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <form role="form" method="post" action="/my_work/mvc/public/admin/update">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

                                <input type="hidden" name="id" value='<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'/>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
' placeholder="Enter name" name="name">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['row']->value['pswd'];?>
' placeholder="Enter password" name="pswd">
                                </div>

                                <button type="submit" class="btn btn-default">Submit</button>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
