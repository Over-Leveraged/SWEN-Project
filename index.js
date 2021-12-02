window.onload = function(){


    var httpRequest = new XMLHttpRequest(); 

    $('#idbtn').click(function(a){
        a.preventDefault();
        console.log('Clicked')  
        var url ="sorts/idsorter.php"
        httpRequest.onreadystatechange = getList();
        httpRequest.open('GET',url)
        httpRequest.send();
    })

    $('#namebtn').click(function(ev){
        ev.preventDefault();
        console.log('Clicked')
        var url ="sorts/sorter.php"
        httpRequest.onreadystatechange = getList();
        httpRequest.open('GET',url)
        httpRequest.send();
    })
    
    

    $('.idSelect').click(function(event){
        //event.preventDefault();
        console.log('Clicked')
        localStorage.setItem("Email","swenprojectemailer@gmail.com");
    })

    $('#officerRandomizer').click(function(e){
        e.preventDefault();
        console.log('Clicked')
           
        var url = "../SWEN-Project/randomizer/randomizer.php"
        //var location= document.getElementById("fillerForLocationName").value;
       // location=location.trim();
        
        //var sendToPhp=url+"?query="+location;
        httpRequest.onreadystatechange = getList();
    
        httpRequest.open('GET',url)
        httpRequest.send();
    })

    

    function getList(){
        var resField=document.getElementById('result');
        if (httpRequest.readyState == XMLHttpRequest.DONE){
            if(httpRequest.status==200){
                var resp= httpRequest.responseText;
                resField.innerHTML=resp;
            }else{
                alert("No officers found.");
            }
        }
    }


}