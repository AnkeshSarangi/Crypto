<?php
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'C:\xampp\htdocs\cloud-crypto\project-a6-e635d-firebase-adminsdk-pozjj-63a0674a1c.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://project-a6-e635d-default-rtdb.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();
?>
