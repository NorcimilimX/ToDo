<?php
//getting data from database
include_once("./pdo.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'delete') {
        deleteTask($_POST['task_id']);
    }
    if ($_POST['action'] === 'update'){
        updateTask($_POST['task_id']);
    }
}

//output view data
$checkpoints = getAllTasks();

include_once("./View/indexView.php");
