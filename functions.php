<?php

function getDB(): PDO
{
    $db = new PDO('mysql:host=db; dbname=collectionapp', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function formatRecordsForDisplay(array $record): string
{
    return 'Artist: ' . $record['Artist'] . '<br>' . 'Title:  ' . $record['Title'] . '<br>Rating:  ' .
        $record['Rating'] . '<br>Release Date:  ' . $record['Released'] .
        '<br>Condition:  ' . $record['Condition'] . '<br>' . '<br>';
}

function displayRecords(array $records): string
{
    foreach ($records as $record) {
        echo formatRecordsForDisplay($record);
    }
}