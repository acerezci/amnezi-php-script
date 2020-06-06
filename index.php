<?php
require './vendor/autoload.php';

const DEFAULT_URL = 'https://amnezi-a57aa.firebaseio.com/';
const DEFAULT_TOKEN = 'EXVtuP92GwuahdY9x4Pd4Ldo8vRdGR18m2n34P4F';
const DEFAULT_PATH = '/firebase/example';

print("HELLO AQ");

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- storing an array ---
// $test = [
//     'foo' => 'bar',
//     'i_love' => 'lamp',
//     'id' => 42
// ];
$dateTime = new DateTime();
// $firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test);


// --- storing a string ---
// $firebase->push(DEFAULT_PATH . '/name/contact001', 'John Doe');

// --- reading the stored string ---
// $name = $firebase->get(DEFAULT_PATH . '/name/contact001');

if($_POST){
    $lat = $_GET['lat'];

    $firebase->push(DEFAULT_PATH . '/name/erkanyarraki', $lat);
}

?>
