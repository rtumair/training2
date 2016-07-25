<?php
/**
 * Created by PhpStorm.
 * User: bilal_ashraf
 * Date: 7/25/16
 * Time: 5:48 AM
 */
$id=$_GET["id"];
if( $_GET["id"])
{
    global $id;
    $id = $_GET["id"];
    echo $id;
    //$query = "select * from student where id = $id";
    //$result = mysqli_query($db,$query);


}

?>

<form action="?page=list_all_students&action=editing_student" method="post">
    <fieldset>
        <legend>EDIT STUDENT</legend>
        Name:         <input type="text" name="name"><br><br>
        FName:        <input type="text" name="fathername"><br><br>
        DOB:           <input type="text" name="dob"><br><br>
        SchoolName:   <input type="text" name="schoolname"><br><br>
        City:         <input type="text" name="city"><br><br>
        Destination:  <input type="text" name="destination"><br><br>
        Status:       <input type="text" name="status"><br><br>
        <input type="submit" value="EDIT_Student">
        <input type="hidden" name="id" value='<?php echo "$id";?>'>
    </fieldset>

</form>

