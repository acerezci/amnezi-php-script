<?php
require './vendor/autoload.php';

const DEFAULT_URL = 'https://amnezi-a57aa.firebaseio.com/';
const DEFAULT_TOKEN = 'EXVtuP92GwuahdY9x4Pd4Ldo8vRdGR18m2n34P4F';

print("HELLO");

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

if($_GET){
    $location = $_GET['location'];

    $firebase->push('/location', $location);
}
?>
