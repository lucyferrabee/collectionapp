<?php

echo '<h1>Record Collection</h1>';
echo '<br>';
echo '<br>';
echo '<br>';


$db = new PDO('mysql:host=db; dbname=collectionapp', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `Title`, `Rating`, `Released`, `Condition` FROM `records`;');
$query->execute();

$records = $query->fetchALL();

var_dump($records);

?>