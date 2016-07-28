<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:24 PM
 */

class db_conn {

    private $host = "localhost";
    private $user = "root";
    private $pass = "123";
    private $dbname = "user";

    private $db_conn;

    private static $instance;

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );

        try{
            $this->db_conn = new PDO($dsn, $this->user, $this->pass, $options);
        }
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    public static function getInstance() {
        // singleton, make only 1 connection
        if(static::$instance == null)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function get_db_connection()
    {
        return $this-> db_conn;
    }
}