<?php

define('SETTINGS_FILE',  'config/settings.ini');

$iniSettings  = parse_ini_file(SETTINGS_FILE, true);
print_r($iniSettings);
$client_email = $iniSettings['client_email'];
$private_key  = file_get_contents($iniSettings['private_key']);
$scopes       = array("https://spreadsheets.google.com/feeds");

$credentials = new Google_Auth_AssertionCredentials(
    $client_email,
    $scopes,
    $private_key
);