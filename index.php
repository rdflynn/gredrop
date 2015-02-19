<?php

# Include the Dropbox SDK libraries
require_once "dropbox-sdk-php-1.1.4/lib/Dropbox/autoload.php";
require_once "dropbox-sdk-php-1.1.4/lib/Dropbox/WebAuth.php";

use \Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJsonFile("secret.json");
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");

$authorizeUrl = $webAuth->start();

//echo "1. Go to: " . $authorizeUrl . "\n";
//echo "2. Click \"Allow\" (you might have to log in first).\n";
//echo "3. Copy the authorization code.\n";
$authCode = "2b5bUeryqxAAAAAAAADgDczK9wwZK6XV4_Bx65ZB97Q";

list($accessToken) = $webauth->finish($authCode);
print "Access Token: " . $accessToken . "\n";

?>