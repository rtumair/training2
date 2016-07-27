<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/25/16
 * Time: 6:50 PM
 */

ini_set('display_errors',1);



$fields = array(

    "student_name"=>"Farrukh Shahzad",
    "dob" => "1993-12-08",
    "father_name" => "Ijaz",
    "class" => "BSSE",
    "address" => "Gulshan",
    "phone_no" => "03244563233",
    "status" => "1"

);


//open connection
$ch = curl_init('http://localhost/apigility/public/student');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

//execute post
$result = curl_exec($ch);

var_dump($result);


//close connection
curl_close($ch);