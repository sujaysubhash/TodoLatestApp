<?php
session_start();

include './db.php';

    class dbOperation {
        public static function loginCheck($email, $password){
            
            $sql = "SELECT userid FROM users WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['email' => $email]);
        
            $user = $stmt->fetch();
        
            if($user) {
                $_SESSION['userid'] = $user['userid'];
                return true;
            } else {
                return false;
            }
         
        }


        
    }

?>