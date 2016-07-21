{include file="/var/www/html/mvc/app/views/home/header.tpl" title="add student record"}

<html>

<body>
<div align="center" style="margin-top:7%;margin-bottom: 7%">
    <div align="center" style="width: 300px;">
        <form action="/mvc/public/student/save_student_record" method="post">
            <fieldset >
                <legend>Register Student</legend>
                <input placeholder="Enter Name" type="text" name="name" /></br></br>
                <input placeholder="Enter DOB" type="date" name="dob" /></br></br>
                <input placeholder="Enter Father Name" type="text" name="f_name" /></br></br>
                <input placeholder="Enter Class" type="text" name="class" /></br></br>
                <input placeholder="Enter Address" type="text" name="address" /></br></br>
                <input placeholder="Enter Phone No" type="text" name="ph_no" /></br></br>
                <input type="hidden" name="action" value="add_students"/>
                <input type="submit" />
            </fieldset>
        </form>
    </div>
</div>
</body>

</html>

{include file="/var/www/html/mvc/app/views/home/footer.tpl" title=""}