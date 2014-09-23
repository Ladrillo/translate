<?php

try
{
    $sql = 'DELETE FROM sentences WHERE id = :id';
    $sqlprep = $pdo->prepare($sql);
    $sqlprep->bindValue(':id', $_POST['id']);
    $sqlprep->execute();
    $output = 'Question deleted successfully!';
}
catch (PDOException $e)
{
    $output = 'Error deleting question: ' . $e->getMessage();
}

