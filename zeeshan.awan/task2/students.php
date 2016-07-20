<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/13/16
 * Time: 4:18 PM
 */
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
    <td><a href='editRecord.php?id=".$row[0]."'>Edit</a></td>
    <td><a href='deleteRecord.php?id=".$row[0]."'>Delete</a></td></tr>";


}


echo "</table>";

?>
<h2>Manage Students</h2>

