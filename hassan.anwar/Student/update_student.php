<html>
<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/13/16
 * Time: 4:44 PM
 */
?>

<body>

<div align="center">
    <div align="center" style="width: 300px;">
        <form action="index.php" method="post">
            <?php $id=$_REQUEST['id'];
            $result=get_student($id);
            ?>
            <fieldset >
                <legend>Update Student</legend>

                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input value="<?php echo $result['student_name'] ?>" type="text" name="name" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <input value="<?php echo $result['dob'] ?>" type="text" onfocus="(this.type='date')"  name="dob" required autofocus></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Father Name:
                        </td>
                        <td>
                            <input value="<?php echo $result['father_name'] ?>" type="text" name="fathername" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Class:
                        </td>
                        <td>
                            <input value="<?php echo $result['class'] ?>" type="text" name="class" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input value="<?php echo $result['address'] ?>" type="text" name="address" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone no:
                        </td>
                        <td>
                            <input value="<?php echo $result['phone_no'] ?>" type="text" name="phoneno" required autofocus /></br></br>
                        </td>

                    </tr>

                    <tr align="right">
                        <td>
                            <input type="hidden" value="update_student" name="action"/>
                            <input type="hidden" value="<?php echo $id?>" name="id"/>
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

</body>

</html>
