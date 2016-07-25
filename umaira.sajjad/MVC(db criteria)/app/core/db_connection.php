<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 5:24 PM
 */

class db_conn {

    protected $db_conn;

    /**
     * db constructor.
     */
    public function __construct() {
        try {
            $this->db_conn = mysqli_connect('localhost','root','123','user');
        }  catch (PDOException $err) {
            echo 'Connection failed: ' . $err->getMessage();
        }
    }
    public function query($query)
    {

    }

    public function execute()
    {
        
    }

}