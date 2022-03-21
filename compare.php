<?php
require 'vendor/autoload.php';


// define variables and set to empty values
$movie1 = $movie2 = $movie3 = $movie4 = $movie5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $movie1 = test_input($_POST["movie1"]);
  $movie2 = test_input($_POST["movie2"]);
  $movie3  = test_input($_POST["movie3"]);
  $movie4  = test_input($_POST["movie4"]);
  $movie5  = test_input($_POST["movie5"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$client = new MongoDB\Client("mongodb://localhost:27017");
$user = $client->movieusers->user;
$result = $user->find(['movies' => ['$in' => ["$movie1", "$movie2", "$movie3", "$movie4", "$movie5"]]]);

$data = iterator_to_array($result);

$decode = json_encode($data);

$encode = json_decode($decode, true);

print_r($encode);




