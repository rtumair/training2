<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/18/16
 * Time: 3:13 PM
 */
require_once "../app/core/DB.php";

class DBCriteria extends DB
{
    public $statement;
    public $conn;
    public $select="*";
    public $limit;
    public $groupby;
    public $having;
    public $where;
    public $join;

    public $table;
    public $attributes= array();



    public function __construct()
    {
        $this->conn = DB::getInstance()->get_conn();
    }

    public function prepare($query)
    {
        $this->statement= $this->conn->prepare($query);

    }

    public function execute()
    {
        return $this->statement->execute();
    }

    public function select_all()
    {
        if($this->select == '*')
            $query = 'Select '.$this->select.' from ' . $this->table ;
        else{
            $options = rtrim(implode(',', $this->select), ',');
            $query = 'Select '.$options.' from ' . $this->table ;
        }
        
        return $this->conn->query($query);
    }

    public function get_student()
    {
        $query =  $query = "select * from ".$this->table." where id ='{$this->attributes[0]}'";

        return $this->conn->query($query);
    }

    public function insert()
    {
        try
        {
            $query = "insert into Student (student_name,dob,father_name,class,address,ph_no,status) VALUES ('{$this->attributes[0]}','{$this->attributes[1]}','{$this->attributes[2]}','{$this->attributes[3]}','{$this->attributes[4]}','{$this->attributes[5]}',1)";
            print_r($query);
            $this->prepare($query);

            $result = $this->execute();
            return $result;
        }
        catch ( PDOException $exception )
        {
            echo "PDO error :" . $exception->getMessage();
        }
    }

    public function delete()
    {
        try
        {
            $query = "delete from ".$this->table." where id ='{$this->attributes[0]}'";

            $this->prepare($query);
            print_r($query);
            $result = $this->execute();
            if($result){
                echo "record deleted";
            }
            return $result;
        }
        catch ( PDOException $exception )
        {
            echo "PDO error :" . $exception->getMessage();
        }
    }

    public function update()
    {
        try
        {

            $query = "UPDATE ".$this->table." SET student_name ='{$this->attributes[1]}' , dob ='{$this->attributes[2]}' , father_name ='{$this->attributes[3]}' , class ='{$this->attributes[4]}', address ='{$this->attributes[5]}' , ph_no ='{$this->attributes[6]}' where id ='{$this->attributes[0]}' ";

            $this->prepare($query);

            $result = $this->execute();

            return $result;
        }
        catch ( PDOException $exception )
        {
            echo "PDO error :" . $exception->getMessage();
        }
    }

    function export(){


        $filename = "Student.csv";
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename='.$filename);

        $fp = fopen('php://output', 'w');
        fputcsv($fp, array('ID','Student Name','DOB','Father Name','Class','Address','Phone No','Created On','Updated on','status'));


        $query = "SELECT * FROM Student";

        $result = $this->conn->query($query);
        foreach($result as $row) {
            fputcsv($fp, $row);
        }
        fclose($fp);

        exit();
    }

    function import()
    {
        while (($data = fgetcsv($this->attributes[0], 1000, ",")) !== FALSE) {
            $import = "insert into Student(student_name,dob,father_name,class,address,ph_no,created_on,updated_on,status) VALUES('{$data[1]}','{$data[2]}','{$data[3]}','{$data[4]}','{$data[5]}','{$data[6]}','{$data[7]}','{$data[8]}',{$data[9]})";

            $this->prepare($import);

            $result = $this->execute();
        }
        fclose($this->attributes[0]);
    }

}