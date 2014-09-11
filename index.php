<?php

include 'templates/header.html.php'; //html navigation to sections

include 'includes/dbconnect.inc.php'; //connection to the database
include 'templates/output.html.php'; //was connection to database established correctly?

if (isset($_GET['addsentence'])) //this tracks if link with href="?addsentence" is clicked
{
    include 'templates/formquestion.php'; //display form
    exit();
}

//if ((isset($_GET['showall'])) || $fuckme = 1)//this tracks if link with href="?showall" is clicked
if (isset($_GET['showall']))
{
    include 'includes/selectquestions.inc.php'; //this queries the database
    include 'templates/output.html.php'; //were the results form query fetched OK?
    include 'templates/displayquestions.html.php'; // this outputs rows to html
    exit();
}

if (isset($_POST['spanish'])) //this tracks if intro form has been submitted
{
    include 'includes/insertquestion.inc.php'; //display html form
    include 'templates/output.html.php'; //Was the form input submitted OK to the database?
}

if (isset($_GET['deletesen'])) //this tracks if form with ?deletesen has been submitted
{
    include 'includes/deletequestion.inc.php';
}




/*
header('Location: .');
exit();
//this code will redirect us back to the controller from any template or include
 */