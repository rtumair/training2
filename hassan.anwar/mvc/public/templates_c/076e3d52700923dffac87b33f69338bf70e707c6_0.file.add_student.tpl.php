<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/mvc/app/views/Student/add_student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f39c1671181_09223131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '076e3d52700923dffac87b33f69338bf70e707c6' => 
    array (
      0 => '/var/www/html/mvc/app/views/Student/add_student.tpl',
      1 => 1469004222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/Student/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_578f39c1671181_09223131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Add Student | SMP"), 0, false);
?>



<div align="center">
    <div align="center" style="width: 300px;">
        <form action="create" method="post">
            <fieldset>
                <legend>Add Student</legend>
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input placeholder="Enter Name" type="text" name="name" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <input placeholder="Date of Birth" type="text" onfocus="(this.type='date')"  name="dob" required autofocus></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Father Name:
                        </td>
                        <td>
                            <input placeholder="Enter Father Name" type="text" name="fathername" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Class:
                        </td>
                        <td>
                            <input placeholder="Enter Class" type="text" name="class" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input placeholder="Enter Address" type="text" name="address" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone no:
                        </td>
                        <td>
                            <input placeholder="Enter Phone No" type="text" name="phoneno" required autofocus /></br></br>
                        </td>

                    </tr>

                    <tr align="right">
                        <td>
                        </td>
                        <td>
                            <input type="submit"  value="Add" />
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
