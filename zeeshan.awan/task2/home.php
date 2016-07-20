<html>
<div>
    <h1>Student records</h1>
    <button type="button" id="addBtn">Add</button>
    <a href='?page=importCsv'>Import csv</a>
    <a href='?action=export_csv'>Export csv</a>
</div>
<script>
    var btn = document.getElementById('addBtn');
    btn.addEventListener('click', function() {
        document.location.href = '?page=addStudent';
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

$students = get_students();
global $db;


echo "<table>";
echo "<tr>
    <th>id</th>
    <th>name</th>
    <th>address</th>
    <th>class</th>
    <th>father_name</th>
    <th>phone</th>
    <th>created_at</th>
    <th>udpated_at</th>
    <th>status</th>
  </tr>";

foreach($students as $row) {

    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td>
    <td>" . $row[2] . "</td><td>" . $row[3] . "</td>
    <td>" . $row[4] . "</td>
    <td>" . $row[5] . "</td>
    <td>" . $row[6] . "</td>
    <td>" . $row[7] . "</td>
    <td>" . $row[8] . "</td>
    <td><a href='?page=editStudent&id=".$row[0]."'>Edit</a></td>
    <td><a href='?action=delete_student&id=".$row[0]."'>Delete</a></td></tr>";


}


echo "</table>";

?>
