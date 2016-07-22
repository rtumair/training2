<?php
/* Smarty version 3.1.30-dev/86, created on 
  from "/var/www/html/mvc/app/views/Student/update_student.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/86',
  'unifunc' => 'content_578f401c5a5ac6_78723012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e8d8171e5b7592bfb3cf6d71d5237906f8b102' => 
    array (
      0 => '/var/www/html/mvc/app/views/Student/update_student.tpl',
      1 => 1469005849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/mvc/app/views/Student/header.tpl' => 1,
    'file:/var/www/html/mvc/app/views/Student/footer.tpl' => 1,
  ),
),false)) {
function content_578f401c5a5ac6_78723012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:/var/www/html/mvc/app/views/Student/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Update Student | SMP"), 0, false);
?>


<div align="center">
    <div align="center" style="width: 300px;">

        <form action="../update/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">

            <fieldset >
                <legend>Update Student</legend>

                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['student_name'];?>
" type="text" name="name" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dob'];?>
" type="text" onfocus="(this.type='date')"  name="dob" required autofocus></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Father Name:
                        </td>
                        <td>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['father_name'];?>
" type="text" name="fathername" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Class:
                        </td>
                        <td>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
" type="text" name="class" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['address'];?>
" type="text" name="address" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone no:
                        </td>
                        <td>
                            <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone_no'];?>
" type="text" name="phoneno" required autofocus /></br></br>
                        </td>

                    </tr>

                    <tr align="right">
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Update" />
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
