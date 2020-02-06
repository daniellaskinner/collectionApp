<?php
require_once 'functions.php';
require_once 'dbConnect.php';

?>

<!DOCTYPE html>
<html lang="en-gb">
<head>
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title>Add to the Cheese Collection</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="formContainer">
        <h1>Add a cheese to the collection!</h1>
        <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="Cheese name" formmethod="POST">
            <input type="text" name="country" placeholder="Country of origin" formmethod="POST">
            <input type="text" name="wine" placeholder="Wine pairing" formmethod="POST">
            <input type="text" name="fact" placeholder="Fun fact" formmethod="POST">
            <button type="submit" name="add">Add to collection</button>
        </form>

        <button class="backToIndex"><a href="index.php" >Back to collection page</button>
    </div>
</body>
</html>


<?php

//grab the data from $post superglobal array


//call the sanitising function- unit test these

//create a db connection

//

//create a function to add to the db params will be data to be added
//bindParam() these bits of data


//boot back to home page using header function