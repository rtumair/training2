<h2>Edit Student Info</h2>

<?php


global $delid2;
//$result = search($_POST["edit12"]);


echo "Old Information";
echo "<table border='1' cellpadding='10'><tr><td>ID</td><td>Name</td>
        <td>Fathers Name</td><td>DOB</td><td>School</td><td>City</td><td>Description</td><td>Status</td></tr>";

    while ($row = $data->fetch_assoc()) {

        $delid2= $row["id"];


    echo "<tr><td>". $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["fathers_name"]
            . "</td><td>" . $row["dob"] . "</td><td>" . $row["School"] . "</td><td>" . $row["City"] .
            "</td><td>" . $row["Description"] . "</td><td>" . $row["Status"]."</td>
        <td>
            <form action='http://localhost/MVC/mvc/public/home/Delete' method='post'>
                <input type='submit' name='Delete' value='Delete'>
                <input type='hidden' name='del12' value = $delid2 >
            </form></td></tr>";
    }
    echo'</table>';

echo "<br><br>Please enter new Information<br><br>" ; ?>

<form action="http://localhost/MVC/mvc/public/home/EditStu" id="form1" method ="post">
    <fieldset>
        <legend>ADD STUDENT</legend>
Name       : <input type="text" name="e_name"><br><br>
FName      : <input type="text" name="e_fathername"><br><br>
DOB        : <input type="text" name="e_dob"><br><br>
SchoolName : <input type="text" name="e_schoolname"><br><br>
City       : <input type="text" name="e_city"><br><br>
Description: <input type="text" name="e_description"><br><br>
        <input type="submit" value="Edit_Student">
        <input type='hidden' name='edit12' value ='<?php echo $delid2 ?>' >
    </fieldset>

</form>






