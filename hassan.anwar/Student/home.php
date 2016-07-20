<html>
<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/13/16
 * Time: 5:55 PM
 */?>

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
<h2 style="padding-left: 40%; padding-right: 40%">Manage Students</h2>

<div>

    <a href="index.php?page=add_student">Add Student</a><br/><br/>
    <a href="index.php?page=import_students">Import</a><br/><br/>
    <a target="_blank" href="index.php?action=export">Export</a><br/><br/>

    <table>
        <tbody>
        <tr>
            <th>Sr#</th>
            <th>Name</th>
            <th>Dob</th>
            <th>Father Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Action</th>
        </tr>
        <?php $count=1;
        $result=getAllStudents();
        while ( $row = mysqli_fetch_assoc($result) ) {

        ?>

        <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['student_name'] ?></td>
            <td><?php echo $row['dob'] ?></td>
            <td><?php echo $row['father_name'] ?></td>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['phone_no'] ?></td>
            <td><a href="index.php?page=update_student&id=<?php echo$row['id']?>" >Update</a> | <a href="index.php?action=delete_student&id=<?php echo$row['id']?>" >Delete</a> </td>

        </tr>

        <?php } ?>

    </table>
</div> 

</body>

</html>