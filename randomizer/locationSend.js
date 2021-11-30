window.onload=function(){
    var search = document.getElementById("officerRandomizer");
    search.addEventListener('click',handleClick);

}

var httpRequest = new XMLHttpRequest();
//var url = "randomizer.php";

function handleClick(e){

    e.preventDefault();
    

    var url = "../SWEN-Project/randomizer/randomizer.php"
    //var location= document.getElementById("fillerForLocationName").value;
   // location=location.trim();
    
    //var sendToPhp=url+"?query="+location;

    httpRequest.onreadystatechange = getList();

    httpRequest.open('GET',url)
    httpRequest.send();
}

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