<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/adminPanel/app/views/Home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_5790bcba2d94c6_82540897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d62ea52e75ec0ef7ac726bd8c1e0a1ac1b474d5' => 
    array (
      0 => '/var/www/html/adminPanel/app/views/Home/index.tpl',
      1 => 1469102687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/adminPanel/app/views/Home/header.tpl' => 1,
    'file:/var/www/html/adminPanel/app/views/Home/footer.tpl' => 1,
  ),
),false)) {
function content_5790bcba2d94c6_82540897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Home/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Login | SMP"), 0, false);
?>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="/adminPanel/public/Home/login" method="POST" role="form">
                        <div id="invalid_message" style="display:none">
                            The username or password you entered is incorrect. Please try again.
                        </div><br />
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" id="username" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" id="password" type="password" required autofocus>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/adminPanel/app/views/Home/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
