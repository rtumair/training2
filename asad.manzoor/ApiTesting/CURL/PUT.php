<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/26/16
 * Time: 2:28 PM
 */
$data = array(
    'student_name'=> "awais majeed",
    'dob'=> "1998-08-19",
    'father_name'=> "majeed ahmed",
    'class'=> "bscs",
    'address'=> "Nishat lahore",
    'ph_no'=> "03449529940",
    'status'=>"1"
);



$data_json = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/apigility/public/student/43');

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response  = curl_exec($ch);

curl_close($ch);