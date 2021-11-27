<?php
require_once 'dbconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$delete= trim(filter_var(htmlspecialchars($_GET['delete']), FILTER_SANITIZE_STRING));
$ID= trim(filter_var(htmlspecialchars($_GET['id']), FILTER_SANITIZE_STRING));



$sql = "DELETE FROM $delete WHERE $delete.id=$id";
$result = mysqli_query($conn, $sql);

if(isset()){
   if ($result) {
   	    echo 'deleted!'
   } else {
   	echo "not deleted!";
   }
} echo ".";

