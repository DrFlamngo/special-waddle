<?php
//This code tests the connection to the built in mongo database on the users PC.
//insert http://localhost/special-waddle/demo.php into your browser one you have completed the install guide

require 'vendor/autoload.php'; 


$client = new MongoDB\Client(
    'mongodb+srv://admin:specialwaddle@cluster0.twet7.mongodb.net/movieuser?retryWrites=true&w=majority');
$user = $client->movieuser->user;
$result = $user->find([]);

$data = iterator_to_array($result);
print_r($data);



