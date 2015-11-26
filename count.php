<?php

define('ROOT_PATH', realpath(dirname(__FILE__)).'/');

require_once 'vendor/autoload.php';
require_once 'src/config.php';
require_once 'src/google.php';
require_once 'src/spreadsheet.php';
require_once 'src/bugcount.php';

$accessToken = getAccessToken($client);
$spreadsheet = getSpreadsheet($accessToken, $iniSettings['sheet_title']);
$worksheetFeed = $spreadsheet->getWorksheets();


$results = doBugCount($worksheetFeed);

echo json_encode($results);
