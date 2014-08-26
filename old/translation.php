<?php

$spanish = $_POST['spanish'];
$english_1 = $_POST['english_1'];
$english_2 = $_POST['english_2'];
$hint_1 = $_POST['hint_1'];
$hint_2 = $_POST['hint_2'];

if (empty($spanish) && empty($english_1) && empty($english_2) && empty($hint_1) && empty($hint_2)) {
    echo "You tried to send an empty form";
}


//OPEN CONNECTION AND UTF8 SET:
$dbc = mysqli_connect('localhost', 'root', 'admin', 'transdb')
or die('Error connecting to MySQL server.');
mysqli_set_charset($dbc, 'utf8mb4');


//SQL QUERIES:
$insert_query = "INSERT INTO sentences (spanish_sen, trans_1, trans_2, hint_1, hint_2)
VALUES ('$spanish', '$english_1', '$english_2', '$hint_1', '$hint_2')";
$select_query = "SELECT * FROM sentences";



//QUERIES RESULTS:
//if (empty($_POST['submit']))
$insert_result = mysqli_query($dbc, $insert_query)
or die('Error querying database.');
$select_result = mysqli_query($dbc, $select_query)
or die('Error querying database.');


?>

<h1>Teachers' Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8">
    <label for="spanish">Spanish:</label><br>
    <textarea id="spanish" name="spanish" rows="3" cols="100" maxlength="200"></textarea><br>

    <label for="english 1">Translation 1:</label><br>
    <textarea id="english_1" name="english_1" rows="3" cols="100" maxlength="200"></textarea><br>

    <label for="english 2">Translation 2:</label><br>
    <textarea id="english_2" name="english_2" rows="3" cols="100" maxlength="200"></textarea><br>

    <label for="hint 1">Hint 1:</label><br>
    <textarea id="hint_1" name="hint_1" rows="3" cols="100" maxlength="300"></textarea><br>

    <label for="hint 2">Hint 2:</label><br>
    <textarea id="hint_2" name="hint_2" rows="3" cols="100" maxlength="300"></textarea><br>

    <input type="submit" value="submit">
</form>

<?php


//ROW DISPLAY LOOP:
$row = mysqli_fetch_array($select_query);
while($row = mysqli_fetch_array($select_result)) {
    echo '-------------------'.'<br>'
    .'ORIGIN - '.$row['spanish_sen'].'<br>'
    .'TRAD 1 - '.$row['trans_1'].'<br>'
    .'TRAD 2 - '.$row['trans_2'].'<br>'
    .'HINT 1 - '.$row['hint_1'].'<br>'
    .'HINT 2 - '.$row['hint_2'].'<br>';
}

//CLOSE CONNECTION
mysqli_close($dbc);

echo '-------------------'.'<br>';

?>

