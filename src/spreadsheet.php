<?php
/**
 * Bugcount file
 *
 * @package nickbreslin/google-spreadsheet-bug-tracker
 * @author  Nick Breslin (nickbreslin@gmail.com)
 */

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;


function getSpreadsheet($accessToken, $sheetTitle) 
{
    $serviceRequest = new DefaultServiceRequest($accessToken);
    ServiceRequestFactory::setInstance($serviceRequest);

    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
    $spreadsheetFeed = $spreadsheetService->getSpreadsheets();
    $result = $spreadsheetFeed->getByTitle($sheetTitle);

    return $result;
}