<?php
    $host = 'localhost';
    $dbname = 'records';
    $username='admin';
    $password='password123';

    //$location= filter_input(INPUT_GET, 'location',FILTER_SANITIZE_STRING);

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $counter=$conn->query("SELECT COUNT(*) from addRec");
    $counterResults=$counter->fetchALL(PDO::FETCH_ASSOC);
    $justCounterResults=$counterResults[0]['COUNT(*)'];
    $twentyFive=ceil($justCounterResults/4);
    //var_dump($counter);
    //var_dump($counterResults[0]);
    //var_dump($twentyFive);
    $ranRowsQuery = $conn->query("SELECT * FROM addRec order by RAND() LIMIT $twentyFive");
    $ranRows=$ranRowsQuery->fetchALL(PDO::FETCH_ASSOC);
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
    <?php foreach ($ranRows as $row): ?>
      <tr>
          <td><?= $row['id']; ?></td>
          <td><?= $row['fname']; ?></td>
          <td><?= $row['lname']; ?></td>
          <td><?= $row['medical_doc_expire']; ?></td>
          <td><?= $row['psra_doc_expire']; ?></td>
          <td><?= $row['police_rec_doc_expire']; ?></td>
      </tr>
    <?php endforeach; ?>
</table>



