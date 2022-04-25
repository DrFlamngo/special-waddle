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
// standard input validation function.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// code below connects to Mongo Atlas and inserts the input into the database.
$client = new MongoDB\Client(
    'mongodb+srv://admin:specialwaddle@cluster0.twet7.mongodb.net/movieuser?retryWrites=true&w=majority');
$user = $client->movieuser->user;

$newuser = $user->insertOne(['name' => "$nameinput", 'movies' => ["$input1", "$input2", "$input3", "$input4", "$input5"]]);
header('location: index.html');