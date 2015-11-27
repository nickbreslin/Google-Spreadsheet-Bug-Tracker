<?php
/**
 * Bugcount File
 *
 * TODO - Migrate into Class
 *
 * @package nickbreslin/google-spreadsheet-bug-tracker
 * @author  Nick Breslin (nickbreslin@gmail.com)
 */


/**
    * Returns a list feed of the specified worksheet.
    * 
    * @param object $WorksheetFeed Worksheet object
    * 
    * @return array $results associative array
*/
function doBugCount($worksheetFeed)  
{

    $results = [];

    foreach($worksheetFeed as $worksheet) {
        $title           = $worksheet->getTitle();
        $listFeed        = $worksheet->getListFeed();
        $results[$title] = count($listFeed->getEntries());
    }

    return $results;
}