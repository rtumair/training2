<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/smarty/child.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f2532091491_14598570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8d2aab99a3a06dda7bd710c67e538532f57e36c' => 
    array (
      0 => '/var/www/html/smarty/child.tpl',
      1 => 1468998794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parent.tpl' => 1,
  ),
),false)) {
function content_578f2532091491_14598570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782270401578f253208a001_39163137', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1512541721578f253208f681_18432667', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:parent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1782270401578f253208a001_39163137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1512541721578f253208f681_18432667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Body<?php
}
}
/* {/block 'body'} */
}
