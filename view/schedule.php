<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="create.css">
    <title>Schedule Training</title>
  </head>
  <body>


    <div class="container">


      <div class="column">
      <h1>Schedule Training</h1>
        <form action="../model/training.php" method="post" >

            <label for="fname"> First Name:</label><br>
            <input id="input1" type="text" name="fname" required/> <br>

            <label for="lname"> Last Name:</label><br>
            <input id="input2" type="text" name="lname" required/> <br>
 
            <label for="id"> ID:</label><br>
            <input id="input3" type="number" name="id" required/><br>

            <label for="date"> Date:</label><br>
            <input id="input4" type="date" name="date" required/><br>
            
             <label for="reason"> Reason:</label><br>
            <input id="input5" type="text" name="reason" placeholder="Enter A Reason Here" required/> <br>

            <label for="message"> Message:</label><br>
            <input id="input6" type="text" name="message" placeholder="Enter A Message Here" required/> <br><br>



          <button id='btn' type="submit" name="send">Send Notification</button><br><br>
          <button id='btn' type="submit" name="save">Save Notification</button>
        </form>
        


      </div>

    </div>
  </body>
</html>
