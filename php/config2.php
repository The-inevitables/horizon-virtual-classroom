<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('187139219005-jqpj4ath81su698qmj06st2mtbb3e3r8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('TymhxltAjBEelEHZO6GzgFh-');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://horizon.herokuapp.com/dashboard/teacher.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>