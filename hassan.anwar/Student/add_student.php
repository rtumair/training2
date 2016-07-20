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
            <fieldset>
                <legend>Register Student</legend>
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
                        <input type="hidden" value="add_student" name="action"/>
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

</body>

</html>
