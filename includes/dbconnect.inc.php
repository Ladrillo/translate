<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=transdb', 'transdbuser', 'admin');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    $output = 'Database connection established!';
}
catch (PDOException $e)
{
    $output = 'Unable to connect to the database server: ' . $e->getMessage();
}