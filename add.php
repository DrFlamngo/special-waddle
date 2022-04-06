<?php
require 'vendor/autoload.php';


// This function clean's the string form data of extra space, tab,
// newline, backslashes, and prevents script injection with htmlspecialchars.
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



serverApi = new ServerApi(ServerApi::V1);
$client = new MongoDB\Client(
    'mongodb+srv://admin:specialwaddle@cluster0.twet7.mongodb.net/movieusers?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
$user = $client->movieusers->user;

$newuser = $user->insertOne(['name' => "$nameinput", 'movies' => ["$input1", "$input2", "$input3", "$input4", "$input5"]]);
