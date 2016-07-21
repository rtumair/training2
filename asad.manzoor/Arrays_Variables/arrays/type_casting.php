<?php

//simple array
$array1 = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array1);

//Type Casting
$array2 = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array2);
