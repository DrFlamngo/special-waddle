<?php
//This code tests the connection to the built in mongo database on the users PC.
//insert http://localhost/special-waddle/demo.php into your browser one you have completed the install guide

require 'vendor/autoload.php'; 


$client = new MongoDB\Client("mongodb://localhost:27017");
$user = $client->movieusers->user;
$result = $user->find([]);

$data = iterator_to_array($result);
print_r($data);



