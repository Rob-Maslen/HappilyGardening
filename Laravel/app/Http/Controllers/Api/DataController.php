<?php


header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET');
/*
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

$query = mysqli_query($conn, "SELECT O.ObjectId, O.Name, O.City, O.Country, O.Link, O.ImageFolder, O.Latitude, O.Longitude, O.Zoom FROM Object O ORDER BY RAND() LIMIT 3")
  or die (mysqli_error($conn));

$rows = mysqli_fetch_all($query, MYSQLI_NUM);

$query->close();

shuffle($rows);

$data['rightAnswer']     = array_pop($rows);
$data['rightAnswerName'] = $data['rightAnswer'][1];
$data['rightImage']      = rand(1,3);
$data['latitude']        = $data['rightAnswer'][6];
$data['longitude']       = $data['rightAnswer'][7];
$data['zoom']            = $data['rightAnswer'][8];

$answers = array($data['rightAnswer'], array_pop($rows), array_pop($rows));

shuffle($answers);

$data['rightAnswerPosition'] = array_search($data['rightAnswer'][0], array_column($answers, 0)) + 1;

$i = 3;

while (!empty($answers)) {
  $thisAnswer = array_pop($answers);

  $data['answer'][$i] = $thisAnswer[1];

  if($thisAnswer[3] != "")
  {
    $data['answer'][$i] .= ', ' . $thisAnswer[3];
  }
  $i--;
}

$factQuery = mysqli_query($conn, "SELECT FunFact.Fact FROM FunFact WHERE FunFact.ObjectId = '" . $data['rightAnswer'][0] . "'")
  or die (mysqli_error($conn));

$data['fact'] = mysqli_fetch_array($factQuery, MYSQLI_NUM)[0];

$ctaQuery = mysqli_query($conn, "SELECT CallToACtionText FROM CallToAction ORDER BY RAND() LIMIT 1")
  or die (mysqli_error($conn));

$data['ctaText'] = mysqli_fetch_array($ctaQuery, MYSQLI_NUM)[0];



echo json_encode($data);

?>