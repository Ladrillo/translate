<?php
echo 'what is going on??';

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=inglespa_db', 'inglespa_user', 'admin01');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    $output = 'Database connection established!';
}
catch (PDOException $e)
{
    $output = 'Unable to connect to the database server: ' . $e->getMessage();
}

echo '<br>';
echo $output;
echo '<br>';
include 'templates/header.html.php'; //html navigation to sections


if(isset($_GET['addquestion'])) //this tracks if link with href="?addsentence" is clicked
{
    include 'templates/mainform.php'; //display form
    //exit();
}

if(isset($_GET['showall'])) //this tracks if link with href="?showall" is clicked
{
    include 'includes/selectrows.inc.php'; //this queries the database
    include 'templates/output.html.php'; //were the results form query fetched OK?
    include 'templates/displayrows.html.php'; // this outputs rows to html
}

if(isset($_POST['qtext1'])) //this tracks if intro form has been submitted
{
    include 'includes/insertrow.inc.php'; //insert row into database
    include 'templates/output.html.php'; //Was the form input submitted OK to the database?
    //include 'includes/selectrows.inc.php'; //this queries the database
    //include 'templates/displayrows.html.php'; // this outputs rows to html
}

if(isset($_GET['deletequestion'])) //this tracks if form with ?deletesen has been submitted
{
    include 'includes/deleterow.inc.php'; //this deletes question
    include 'templates/output.html.php'; //was the question deleted OK?
    //include 'includes/selectrows.inc.php'; //this queries the database
    //include 'templates/displayrows.html.php'; // this outputs rows to html
}

if(isset($_GET['quiz'])) //this tracks if link with href="?test" is clicked
{
    include 'includes/quiz.inc.php'; //this retrieves a row to compare with user input
    include 'templates/displayquiz.html.php'; //this has to display questions in succession as per test.inc control
}

if(isset($_POST['polla'])) //this tracks if test form has been submitted
{
    include 'includes/quiz.inc.php'; //this retrieves a row to compare with user input
    include 'includes/processquiz.inc.php'; //this compares user answer with row
    include 'templates/output.html.php';
}