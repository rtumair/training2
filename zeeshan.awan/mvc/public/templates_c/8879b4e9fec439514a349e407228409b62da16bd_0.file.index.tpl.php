<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 11:32:33
  from "/var/www/html/my_work/mvc/app/views/home/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f61512a0b98_96366146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8879b4e9fec439514a349e407228409b62da16bd' => 
    array (
      0 => '/var/www/html/my_work/mvc/app/views/home/index.tpl',
      1 => 1469014350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f61512a0b98_96366146 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
<div>
    <h1>User records</h1>
    <button type="button" id="addBtn">Add</button>
    <a href='/my_work/mvc/public/home/import_csv'>Import csv</a>
    <a href='/my_work/mvc/public/home/export_csv'>Export csv</a>
</div>
<?php echo '<script'; ?>
>
    var btn = document.getElementById('addBtn');
    btn.addEventListener('click', function() {
        document.location.href = '/my_work/mvc/public/home/addUser';
    });
<?php echo '</script'; ?>
>
</html>

<h3>Welcome Home</h3>




<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>password</th>
        <th>created_at</th>
        <th>udpated_at</th>

    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['pswd'];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['row']->value['created_at'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['updated_at'];?>
</td>

            <td><a href='/my_work/mvc/public/home/editUser?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Edit</a></td>
            <td><a href='/my_work/mvc/public/home/delete?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
'>Delete</a></td></tr>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




</table>






<?php }
}
