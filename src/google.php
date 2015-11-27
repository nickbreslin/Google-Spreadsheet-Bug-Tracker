<?php
/**
 * Bugcount file
 *
 * @package nickbreslin/google-spreadsheet-bug-tracker
 * @author  Nick Breslin (nickbreslin@gmail.com)
 */

$client = new Google_Client();
$client->setAssertionCredentials($credentials);
if ($client->getAuth()->isAccessTokenExpired()) {
    $client->getAuth()->refreshTokenWithAssertion();
}



function getAccessToken($client)  
{
    
    $json = $client->getAccessToken();

    $decoded = json_decode($json);
    $accessToken = $decoded->access_token;

    return $accessToken;
}