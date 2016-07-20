<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/13/16
 * Time: 3:17 PM
 */

function db_connect(){

    
}

function test() {
    echo "here";
    die();
}

function get_students(){
    global $db;
    $query= "Select * from Student";
    $result = $db->query($query);
    return $result;
}


function get_student_by_id($id){
    global $db;
    $query = "select * from Student where id = $id";
    $result = mysqli_query($db,$query);
    $value = mysqli_fetch_array($result);
    return $value;
}

function add_students(){
    global $db;
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $f_name = $_POST["f_name"];
    $class = $_POST["class"];
    $address = $_POST["address"];
    $ph_no = $_POST["ph_no"];
    $status= 1;

    $insert_query = "INSERT INTO Student(student_name,dob,father_name,class,address,ph_no,status) VALUES ('$name','$dob','$f_name','$class','$address','$ph_no',$status)";

    if (mysqli_query($db, $insert_query)) {
        echo "New record created successfully";
    } else {

        echo "Error: " . $insert_query . "<br>" . $db->error;
    }

}



function edit_students(){

    global $db;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $f_name = $_POST["f_name"];
    $class = $_POST["class"];
    $address = $_POST["address"];
    $ph_no = $_POST["ph_no"];
     

    $status= 1;
    $update_query = "UPDATE Student SET student_name = '$name',dob='$dob',father_name='$f_name',class='$class',address='$address',ph_no='$ph_no',updated_on=now(),status=$status WHERE id=$id";

    if (mysqli_query($db, $update_query)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $update_query . "<br>" . $db->error;
    }
}

function delete_students(){
    global $db;
    $id = $_REQUEST['id'];
    $delete_query = "DELETE FROM Student Where id = '$id'";

    if (mysqli_query($db, $delete_query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $delete_query . "<br>" . $db->error;
    }
}



function export(){
    global $db;

    //ob_clean();

    $filename = "Student.csv";
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename='.$filename);

    $fp = fopen('php://output', 'w');
    fputcsv($fp, array('ID','Student Name','DOB','Father Name','Class','Address','Phone No','Created On','Updated on','status'));


    $query = "SELECT * FROM Student";
    $result = mysqli_query($db,$query);

    while($row = mysqli_fetch_row($result)) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    
    exit();
}

function import()
{
    global $db;
    $handle = fopen($_FILES['filename']['tmp_name'], "r");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $import = "INSERT INTO Student(student_name,dob,father_name,class,address,ph_no,created_on,updated_on,status) VALUES('{$data[1]}','{$data[2]}','{$data[3]}','{$data[4]}','{$data[5]}','{$data[6]}','{$data[7]}','{$data[8]}',{$data[9]})";
        $temp = mysqli_query($db,$import) or die(mysqli_error());
        if(!$temp) {
            echo "Error occur" . mysqli_errno($temp);
       }
    }
    fclose($handle);

    echo "Import done";


}

function action() {
    
    if(isset($_POST['action']) && !empty($_POST['action']) && function_exists($_POST['action'])){
        $_POST['action']();
    }
    
}