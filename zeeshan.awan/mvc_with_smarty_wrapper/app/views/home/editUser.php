<?php



$id=$_GET['id'];

echo "<h1>Edit Record</h1>";

echo "<form action=\"/my_work/mvc/public/home/update\" method=\"post\">";

foreach($data['user'] as $row) {
    echo "<input type=\"hidden\" name=\"id\" value='".$id. "'/>";
    echo "<label>Name </label><input type='text'  name=\"name\" id=\"name\" required=\"true\" value='" . $row['name'] . "'/><br><br>";
    echo "<label>Password </label><input type='text'  name=\"pswd\" id=\"pswd\" required=\"true\" value='" . $row['pswd'] . "'/><br><br>";

    echo"<input type=\"submit\" value=\"Edit\">";
}

echo "</form>";
