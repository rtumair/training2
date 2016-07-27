<?php
/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/25/16
 * Time: 6:24 PM
 */

ini_set('display_errors',1);

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://localhost/apigility/public/student");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
        $data = json_decode($output, TRUE);

        foreach($data['_embedded']['student'] as $key => $value)
        {
            echo $value['student_name'];
            echo $value['dob'];
            echo "</br>";
        }


        // close curl resource to free up system resources
        curl_close($ch);


?>