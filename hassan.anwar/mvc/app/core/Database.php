<?php

/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/18/16
 * Time: 10:02 AM
 */
 
 
class Database {
	private $connect;
	private static $instance; //The single instance
	private $host = "localhost";
	private $username = "root";
	private $password = "123";
	private $database = "School";
	
	// Constructor
	private function __construct() {


//		$this->connect = new mysqli($this->host, $this->username,
//			$this->password, $this->database);
//
//		// Error handling
//		if(mysqli_connect_error()) {
//			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
//				 E_USER_ERROR);
//		}

		try {
			$this->connect =  $con = new PDO('mysql:host='.$this->host.'; dbname='.$this->database, $this->username, $this->password);
			// set the PDO error mode to exception
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}
		catch(PDOException $e)
		{

			echo "Connection failed: " . $e->getMessage();
		}


	}
	
	public static function getInstance() {
		if(!self::$instance) { // If no instance then make one
			self::$instance = new Database();
		}
		return self::$instance;
	}
	
	
	public function getConnection() {
		return $this->connect;
	}
}


?>


