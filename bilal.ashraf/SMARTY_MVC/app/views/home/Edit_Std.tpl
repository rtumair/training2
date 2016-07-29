



<form action="http://localhost/bilal_workspace/SMARTY_MVC/public/Student/Update_F" method="post">
    <fieldset>
        <legend>EDIT STUDENT</legend>
        Name:         <input type="text" name="name" value="{$name}"><br><br>
        FName:        <input type="text" name="fathername" value="{$fathername}"><br><br>
        DOB:           <input type="text" name="dob" value="{$dob}"><br><br>
        SchoolName:   <input type="text" name="schoolname" value="{$schoolname}"><br><br>
        City:         <input type="text" name="city" value="{$city}"><br><br>
        Destination:  <input type="text" name="destination" value="{$destination}"><br><br>
        Status:       <input type="text" name="status" value="{$status}"><br><br>
        <input type="submit" value="EDIT_Student">
        <input type="hidden" name="id" value = '{$id}'>
    </fieldset>

</form>


