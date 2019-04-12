<?php
include "config.php";

$authUrl = $gClient->createAuthUrl();
?>
<a href="<?php echo $authUrl ?>">Login</a>
