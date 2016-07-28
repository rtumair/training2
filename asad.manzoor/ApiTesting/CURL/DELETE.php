<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/26/16
 * Time: 2:28 PM
 */

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://localhost/apigility/public/student/45');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response  = curl_exec($ch);

curl_close($ch);