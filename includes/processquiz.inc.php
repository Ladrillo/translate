<?php
/*
echo $_POST['polla'];
echo '</br>';
echo $row["spanish_sen"];
*/


if($_POST['polla'] == $row["spanish_sen"]) {

    $andtheansweris = 'There you go!';
}

else {

    $andtheansweris = 'Wrong answer!';
}

