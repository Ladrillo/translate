<?php

if(trim($_POST['ansub']) == $_SESSION['answ1']) {

    $andtheansweris = 'There you go!';
}

else {

    $andtheansweris = 'Wrong answer!';
}