<!DOCTYPE html>
<html> 
    <head> 
        <title>GMDB System</title>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;}
        </style>
    </head>
    <body> 
        <h1 id = "notifications"> DataBase System</h1>
        <div class = "container"> 
            <form action ="notificationScript.php" method = "POST" class = "form">
            <div class = "form-group">
                <label for="name" class="form-label">Your Name</label><br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required><br><br>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Recepients Email</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required><br><br>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label><br>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required><br><br>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label><br>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
            </form>
        </div>
    </body>
</html>