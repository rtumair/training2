<?php

/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/20/16
 * Time: 6:22 PM
 */

require_once '/var/www/html/adminPanel/app/core/Model.php';

class UserModel extends Model
{
    public $username;
    public $password;

    public function __construct()
    {
        parent::__construct();
        $this->table='User';
        $this->columns=array('username', 'password');
    }

}