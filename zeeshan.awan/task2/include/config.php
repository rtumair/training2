<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/13/16
 * Time: 4:06 PM
 */
/*$servername = "localhost";
$username = "root";
$password = "123";
global $db;
$db = mysql_connect("$servername", $username, $password);


if($db === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$db_select = mysql_select_db('mydb',$db);
if (!$db_select) {
    die("Database selection also failed miserably: " . mysql_error());
}
*/
global $page,$action,$db,$mysqli;
require_once "database.php";

$db = Database::getInstance();

$mysqli = $db->getConnection();

require_once "functions.php";


$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';
$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';


if($action != ''){
    $action();
}

//db_connect();
