<?php
    session_start();

    class Operation {
        public static function addTodo($title, $desc, $date) {
                

                if(!isset($_SESSION['listItems'])){
                    $_SESSION['listItems'] = [];
                }
        
                $_SESSION['listItems'][] = [
                    'title' => $title,
                    'description' => $desc, 
                    'duedate' => $date
                ];
                
                foreach($_SESSION['listItems'] as $key => $item) {
                    echo "<tr class='list-row' id='$key'>";
                        echo "<td>".($key+1)."</td>";
                        echo "<td>".$item['title']."</td>";
                        echo "<td>".$item['description']."</td>";
                        echo "<td>".$item['duedate']."</td>";
                        echo "<td>";
                        echo "<button type='button' data-key='$key' class='dlt-btn'>Delete</button>";
                        echo "</td>";
                    echo "</tr>";
                }
            
        }

        public static function removeRecord($todoId) {
                if(isset($_SESSION['listItems'])) {
                    unset($_SESSION['listItems'][$todoId]);
                } 
        }

        public static function loginBkd($user_email, $user_password) {   

            $auth_email = "sujay123@gmail.com";
            $auth_password = "sujay";

            if($user_email == $auth_email && $user_password == $auth_password) {
                $_SESSION['email'] = $user_email;
                $_SESSION['password'] = $user_password;
                
                echo "success";
            } else {
                echo "faliure";
            }
            
        }

        public static function logout() {
            session_start();
            session_destroy();
            header('Location: ../login.php');
        }
    }
?>
