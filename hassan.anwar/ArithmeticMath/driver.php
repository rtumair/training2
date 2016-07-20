<?php
namespace arithmeticMath;

require_once 'ArithmeticMath.php';

$cal=new  ArithmeticMath;
echo $cal->add(100, 10) ."</br>";
echo $cal->subtract(100, 10) ."</br>";
echo $cal->multiply(100, 10) ."</br>";
echo $cal->divide(100, 10) ."</br>";
