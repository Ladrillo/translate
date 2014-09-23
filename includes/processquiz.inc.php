<?php

$process = 'I am the file which processes your test';

$limit = 1;

$sql = "SELECT spanish_sen FROM sentences LIMIT $limit";

if($_POST['polla'] == 'aa') {

    echo 'There you go!';
}

else {

    echo 'Wrong answer!';
}

