<?php include 'training.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Training</title>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
        <link href="mystyle.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <section class = "header">
        <nav>
                    <h1 class = "sysname"><a href = "mainPage.php">GDBS</a></h1>
                    <div class = "navBar"> 
                        <ul> 
                        <li><a href = "loginSystem.php">  Log Out </a></li>
                        <li><a href = "notification.php">  Send Updates </a></li>
                        <li><a href = "view/schedule.php">  Schedule Training </a></li>
                        <li><a href = "view/create.php">  Create Record </a></li>
                        <li><a href = "">  Update Records </a></li>
                        </ul>
                    </div>
                </nav>

    <div class="container">


      <div class="form2">
      <h1 style="color:black;text-align:center;">SCHEDULE TRAINING</h1>
          <form action="../model/training.php" method="post" >


            <label for="id"> ID:</label><br>
            <input id="input3" type="number" name="id" onfocus="this.placeholder=''" placeholder="Input ID number" required/><br><br>
            
            <label for="date"> DATE:</label><br>
            <input id="input4" type="date" name="date" required/><br><br>
            
            <label for="fname"> FIRST NAME:</label><br>
            <input id="input1" type="text" name="fname" onfocus="this.placeholder=''" placeholder="Your name.." required/> <br>

            <label for="lname"> LAST NAME:</label><br>
            <input id="input2" type="text" name="lname" onfocus="this.placeholder=''" placeholder="Your last name.." required/> <br>
            
             <label for="reason"> REASON:</label><br>
            <input id="input5" type="text" name="reason" onfocus="this.value=''" value="Enter a reason here..."  required/> <br>

            <label for="message"> MESSAGE:</label><br>
            <input id="input6" type="text" name="message" onfocus="this.value=''" value="Enter a message here..."  required/> <br><br>

          <button id='btn' type="submit" name="save">SAVE</button>
        </form>
        


      </div>

    </div>
    </section>
  </body>
   <footer>
            <div class="containerf">
                <p>Swen Group Project: Akiel Walsh, Tahjay Thompson, Jada Calvin, Jelani Smith, Donique Forbes</p>
            </div>
        </footer>
</html>
