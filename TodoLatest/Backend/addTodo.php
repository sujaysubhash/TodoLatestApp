<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $duedate = $_POST['duedate'];
        
        if(!isset($_SESSION['listItems'])){
            $_SESSION['listItems'] = [];
        }

        $_SESSION['listItems'][] = [
            'title' => $title,
            'description' => $description, 
            'duedate' => $duedate
        ];
        
        foreach($_SESSION['listItems'] as $key => $item) {
            echo "<tr id='$key'>";
                echo "<td>".($key+1)."</td>";
                echo "<td>".$item['title']."</td>";
                echo "<td>".$item['description']."</td>";
                echo "<td>".$item['duedate']."</td>";
                echo "<td>";
                echo "<button type='button' onclick='deleteAction($key)'>Delete</button>";
                echo "</td>";
            echo "</tr>";
        }

    }
?>