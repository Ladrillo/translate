<?php

include 'templates/header.html.php'; // html navigation to sections
include 'includes/dbconnect.inc.php'; //connection to the database
include 'templates/output.html.php'; //displays success, or failure & error

if (isset($_GET['addsentence']))
{
    include 'templates/introform.html.php';
    include 'templates/output.html.php';
    exit();
}

if (isset($_GET['showall']))
{
    include 'includes/selectall.inc.php';
    include 'templates/output.html.php';
    include 'templates/sentences.html.php';
    exit();
}

if (isset($_REQUEST['spanish']))
{
    include 'includes/insertsentence.inc.php';
    include 'templates/output.html.php';
}


