<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/29/16
 * Time: 2:17 PM
 */
require_once ('Database/Database.php');

class Model
{
    protected $db;
    public $table_name;
    public $column_fields;

    public function __construct()
    {
        $this -> db = new \DB\Database;
    }
   
    public function Create($user_values)
    {
        $this -> db -> table_name = $this-> table_name;
        $Criteria =  new \DB\DB_criteria();
        $Criteria-> SetInsert($this-> column_fields, $user_values);
        
        $isSuccessful =  $this -> db -> Insert($Criteria);
        return $isSuccessful;
    }

    public function Read()
    {
        $this -> db -> table_name = $this-> table_name;
        $Criteria =  new \DB\DB_criteria();
//        $Criteria-> SetLimit('2');

        $response = $this -> db -> SelectAll($Criteria);
        return $response;
    }

    public function Update($id, $set_arr)
    {
        $where_array = ['user_id' => $id];
        $Criteria =  new \DB\DB_criteria();
        $Criteria -> Set('=', $set_arr);
        $Criteria-> WhereEquals($where_array, 'AND');
        $this -> db -> table_name = $this-> table_name;

        $isSuccessful = $this -> db -> Update($Criteria);
        return $isSuccessful;
    }

    public function Delete($id)
    {
        $where_values = ['user_id' => $id];

        $Criteria =  new \DB\DB_criteria();
        $Criteria-> WhereEquals($where_values, 'AND');
        $this -> db -> table_name = $this-> table_name;

        $isSuccessful =  $this -> db -> Delete($Criteria);
        return $isSuccessful;
    }
        
}