<?php 
 
// Load the database configuration file 
include_once('model/dbconfig.php'); 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Connected to $dbname at $host successfully.";    
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$result = $conn->query("SELECT * FROM addRec ORDER BY id ASC"); 
$set= $result->fetchAll(PDO::FETCH_ASSOC);

$list_of_trainees = array();

foreach ($set as $row): 
$list_of_trainees[] = $row;
endforeach;        

if(isset($_POST["export_csv_data"])) {	

	$export_file = "trainees_csv_export_".date('Ymd') . ".csv";			
	header("Content-Type: text/csv");
	header("Content-Disposition: attachment; filename=\"$export_file\"");	

	$write_to_file = fopen( 'php://output', 'w' );
    
	if(!empty($list_of_trainees)) {
    
	    foreach($list_of_trainees as $record) {
		    fputcsv($write_to_file, array_keys($record));
	    }		
		fputcsv($write_to_file, array_values($record));
	    fclose($write_to_file);
	}
	exit;  
}