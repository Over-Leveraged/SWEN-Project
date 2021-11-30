<?php 
 
// Load the database configuration file 
include_once('model/dbconfig.php'); 


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Connected to $dbname at $host successfully.";    
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}


?>

            
<form method='post' action='download.php'>
<button type="submit" id="export_csv_data" name='export_csv_data' value="Export to CSV" >Export to CSV</button>
        
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
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
    </tr>
<?php endforeach; ?>
</table>
</form>

