<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 09:29:46
  from "/var/www/html/my_work/smarty_example/views/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f448a478102_34091505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1be17bb162a397a00d10b71f5801a4027bb885c' => 
    array (
      0 => '/var/www/html/my_work/smarty_example/views/home.tpl',
      1 => 1469006784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f448a478102_34091505 (Smarty_Internal_Template $_smarty_tpl) {
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

</pre>

</body>
</html><?php }
}
