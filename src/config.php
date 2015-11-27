<?php
/**
 * Config File
 *
 * @package Bugtracker
 * @author  "Nick Breslin <nickbreslin@gmail.com>"
 */

$iniSettings  = parse_ini_file(ROOT_PATH . 'config/settings.ini', true);
$client_email = $iniSettings['client_email'];
$private_key  = file_get_contents(ROOT_PATH . $iniSettings['private_key']);
$scopes       = array("https://spreadsheets.google.com/feeds");

$credentials = new Google_Auth_AssertionCredentials(
    $client_email,
    $scopes,
    $private_key
);