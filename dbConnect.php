<?php

//put this in my .gitignore

//function to create PDO connection with fetch mode set- returns the PDO connection

function db() {
    $db = new PDO('mysql:host=db; dbname=cheese', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


