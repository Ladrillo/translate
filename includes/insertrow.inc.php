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

    $sql = "INSERT INTO questions SET
        qtext1=:qtext1,
        qtext2=:qtext2,
        answ1=:answ1,
        answ2=:answ2,
        hint=:hint";

    $sqlprep = $pdo->prepare($sql);

    $sqlprep->bindValue(':qtext1', $_POST['qtext1']);
    $sqlprep->bindValue(':qtext2', $_POST['qtext2']);
    $sqlprep->bindValue(':answ1', $_POST['answ1']);
    $sqlprep->bindValue(':answ2', $_POST['answ2']);
    $sqlprep->bindValue(':hint', $_POST['hint']);

    $sqlprep->execute();


    $output = 'Question included successfully!';
}
catch (PDOException $e)
{
    $output = 'Error fetching results: ' . $e->getMessage();
}

//header('Location: .');