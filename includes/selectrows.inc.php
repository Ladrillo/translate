<?php

try
{
    $sql = 'SELECT id, qtext1, qtext2, answ1, answ2, hint FROM questions';
    $result = $pdo->query($sql);
}


catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}


while ($row = $result->fetch()) //foreach ($result as $row)
{
    $sentences[] = array('id' => $row['id'], 'qtext1' => $row['qtext1'], 'qtext2' => $row['qtext2'], 'answ1' => $row['answ1'],
        'answ2' => $row['answ2'], 'hint' => $row['hint']);
}

//$output = var_dump($sentences);