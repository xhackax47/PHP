<?php
// Les variables
$firstName = $_POST["firstName"];
$email = $_POST["email"];
$message = $_POST["message"];

// Les structures conditionnelles
$age = 32;

if($age > 18) {
    echo "Tu es majeur";
}
else {
    echo "Tu es mineur";
}

// Les boucles
$prenoms = ["Test1", "Test2", "Test3"];

foreach($prenoms as $prenom) {
    echo $prenom;
}

//include('register.html.php');
//include_once('register.html.php');
//require('register.html.php');
require_once('register.html.php');
?>