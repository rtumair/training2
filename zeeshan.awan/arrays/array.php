<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/12/16
 * Time: 4:44 PM
 */

$array = array("foo", "bar", "hello", "world");

var_dump($array);

$array1 = array(
    "a",
    "b",
    "avd" => "c",
    "d",
);
var_dump($array1);

$array2 = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array2["foo"]);
var_dump($array2[42]);
var_dump($array2["multi"]["dimensional"]["array"]);

$array3 = array(array("b"=>2,'c'=>3), array('d'=>1,'e'=>5),array('f'=>5,'g'=>7));

unset($array3[1][1]);

foreach ($array3 as $temp){
   

    foreach($temp as $temp1=>$value){
        echo $value." ". $temp1;
    }
    echo "\n";
}
echo"\n";
$array3[]= array('g'=>7,'f');

foreach ($array3 as $temp){
    foreach($temp as $temp1 => $value){
        echo $temp1." ";
    }
    echo "\n";
}

$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);

$b = array_values($a);
print_r($a);
print_r($b);

$colors = array('red', 'blue', 'green', 'yellow');
foreach ($colors as &$color) {
    $color = strtoupper($color);
}
print_r($colors);

$single = array("a" => 1, "b" => 2);
$single['c']=3;
print_r($single);

$myarray = array('test',123);
$myarray[] = &$myarray;
print_r($myarray); 
