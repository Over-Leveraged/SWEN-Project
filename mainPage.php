<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
        <link href="styles/mstyles.css" rel="stylesheet" type="text/css">
        
    </head>
    <body> 
        <section class = "header">
            <nav>
                <h1 class = "sysname"><a href = "mainPage.php">GDBS</a></h1>
                
                <div class = "navBar"> 
                    <ul> 
                        <li><a href = "loginSystem.php">  Log Out </a></li>
                        <li><a href = "notification.php">  Send Updates </a></li>
                        <li><a href = "view/schedule.php">  Schedule Training </a></li>
                        <li><a href = "view/create.php">  Create Record </a></li>
                        <li><a href = "export.php">  Export Records </a></li>
                        
                        <!-- <li><a href = "#" id="officerRandomizer">  Randomize Records </a></li> -->
                    </ul>
                </div>
            </nav> 
            <div class = "display">
                <div class = "buttonContainers">
                <label for = "namebtn">Sort By:</label>
                <button type="submit" name = "namebtn" id="namebtn">Name</button>
                <label for = "idbtn">Sort By:</label>
                <button type="submit" name = "idbtn" id="idbtn">ID</button><br>
                
                </div>
                <div id="result">
                    <!-- officer will appear here -->                    
                    <table>
                        <thead>
                            <th> ID </th>
                            <th> First Name</th>
                            <th> Last Name </th>
                            <th> Medical Expiration </th>
                            <th> PSRA Expiration </th>
                            <th> Police Record Expiration </th>
                        </thead>
                        <?php 

                            include_once('dbconfig2.php'); 
                            try {
                                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                                // echo "Connected to $dbname at $host successfully.";    
                            } catch (PDOException $pe) {
                                die("Could not connect to the database $dbname :" . $pe->getMessage());
                            }
                            ?>
                            <?php 
                                $result = $conn->query("SELECT * FROM addRec ORDER BY id ASC"); 
                                $eachh= $result->fetchAll(PDO::FETCH_ASSOC);
                                $records[] =$eachh;
                                ?>
                                <?php foreach ($eachh as $place): ?>
                                    <tr>
                                        <td><a href="notification.php" class = "idSelect"><?= $place['id']; ?></a></td>  
                                        <td> <?= $place['fname']; ?></td> 
                                        <td> <?= $place['lname']; ?></td>
                                        <td> <?= $place['medical_doc_expire']; ?></td>
                                        <td> <?= $place['psra_doc_expire']; ?></td>
                                        <td> <?= $place['police_rec_doc_expire']; ?></td> 
                                    </tr>
                                <?php endforeach; ?>
                    </table>
                </div>
                <button type ="submit" id ="officerRandomizer">Randomize Records</button>
            </div>
            
            
        </section>
        <footer>
            <div class="containerf">
                <p>Swen Group Project: Akiel Walsh, Tahjay Thompson, Jada Calvin, Jelani Smith, Donique Forbes</p>
            </div>
        </footer>
        
    </body>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="index.js" type="text/javascript"></script> 
    <!-- <script src="randomizer/locationSend.js" type="text/javascript"></script> -->
    
</html>
