<?php
/**
 * Bugcount file
 *
 * @category Bugtracker
 * @package  Bugtracker
 * @author   "Nick Breslin <nickbreslin@gmail.com>"
 * @license  [name]
 * @link
 */

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

/**
    * Returns a list feed of the specified worksheet.
    * 
    * @param string $accessToken Google Auth Access Token
    * @param string $sheetTitle  title of spreadsheet
    * 
    * @return object $result
*/
function getSpreadsheet($accessToken, $sheetTitle) 
{
    $serviceRequest = new DefaultServiceRequest($accessToken);
    ServiceRequestFactory::setInstance($serviceRequest);

    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
    $result = $spreadsheetFeed->getByTitle($sheetTitle);

    return $result;
}