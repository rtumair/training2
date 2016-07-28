<?php

require_once '../app/models/StudentModel.php';
require_once '../app/core/Db_Connection.php';


class Db_Criteria
{
    public $db;
    public $where;
    public $select;
    public $join;
    public $insert;
    
    public function __construct()
    {
        $inst = Db :: getInstance();
        $this->db = $inst->getConnection();
    }
    
    public function Delete_Data($tablename, $id)
    {
        $this->where = $id;
        $query = "Delete FROM $tablename where $this->where";
        if(mysqli_query($this->db, $query) ) {
          //  echo "records Deleted successfully";
        }
        else {
          //  echo "ERROR!! records not added!!";
          //  echo "ERROR: Could not able to execute $query. " . mysqli_error($this->db);
        }
    }

    public function select($table_name, $selected_args)
    {
        echo $this->where . "<br>";
        $query = "Select $selected_args from $table_name";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function select_where($table_name, $selected_args, $cond = '')
    {
       // echo $cond . "<br>";
        $this->where = $cond;
        //echo $this->where . "<br>";
        $query = "Select $selected_args from $table_name where $this->where";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    public function update_std_where($table_name, $comma_fields_Array, $cond = '')
    {

       // echo $comma_fields_Array . '<br>';
      //  echo $std_data . '<br>';
        //echo $this->db . "<br>";
        $this->where = $cond;
        $query = "update $table_name SET $comma_fields_Array where $this->where; ";
       // echo "<br>" . $query . "<br>";

        if(mysqli_query($this->db, $query) ) {
           // echo "records updated successfully";
        }
        else {
           // echo "ERROR!! records not added!!";
           // echo "ERROR: Could not able to execute $query. " . mysqli_error($this->db);
        }

    }

    public function Add_Std($std_data, $table_name, $comma_fields_Array)
    {

        //echo $comma_fields_Array . '<br>';
       // echo $std_data . '<br>';
        //echo $this->db . "<br>";
        $query = "insert into $table_name ($comma_fields_Array) values ($std_data); ";
       // echo "<br>" . $query . "<br>";

        if(mysqli_query($this->db, $query) ) {
            //echo "records added successfully";
        }
        else {
            //echo "ERROR!! records not added!!";
           // echo "ERROR: Could not able to execute $query. " . mysqli_error($this->db);
        }

    }

    


}