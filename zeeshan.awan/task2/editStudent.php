<?php



$students = get_single_student();
global $db;

$id=$_GET['id'];
echo "<h1>Edit Record</h1>";

echo "<form action=\"?action=edit_student\" method=\"post\">";

foreach($students as $row) {
    echo "<input type=\"hidden\" name=\"id\" value='".$id. "'/>";
    echo "<label>Name </label><input type='text'  name=\"name\" id=\"name\" required=\"true\" value='" . $row[1] . "'/><br><br>";
    echo "<label>Father's Name </label><input type='text'  name=\"father_name\" id=\"father_name\" required=\"true\" value='" . $row[3] . "'/><br><br>";
    echo "<label>Phone number </label><input type='text'  name=\"phone\" id=\"phone\" required=\"true\" value='" . $row[2] . "'/><br><br>";
    echo "<label>Class </label><input type='text'  name=\"class\" id=\"class\" required=\"true\" value='" . $row[5] . "'/><br><br>";
    echo "<label>Address </label><input type='text'  name=\"address\" id=\"address\" required=\"true\" value='" . $row[4] . "'/><br><br>";
    echo "<label>Status </label><input type='text'  name=\"status\" id=\"status\" required=\"true\" value='" . $row[8] . "'/><br><br>";
    echo"<input type=\"submit\" value=\"Register\">";
}

echo "</form>";
