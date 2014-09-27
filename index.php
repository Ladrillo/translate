<?php


//phpinfo();
include 'templates/header.html.php'; //html navigation to sections
include 'includes/dbconnect.inc.php'; //connection to the database
//include 'templates/output.html.php'; //was connection to database established correctly?


if(isset($_GET['addquestion'])) //this checks if link with href="?addsentence" is clicked
{
    include 'templates/mainform.php'; //display form
}


if(isset($_GET['showall'])) //this tracks if link with href="?showall" is clicked
{
    include 'includes/selectrows.inc.php'; //this selects all rows from database
    //include 'templates/output.html.php'; //were the rows fetched OK?
    include 'templates/displayrows.html.php'; // this outputs rows to html
}


if(isset($_POST['qtext1'])) //this tracks if intro form has been submitted
{
    include 'includes/insertrow.inc.php'; //insert row into database
    include 'templates/output.html.php'; //Was row inserted successfully?
}


if(isset($_GET['deletequestion'])) //this tracks if form with ?deletesen has been submitted
{
    include 'includes/deleterow.inc.php'; //this deletes question
    include 'templates/output.html.php'; //was the question deleted OK?
    include 'includes/selectrows.inc.php'; //this queries the database
    include 'templates/displayrows.html.php'; // this outputs rows to html
}


if(isset($_GET['quiz'])) //this tracks if link with href="?test" is clicked
{
    session_start(); //Some variables need to stick
    $_SESSION['counter'] = 0; //Initialize the counter
    include 'includes/quiz.inc.php'; //this selects all questions and puts relevant fields in an array
    include 'templates/displayquiz.html.php'; //displays one question, counter controls which
    //echo $_SESSION['contador'];
}


if(isset($_POST['ansub'])) //this tracks if quiz form has been submitted with
{
    session_start(); //Some variables need to be retrieved
    include 'includes/processquiz.inc.php'; //this compares user answer with row
    include 'templates/feedback.html.php'; //this outputs result
    $_SESSION['counter']++;
    include 'includes/quiz.inc.php'; //this selects all questions and puts relevant fields in an array
    include 'templates/displayquiz.html.php'; //displays next question in the array
    //echo $_SESSION['counter'];
}


/*
header('Location: .');
header("Location: http://www.google.com");
exit();
//this code will redirect us back to the controller from any template or include
 */