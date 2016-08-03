

<?php
/*

// getting data

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/users");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

//echo $output;
var_dump(json_decode($output, true));
// close curl resource to free up system resources
curl_close($ch);
*/

/*
//posting data

$ch = curl_init( "http://localhost:8888/users" );
# Setup request to send json via POST.
$payload = json_encode( array("name"=>"qqqqq","pswd"=>"zzzzzzzzz") );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";

*/


/*
// Updating data
$data = array('name'=>'dg','pswd'=>'tall');
$data_json = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/users/48");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);
*/

/*
// Deleting data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/users/48");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
//curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);
*/

?>

<h2>javascript</h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="script.js"></script>

