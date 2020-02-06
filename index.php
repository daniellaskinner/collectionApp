<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$db = db();

$cheeses = getAllCheeses($db);

$cheeseHtml = displayAllCheeses($cheeses);

//if no cheese data go back to index.php
if(!isset($_POST['name'])) {
    header('index.php');
}

//statement to say if user clicks 'add' button in form, then run the insert data function to add to db
if (isset($_POST["add"])) {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $wine = $_POST['wine'];
    $fact = $_POST['fact'];

    //call the insert data function, pass in the user inputs and pdo connection
    insertData($name, $country, $wine, $fact, $db);
}


//USE WHEN CREATED VALIDATION FUNCTION
//if (isset($_POST["add"])) {
//    $name = validate($_POST['name']);
//    $country = validate($_POST['country']);
//    $wine = validate($_POST['wine']);
//    $fact = validate($_POST['fact']);
//    insertData($name, $country, $wine, $fact, $db);
//}

?>

<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title>The Cheese Collection</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <nav>
        <h1>The Cheese Collection</h1>
        <ul>
            <li><a href="#collection_items">Jump to top</li>
            <li><a href="form.php">Add a Cheese</li>
        </ul>
    </nav>

    <div id="collection_items" class="jumpTop"></div>

    <div class="container">
        <?php echo $cheeseHtml?>
    </div>

</body>
</html>