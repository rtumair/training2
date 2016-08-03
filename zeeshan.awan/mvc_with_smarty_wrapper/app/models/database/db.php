<?php

class Db {
    private $connection;
    private static $instance; //The single instance
    private $host = "localhost";
    private $username = "root";
    private $password = "123";
    private $database = "mydb";


    public static function getInstance() {

        if(static::$instance == null) { // If no instance then make one
            static::$instance = new static();
        }

        return static::$instance;
    }
// Constructor
    private function __construct() {

        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e)
        {
            echo "error";
        }


    }
// Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
// Get mysqli connection
    public function getConnection() {
        return $this->connection;
    }
}
