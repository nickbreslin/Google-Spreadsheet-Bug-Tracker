<?php

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