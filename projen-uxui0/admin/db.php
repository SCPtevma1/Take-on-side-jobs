<?php
      
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "oopp";
    
    $conn = new mysqli($host,$user, $pass, $dbname);
    $conn->set_charset("utf8mb4");
    
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>