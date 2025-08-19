<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['todoId'])) {
    $todoId = $_POST['todoId'];
    if(isset($_SESSION['listItems'])) {
        unset($_SESSION['listItems'][$todoId]);
    } 
}

?>