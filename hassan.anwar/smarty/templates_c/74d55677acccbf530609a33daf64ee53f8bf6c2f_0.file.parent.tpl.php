<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/smarty/parent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f25320a2f52_13328765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74d55677acccbf530609a33daf64ee53f8bf6c2f' => 
    array (
      0 => '/var/www/html/smarty/parent.tpl',
      1 => 1468998768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f25320a2f52_13328765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1592815324578f253209c855_60403669', 'title');
?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1473973186578f25320a1492_69573945', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_1592815324578f253209c855_60403669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1473973186578f25320a1492_69573945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Body<?php
}
}
/* {/block 'body'} */
}
