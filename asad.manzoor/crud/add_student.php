
<html>

<body>
<div align="center" style="margin-top: 17%">
    <div align="center" style="width: 300px;">
        <form action="index.php" method="post">
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
