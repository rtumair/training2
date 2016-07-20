<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'Arithmetic.php';
    use Arithmetic;

    $obj = new \Arithmetic\Arithmetic;
    $num_1 = 10;
    $num_2 = 12;
    echo 'Sum of '. $num_1 .' and '. $num_2. ' is: '. $obj->addition($num_1, $num_2) . "<br/>";
    echo 'Product of '. $num_1 .' and '. $num_2. ' is: '. $obj->multiplication($num_1, $num_2). "<br/>";
    echo 'Difference of '. $num_1 .' and '. $num_2. ' is: '. $obj->subtraction($num_1, $num_2). "<br/>";
    echo 'Division of '. $num_1 .' and '. $num_2. ' is: '. $obj->division($num_1, $num_2). "<br/>";
