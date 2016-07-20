{include file="/var/www/html/mvc/app/views/Student/header.tpl" title="Update Student | SMP"}

<div align="center">
    <div align="center" style="width: 300px;">

        <form action="../update/{$data.id}" method="post">

            <fieldset >
                <legend>Update Student</legend>

                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input value="{$data.student_name}" type="text" name="name" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <input value="{$data.dob}" type="text" onfocus="(this.type='date')"  name="dob" required autofocus></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Father Name:
                        </td>
                        <td>
                            <input value="{$data.father_name}" type="text" name="fathername" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Class:
                        </td>
                        <td>
                            <input value="{$data.class}" type="text" name="class" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input value="{$data.address}" type="text" name="address" required autofocus /></br></br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone no:
                        </td>
                        <td>
                            <input value="{$data.phone_no}" type="text" name="phoneno" required autofocus /></br></br>
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

{include file="/var/www/html/mvc/app/views/Student/footer.tpl"}