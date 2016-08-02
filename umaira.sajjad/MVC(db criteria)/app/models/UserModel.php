<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 4:53 PM
 */

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this -> table_name = 'user';
        $this-> column_fields = array('user_id', 'user_name', 'user_city', 'password', 'user_email');
    }
    
}