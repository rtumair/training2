<h2> List of Students </h2>


<form action="?action=Import & page=ListPage" method = "post">
    <input type = "submit" name = "Import" value = "Import">

</form>

<form action="?page=ListPage&action=Export" method = "post">
    <input type = "submit" name = "Export" value = "Export">

</form>


<?php

$result = ListStu();


if ($result->num_rows > 0) {

    echo"STUDENTS INFO :";
    // output data of each row

    echo "<table border='1' cellpadding='10'><tr><td>ID</td><td>Name</td>
        <td>Fathers Name</td><td>DOB</td><td>School</td><td>City</td><td>Description</td><td>Status</td></tr>";

    while ($row = $result->fetch_assoc()) {
        $delid = $row["id"];


        echo "<tr><td>". $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["fathers_name"]
            . "</td><td>" . $row["dob"] . "</td><td>" . $row["School"] . "</td><td>" . $row["City"] .
            "</td><td>" . $row["Description"] . "</td><td>" . $row["Status"]."</td>
            <td><form action='?page=Editpage' method='post'>
             <input type='submit' name='edit' value='edit'>
             <input type='hidden' name='edit12' value = $delid >
             </form></td><td>
             <form action='?page=ListPage&action=Delete' method='post'>
             <input type='submit' name='Delete' value='Delete'>
             <input type='hidden' name='del12' value = $delid >
             </form></td></tr>";
    }
    echo'</table>';


}



?>