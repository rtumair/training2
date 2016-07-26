<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:24 PM
 */
require_once ('db_conn.php');
class db_criteria  {

    protected $connection;

    // Db variables
    protected $db_conn;
    public $table_name;
    public $column_fields = array();

    //------ my_sql attributes ------//
    protected $Where_statement; // not really needed

    // ---------extra variables---------//
    protected $table_data_array = array();


    public function __construct()
    {
        $this->connection = db_conn::getInstance()-> get_db_connection();
    }

    public function Select($select_values, $where_fields, $where_operator, $where_values)
    {
        $query = "";
        if (in_array('*', $select_values))
        {
            if (in_array('0', $where_fields)) {
                // echo 'select *, no where needed';
                $query = 'SELECT * FROM '. $this -> table_name;
            } else {
                // echo 'select *, where needed';
                $i = -1;
                foreach ($where_values as $val) {
                    $i++;
                    if (!(count($where_values) == 1))
                    {
                        if ($i == count($where_values) - 1) {
                            $temp = rtrim($this->Where_statement, ',');
                            $this -> Where_statement = $temp.' AND '. $where_fields[$i]. $where_operator. " '$where_values[$i]' ";
                        } else {
                            $this -> Where_statement = $this -> Where_statement . $where_fields[$i]. $where_operator. " '$where_values[$i]' ". ',';
                        }
                    } else {
                        $this -> Where_statement = $this -> Where_statement . $where_fields[$i]. $where_operator. " '$where_values[$i]' ";

                    }
                }
               // $temp = rtrim($this->Where_statement, ",");
                $query = 'SELECT  * FROM '. $this -> table_name. ' WHERE '. $this -> Where_statement;
            }
        }
//        echo 'start';
//        echo $this -> query_stmt;
//        echo 'end';
        $table_data_array = array();
        try
        {
            $response =  $this -> connection-> query($query);
            while ($row = $response->fetch(PDO::FETCH_ASSOC)) {
                array_push($table_data_array, $row);
            }
        } catch (PDOException $e)
        {
            echo $e;
        }
        return $table_data_array;
    }


    public function Insert($insert_values, $user_Values)
    {

        $insert_stmt = "";
        $values_stmt = "";
//        var_dump($user_Values);
//        echo '<br> </br>';
//
        foreach ($user_Values as $key => $val)
        {
            $insert_stmt = $insert_stmt . $key . " , ";
            $values_stmt = $values_stmt . " '$val' "  . " , ";
        }
        $temp = rtrim($insert_stmt, " , ");
        $temp2 = rtrim($values_stmt , " , ");

        $query = 'INSERT INTO '. $this -> table_name. ' ( user_id, '. $temp. ' ) '. ' VALUES '. ' ( NULL, '. $temp2. ')';
      //   echo 'start'.$query.'end';

        $is_successful = 0;
        try
        {
            $response =  $this -> connection-> query($query);
            $is_successful = $response->rowCount();
        } catch (PDOException $e)
        {
            echo $e;
        }

        return $is_successful;
    }

    public function Delete($where_fields, $where_operator, $where_values)
    {

        if (in_array('0', $where_fields)) {
             echo 'delete *, no where needed';
          //  $query = 'DELETE FROM '. $this -> table_name;
        } else {
            echo 'delete *, where needed';
            $i = -1;
            foreach ($where_values as $val) {
                $i++;
                if (!(count($where_values) == 1))
                {
                    if ($i == count($where_values) - 1) {
                        $temp = rtrim($this->Where_statement, ',');
                        $this -> Where_statement = $temp.' AND '. $where_fields[$i]. $where_operator. " '$where_values[$i]' ";
                    } else {
                        $this -> Where_statement = $this -> Where_statement . $where_fields[$i]. $where_operator. " '$where_values[$i]' ". ',';
                    }
                } else {
                    $this -> Where_statement = $this -> Where_statement . $where_fields[$i]. $where_operator. " '$where_values[$i]' ";
                }
            }
            // $temp = rtrim($this->Where_statement, ",");
            $query = 'DELETE FROM '. $this -> table_name.' WHERE '.  $this -> Where_statement;
            echo $query;
        }
        $is_successful = 0;
        try
        {
            $response =  $this -> connection-> query($query);
            $is_successful = $response->rowCount();
            echo $is_successful;
        } catch (PDOException $e)
        {
            echo $e;
        }
        return $is_successful;
    }

    public function Update($set_operator, $set_values, $where_operator, $where_values)
    {
        $set_stmt = "";
        $where_stmt = "";
//        var_dump($set_values);
//        var_dump($where_values);
        foreach ($set_values as $key => $val)
        {
            $set_stmt = $set_stmt . $key . $set_operator ." '$val' "  . " , ";
        }
        $temp = rtrim($set_stmt, " , ");
        foreach ($where_values as $key => $val)
        {
            $where_stmt = $where_stmt . $key . $where_operator ." '$val' "  . " , ";
        }
        $temp2 = rtrim($where_stmt, " , ");

        $query = 'UPDATE '. $this -> table_name. ' SET '. $temp. ' WHERE '. $temp2;
        // echo 'start'. $query . 'end';
        $is_successful = 0;
        try
        {
            $response =  $this -> connection-> query($query);
            $is_successful = $response->rowCount();
            echo $is_successful;
        } catch (PDOException $e)
        {
            echo $e;
        }
        return $is_successful;
    }
}