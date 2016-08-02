<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/1/16
 * Time: 12:59 PM
 */
class StudentModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this -> table_name = 'student';
        $this-> column_fields = array('id', 'name', 'city');
    }
}