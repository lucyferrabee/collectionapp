<?php
include_once 'functions.php';
?>

<html lang="en">
<!DOCTYPE html>
<html>
    <head>
        <link href="normalize.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <div class="heading"></div><h1>Martin's Record Collection</h1></div>
        <?php
        $db = getDB();
        echo display(extractFromDB($db));?>
    <div class="container">
    <h3>Want to add to your collection? Insert your new record below.</h3><br></head>
<body>
<form action="add_to_db.php">
    <label>Artist</label>
    <input type="text" name="artist">
    <br><br>
    <label>Title</label>
    <input type="text" name="title">
    <br><br>
    <label>Year of Release</label>
    <input name="released" min="1900" max="2100" type="number" step="1">
    <br><br>
    <label for="condition">Condition</label>
    <select name="condition">
        <option value="Mint">Mint</option>
        <option value="Near Mint">Near Mint</option>
        <option value="Very Good Plus">Very Good Plus</option>
        <option value="vg">Very Good</option>
        <option value="Good Plus">Good Plus</option>
        <option value="Good">Good</option>
        <option value="Fair">Fair</option>
        <option value="Generic">Generic</option>
        <option value="Poor">Poor</option>
    </select>
    <br><br>
    <label>Rating</label>
    <input name="rating" type="number" step="0.1" min="0" max="5">
    <br><br>
    <input type="submit" value="Submit">
    <br><br>
</div>
</body>
</html>