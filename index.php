<?php

$spanish = $_REQUEST['spanish'];
$english_1 = $_REQUEST['english_1'];
$english_2 = $_REQUEST['english_2'];
$hint_1 = $_REQUEST['hint_1'];
$hint_2 = $_REQUEST['hint_2'];

echo "You just entered: " .
htmlspecialchars($spanish, ENT_QUOTES, 'UTF-8') . " " .
htmlspecialchars($english_1, ENT_QUOTES, 'UTF-8') . " " .
htmlspecialchars($english_2, ENT_QUOTES, 'UTF-8') . " " .
htmlspecialchars($hint_1, ENT_QUOTES, 'UTF-8') . " " .
htmlspecialchars($hint_2, ENT_QUOTES, 'UTF-8') . ".";