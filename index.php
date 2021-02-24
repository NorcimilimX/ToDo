<?php
//showing errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
//getting data from database
include_once("./orm.php");
//output view data
include_once("./view.php");

var_dump($_POST);

if (isset($_POST['task_id'])) {
    echo"Post works!";
}
