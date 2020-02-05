<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$db = db();

$cheeses=getAllCheeses($db);

$cheeseHtml = displayACheese($cheeses);


//echo $cheeseHtml in my html code where I want to populate dynamically from db

?>


<html lang="en">
<head>
    <title>The Cheese Collection</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <h1>The Cheese Collection</h1>
        <ul>
            <li><a href="#container">View Collection</li>
            <li><a href="#form">Add a Cheese</li>
        </ul>
    </nav>

    <div class="container">
        <?php echo $cheeseHtml?>

    </div>

</body>
</html>
