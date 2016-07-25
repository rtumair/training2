<?php
/**
 * Created by PhpStorm.
 * User: Rolustech
 * Date: 7/22/2016
 * Time: 3:33 PM
 */

function test(){
    global $db;

    echo 'Hello we are in test action';
}

function deleting_student(){

    $delid = $_GET['id'];
    echo $delid;
    echo "jamal";
    global $db;
    $sql = "DELETE FROM student WHERE id='$delid'";

    if (mysqli_query($db, $sql) == TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }

}


function list_all_students()
{
    echo "bilal" or die;
}
function add_student(){


    global $db;
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $fname = mysqli_real_escape_string($db, $_POST['fathername']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $sname = mysqli_real_escape_string($db, $_POST['schoolname']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $destination = mysqli_real_escape_string($db, $_POST['destination']);
    $status = mysqli_real_escape_string($db, $_POST['status']);

    $sql = "INSERT INTO student (name, fathername, dob, schoolname, city, destination, status) 
            VALUES ('$name', '$fname', '$dob', '$sname', '$city', '$destination', '$status')";

    if(mysqli_query($db, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

    }
}

//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";



function editing_student(){

    echo "bil\n";
    global $db;
    $cid = $_POST['id'];
    echo $cid;
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $fname = mysqli_real_escape_string($db, $_POST['fathername']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $sname = mysqli_real_escape_string($db, $_POST['schoolname']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $destination = mysqli_real_escape_string($db, $_POST['destination']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
    $sql = "Update student set name='$name', fathername='$fname', dob='$dob',
            schoolname='$sname', city='$city', destination='$destination' ,status='$status' where id = '$cid'";

    if (mysqli_query($db,$sql) == TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $db->error;
    }


}