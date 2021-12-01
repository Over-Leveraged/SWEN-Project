<?php

require_once '../dbconfig2.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";    
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}




//if(ISSET($_POST['save'])){
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $dest= 'training/';

    $MAX_SIZE=15 * 1024 * 1024;
    $fname=trim(filter_var(htmlspecialchars($_POST['fname']), FILTER_SANITIZE_STRING));
    $lname=trim(filter_var(htmlspecialchars($_POST['lname']), FILTER_SANITIZE_STRING));
    $reason=trim(filter_var(htmlspecialchars($_POST['reason']), FILTER_SANITIZE_STRING));
    $message=trim(filter_var(htmlspecialchars($_POST['message']), FILTER_SANITIZE_STRING));
    $date=trim(filter_var(htmlspecialchars($_POST['date']), FILTER_SANITIZE_STRING));
      
  
       
    $qStr = "INSERT INTO training (fname,lname,date,reason,message) VALUES ('$fname','$lname','$date','$reason','$message')";

    if ($conn->query($qStr)) {
        echo "Training schedule updated successfully";

    }
}
?>





