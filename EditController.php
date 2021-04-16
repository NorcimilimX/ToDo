<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('pdo.php');


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    var_dump($_POST);
    if ($_POST['title'] != '' && $_POST['index_number'] != '') {
        editTask($_POST['taskId'], $_POST['title'],$_POST['description'], $_POST['index_number']);

        header("Location: /");
        exit();

    }else{
        header("Location: /View/editView.php");
        exit();
    }
}

if (isset($_GET['taskId'])) {
    $taskId= $_GET['taskId'];
    $checkpoint = getTaskById($taskId);
    include_once('./View/editView.php');
//    echo '<pre>';
//    print_r($checkpoint);
}else{
    header('Location: /IndexController.php');
    exit();
}



