<?php
session_start();
include_once 'functions.php';

echo '<h1>Record Collection</h1>';
echo '<br>';

$db = getDB();
$query = $db->prepare('SELECT `Title`, `Rating`, `Released`, `Condition`, `Artist` FROM `records`;');
$query->execute();
$records = $query->fetchALL();

displayRecords($records);

?>

<html lang="en">

<!DOCTYPE html>
<html>
<head><h1>Please insert your new record below.</h1><br></head>
<body>
<form action="add_to_db.php">
    <label>Artist</label>
    <input type="text" name="artist">
    <br><br>
    <label>Title</label>
    <input type="text" name="title">
    <br><br>
    <label>Year of Release</label>
    <input name="released" min="1900" max="2100" type="integer"">
    <br><br>
    <label for="condition">Condition</label>
    <select name="condition">
        <option value="Mint">Mint</option>
        <option value="nearmint">Near Mint</option>
        <option value="vgplus">Very Good Plus</option>
        <option value="vg">Very Good</option>
        <option value="goodplus">Good Plus</option>
        <option value="good">Good</option>
        <option value="fair">Fair</option>
        <option value="generic">Generic</option>
        <option value="poor">Poor</option>
    </select>
    <br><br>
    <label>Rating</label>
    <input type="number" step="0.1" min="0" max="5">
    <br><br>
    <input type="submit" value="Submit">
    <br><br>
</body>
</html>

