<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/13/16
 * Time: 4:06 PM
 */

function db_connect(){
// db connection
    $servername = "localhost";
    $username = "root";
    $password = "123";
    global $db;
    $db = mysql_connect("$servername", $username, $password);


    if($db === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    $db_select = mysql_select_db('mydb',$db);
    if (!$db_select) {
        die("Database selection also failed miserably: " . mysql_error());
    }
   // mysql_select_db('mydb');
}

function get_students(){



    $query = "SELECT * FROM Student";
    $result = mysql_query($query);
    $stdArr =array();
    while($row=mysql_fetch_array($result)) {
        $temp= array($row['id'],$row['name'],$row['address'],$row['class'],$row['father_name'],$row['phone'],$row['created_at'],$row['updated_at'],$row['status']);
        $stdArr[]=$temp;
    }
    return $stdArr;

}
function get_single_student(){



    $query = "SELECT * FROM Student where id=".$_GET['id'];
    $result = mysql_query($query);
    $stdArr =array();
    while($row=mysql_fetch_array($result)) {
        $temp= array($row['id'],$row['name'],$row['phone'],$row['father_name'],$row['address'],$row['class'],$row['created_at'],$row['updated_at'],$row['status']);
        $stdArr[]=$temp;
    }
    return $stdArr;

}
function add_students(){
    global $db;
    global $mysqli;
    $name = $_POST['name'];

    $father_name = $_POST['father_name'];

    $address = $_POST['address'];

    $phone = $_POST['phone'];
    $class = $_POST['class'];

    $sql = "INSERT INTO Student (name, phone, father_name, address, class,status) VALUES ('$name', '$phone', '$father_name', '$address','$class',true)";


    if(mysql_query($sql)){

         echo "Records added successfully.";
       // header("Location:records.php");

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysql_error($db);

    }

}

function delete_student(){
    $sql = "Delete from Student where id=".$_GET['id'];
    global $db;
    if(mysql_query($sql)){

        //echo "Record deleted successfully.";
        //header("Location:records.php");

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysql_error($db);

    }

}
function edit_student()
{
    $name = $_POST['name'];

    $father_name = $_POST['father_name'];

    $address = $_POST['address'];

    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $status = $_POST['status'];
    $id = str_replace('/', '', $_POST['id']);

    $sql = "Update Student set name='$name', father_name='$father_name', address='$address', phone='$phone', class='$class', updated_at=now() ,status=$status where id = " . $id;
    global $db;
    if (mysql_query($sql)) {

        echo "Record updated successfully.";
        //header("Location:records.php");

    } else {

        echo "ERROR: Could not able to execute $sql. " . mysql_error($db);

    }
}

    function upload_csv()
    {
        echo "Import done";
        if (isset($_POST['submit'])) {

            if (is_uploaded_file($_FILES['filename']['tmp_name'])) {


            }

            $handle = fopen($_FILES['filename']['tmp_name'], "r");

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $import = "INSERT into Student(name,phone,father_name,address,class,status)values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

                mysql_query($import) or die(mysql_error());
            }

            fclose($handle);



        }

    }

    function export_csv() {


    $sql = "SELECT * FROM Student";
    $result = mysql_query($sql);

    //ob_end_clean();

    $fp = fopen('php://output','w');
    fputcsv($fp, array("id","name","phone","father_name","address","class","created_at","updated_at","status"));
    while ($list = mysql_fetch_assoc($result)) {
        fputcsv($fp, $list);
    }

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');

    exit();



}