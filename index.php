<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$db = db();

$cheeses=getAllCheeses($db);

$cheeseHtml = displayACheese($cheeses);


?>


<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title>The Cheese Collection</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
    <h1>The Cheese Collection</h1>

    <div class="container">
        <?php echo $cheeseHtml?>

    </div>

</body>
</html>