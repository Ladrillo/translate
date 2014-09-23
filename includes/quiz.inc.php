<?php

try
{
    $sql = "SELECT spanish_sen FROM sentences WHERE id=86";
    $result = $pdo->query($sql);
}

catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

$row = $result->fetch();

/*

var_dump($result);
echo '</br>';
echo '</br>';
var_dump($row);
echo '</br>';
echo '</br>';
echo $row["spanish_sen"];


