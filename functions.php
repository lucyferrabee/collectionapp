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
            return 'Invalid information!';
        }
    }
    return $result;
}

