<?php

/**
 * Created by PhpStorm.
 * Home: hassan.anwar
 * Date: 7/15/16
 * Time: 2:36 PM
 */


require_once '/var/www/html/adminPanel/app/core/Model.php';

class StudentModel extends Model
{
    public $student_name;
    public $dob;
    public $father_name;
    public $class;
    public $address;
    public $phone_no;
    public $updated_on;
    public $status;

    public function __construct()
    {
        parent::__construct();
        $this->table='Student';
        $this->columns=array('student_name','dob', 'father_name', 'class', 'address', 'phone_no', 'updated_on', 'status');
    }

}