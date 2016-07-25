<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 5px;
    }
</style>
<?php
echo "<br><br><a href='?page=ExportCSV'>EXPORTCSV</a>";
echo "<a href='?page=import_csv'>IMPORTCSV</a><br><br>";
global $db;
$query = "SELECT * FROM student"; //You don't need a ; like you do in SQL
$result = mysqli_query($db, $query);
//echo 1 or die;
//echo $result;

echo "<table style=\"width:100%\">"; // start a table tag in the HTML
echo "<tr><th>Name</th><th>FatherName</th><th>DOB</th><th>SchoolName</th><th>City</th><th>Destination</th><th>Status</th><th></th><th></th></tr>";

while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results

    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['fathername'] . "</td><td>" . $row['dob'] .
        "</td><td>" . $row['schoolname'] . "</td><td>" . $row['city'] . "</td><td>" . $row['destination'] .
        "</td><td>" . $row['status'] .
        "</td><td><a href='?page=edit_student&id=".$row[0]."'>Edit</a></td>
        <td><a href='?action=deleting_student&id=".$row[0]."'>Delete</a></td></tr>";

}

echo "</table>";
echo "<br><br><a href='?page=AddStudent'>ADD STUDENT</a>";
//"</td><td><a href='?page=editStudent&id=".$row[0]."'>Edit</a></td>
   //<td><a href='?action=delete_student&id=".$row[0]."'>Delete</a></td></tr>"

//"</td><td>" . '<a href=""?action="edit_student&id=" .$row["id"] >Edit</a>'  .