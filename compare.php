<?php 
session_start();
require 'vendor/autoload.php';


// This function clean's the string form data of extra space, tab,
// newline, backslashes, and prevents script injection with htmlspecialchars.
$movie1 = $movie2 = $movie3 = $movie4 = $movie5 = "";

if (isset(($_POST['test'])){
  $movie1 = "The Matrix";
  $movie2 = "Inception";
  $movie3 = "Jaws";
  $movie4 = "Home Alone";
  $movie5 = "Tenet";
}else{



  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie1 = test_input($_POST["movie1"]);
    $movie2 = test_input($_POST["movie2"]);
    $movie3  = test_input($_POST["movie3"]);
    $movie4  = test_input($_POST["movie4"]);
    $movie5  = test_input($_POST["movie5"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Client connects to the Client class in Client.php at vender/mongodb/src/
//MongoDB is the namespace within Client.php.
$client = new MongoDB\Client("mongodb://localhost:27017");

//$user is searching mongodb for a db called movieuser and a document called user. 
$user = $client->movieusers->user;

//$result returns a set arrays that meet the requirement of the $in search function.
$result = $user->find(['movies' => ['$in' => ["$movie1", "$movie2", "$movie3", "$movie4", "$movie5"]]]);

//iterator_to_array takes all of the arrays from $results and makes them a multidimensional array.
$data = iterator_to_array($result);

// The multidimensional is in Binary Json format. json_encode converts it into a Json object.
$decode = json_encode($data);

// json_decode converts the Json object into a usable array.
$encode = json_decode($decode, true);


$_SESSION['encode'] = $encode;

header('location: matches.php');


