<?php

try
{
/*
    $sql = "INSERT INTO sentences (spanish_sen, trans_1, trans_2, hint_1, hint_2)
    VALUES ('$_POST[spanish]','$_POST[english_1]','$_POST[english_2]', '$_POST[hint_1]', '$_POST[hint_2]')"; //general SQL syntax for INSERT, vulnerable


    $sql = "INSERT INTO sentences SET //mySQL syntax for INSERT, vulnerable to SQL injection without prepared statements
        spanish_sen='$_POST[spanish]',
        trans_1='$_POST[english_1]',
        trans_2='$_POST[english_2]',
        hint_1='$_POST[hint_1]',
        hint_2='$_POST[hint_2]'";
    $pdo->exec($sql);
*/

    $sql = "INSERT INTO sentences SET
        spanish_sen=:spanish,
        trans_1=:english_1,
        trans_2=:english_2,
        hint_1=:hint_1,
        hint_2=:hint_2";

    $sqlprep = $pdo->prepare($sql);

    $sqlprep->bindValue(':spanish', $_POST['spanish']);
    $sqlprep->bindValue(':english_1', $_POST['english_1']);
    $sqlprep->bindValue(':english_2', $_POST['english_2']);
    $sqlprep->bindValue(':hint_1', $_POST['hint_1']);
    $sqlprep->bindValue(':hint_2', $_POST['hint_2']);

    $sqlprep->execute();


    $output = 'Question included successfully!';
}
catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

//header('Location: .');