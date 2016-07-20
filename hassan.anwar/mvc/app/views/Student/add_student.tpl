{include file="/var/www/html/mvc/app/views/Student/header.tpl" title="Add Student | SMP"}


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

{include file="/var/www/html/mvc/app/views/Student/footer.tpl"}