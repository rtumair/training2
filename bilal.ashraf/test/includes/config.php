<?php
/**
 * Created by PhpStorm.
 * User: Rolustech
 * Date: 7/22/2016
 * Time: 3:25 PM
 */


global $db,$page,$action;


require_once('Db_Connection.php');
require_once('functions.php');
//echo 1 or die;

$ins = Db :: getInstance();
//echo 1 or die;
$db = $ins->connection_generated();
$page = isset($_REQUEST['page'])?($_REQUEST['page']):'list_all_students';

$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';
//echo $action;
if(!empty($action)){
    $action();
}

