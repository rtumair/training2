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
    public $table_name;

    public function __construct()
    {
        $inst = Db :: getInstance();
        $this->db = $inst->getConnection();
    }

    public function check_login($name, $password)
    {
        $query = "select name,password from Admin";
        $result = mysqli_query($this->db, $query);

        foreach( $result as $row) {

            if($row['name'] == $name && $row['password'] == $password) {
                
                return true;
            }
        }
        return false;
    }


    public function from($tname)
    {
        $this->table_name = $tname;
    }

    public function Select($sel_arg, $pk_cond = '')
    {
        $this->select = $sel_arg;
        $this->where = $pk_cond;
    }

    public function Where($where_cond)
    {
        $this->where = $where_cond;
    }

    public function run_query()
    {
        if($this->where == null) {

            $query = "Select $this->select from $this->table_name";
            $result = mysqli_query($this->db, $query);
            return $result;
        }
        else {

            $query = "Select $this->select from $this->table_name where $this->where";
            $result = mysqli_query($this->db, $query);
            return $result;
        }
    }

    
    public function Delete()
    {
        $query = "Delete FROM $this->table_name where $this->where";
        if(mysqli_query($this->db, $query) ) {
           // echo "records Deleted successfully";
        }
        else {
          //  echo "ERROR!! records not added!!";
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->db);
        }
    }
    public function Update()
    {
        $query = "update $this->table_name SET $this->select where $this->where; ";
        if(mysqli_query($this->db, $query) ) {
           // echo "records updated successfully";
        }
        else {
           // echo "ERROR!! records not added!!";
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->db);
        }
    }

    public function Add_Std($std_data)
    {
        $query = "insert into $this->table_name ($this->select) values ($std_data); ";
        if(mysqli_query($this->db, $query) ) {
           // echo "records added successfully";
        }
        else {
           // echo "ERROR!! records not added!!";
           //echo "ERROR: Could not able to execute $query. " . mysqli_error($this->db);
        }

    }

    


}