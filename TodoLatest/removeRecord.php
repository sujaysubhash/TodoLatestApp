<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['todoId'])) {
    $todoId = $_POST['todoId'];
    if(isset($_SESSION['listItems'])) {
        unset($_SESSION['listItems'][$todoId]);

        foreach($_SESSION['listItems'] as $key => $item) {
            echo "<tr id='$key'>";
                echo "<td>".$key."</td>";
                echo "<td>".$item['title']."</td>";
                echo "<td>".$item['description']."</td>";
                echo "<td>".$item['duedate']."</td>";
                echo "<td>";
                echo "<button type='button' onclick='deleteAction($key)'>Delete</button>";
                echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "No array in the session";
    }


}

?>