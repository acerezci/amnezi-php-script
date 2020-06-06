<?php
require './vendor/autoload.php';

const DEFAULT_URL = 'https://amnezi-a57aa.firebaseio.com/';
const DEFAULT_TOKEN = 'EXVtuP92GwuahdY9x4Pd4Ldo8vRdGR18m2n34P4F';
const DEFAULT_PATH = '/firebase/example';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$dateTime = new DateTime();

print("HELLO");

if($_GET){
    $lat = $_GET['lat'];

    $firebase->push(DEFAULT_PATH . '/location/lat'. $lat);
}

?>
