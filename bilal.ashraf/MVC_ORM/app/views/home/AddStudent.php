<?php require_once '../app/views/shared/header.php'; ?>
<form action="http://localhost/bilal_workspace/MVC_ORM/public/Student/AddStudent_I" method="post">
    <fieldset>
        <legend>ADD STUDENT</legend>
        Name:         <input type="text" name="name"><br><br>
        FName:        <input type="text" name="fathername"><br><br>
        DOB:           <input type="text" name="dob"><br><br>
        SchoolName:   <input type="text" name="schoolname"><br><br>
        City:         <input type="text" name="city"><br><br>
        Destination:  <input type="text" name="destination"><br><br>
        Status:       <input type="text" name="status"><br><br>
        <input type="submit" value="Add_Student">
    </fieldset>

</form>
<?php require_once '../app/views/shared/footer.php'; ?>


