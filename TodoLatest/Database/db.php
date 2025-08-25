<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tododb";
try {
    $pdo = new PDO("mysqli:host=$servername;dbname:$database;charset=utf8", $username, $password);
    echo "Connected successfully";

} catch(PDOException $ex) {
    echo "Connection Failed" .$ex->getMessage();
}

?>