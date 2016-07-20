<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/14/16
 * Time: 2:33 PM
 */

  
 
class Database {

    private $connect;
    private static $instance; //The single instance - It should be static
    private $host = "localhost";
    private $username = "root";
    private $password = "123";
    private $database = "School";

    // Constructor - It must be private
    private function __construct() {
        $this->connect = new mysqli($this->host, $this->username,
            $this->password, $this->database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conenct to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }

    public static function getInstance() {
        if(self::$instance == FALSE) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
    // Get mysqli connection

    public function getConnection() {
        return $this->connect;
    }
}