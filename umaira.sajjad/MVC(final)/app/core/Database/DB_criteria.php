<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:24 PM
 */
namespace DB;
require_once('Database.php');

class DB_criteria  {

    // Db variables
    public $primary_key;
    public $table_name;

    // Criteria prepared statements
    public $Where_statement;
    public $Select_statement;
    public $Set_stmt;
    public $Insert_stmt;
    public $Value_stmt;
    public $Limit;
    public $GroupBy;
    public $Join;


    public function SetSelect($select_fields)
    {
        $i = -1;
        foreach ($select_fields as $val) {
            $i++;
            $this -> Select_statement = $this -> Select_statement . $select_fields[$i];
        }
//        echo '$this-> Select_statement '. $this-> Select_statement;
    }

    public function WhereEquals($user_values, $where_attribute)
    {
        // works for AND OR
        $where_fields = array();
        $where_values = array();
        foreach($user_values as $key => $val)
        {
            array_push($where_fields, $key);
            array_push($where_values, $val);
        }
        
        $i = -1;
        foreach ($where_values as $val) {
            $i++;
            if (!(count($where_values) == 1))
            {
                if ($i == count($where_values) - 1) {
                    $temp = rtrim($this->Where_statement, ',');
                    $this -> Where_statement = $temp. $where_attribute . ' '. $where_fields[$i]. '='. " '$where_values[$i]' ";
                } else {
                    $this -> Where_statement = $this -> Where_statement . $where_fields[$i]. '='. " '$where_values[$i]' ". ',';
                }
            } else {
                $this -> Where_statement = $this -> Where_statement . $where_fields[$i]. '='. " '$where_values[$i]' ";

            }
        }
        // echo '$this-> Where_statement ' . $this-> Where_statement;
    }
    
    public function Set($set_operator, $set_values)
    {        
        $set_stmt = "";
        foreach ($set_values as $key => $val)
        {
            $set_stmt = $set_stmt . $key . $set_operator ." '$val' "  . " , ";
        }
        $this -> Set_stmt = rtrim($set_stmt, " , ");
    }

    public function SetInsert($fields, $values)
    {
        $Insert_stmt = '( ';
        $i = -1;
        foreach ($fields as $val) {
            $i++;
            if (count($fields) == 1)
            {
                $Insert_stmt = $Insert_stmt . $fields[$i];
            } else {
                $Insert_stmt = $Insert_stmt . $fields[$i] . ' , ';
            }
        }
        $temp = rtrim($Insert_stmt, ' , ');
        $this -> Insert_stmt = $temp . ') ';

        if (in_array("user_id", $fields))
        {
            $value_stmt = '( NULL, ';

        } else {
            $value_stmt = '( ';
        }

        foreach ($values as $key => $value)
        {
            $value_stmt = $value_stmt . " '$value' " .",";
        }
        $temp = rtrim($value_stmt, ",");
        $this -> Value_stmt = $temp . ')';
    }

    public function SetLimit($num)
    {
        $this-> Limit = $num;
    }

    public function WhereIn($column_name, $values)
    {
        // WHERE column_name IN (value1,value2,...);

        $values_stmt = "(";
        foreach($values as $value)
        {
            $values_stmt = $values_stmt . $value . ',';
        }

        $temp = rtrim($values_stmt, ',');
        $values_stmt = $temp . ')';

        $this -> Where_statement = $column_name . " IN ". $values_stmt;

    }

    public function WhereBetween($column_name, $values)
    {
//        WHERE column_name BETWEEN value1 AND value2;
        $this -> Where_statement = $column_name. " BETWEEN ". $values[0]. " AND ". $values[1];
    }

    public function SetGroupBy($column_name)
    {
        $this-> GroupBy = $column_name;
    }

    public function setJoin($table1, $table2, $fktable1, $fktable2)
    {
        // INNER JOIN Customers
       // ON Orders.CustomerID=Customers.CustomerID;
        $this->Join = $table1 . " ON " . $table1.'.'.$fktable1 . " = " . $table2.'.'.$fktable2;
    }
    
}