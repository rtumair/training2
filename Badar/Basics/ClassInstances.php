<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/22/16
 * Time: 3:53 PM
 */

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}


$className = 'SimpleClass';



echo"Creating same class instances with different statements"."<br>";
// both statements initaiate same class's object
$obj = new $className();

$obj1= new SimpleClass();

var_dump($obj)."<br>";
var_dump($obj1);


echo"<br><br>"."Object Assignment"."<br>";

echo"Creating New instance of the class"."<br>";
$instance = new SimpleClass();
var_dump($instance);


echo "<br><br>"."Assigning it as object and as reference "."<br>";
$assigned   =  $instance;
$reference  =& $instance;

echo"<br>"."Both will have the same value"."<br>";

var_dump($instance)."<br>";
var_dump($reference);

echo"<br><br>"."now assigning a value to instance . assigned and reference will also have the same value"."<br><br>";

$instance->var = '$assigned will have this value even after the original ones value is changed';

//echo"Instance value :".$instance->displayVar()."<br>";
//echo"Assgined value : ".$assigned->displayVar()."<br>";
//echo"Reference value : ".$reference->displayVar()."<br>";

"<br>".var_dump($instance)."<br>";
var_dump($reference)."<br>";
var_dump($assigned)."<br>";


echo"<br><br>".'Now after setting instance value to null , see the change'."<br><br>";

$instance = null; // $instance and $reference become null

var_dump($instance)."<br>";
var_dump($reference)."<br>";
var_dump($assigned)."<br>";