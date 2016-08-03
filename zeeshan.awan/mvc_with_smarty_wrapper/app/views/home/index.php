
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
<div>
    <h1>User records</h1>
    <button type="button" id="addBtn">Add</button>
    <a href='/my_work/mvc/public/home/import_csv'>Import csv</a>
    <a href='/my_work/mvc/public/home/export_csv'>Export csv</a>
</div>
<script>
    var btn = document.getElementById('addBtn');
    btn.addEventListener('click', function() {
        document.location.href = '/my_work/mvc/public/home/addUser';
    });
</script>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/13/16
 * Time: 4:06 PM
 */
echo "<h3>Welcome Home</h3>";

//$students = get_students();
global $db;


echo "<table>";
echo "<tr>
    <th>id</th>
    <th>name</th>
    <th>password</th>
    <th>created_at</th>
    <th>udpated_at</th>
    
  </tr>";

foreach($data['users'] as $row) {

    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td>
    <td>" . $row['pswd'] . "</td><td>" . $row['created_at'] . "</td>
    <td>" . $row['updated_at'] . "</td>
    
    <td><a href='/my_work/mvc/public/home/editUser?id=".$row[0]."'>Edit</a></td>
    <td><a href='/my_work/mvc/public/home/delete?id=".$row[0]."'>Delete</a></td></tr>";


}


echo "</table>";

?>

