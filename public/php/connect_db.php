<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "root";
    $dbname = "edu_test";
    // Connect
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn && $conn->connect_error) {
    die("Connection faild: $conn->connect_error");
    }
?>