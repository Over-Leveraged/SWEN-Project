window.onload = function(){
    //var subject = $('#subjectInput').val();
    
    $('.btnSelect').click(function(event){

        //names.value = "New Email";
        event.preventDefault();
        var body = '';
        var topic = document.getElementById('topic').value
        document.getElementById('subject').value = topic;
        var msg = document.getElementById('message').value;
       
        switch(topic){
            case "Training Schedule":
                body = "Here is the updated Training Schedule for your courses";
                document.getElementById('message').value = body;
                console.log(body)
                break;
            case "Outdated Documents":
                body = "Your documents are outdated and you should visit our officers to update them";
                document.getElementById('message').value = body;
                console.log(body)
                break;
            case "Recertification":
                body = "You are due for Re-certification Training";
                document.getElementById('message').value = body;
                console.log(body)
                break;
            default:
                body = ""
                document.getElementById('message').value = body;
        }
        console.log("clicked");
    })

    $('.btn').click(function(event){

        event.preventDefault();
        var recEmail = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var body = document.getElementById('message').value;
        var data = new FormData();
        
        data.append('email',recEmail);
        data.append('subject',subject);
        data.append('message',body);
        console.log("clicked");
        // console.log(email);
        var xhr = new XMLHttpRequest();
        xhr.open("POST","notificationScript.php");
        xhr.onload = function(){console.log(this.response);};
        xhr.send(data);

    })

    
}