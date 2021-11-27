// Uploads files
if (isset($_POST['save'])) { 
    // if save button on the form is clicked

    // name of the uploaded file
    $file1 = $_FILES['medical_document']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $file1;

    // get the file extension
    $extension = pathinfo($file1, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['medical_document']['tmp_name'];
    $size = $_FILES['medical_document']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";

    } elseif ($_FILES['medical_document']['size'] > $MAX_SIZE) { // file shouldn't be larger than 15Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO records (name, size, downloads) VALUES ('$file1', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}