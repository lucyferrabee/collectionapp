<?php

function getDB(): PDO
{
    $db = new PDO('mysql:host=db; dbname=collectionapp', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function extractFromDB(PDO $db): array
{
    $query = $db->prepare('SELECT `Title`, `Rating`, `Released`, `Condition`, `Artist` FROM `records`;');
    $query->execute();
    $records = $query->fetchALL();
    return $records;
}

function display(array $array): string
{
    $result = '';
    foreach ($array as $display) {
        if (is_Array($display)) {
            $result .= '<div class="records"><h2>' . $display['Artist'] . ' - ' . $display['Title'] . '</h2>';
            $result .= '<p>' . 'Rating: ' . $display['Rating'] . '</p>';
            $result .= '<p>' . 'Release date: ' . $display['Released'] . '</p>';
            $result .= '<p>' . 'Condition: ' . $display['Condition'] . '</p><br>';
            $result .= '<br><br><br><br></div>';

        } else {
            return 'Something went wrong';
        }
    }
    return $result;
}
function applyToDB()
{
    $db = getDB();
    if (!empty($_GET['artist']) && !empty($_GET['title']) && !empty($_GET['rating']) && !empty($_GET['released'])
        && !empty($_GET['condition']) && $_GET['rating'] >= 0 & $_GET['rating'] <= 5) {
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
}
