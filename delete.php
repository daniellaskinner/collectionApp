<?php

require_once 'dbConnect.php';
require_once 'functions.php';

session_start();

//if delete pressed, call delete function and return to index.php
if(isset($_POST['delete-cheese'])) {

    $cheeseId = $_POST['id'];

    //if any of the default cheeses (id = 1 - 5) do not delete them
    $error_message_delete = '';

    if($cheeseId > 0 && $cheeseId <= 5) {
        $error_message_delete .= 'The first 5 cheeses are examples and cannot be deleted, please select another to delete. <br>';
    }

    if ($error_message_delete != '') {
        if (isset($_SESSION)) {
            $_SESSION['error_message_delete'] = $error_message_delete;
        }
        header('Location: index.php');
        exit;
    }

    $db = db();

    deleteCheese($cheeseId, $db);

    header('Location: index.php');

}