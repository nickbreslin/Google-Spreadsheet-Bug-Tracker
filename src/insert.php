<?php
/**
 * Bugcount file
 *
 * @package nickbreslin/google-spreadsheet-bug-tracker
 * @author  Nick Breslin (nickbreslin@gmail.com)
 */

function insertLine($worksheet, $file) 
{

    $title           = $worksheet->getTitle();
    $listFeed        = $worksheet->getListFeed();
    $results[$title] = count($listFeed->getEntries());

    return $results;
}

function readFromFile($file) 
{
    // Using the optional flags parameter since PHP 5
    $trimmed = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $trimmed;
}

// ./vendor/bin/phpcs src -p
// ./vendor/bin/phpcbf src -p