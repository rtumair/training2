<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/15/16
 * Time: 2:56 PM
 */

//require_once "header.php";
//
//require_once '/var/www/html/mvc/app/views/Student/manageStudent.php';
//
//require_once "footer.php";


require_once('/var/www/html/smarty/Smarty/Smarty.class.php');

// create object
$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.

//$smarty->assign('name', 'george smith');
//$smarty->assign('address', '45th & Harris');

// assign options arrays
//$smarty->assign('id', array(1,2,3,4,5));
//$smarty->assign('names', array('bob','jim','joe','jerry','fred'));

// assign an array of data
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));

// assign an associative array of data
$smarty->assign('users', array(
    array('name' => 'bob', 'phone' => '555-3425'),
    array('name' => 'jim', 'phone' => '555-4364'),
    array('name' => 'joe', 'phone' => '555-3422'),
    array('name' => 'jerry', 'phone' => '555-4973'),
    array('name' => 'fred', 'phone' => '555-3235')
));


// display it
$smarty->display('hello.tpl');


// display it
//$smarty->display('child.tpl');


?>