<?php

try
{
    $sql = 'SELECT id, spanish_sen, trans_1, trans_2, hint_1, hint_2 FROM sentences';
    $result = $pdo->query($sql);
    //$output = var_dump($result);
}

catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

foreach ($result as $row)
{
    $sentences[] = array('id' => $row['id'], 'spanish_sen' => $row['spanish_sen'], 'trans_1' => $row['trans_1'], 'trans_2' => $row['trans_2'],
    'hint_1' => $row['hint_1'], 'hint_2' => $row['hint_2']);
    //$output = var_dump($sentences);
}