<?php

////Indexed arrays without key
$array = array("foo", "bar", "hello", "world");
var_dump($array);

////Keys not on all elements
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);

//// Accessing array elements
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);


////Creating/modifying with square bracket syntax 
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;  

$arr["x"] = 42;
 
var_dump($arr);
                
unset($arr[5]); 

var_dump($arr);
unset($arr);

