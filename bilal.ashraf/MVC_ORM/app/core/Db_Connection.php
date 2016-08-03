<?php

class DB
{
    public static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if( static :: $instance == null) {
            static :: $instance = new DB();
        }
        return static :: $instance;
    }

    public function getConnection()
    {
        $server_name = 'localhost';
        $username = 'root';
        $password = '123';
        $db_name = 'Student';

        $db = new mysqli($server_name, $username, $password, $db_name);

        if($db->connect_error) {
            die("Connection Failed" . $db->connect_error);
        }
       // echo "Connection Generated!!<br>";
        return $db;
    }
}