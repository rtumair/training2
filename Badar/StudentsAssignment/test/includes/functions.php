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

function ListStu()
{

    global $db;
    $conn = $db->connection_generated();

    $sql = "Select * from Student";
    $result = $conn->query($sql);
    return $result;
}

function Edit()
    {
        //echo 'Entered Edit function';
        global $uid,$name,$Fname,$dob,$school,$city,$desc;
        //echo $_POST["edit12"];

        //echo"check search query ";
        $result = search($_POST["edit12"]);

        while ($row = $result->fetch_assoc()) {

            $uid=$row["id"];
            $name= $row["name"];
            $Fname = $row["fathers_name"];
            $dob =  $row ["dob"];
            $school =  $row ["School"];
            $city =  $row ["City"];
            $desc =  $row ["Description"];

        }
        if(!empty($_POST["e_name"])){
            //echo $name;
            //echo"updating name";
            $name = $_POST["e_name"];
            //echo $name;
        }
        if(!empty($_POST["e_fathername"])){
            $Fname = $_POST["e_fathername"];
        }
        if(!empty($_POST["e_dob"])) {
            $dob = $_POST["e_dob"];
        }
        if(!empty($_POST["e_schoolname"])) {
            $school = $_POST["e_schoolname"];
        }

        if(!empty($_POST["e_city"])) {
            $city = $_POST["e_city"];
        }

        if(!empty($_POST["e_description"])) {
            $desc = $_POST["e_description"];
        }



        //echo $uid;

        /*   echo $result["name"];
           echo"check search query ";
           //name
           if(empty($_POST["e_name"])){
                   $name = $result["name"];
           }
           else
               $name = $_POST["e_name"];

           // father name
           if(empty($_POST["e_fathername"])){
               $Fname = $result["fathers_name"];
           }
           else
               $Fname = $_POST["e_fathername"];

           // DOB
           if(empty($_POST["e_dob"])){
               $dob = $result["dob"];
           }
           else
               $dob = $_POST["e_dob"];

           //School
           if(empty($_POST["e_schoolname"])){
               $school = $result["School"];
           }
           else
               $school = $_POST["e_schoolname"];

           //City
           if(empty($_POST["e_city"])){
               $city = $result["City"];
           }
           else
               $city  = $_POST["e_city"];

           //Description
           if(empty($_POST["e_description"])){
               $desc = $result["Description"];
           }
           else
               $desc = $_POST["e_description"]; */

        // updating the data

        global $db;
        $conn = $db->connection_generated();

       // echo "<br> about to edit <br>";
        $sql = "UPDATE Student
                 set name ='$name',fathers_name='$Fname', dob='$dob',
                 School='$school',City='$city',Description='$desc'
                  where id ='$uid' ";
        //echo "<br> editing <br>";
        $conn->query($sql);
        //echo "Edited ! ";





    }

function Import(){

    global $db;
    $conn = $db->connection_generated();

    $filename = "students.csv";

    $fp = fopen($filename,"r");

    //parse the csv file row by row
    while(($row = fgetcsv($fp,"500",",")) != FALSE)
    {
    //insert csv data into mysql table
        $sql = "INSERT INTO Student (name,fathers_name,dob,School,City,Description,Status)
        VALUES('" . implode("','",$row) . "')";
        if(!mysqli_query($db, $sql))
        {
            die('Error : ' . mysqli_error($db));
        }
    }

    fclose($fp);

    mysqli_close($conn);

}

function Export(){

    global $db;
    $conn = $db->connection_generated();


    // fetch mysql table rows
    $sql = "select * from Student";
    $result = mysqli_query($conn, $sql) or die("Selection Error " . mysqli_error($conn));

    $fp = fopen('Students.csv', 'w');

    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($fp, $row);
    }

    fclose($fp);

    mysqli_close($conn);

}

function search ($id){


    global $db;
    $conn = $db->connection_generated();

    $sql = "Select * from Student where id=$id";
    $result = $conn->query($sql);

    mysqli_close($conn);

    return $result;
}

function Delete()
{
    global $db;
    $conn = $db->connection_generated();

    $delID=$_POST["del12"];

    $sql="DELETE FROM Student where  id= $delID";
    $conn->query($sql);
    mysqli_close($conn);


}


function AddStu()
    {

        global $db;
        $conn = $db->connection_generated();

        $Name=$_POST['name'];
        $F_Name=$_POST['fathername'];
        $DOB=$_POST['dob'];
        $School=$_POST['schoolname'];
        $City=$_POST['city'];
        $Disc=$_POST['description'];
        //$School=$_POST['name'];





        //insertion

        $sql = "INSERT INTO Student(name,fathers_name,dob,School,City,Description,Status) VALUES ('$Name','$F_Name','$DOB','$School','$City','$Disc',TRUE );";

        //$conn->query($sql);


        if ($conn->query($sql) === true) {

            echo "Student Added ! ";
        }

        mysqli_close($conn);



    }


