<?php

try
{
    $sql = "SELECT qtext1 FROM questions WHERE id=3";
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


