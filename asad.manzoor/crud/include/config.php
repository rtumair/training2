<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/13/16
 * Time: 3:16 PM
 */


// db connection


require_once "Database.php";


$db_obj = Database::getInstance();


$db =  $db_obj->get_conn();

global $page,$action,$db;

require_once "functions.php";


$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';
$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';


if($action != ''){
    $action();
}


//echo "Connected successfully \n";
