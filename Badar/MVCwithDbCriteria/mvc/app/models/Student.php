<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/27/16
 * Time: 2:16 PM
 */
require_once '../app/core/Db_Criteria.php';

Class Student extends DB_Criteria{
    
    
    public $Name;
    public $F_Name;
    public $DOB;
    public $School;
    public $City;
    public $Disc;


    public function ListStu()
    {

        $result = $this->ListStudents('Student');
        //var_dump($result);

        return $result;


    }

    function Edit($obj,$id)
    {

        // updating the data

       /* $conn = $this->connection_generated();

        // echo "<br> about to edit <br>";
        $sql = "UPDATE Student
                 set name ='$obj->Name',fathers_name='$obj->F_Name', dob='$obj->DOB',
                 School='$obj->School',City='$obj->City',Description='$obj->Disc'
                  where id ='$id' ";
        //echo "<br> editing <br>";
       / $conn->query($sql);
        *///echo "Edited ! ";

        $fields[0]='name';
        $fields[1]='fathers_name';
        $fields[2]='dob';
        $fields[3]='School';
        $fields[4]='City';
        $fields[5]='Description';
       // $fields[6]='Status';

        $values[0]=$obj->Name;
        $values[1]=$obj->F_Name;
        $values[2]=$obj->DOB;
        $values[3]=$obj->School;
        $values[4]=$obj->City;
        $values[5]=$obj->Disc;

        
        if($this->EditStud('Student',$fields,$values,$id)){

            //echo"Editted succesfully";
        }


    }

    function Import(){

        $conn = $this->connection_generated();


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

        $conn = $this->connection_generated();



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


        $result = $this->dbsearch($id,'Student');


        return $result;
    }

    function Delete($id)
    {
        $this->Deletedb($id,'Student');
    }


    function AddStu($obj)
    {

        //$conn = $this->connection_generated();

        //insertion

        //$sql = "INSERT INTO Student(name,fathers_name,dob,School,City,Description,Status) VALUES ('$obj->Name','$obj->F_Name','$obj->DOB','$obj->School','$obj->City','$obj->Disc',TRUE );";

        //$conn->query($sql);


        //if ($conn->query($sql) === true) {

          //  echo "Student Added ! ";
        //}

        //mysqli_close($conn);

        $fields[0]='name';
        $fields[1]='fathers_name';
        $fields[2]='dob';
        $fields[3]='School';
        $fields[4]='City';
        $fields[5]='Description';
        $fields[6]='Status';

        $values[0]=$obj->Name;
        $values[1]=$obj->F_Name;
        $values[2]=$obj->DOB;
        $values[3]=$obj->School;
        $values[4]=$obj->City;
        $values[5]=$obj->Disc;
       // $values[6]="TRUE";

       // echo'calling db criteria';

        if($this->Add('Student',$fields,$values)){

            //echo"Added succesfully";
        }




    }






}