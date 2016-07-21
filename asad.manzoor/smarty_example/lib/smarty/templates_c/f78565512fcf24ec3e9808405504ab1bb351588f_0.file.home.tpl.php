<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 07:47:36
  from "/var/www/html/smarty_example/views/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f2c98828875_39102449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78565512fcf24ec3e9808405504ab1bb351588f' => 
    array (
      0 => '/var/www/html/smarty_example/views/home.tpl',
      1 => 1469000853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f2c98828875_39102449 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/smarty_example/lib/smarty/plugins/modifier.date_format.php';
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8" />
</head>
<body>
<p>Hello, World!</p>
<p>Hello, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['receiver']->value, 'UTF-8');?>
! It's <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d %B");?>
 today!</p>
</body>
</html><?php }
}
