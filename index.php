<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$db = db();

$cheeses = getAllCheeses($db);

$cheeseHtml = displayAllCheeses($cheeses);

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
            <li><a href="form.html">Add a Cheese</li>
        </ul>
    </nav>

    <div id="collection_items" class="jumpTop"></div>

    <div class="container">
        <?php echo $cheeseHtml?>
    </div>
</body>
</html>