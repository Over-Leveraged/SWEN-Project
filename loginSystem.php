<?php
session_start();
require_once 'dbconnect.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    //echo $password;
    // $sql = $conn->query("SELECT * FROM `users` WHERE username = '$username' AND password = '$password'");
    // $sql->execute();
    //$userArray = $sql->fetchAll(PDO::FETCH_ASSOC);
    //$sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'"; 
    $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    if ($result -> num_rows > 0){
        echo "Welcome: ",$username;
        header("Location:notification.php"); //Just a test until main page is done
    }else{
        echo "<script> alert(No Users Found with details)</script>"; //Will also change
    }
}

?>

<!DOCTYPE html>
<htlm> 
    <head> 
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="styles.css" rel="stylesheet" type="text/css">
        <script></script>
    </head>
    <body> 
        <header> 
            <h1> User Login</h1>
        </header>
        <>
        
        <div class = "container"> 
            <form action ="" method = "POST">
                <div class = "container-user"> 
                    <label>Username : </label><br>   
                    <input type="text" placeholder="Enter Username" name="username" required><br>  
                </div><br>

                <div class = "container-user"> 
                    <label>Password : </label><br>   
                    <input type="password" placeholder="Enter Password" name="password" required <br>
                </div><br>

                <button type="submit" name = "submit">Login</button>
                
            </form>
        </div>
    </body>
</htlm>
