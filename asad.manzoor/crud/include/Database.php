<?php

class Database
{

    private static $instance;
    private   $conn;
    private   $servername="localhost";
    private   $username="root";
    private   $password="123";
    private   $database = "University";

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {

        $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function get_conn()
    {
        
        return $this->conn;
    }
}