<?php
/**
 * Bugcount file
 *
 * @package Bugtracker
 * @author  "Nick Breslin <nickbreslin@gmail.com>"
 */

$client = new Google_Client();
$client->setAssertionCredentials($credentials);
if ($client->getAuth()->isAccessTokenExpired()) {
    $client->getAuth()->refreshTokenWithAssertion();
}


/**
    * Returns a list feed of the specified worksheet.
    * 
    * @param object $client
    * 
    * @return string $accessToken
*/
function getAccessToken($client)  
{
    
    $json = $client->getAccessToken();

    $decoded = json_decode($json);
    $accessToken = $decoded->access_token;

    return $accessToken;
}