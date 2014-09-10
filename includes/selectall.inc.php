<?php

try
{
    $sql = 'SELECT spanish_sen FROM sentences';
    $result = $pdo->query($sql);
    $output = 'Results fetched.';
}

catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

foreach ($result as $row)
{
    $sentences[] = $row['spanish_sen'];
}