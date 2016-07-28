

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/27/16
 * Time: 5:43 PM
 */
function get()
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL, 'http://localhost/apigility/public/student');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $output=curl_exec($ch);

    curl_close($ch);
    return $output;
}

function post($params)
{

    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL, "http://localhost/apigility/public/student");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, count($params));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

    $output=curl_exec($ch);

    curl_close($ch);
    return $output;
}

function put($id, $data)
{

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/apigility/public/student/". $id);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data)));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    return $response;
}

function delete($id)
{
    $curl = curl_init("http://localhost/apigility/public/student/". $id);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $output=curl_exec($curl);

    curl_close($curl);
    return $output;
}

if (isset($_GET['get']))
{
    echo get();
} else if (isset($_GET['post']))
{
    $params = [
        'name' => 'Mariam',
        'email' => 'Mariam@gmail.com'
    ];
    echo post($params);
} else if (isset($_GET['put']))
{
    $id = 7;
    $params = array ('name' => 'Mariam',
        'email' => 'Mariam@gmail.com');
    $data_json = json_encode($params);

    echo put($id, $data_json);
} else if (isset($_GET['delete']))
{
    $id = 4;
    echo delete($id);
}