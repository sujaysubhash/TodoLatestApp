<?php
session_start();
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
?>  