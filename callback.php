<?php
include "config.php";
print_r($_GET);
if (isset($_GET['code'])) {
    echo 'Token: '.$token = $gClient->authenticate($_GET['code']);
}