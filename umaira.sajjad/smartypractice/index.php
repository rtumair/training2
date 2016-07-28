<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/21/16
 * Time: 12:23 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once ('libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty -> compile_dir = 'tmp';


$array = array( '1', '2', '3');
$smarty->assign('people',$array);

$smarty->display('index.tpl');