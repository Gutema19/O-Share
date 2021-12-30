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

function vlogin(){
    if($(".login-textinput.input").val() != 0 && $(".login-textinput1.input").val() != 0){
        $.ajax({
            type: "POST",
            url: "database/loginPrcs.php",
            data: {
                userput: $(".login-textinput.input").val(),
                passput: $(".login-textinput1.input").val()
            },
            dataType: "JSON",
            success: function (response) {
             if (response.status == 1){
                if(response.role == 1){
                    window.location = "admin-home.php";
                }else{
                    window.location = "rumah.php";
                }
             }else if(response.status == 1){
                 
             }
            },
            error: function () {
                userpass_fail();
            }
        });
    }else{
        if($(".login-textinput.input").val().length == 0){
            $(".login-textinput.input").css("border", "3px solid #B41E42");
            $(".login-textinput.input").css("transition", "0.3s ease-out");
            $(".notif.nlogin").html("*Alamat Pengguna Kosong");
        }else{
            $(".login-textinput.input").css("border", "0.5px solid #4B4453");
            $(".login-textinput.input").css("transition", "0.3s ease-out");
            $(".notif.nlogin").html("");
        }

        if($(".login-textinput1.input").val().length == 0){
            $(".login-textinput1.input").css("border", "3px solid #B41E42");
            $(".login-textinput1.input").css("transition", "0.3s ease-out");
            $(".notif.npass").html("*Kata Sandi Kosong");
        }else{
            $(".login-textinput1.input").css("border", "0.5px solid #4B4453");
            $(".login-textinput1.input").css("transition", "0.3s ease-out");
            $(".notif.npass").html("");
        }
    }
}

$(document).ready(function () {
   $(".login-button.button").on("click", function(event){ 
       event.preventDefault();
       vlogin();
    }); 

    $(".login-button1.button").on("click", function(event){ 
        event.preventDefault();
        window.location = "register-part1.php";
     }); 

     $(".login-text6").on("click", function(event){ 
        event.preventDefault();
        window.location = "lupa-sandi-part1.php";
     }); 
});