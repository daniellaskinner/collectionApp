<?php

/**
 * function to create and return the PDO connection with fetch mode set to return assoc array
 * @return PDO]
 */
function db() {
    $db = new PDO('mysql:host=db; dbname=nelly_cheese_collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


