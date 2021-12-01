<?php include 'training.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="mystyle.css">
    <title>Schedule Training</title>
  </head>
  <body>


    <div class="container">


      <div class="column">
      <h1 style="color:orange;text-align:center;">SCHEDULE TRAINING</h1>
        <form action="training.php" method="post" >

<div class="row">
      <div class="col-25">
            <label for="id"> ID NUMBER</label><br>
     </div>
      <div class="col-75">
            <input id="input3" type="number" name="id" onfocus="this.placeholder=''" placeholder="Input 11 digit ID number" required/><br><br>
      </div>
    <div class="col-25">
            <label for="date"> DATE</label><br>
    </div>
      <div class="col-75">
            <input id="input4" type="date" name="date" required/><br><br>
     </div>
    <div class="col-25">
            <label for="fname"> FIRST NAME</label><br>
    </div>
      <div class="col-75">
            <input id="input1" type="text" name="fname" onfocus="this.placeholder=''" placeholder="Your name.." required/> <br>
    </div>
    <div class="col-25">
            <label for="lname"> LAST NAME</label><br>
    </div>   
    <div class="col-75">
            <input id="input2" type="text" name="lname" onfocus="this.placeholder=''" placeholder="Your last name.." required/> <br>
    </div>   
    <div class="col-25">     
             <label for="reason"> REASON</label><br>
    </div> 
    <div class="col-75">  
            <input id="input5" type="text" name="reason" onfocus="this.placeholder=''" placeholder="Write something.." style="height:200px" required/> <br>
  </div>
  <div class="col-25">
            <label for="message"> MESSAGE</label><br>
</div>
<div class="col-75">
            <input id="input6" type="text" name="message" onfocus="this.placeholder=''" placeholder="Write something.." style="height:200px" required/> <br><br>
  </div>
  <div class="col-25">
          <button id='btn' type="submit" name="save">SAVE</button>
</div>
</div>
        </form>
        


      </div>

    </div>
  </body>
</html>
