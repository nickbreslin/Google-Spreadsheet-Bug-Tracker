<?php

define('SETTINGS_FILE',  ROOT_PATH . 'config/settings.ini');

$iniSettings  = parse_ini_file(SETTINGS_FILE, true);

define('KEY_FILE',  ROOT_PATH . $iniSettings['private_key']);

$client_email = $iniSettings['client_email'];
$private_key  = file_get_contents(KEY_FILE);
$scopes       = array("https://spreadsheets.google.com/feeds");

$credentials = new Google_Auth_AssertionCredentials(
    $client_email,
    $scopes,
    $private_key
);