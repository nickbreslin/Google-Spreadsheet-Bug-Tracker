<?php
/**
 * Bugcount file
 *
 * @package Bugtracker
 * @author  "Nick Breslin <nickbreslin@gmail.com>"
 */

/**
 * Returns a list feed of the specified worksheet.
 * 
 * @param object $worksheet Google Auth Access Token.
 * @param string $entries  title of spreadsheet.
 * 
 * @return array $results
 */
function insertLine($worksheet, $entries) 
{
	$cellFeed = $worksheet->getCellFeed();
    $cellFeed->editCell(1,1, "entries");

    $listFeed = $worksheet->getListFeed();

    foreach($entries as $entry) {
		$row = array("entries"=>$entry);
		$listFeed->insert($row);
	}

    return true;
}

/**
 * Returns a list feed of the specified worksheet.
 * 
 * @param string $file  title of spreadsheet
 * 
 * @return array $trimmed
 */
function readFromFile($file) 
{
    // Using the optional flags parameter since PHP 5
    $trimmed = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $trimmed;
}

// ./vendor/bin/phpcs src -p
// ./vendor/bin/phpcbf src -p