<?php
session_start();
require_once "vendor/autoload.php";

$gClient = new Google_Client();
$gClient->setClientId('YOUR_CLIENT_ID');
$gClient->setClientSecret('YOUR_CLIENT_SECRET');
$gClient->setRedirectUri('http://localhost/gplus-quickstart-php/callback.php');
$gClient->addScope('https://www.googleapis.com/auth/plus.login');