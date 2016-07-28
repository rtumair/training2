
<html>
<head>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
    <script language="javascript" type="text/javascript" src="script.js"></script>

</head>
<body>
<div align="center" style="margin-top:7%;margin-bottom: 7%" >
    <div align="center" style="width: 300px;">
        <fieldset >
            <legend>Search Student</legend>
            <button onclick="getData();">Get External Content</button>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Delete record</legend>
            <button onclick="deleteStudent();">Delete Record</button>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Update record</legend>
            <button onclick="updateStudent();">PUT Record</button>
        </fieldset>


        <br><br>
        <fieldset>
            <legend>Add Student</legend>
            <!--
            <input placeholder="Enter Name" type="text" name="name" id="name"/></br></br>
            <input placeholder="Enter DOB" type="date" name="dob" /></br></br>
            <input placeholder="Enter Father Name" type="text" name="f_name" /></br></br>
            <input placeholder="Enter Class" type="text" name="class" /></br></br>
            <input placeholder="Enter Address" type="text" name="address" /></br></br>
            <input placeholder="Enter Phone No" type="text" name="ph_no" /></br></br>
            <input type="hidden" name="action" value="add_students"/> -->
            <button onclick="addStudent();">ADD Record"</button>
        </fieldset>
    </div>
</div>
<div id="output" >
</div>

</body>
</html>