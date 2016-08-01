<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/28/16
 * Time: 12:16 PM
 */

require_once 'Db_Connection.php';

class DB_Criteria extends DB_Con
{

    public function ListStudents($tableName)
    {

        $conn = $this->connection_generated();

        $sql = "Select * from $tableName";
        //$result = $conn->query($sql);

        $result = mysqli_query($conn, $sql);
        //var_dump($result);

        return $result;


    }

    function EditStud($tablename, $fields = [], $values = [], $id)
    {
        // updating the data


        global $counter, $sql;
        $counter = 0;

        $sql = "UPDATE $tablename set";

        //for ($i =0; $i < count($fields); $i++){
        //  $sql=$sql.$fields($i);}

        for ($i = $j = 0; $i < count($fields); $i++) {

            // echo'creating fields in query';

            $sql .= " " . $fields[$i] . "='" . $values[$i] . "'";

            if ($counter + 1 == count($fields)) {

            } else {

                $sql .= ",";
                $counter++;
            }

        }

            $sql .= " where id = $id;";


            //$sql .= "',TRUE);";

           // echo $sql;

            $conn = $this->connection_generated();


            if ($conn->query($sql) === true) {
                mysqli_close($conn);

                //echo "<br>Student Added ! ";
                return true;
            }

            mysqli_close($conn);



    }

    function dbsearch($id, $tablename)
    {


        $conn = $this->connection_generated();


        $sql = "Select * from $tablename where id=$id";
        $result = $conn->query($sql);

        mysqli_close($conn);

        return $result;
    }

    function Deletedb($id, $tablename)
    {
        $conn = $this->connection_generated();

        $delID = $id;

        // $delID=$_POST["del12"];

        $sql = "DELETE FROM $tablename where  id= $delID";
        $conn->query($sql);
        mysqli_close($conn);

    }

    function Add($tablename, $fields = [], $values = [])
    {
       // echo'entering db criteria';
        global $counter, $sql;
        $counter = 0;

        $sql = "INSERT INTO $tablename(";

        //for ($i =0; $i < count($fields); $i++){
        //  $sql=$sql.$fields($i);}
        foreach ($fields as $fieldName) {

           // echo'creating fields in query';

            $sql .= $fieldName;
            if ($counter + 1 == count($fields)) {

            } else {

                $sql .= ",";
                $counter++;
            }

        }
        $counter = 0;

        $sql .= ") VALUES (";

        foreach ($values as $vals) {


           // echo'creating values in query';
            $sql .="'".$vals;
            if ($counter + 1 == count($values)) {

            } else {

                $sql .= "',";
                $counter++;
            }

        }

        $sql .= "',TRUE);";

       // echo $sql;

        $conn = $this->connection_generated();

       // echo "connection opened";

        //insertion

         //$query = "INSERT INTO Student(name,fathers_name,dob,School,City,Description,Status) VALUES ('asad','jamel','1994-01-02','PUC','islambad','android',TRUE );";

       // echo $query;
       // echo "<br><br>".$sql;

       // echo 'calling query';

        //$conn->query($sql);

        if ($conn->query($sql) === true) {
            mysqli_close($conn);

            //echo "<br>Student Added ! ";
            return true;
        }

        mysqli_close($conn);


    }

    function login($tablename,$user,$pass){

       // echo '<br>db val '.$user;
       // echo '<br>db val '.$user;

        $conn = $this->connection_generated();

        $sql = "Select * from $tablename WHERE username='$user' AND password='$pass'";

        //echo '<br>'.$sql;
        $result =  mysqli_query($conn, $sql);

        //var_dump($result);

        if($result){

            //echo 'entering if';

            if($result->num_rows > 0) {
              //  echo 'entering row check';
                return true;
            }

            else
                return false;


        }



    }

}