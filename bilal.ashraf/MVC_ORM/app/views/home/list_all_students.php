<?php require_once '../app/views/shared/header.php'; ?>
<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 5px;
    }
</style>
<?php

echo "<a href='http://localhost/bilal_workspace/MVC_ORM/public/Student/AddStudent'>Add Student</a>";
echo "<table style=\"width:100%\">"; // start a table tag in the HTML
echo "<tr><th>Id</th><th>Name</th><th>FatherName</th><th>DOB</th><th>SchoolName</th><th>City</th><th>Destination</th><th>Status</th><th></th><th></th></tr>";

while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results

    echo "<tr><td>" . $row['id'] . "</td><td> " . $row['name'] . "</td><td>" . $row['fathername'] . "</td><td>" . $row['dob'] .
        "</td><td>" . $row['schoolname'] . "</td><td>" . $row['city'] . "</td><td>" . $row['destination'] .
        "</td><td>" . $row['status'] .
        "</td><td><a href='http://localhost/bilal_workspace/MVC_ORM/public/Student/UpdateStd/".$row[0]."'>Edit</a></td>
        <td><a href='http://localhost/bilal_workspace/MVC_ORM/public/Student/DeleteStd/".$row[0]."'>Delete</a></td></tr>";

}

echo "</table>";
require_once '../app/views/shared/footer.php'; 
