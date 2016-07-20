<h3>Welcome Home</h3>
<?php

$result = get_students();

?>

<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2 style="padding-left: 40%"> Register Student</h2>
<form action="?page=add_student" method="post">
    <input value="Add Student" type="submit" />
    <a href="?action=export">export csv file</a>
</form>

<form action="?action=import" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="filename" id="filename">
    <input type="submit"/>
</form>

<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>"."<td>".$row["id"]."</td>";
                echo "<td>".$row["student_name"]."</td>";
                echo "<td>".$row["dob"]."</td>";
                echo "<td>".$row["father_name"]."</td>";
                echo "<td>".$row["class"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["ph_no"]."</td>";
                echo '<td>
                    <a href="?page=edit_student&id='.$row['id'].'">Edit</a>
                    <a href="index.php?id='.$row['id'].'&action=delete_students">Delete</a>
                    </td> 
                    </tr>';
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</div>
</body>
</html>