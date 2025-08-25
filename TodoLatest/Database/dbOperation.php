<?php
session_start();

include __DIR__ . '/db.php';

    class dbOperation {
        public static function loginCheck($email, $pwd){
            
            $useremail = trim($email);
            $userpass = trim($pwd);
            $sql = "SELECT userid FROM users WHERE email = :email AND password = :pwd";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'email' => $useremail, 'pwd' => $userpass
            ]);
        
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