<?php

class DB_Con
{
    public static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }


    public function connection_generated()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123";

// Create connection
        $conn = new mysqli($servername, $username, $password,"Student44");

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
           // echo "DB Connected successfully !!! <br><br><br>";
            return $conn;
        }
    }


}