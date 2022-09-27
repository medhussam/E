<?php

require_once 'vendor/autoload.php';

// session_start();

// init configuration
$clientID = '721111095697-l3nc4j0s19tgu2tr1njf7bt8mgruqm65.apps.googleusercontent.com';
$clientSecret = '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';

$redirectUri = 'https://dash.abznetwork.net/register.php';
// $redirectUri = 'http://localhost/e/register.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
// $hostname = "localhost";
// $username = "hftcmzpc_admin1";
// $password = "Admin102030..";
// $database = "hftcmzpc_google_auth";

// $conn = mysqli_connect($hostname, $username, $password, $database);
