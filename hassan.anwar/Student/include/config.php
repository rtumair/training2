<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/13/16
 * Time: 3:16 PM
 */
require_once "functions.php";
global $page, $action, $db;

$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';
$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';
$id= isset($_REQUEST['id'])?($_REQUEST['id']):'';

if($action != null){
    if($id!=null) {
        echo $id;
        $action($id);
        exit(0);
    }
    else
        $action();
}