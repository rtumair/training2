<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/26/16
 * Time: 12:54 PM
 */

ini_set('display_errors',1);


//open connection
$ch = curl_init('http://localhost/apigility/public/student/51');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

//execute post
$result = curl_exec($ch);

var_dump($result);


//close connection
curl_close($ch);