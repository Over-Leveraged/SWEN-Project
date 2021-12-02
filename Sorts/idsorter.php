<?php
    $host = 'localhost';
    $dbname = 'records';
    $username='awalsh';
    $password='password123';


    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // echo "Connected to $dbname at $host successfully.";    
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
    $result = $conn->query("SELECT * FROM addRec ORDER BY id ASC"); 
    $eachh= $result->fetchAll(PDO::FETCH_ASSOC);
    $records[] =$eachh; 
?>
    <table>
    <thead>
      <tr>
        <th> ID </th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Medical Expiration date </th>
        <th> PSRA Expiration </th>
        <th> Police Record Expiration </th>
      </tr>
    </thead>
    <?php foreach ($eachh as $place): ?>
      <tr>
          <td><a href="notification.php" class = "idSelect"><?= $place['id']; ?></a></td>  
          <td><?= $place['fname']; ?></td>
          <td><?= $place['lname']; ?></td>
          <td><?= $place['medical_doc_expire']; ?></td>
          <td><?= $place['psra_doc_expire']; ?></td>
          <td><?= $place['police_rec_doc_expire']; ?></td>
      </tr>
    <?php endforeach; ?>
</table>