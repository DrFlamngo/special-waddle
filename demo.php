<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client("mongodb://localhost:27017");
$companydb = $client->companydb;
$result1 = $companydb->createCollection('empcollection');
var_dump($result1);