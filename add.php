<?php
require_once 'functions.php';
require_once 'dbConnect.php';


//if no cheese data go back to index.php
if (!isset($_POST['name'])) {
    header('Location: index.php');
}

//statement to say if user clicks 'add' button in form, then run the insert data function to add to db
if (isset ($_POST["add"])) {
    $name = checkInputStrLength(sanitiseSpecialChars($_POST['name']));
    $country = checkInputStrLength(sanitiseSpecialChars($_POST['country']));
    $wine = checkInputStrLength(sanitiseSpecialChars($_POST['wine']));
    $fact = checkInputStrLength(sanitiseSpecialChars($_POST['fact']));

    //create a db connection
    $db = db();

    //call the insert data function, pass in the user inputs and pdo connection
    insertData($name, $country, $wine, $fact, $db);

    //boot back to homepage when a cheese is input
    header('Location: index.php');
}