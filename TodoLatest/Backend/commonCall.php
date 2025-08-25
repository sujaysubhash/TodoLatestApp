<?php
require 'Operation.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    Operation::loginBkd($email, $password);
}

if(isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['date'])){
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];

    Operation::addTodo($title, $desc, $date);
}


if(isset($_POST['recorId'])) {
    $recId = $_POST['recorId'];

    Operation::removeRecord($recId);
}

if(isset($_POST['logStatus']) && $_POST['logStatus'] == true) {
    Operation::logout();
}


?>