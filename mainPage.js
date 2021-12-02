window.onload = function(){
    $(".idSelect").click(function(event){
        event.preventDefault();
        console.log('clicked');
        localStorage.setItem("Email","swenprojectemailer@gmail.com");
    })
}