<?php
/* Smarty version 3.1.30-dev/86, created on 2016-07-20 09:46:06
  from "/var/www/html/mvc_smarty/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f485e8770c4_36867174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4407b546f56722458ef221b3f827409d489402c' => 
    array (
      0 => '/var/www/html/mvc_smarty/index.tpl',
      1 => 1469006875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578f485e8770c4_36867174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Welcome Home</h3>

<html>
<head>
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
</head>
<body>
<h2 style="padding-left: 40%"> Register Student</h2>
<form action="/views/home/add_student" method="post">
    <input value="Add Student" type="submit" />
    <a href="export_record">export csv file</a>
</form>

<form action="import_record" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="filename" id="filename">
    <input type="submit"/>
</form>

<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>

        <?php echo '<?php

            ';?>foreach($data['students'] as $row) {
                <?php echo '?>';?>
        <tr>
            <td><?php echo '<?php ';?>echo $row["id"]<?php echo '?>';?></td>
            <td><?php echo '<?php ';?>echo $row["student_name"]<?php echo '?>';?></td>
            <td><?php echo '<?php ';?>echo $row["dob"]<?php echo '?>';?></td>
            <td><?php echo '<?php ';?>echo $row["father_name"]<?php echo '?>';?></td>
            <td><?php echo '<?php ';?>echo $row["class"]<?php echo '?>';?></td>
            <td><?php echo '<?php ';?>echo $row["address"]<?php echo '?>';?></td>
            <td><?php echo '<?php ';?>echo $row["ph_no"]<?php echo '?>';?></td>
            <td>
                <a href="edit_student/<?php echo '<?php ';?>echo $row["id"]; <?php echo '?>';?>" >Edit</a>
                <a href="delete_student_record/<?php echo '<?php ';?>echo $row["id"]; <?php echo '?>';?>">Delete</a>
            </td>
        </tr>

        <?php echo '<?php
            ';?>}
        <?php echo '?>';?>
    </table>
</div>
</body>
</html><?php }
}
