<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 06:45:54
  from "/var/www/html/mvc/app/views/home/hello.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f1e222a2d89_03639973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb2024c4b120d2fea994ac35e10061a05f14f4c' => 
    array (
      0 => '/var/www/html/mvc/app/views/home/hello.tpl',
      1 => 1468997144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f1e222a2d89_03639973 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mvc/app/Smarty/plugins/modifier.date_format.php';
?>
<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>

</pre>

</body>
</html><?php }
}
