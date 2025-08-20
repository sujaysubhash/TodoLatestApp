<?php
    session_start();

    class Operation {
        public static function addTodo() {
            if(isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['date'])) {

                $title = $_POST['title'];
                $description = $_POST['desc'];
                $duedate = $_POST['date'];
                
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
                        echo "<button type='button' class='dlt-btn' id='$todoId'>Delete</button>";
                        echo "</td>";
                    echo "</tr>";
                }
            }
        }

        public static function removeRecord() {
            if(isset($_POST['recordId'])) {
                $todoId = $_POST['recordId'];
                if(isset($_SESSION['listItems'])) {
                    unset($_SESSION['listItems'][$todoId]);
                } 
            }
        }

        public static function loginBkd() {   
            $email = "sujay123@gmail.com";
            $password = "sujay";
            
            if(isset($_POST['email']) && isset($_POST['password'])) {
                if($_POST['email'] == $email && $_POST['password'] == $password) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
            
                    header("Location: /TodoLatest/index.php");
                } else {
                    echo "Invalid Email or Password";
                }
            }
        }

        public static function logout() {
            session_start();
            session_destroy();
            header('Location: ../login.php');
        }
    }
?>