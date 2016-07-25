<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 4:53 PM
 */
class User extends db_criteria 
{
    
    public function __construct()
    {
        $this->table_name = 'user';
        $this->column_fields = array('user_id', 'user_name', 'password', 'user_email');

    }
}