<?php
require 'vendor/autoload.php'; 


$client = new MongoDB\Client("mongodb://localhost:27017");
$user = $client->movieusers->user;
$result = $user->find(['movies' => ['$in' => ["The Matrix", "Inception", "Jaws", "Home Alone", "Tenet"]]]);

$data = iterator_to_array($result);
print_r($data);
