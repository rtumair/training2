<?php
//mixed data type
$array = array(
    "asad" => "asad",
    "ali" => "ali",
    10   => -10,
    -500  => 500,
);
var_dump($array);

//indexed array
$array = array("foo", "bar", "hello", "world");
var_dump($array);

//with or without index
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);
