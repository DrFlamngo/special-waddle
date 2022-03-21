<?php
require 'vendor/autoload.php';


// define variables and set to empty values
$input1 = $input2 = $input3 = $input4 = $input5 = $nameinput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input1 = test_input($_POST["input1"]);
  $input2 = test_input($_POST["input2"]);
  $input3  = test_input($_POST["input3"]);
  $input4  = test_input($_POST["input4"]);
  $input5  = test_input($_POST["input5"]);
  $nameinput = test_input($_POST["nameinput"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$client = new MongoDB\Client("mongodb://localhost:27017");
$user = $client->movieusers->user;

$newuser = $user->insertOne(['name' => "$nameinput", 'movies' => ["$input1", "$input2", "$input3", "$input4", "$input5"]]);