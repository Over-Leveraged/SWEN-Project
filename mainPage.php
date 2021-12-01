<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
        <link href="styles/mstyles.css" rel="stylesheet" type="text/css">
        <script src="randomizer/locationSend.js" type="text/javascript"></script>
    </head>
    <body> 
        <section class = "header">
            <nav>
                <h1 class = "sysname"><a href = "mainPage.php">GDBS</a></h1>
                
                <div class = "navBar"> 
                    <ul> 
                        <li><a href = "notification.php">  Send Updates </a></li>
                        <li><a href = "view/schedule.php">  Schedule Training </a></li>
                        <li><a href = "">  Create Record </a></li>
                        <li><a href = "">  Update Records </a></li>
                        <li><a href = "#" id="officerRandomizer">  Randomize Records </a></li>
                    </ul>
                </div>
            </nav> 
            <div class = "display">
                <div id="result">
                    <!-- officer will appear here -->
                    <table>
                        <tr>
                            <th> ID </th>
                            <th> First Name</th>
                            <th> Last Name </th>
                            <th> Medical Expiration </th>
                            <th> PSRA Expiration </th>
                            <th> Police Record Expiration </th>
                        </tr>
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
                                        <td> <?= $place['id']; ?></td>  
                                        <td> <?= $place['fname']; ?></td> 
                                        <td> <?= $place['lname']; ?></td>
                                        <td> <?= $place['medical_doc_expire']; ?></td>
                                        <td> <?= $place['psra_doc_expire']; ?></td>
                                        <td> <?= $place['police_rec_doc_expire']; ?></td> 
                                    </tr>
                                <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>
