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
 * @param object $worksheet Google Auth Access Token
 * @param string $file  title of spreadsheet
 * 
 * @return array $results
 */
function insertLine($worksheet, $file) 
{

    $title           = $worksheet->getTitle();
    $listFeed        = $worksheet->getListFeed();
    $results[$title] = count($listFeed->getEntries());

    return $results;
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