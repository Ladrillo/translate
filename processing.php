<?php

$spanish = $_POST['spanish'];
$english_1 = $_POST['english_1'];
$english_2 = $_POST['english_2'];
$hint_1 = $_POST['hint_1'];
$hint_2 = $_POST['hint_2'];

$dbc = mysqli_connect('localhost', 'root', 'admin', 'transdb')
    or die('Error connecting to MySQL server.');

mysqli_set_charset($dbc, 'utf8mb4');

$query = "INSERT INTO sentences (spanish_sen, trans_1, trans_2, hint_1, hint_2)
VALUES ('$spanish', '$english_1', '$english_2', '$hint_1', '$hint_2')";

$result = mysqli_query($dbc, $query)
    or die('Errorcito querying database.');

$another_query = "SELECT * FROM sentences";

$another_result = mysqli_query($dbc, $another_query)
    or die('Error querying database.');


$row = mysqli_fetch_array($another_result);

while($row = mysqli_fetch_array($another_result)) {
    echo '__________________'.'<br>';
    echo $row['spanish_sen'].' // '.$row['trans_1'].' // '.$row['trans_2'].'<br>'.$row['hint_1'].' // '.$row['hint_2'].'<br>';
}

mysqli_close($dbc);

?>

<a href="http://localhost/translation/teacher_form.php">volver al form</a>


