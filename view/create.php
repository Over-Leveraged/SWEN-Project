<?php include 'upload.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="create.css">
    <title>Create & add user</title>
  </head>
  <body>


    <div class="container">


      <div class="column">
      <h1>Create & add user</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data" >

            <label for="fname"> First Name</label>
            <input id="input1" type="text" name="fname" required/> 

            <label for="lname"> Last Name</label>
            <input id="input2" type="text" name="lname" required/> 

            <label for="company"> Company</label>
            <input id="input3" type="text" name="Company" required/> 

            <label for="position"> Position</label>
            <input id="input4" type="text" name="position" required/>
 
            <label for="Service_lenght"> lenght of service</label>
            <input id="input5" type="number" name="Service_lenght" required/>

            <label for="avsec_dates"> avsec dates</label>
            <input id="input6" type="date" name="avsec_dates" required/>

            <label for="avsec_grades"> avsec grades</label>
            <input id="input7" type="number" name="avsec_grades" required/>

            <label for="medical_document"> medical document</label>
            <input id="input8" type="file" name="medical_document" required/>

            <label for="medical_doc_expire"> medical document expire</label>
            <input id="input9" type="date" name="medical_doc_expire" required/>

            <label for="psra_document"> psra document</label>
            <input id="input10" type="file"name="psra_document" required/>

            <label for="psra_doc_expire"> psra document expire</label>
            <input id="input11" type="date" name="psra_doc_expire" required/>

            <label for="police_rec_doc"> police record document </label>
            <input id="input12" type="file" name="police_rec_doc" required/>

            <label for="police_rec_doc_expire"> police record document expire</label>
            <input id="input13" type="date" name="police_rec_doc_expire" required/>

            <label for="recommenedBy"> recommened By</label>
            <input id="input14" type="date" name="recommenedBy" required/>

          <button id='btn' type="submit" name="save">Submit All</button>
        </form>
<?php>   
  if ($conn->query($qStr)) {
    echo "File uploaded successfully";
  }
?>
      </div>

    </div>
  </body>
</html>
