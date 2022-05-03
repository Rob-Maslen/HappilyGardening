<?php

/*
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');
*/

header('Content-Type: application/json');



$dbhost = 'happilygardening.com.mysql';
$dbuser = 'happilygardening_com_happilygardening_com';
$dbpass = 'Happy12345';
$db     = 'happilygardening_com_happilygardening_com';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(! $conn )
{
  echo 'Could not connect:' . $conn->connect_error;
}



$sqlQuery = 'SELECT O.Latitude, O.Longitude, O.Zoom FROM Object O WHERE O.Name = "' . $_GET['gardenName'] . '"';

$query = mysqli_query($conn, $sqlQuery)
  or die (mysqli_error($conn));

$garden = mysqli_fetch_all($query, MYSQLI_NUM);

$data['latitude']  = $garden[0][0];
$data['longitude'] = $garden[0][1];
$data['zoom']      = $garden[0][2];

echo json_encode($data);

?>