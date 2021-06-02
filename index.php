<?php

echo '<h1>Record Collection</h1>';
echo '<br>';
echo '<br>';

function getDB(): PDO {
    $db = new PDO('mysql:host=db; dbname=collectionapp', 'root', 'password');

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

$db = getDB();
$query = $db->prepare('SELECT `Title`, `Rating`, `Released`, `Condition`, `Artist` FROM `records`;');
$query->execute();

$records = $query->fetchALL();

function displayRecords(): array {
    global $records;
    foreach($records as $record) {
        echo 'Artist: ' . $record['Artist'] . '<br>' . 'Title:  ' . $record['Title'] . '<br>Rating:  ' . $record['Rating'] . '<br>Release Date:  ' . $record['Released'] .
            '<br>Condition:  ' . $record['Condition'] . '<br>' . '<br>';
    }
    return $records;
}

displayRecords();

