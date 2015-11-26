<?php

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