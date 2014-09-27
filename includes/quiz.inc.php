<?php

try
{
    $sql = "SELECT id, qtext1, qtext2, answ1 FROM questions";
    $result = $pdo->query($sql);
}

catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

$sentences = array();

foreach ($result as $row) //while ($row = $result->fetch())
{
    $sentences[] = array('id' => $row['id'], 'qtext1' => $row['qtext1'], 'qtext2' => $row['qtext2'], 'answ1' => $row['answ1']);
}

//var_dump($sentences);

$_SESSION['qtext1'] = $sentences[$_SESSION['counter']]['qtext1'];
$_SESSION['qtext2'] = $sentences[$_SESSION['counter']]['qtext2'];
$_SESSION['answ1'] = $sentences[$_SESSION['counter']]['answ1'];

//echo $_SESSION['qtext1'];
//echo $_SESSION['qtext2'];
//echo $_SESSION['answ1'];