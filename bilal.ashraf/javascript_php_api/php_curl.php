<?php
ini_set("display_errors",true);

function del_curl()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/api_agility/public/student/27");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
//curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    curl_close($ch);

}

function put_curl()
{
    echo "inside";
    $id = 31;
    $data = array("name" => "altaf hussain", "fathername" => "gunday bazii");
    $data_json = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/api_agility/public/student/31");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    curl_close($ch);

}

function post_curl()
{
    $data = array("name"=> "Aslam", "fathername"=> "kTariz", "dob"=>"2010-12-03", "schoolname"=> "lords", "city"=> "lahore", "destination"=> "usa",
            "status"=> "single");
    $data_json = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/api_agility/public/student" );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    curl_close($ch);
}

function get_curl()
{
    // Get cURL resource
    $curl = curl_init();
// Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost/api_agility/public/student/32',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
// Send the request & save response to $resp
    $resp = curl_exec($curl);
// Close request to clear up some resources
    print_r($resp);
    curl_close($curl);
}


get_curl();



?>