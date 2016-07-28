<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/26/16
 * Time: 2:28 PM
 */
function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$returned_content = get_data('http://localhost/apigility/public/student');

var_dump($returned_content);
//$data = json_decode($returned_content);
//
//$mydata = $data._embedded.student;
//
//foreach ($mydata as $key => $value)
//{
//    echo $value["student_name"];
//    console.log($value);
//}