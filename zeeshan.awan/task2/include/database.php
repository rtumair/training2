<?php

class Database {
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

    $this->connection = mysql_connect($this->host, $this->username,
    $this->password);

    mysql_select_db($this->database);
   

}
// Magic method clone is empty to prevent duplication of connection
private function __clone() { }
// Get mysqli connection
public function getConnection() {
return $this->connection;
}
}
