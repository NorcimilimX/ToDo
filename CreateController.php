<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('pdo.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['title'] != '' && $_POST['index_number'] != '') {
        createTask($_POST['title'],$_POST['description'], $_POST['index_number']);
        header("Location: /");
        exit();

    }else{
        header("Location: /CreateController.php");
        exit();
    }
}


include_once('./View/createView.php');
