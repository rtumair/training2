<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 4:53 PM
 */

class User
{
    protected $db;

    public function __construct()
    {
       // parent::__construct();
        $this -> db = new db_criteria();
        $this->db->table_name = 'user';
        $this->db->column_fields = array('user_id', 'user_name', 'password', 'user_email');

    }
    public function authenticate($user_values)
    {
        $where_fields = array();
        $where_values = array();
        foreach($user_values as $key => $val)
        {
            array_push($where_fields, $key);
            array_push($where_values, $val);
        }
       $isSuccessful =  $this -> db -> Select(['*'], $where_fields, '=', $where_values);
        
        if (!empty($isSuccessful))
        {
            session_start();
            $_SESSION['login_user'] = $user_values["user_email"];
          //  echo 'sessions' .($_SESSION['login_user']);
        }
        return $isSuccessful;
    }

    public function ViewAll()
    {
        $response = $this -> db -> Select(['*'], ['0'], '=',['0']);
        return $response;
    }
    
    public function Create($user_values)
    {
        $isSuccessful =  $this -> db -> Insert(array('user_id', 'user_name', 'password', 'user_email'), $user_values);
        return $isSuccessful;
    }

    public function Delete($id)
    {
        $isSuccessful =  $this -> db -> Delete(array('user_id'), '=', [$id]);
        return $isSuccessful;
    }

    public function Update($id, $set_arr)
    {
        $where_array = array();
        $where_array['user_id'] = $id;

        $isSuccessful = $this -> db -> Update( '=', $set_arr, '=', $where_array);
        return $isSuccessful;
    }
    
    
}