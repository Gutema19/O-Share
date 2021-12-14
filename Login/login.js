function showpass(){
    var pass = document.getElementsByTagName('input')[1];
    if (pass.type === "password") {
        pass.setAttribute('type','text');
        //document.getElementsByTagName('img')[3].src="Asset/el_eye-open.svg";
    }else{
        pass.setAttribute('type','password');
        //document.getElementsByTagName('img')[3].src="Asset/el_eye-close.svg";
    }
}

function userpass_fail(){
    $(".login-textinput.input, .login-textinput1.input").css("border", "3px solid #B41E42");
    $(".login-textinput.input, .login-textinput1.input").css("transition", "0.3s ease-out");
    $(".notif.nlogin,.notif.npass").html("*Nama Pengguna atau Kata Sandi Salah");
}

$(document).ready(function () {
   $(".login-button.button").on("click", function(event){ 
       event.preventDefault();
    }); 

    $(".login-button1.button").on("click", function(event){ 
        event.preventDefault();
        window.location = "register-part1.html";
     }); 

     $(".login-text6").on("click", function(event){ 
        event.preventDefault();
        window.location = "lupa-sandi-part1.html";
     }); 
});