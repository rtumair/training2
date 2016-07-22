<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/mvc/app/views/Student/header_main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f7877f1ffb8_11952855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '070d7aebccc7d083db807b9c891666ecb1d96de5' => 
    array (
      0 => '/var/www/html/mvc/app/views/Student/header_main.tpl',
      1 => 1469015508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f7877f1ffb8_11952855 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "no title" : $tmp);?>
</title>
    <style>
        
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
    </style>

    <?php echo '<script'; ?>
>
        
        function confirmation(id){

            var r = confirm("Are you sure you want to delete?");
            if (r == true) {
                window.location="delete/"+id;
            }
        }
        
    <?php echo '</script'; ?>
>

</head>
<body>
<h2>Student Management Portal</h2>
<hr /><?php }
}
