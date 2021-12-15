<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Storage;
$factory = (new Factory)
    ->withServiceAccount('prueba-php-firebase-firebase-adminsdk-i2lf2-d02556573a.json')
    ->withDefaultStorageBucket('gs://prueba-php-firebase.appspot.com')
    ->withDatabaseUri('https://prueba-php-firebase-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>