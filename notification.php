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
            
            <form> 
                <label for="emailTopic" class="form-label">Message Type</label><br>
                <select name = "emailTopic" class = "topic" id = "topic">
                    <option> Training Schedule </option>
                    <option> Outdated Documents </option>
                    <option> Recertification </option>
                </select><br><br>
                <div>
                    <button type="submit" class="btnSelect">Load Email</button>
                </div><br>
            </form>

            <form action ="notificationScript.php" method = "POST" class = "form">
            <div class = "form-group">
                <label for="name" class="form-label">Your Name</label><br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" id="name" required><br><br>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Recepients Email</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required><br><br>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label><br>
                <textarea type="text" value = ""class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required></textarea><br><br>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label><br>
                <textarea value = "Cool" class="form-control"  id="message" name="message" placeholder="Enter Email..." id ="messageInput" required></textarea>
            </div><br>
            <div>
                <button type="submit" class="btn">Send Email</button>
            </div>
            </form>
        </div>
    </body> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="notificationFunc.js" type="text/javascript"></script>
</html>