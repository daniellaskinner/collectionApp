<?php
require_once 'functions.php';
require_once 'dbConnect.php';


//if no cheese data go back to index.php
if (!isset($_POST['name'])) {
    header('Location: index.php');
}

//statement to say if user clicks 'add' button in form, then run the insert data function to add to db
if (isset($_POST["add"])) {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $wine = $_POST['wine'];
    $fact = $_POST['fact'];

    //create a db connection
    $db = db();

    //call the insert data function, pass in the user inputs and pdo connection
    insertData($name, $country, $wine, $fact, $db);

    //boot back to homepage when a cheese is input
    header('Location: index.php');
}