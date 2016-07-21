<h3>Welcome Home</h3>

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
<form action="add_student" method="post">
    <input value="Add Student" type="submit" />
    <a href="export_record">export csv file</a>
</form>

<form action="import_record" method="post" enctype="multipart/form-data">
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

            foreach($data['students'] as $row) {
                ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["student_name"]?></td>
                    <td><?php echo $row["dob"]?></td>
                    <td><?php echo $row["father_name"]?></td>
                    <td><?php echo $row["class"]?></td>
                    <td><?php echo $row["address"]?></td>
                    <td><?php echo $row["ph_no"]?></td>
                    <td>
                        <a href="edit_student/<?php echo $row["id"]; ?>" >Edit</a>
                        <a href="delete_student_record/<?php echo $row["id"]; ?>">Delete</a>
                    </td> 
                </tr>

            <?php
            }
        ?>
    </table>
</div>
</body>
</html>