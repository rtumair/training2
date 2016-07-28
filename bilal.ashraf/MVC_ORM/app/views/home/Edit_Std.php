<?php
require_once '../app/views/shared/header.php';

$row = mysqli_fetch_row($result);

?>

<form action="http://localhost/bilal_workspace/MVC_ORM/public/Student/Update_F" method="post">
    <fieldset>
        <legend>EDIT STUDENT</legend>
        Name:         <input type="text" name="name" value="<?= $row[1] ?>"><br><br>
        FName:        <input type="text" name="fathername" value="<?= $row[2] ?>"><br><br>
        DOB:           <input type="text" name="dob" value="<?= $row[3] ?>"><br><br>
        SchoolName:   <input type="text" name="schoolname" value="<?= $row[4] ?>"><br><br>
        City:         <input type="text" name="city" value="<?= $row[5] ?>"><br><br>
        Destination:  <input type="text" name="destination" value="<?= $row[6] ?>"><br><br>
        Status:       <input type="text" name="status" value="<?= $row[7] ?>"><br><br>
        <input type="submit" value="EDIT_Student">
        <input type="hidden" name="id" value='<?php echo "$id";?>'>
    </fieldset>

</form>

<?php require_once '../app/views/shared/footer.php'; ?>
