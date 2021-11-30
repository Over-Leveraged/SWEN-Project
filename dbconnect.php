<?php
    $host = 'localhost';
    $dbname = 'records';
    $username = 'admin';
    $password = 'password123';
    try {
        $conn = mysqli_connect($host, $username, $password,$dbname);  
    } catch (Exception $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
?>