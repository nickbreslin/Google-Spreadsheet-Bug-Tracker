<?php

define('ROOT_PATH', realpath(dirname(__FILE__)).'/');

require_once 'vendor/autoload.php';
require_once 'src/config.php';
require_once 'src/google.php';
require_once 'src/spreadsheet.php';
require_once 'src/insert.php';

//-----------------------------------------------------------------------------

$entries = readFromFile(ROOT_PATH . $iniSettings['bug_file']);

if(count($entries) == 0) {
	echo "No Entries";
	exit();
}

//-----------------------------------------------------------------------------

$accessToken = getAccessToken($client);
$spreadsheet = getSpreadsheet($accessToken, $iniSettings['sheet_title']);
$worksheetFeed = $spreadsheet->getWorksheets();
$worksheet = $worksheetFeed->getByTitle('Reported Typos');

//-----------------------------------------------------------------------------

$results = insertLine($worksheet, $entries);

echo json_encode($results);
