<?php
require 'functions.php';

echo '<h1>Record Collection</h1>';
echo '<br>';
echo '<br>';

$db = getDB();
$query = $db->prepare('SELECT `Title`, `Rating`, `Released`, `Condition`, `Artist` FROM `records`;');
$query->execute();
$records = $query->fetchALL();

displayRecords($records);

