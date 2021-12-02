<?php
require_once '../dbconfig2.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Connected to $dbname at $host successfully.";    
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}




if(ISSET($_POST['save'])){
    $dest= 'upload/';

    $MAX_SIZE=15 * 1024 * 1024;
    $fname=trim(filter_var(htmlspecialchars($_POST['fname']), FILTER_SANITIZE_STRING));
    $lname=trim(filter_var(htmlspecialchars($_POST['lname']), FILTER_SANITIZE_STRING));
    $company=trim(filter_var(htmlspecialchars($_POST['Company']), FILTER_SANITIZE_STRING));
    $position=trim(filter_var(htmlspecialchars($_POST['position']), FILTER_SANITIZE_STRING));
    $Service_lenght=trim(filter_var(htmlspecialchars($_POST['Service_lenght']), FILTER_SANITIZE_STRING));
    $avsec_dates=trim(filter_var(htmlspecialchars($_POST['avsec_dates']), FILTER_SANITIZE_STRING));
    $avsec_grades=trim(filter_var(htmlspecialchars($_POST['avsec_grades']), FILTER_SANITIZE_STRING));
    $medical_doc_expire=trim(filter_var(htmlspecialchars($_POST['medical_doc_expire']), FILTER_SANITIZE_STRING));
    $psra_doc_expire=trim(filter_var(htmlspecialchars($_POST['psra_doc_expire']), FILTER_SANITIZE_STRING));
    $recommenedBy =trim(filter_var(htmlspecialchars($_POST['recommenedBy']), FILTER_SANITIZE_STRING));
    $police_rec_doc_expire =trim(filter_var(htmlspecialchars($_POST['police_rec_doc_expire']), FILTER_SANITIZE_STRING));

    $medical_doc = $_FILES['medical_document']['name'];
    $psra_doc = $_FILES['psra_document']['name'];
    $police_rec_doc = $_FILES['police_rec_doc']['name'];

    $medical_doc_path = $dest . $medical_doc;
    $police_rec_doc_path =$dest . $psra_doc;
    $psra_doc_path =$dest . $police_rec_doc;

     
    $qStr = "INSERT INTO addRec (fname,lname,company,position,service_lenght,avsec_dates,avsec_grades,medical_doc,medical_doc_path,medical_doc_expire,psra_doc,psra_doc_path,psra_doc_expire,police_rec_doc,police_rec_doc_path,police_rec_doc_expire,recommenedBy) VALUES ('$fname','$lname','$company','$position','$Service_lenght','$avsec_dates','$avsec_grades','$medical_doc','$medical_doc_path','$medical_doc_expire','$psra_doc','$psra_doc_path','$psra_doc_expire','$police_rec_doc','$police_rec_doc_path','$police_rec_doc_expire','$recommenedBy')";

    if ($conn->query($qStr)) {
        echo "File uploaded successfully";

    }
}





