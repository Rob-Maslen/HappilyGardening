<!-- Created by Rob Maslen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Global Garden Guessing Game</title>
    <meta name="description" content="Quiz game of identifying photos of famous gardens from all around the world.">
    <meta name="keywords" content="happy, garden, gardening, photo, image, identification, quiz, game, global, guess, famous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
</head>
<body class="body">

<p>Here's a list of all the gardens on this website along with links to learn more about them:</p>

<?php

$dbhost = 'happilygardening.com.mysql';
$dbuser = 'happilygardening_com_happilygardening_com';
$dbpass = 'Happy12345';
$db     = 'happilygardening_com_happilygardening_com';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(! $conn )
{
  echo 'Could not connect:' . $conn->connect_error;
}

$query = mysqli_query($conn, "SELECT O.Name, O.Country, O.Link FROM Object O ORDER BY O.Name")
  or die (mysqli_error($conn));

$gardens = mysqli_fetch_all($query, MYSQLI_NUM);

$query->close();

foreach($gardens as $garden) {
  echo "<p>" . $garden[0] . ", " . $garden[1] . " => <a href='" . $garden[2] . "'>" . $garden[2] . "</a></p>\n";
}

?>

</body>
</html>
