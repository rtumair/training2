<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/26/16
 * Time: 2:06 PM
 */

ini_set('display_errors',1);



$fields = array(

    "student_name"=>"Umer Naveed",
    "dob" => "1993-12-08",
    "father_name" => "Naveed Amjad Sabri",
    "class" => "BBA",
    "address" => "Gulshan",
    "phone_no" => "03244563233",
    "status" => "1"

);


$data_json = json_encode($fields);

//Put code
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/apigility/public/student/50');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result  = curl_exec($ch);


//close connection
curl_close($ch);