<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:24 PM
 */

namespace DB;
require_once('DB_criteria.php');

class Database {

    //-----DB variables-----//
    public $table_name;
    public $column_fields;

    //-----connection variables------//

    private $db_conn;
    private static $instance;
    
    
    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "user";

        try {
            $this->db_conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getInstance() {
        if(static::$instance == null)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function get_db_connection()
    {
        return $this-> db_conn;
    }
    
    public function return_query_data($query)
    {
       // echo $query;
        $table_data_array = array();
        try
        {
            $response =  $this -> db_conn-> query($query);
            while ($row = $response->fetch(\PDO::FETCH_ASSOC)) {
                array_push($table_data_array, $row);
            }
        } catch (\PDOException $e)
        {
            echo $e;
        }
        return $table_data_array;
    }
    
    public function rowCount($query)
    {
//         echo $query;
        $response = $this -> db_conn -> query($query);
        return $response ->rowCount();
    }

    // ---------------QUERIES----------------------//

    public function Select($Criteria)
    {
        $query = "SELECT ". $Criteria-> Select_statement ." FROM " . $this-> table_name;

        if (!empty($Criteria-> Where_statement)) 
        {
            $query = $query . " WHERE " . $Criteria-> Where_statement;
        } 
        if (!empty($Criteria-> Limit)) 
        {
            var_dump($Criteria-> Limit );
            $query = $query . " LIMIT " . $Criteria-> Limit;
        }
        if (!empty($Criteria-> GroupBy)) 
        {
            $query = $query . " GROUP BY " . $Criteria-> GroupBy;
        } 
        if (!empty($Criteria-> Join)) 
        {
            $query = $query . " INNER JOIN " . $Criteria-> Join;
        }
        // echo $query;
        return $this-> return_query_data ($query);
    }
    
    public function SelectAll($Criteria)
    {
        $query = "SELECT * FROM ". $this -> table_name;
        if (!empty($Criteria-> Limit)) 
        {
            $query = $query . " LIMIT " . $Criteria-> Limit;
        }

        return $this-> return_query_data ($query);
    }

    public function Insert($Criteria)
    {
        $query = "INSERT INTO " . $this-> table_name. ' '. $Criteria->Insert_stmt. " VALUES " . $Criteria->Value_stmt;
        return $this-> rowCount($query);
    }

    public function Update($Criteria)
    {
        $query = 'UPDATE '. $this -> table_name. ' SET '. $Criteria -> Set_stmt;

        if ($Criteria-> Where_statement != ' ') {
            $query = $query . " WHERE " . $Criteria-> Where_statement;
        }

        // echo $query;
        return $this-> rowCount($query);
    }

    public function Delete($Criteria)
    {
        $query = "DELETE FROM " . $this-> table_name;

        if ($Criteria-> Where_statement != ' ') {
            $query = $query . " WHERE " . $Criteria-> Where_statement;
        }
       // echo $query;
        return $this-> rowCount($query);
    }
    

}