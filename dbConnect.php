<?php

//create PDO connection
$db = new PDO('mysql:host=db; dbname=cheese', 'root', 'password');

//set fetch mode

//prepare our statement to be run against the db
$query = $db->prepare("SELECT `id`, `name`, `countryoforigin`, `winepairing`, `funfact`, `imgurl` FROM `cheese`;");
//run our query against the db
$query->execute();
//grab the results out of the query variable
$result = $query->fetch();
//dump them on the page
var_dump($result);

//get all cheeses (array)


//display cheese items from array