<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/18/16
 * Time: 2:10 PM
 */
class DB
{
    private static $instance;
    private   $conn;
    private   $hostname="localhost";
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
        try {
            $this->conn = new PDO('mysql:host='.$this->hostname.';dbname='.$this->database, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {

            echo "connection failed: " . $e->getMessage();
        }

    }

    public function get_conn()
    {

        return $this->conn;
    }
}