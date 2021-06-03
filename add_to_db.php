<?php

require('functions.php');
$db = getDB();

if (isset($_GET)) {
    $artist = $_GET['artist'];
    $title = $_GET['title'];
    $rating = $_GET['rating'];
    $released = $_GET['released'];
    $condition = $_GET['condition'];
    $sql = 'INSERT INTO `records` (`Artist`, `Title`, `Rating`, `Released`, `Condition`)
    VALUES (:Artist, :Title, :Rating, :Released, :Condition)';
    $statement = $db->prepare($sql);
    $statement->execute([
        ':Artist' => $artist,
        ':Title' => $title,
        ':Rating' => $rating,
        ':Released' => $released,
        ':Condition' => $condition
    ]);
    if ($statement == true) {
        header('Location: index.php');
    }
}
