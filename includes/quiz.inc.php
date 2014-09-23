<?php

echo 'aqui esta tu preguntita:';
$limit = 1;

try
{
    $sql = "SELECT spanish_sen FROM sentences LIMIT $limit";
    $result = $pdo->query($sql);
}

catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

foreach ($result as $row)
{
    $sentences[] = array('spanish_sen' => $row['spanish_sen']);
}


