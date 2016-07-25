<?php



class DB
{
    public static $instance = "";
    public static function getInstance()
    {
        if(static :: $instance == null) {
            static :: $instance = new DB();
        }
        return static :: $instance;
    }

    public function connection_generated()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123";
// Create connection
        $conn = new mysqli($servername, $username, $password,"Student");

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }


}