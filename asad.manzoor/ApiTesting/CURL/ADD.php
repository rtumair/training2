<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/26/16
 * Time: 2:28 PM
 */

$data = array(
    'student_name'=> "muhammad ahsan",
    'dob'=> "1992-08-19",
    'father_name'=> "muhammad ahmed",
    'class'=> "bsse",
    'address'=> "Multan",
    'ph_no'=> "03449539940",
    'status'=>"1"
);



$data_json = json_encode($data);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/apigility/public/student');

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response  = curl_exec($ch);

curl_close($ch);
