<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 09:08:32
  from "/var/www/html/smarty_example/parent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f3f90997203_52651762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a217a89693b474a0ed5496798f9ba41923d03fba' => 
    array (
      0 => '/var/www/html/smarty_example/parent.tpl',
      1 => 1469002704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f3f90997203_52651762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_991829367578f3f9098e6c9_82784339', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1593364595578f3f90995526_01805403', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_991829367578f3f9098e6c9_82784339 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1593364595578f3f90995526_01805403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Body<?php
}
}
/* {/block 'body'} */
}
