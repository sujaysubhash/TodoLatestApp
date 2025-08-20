<?php

if(isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['date'])){
    require_once 'Operation.php';
    Operation::addTodo();
}

?>

