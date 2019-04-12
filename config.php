<?php
session_start();
require_once "vendor/autoload.php";

$gClient = new Google_Client();
$gClient->setClientId('792923760460-h7703ob95h6rcl4gvasplf450o1i9dec.apps.googleusercontent.com');
$gClient->setClientSecret('5XpJqvcLQJw5Mt783KSJqVmI');
$gClient->setRedirectUri('http://localhost/gplus-quickstart-php/callback.php');
$gClient->addScope('https://www.googleapis.com/auth/plus.login');