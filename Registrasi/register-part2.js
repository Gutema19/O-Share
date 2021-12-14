function showpass(){
    var pass = document.getElementsByTagName('input')[0];
    if (pass.type === "password") {
        pass.setAttribute('type','text');
        //document.getElementsByTagName('img')[3].src="Asset/el_eye-open.svg";
    }else{
        pass.setAttribute('type','password');
        //document.getElementsByTagName('img')[3].src="Asset/el_eye-close.svg";
    }
}

function showpass1(){
    var pass = document.getElementsByTagName('input')[1];
    if (pass.type === "password") {
        pass.setAttribute('type','text');
        //document.getElementsByTagName('img')[3].src="Asset/el_eye-open.svg";
    }else{
        pass.setAttribute('type','password');
        //document.getElementsByTagName('img')[3].src="Asset/el_eye-close.svg";
    }
}


function jkvalid(){

    if( $('input[name=radio]:checked').val() > 0){
        $('.notif.n3.jk').html("");
        return true;
    }else{
        $(".notif.n3.jk").html("*Jenis Kelamin Tidak Valid");
        
        return false;
    }
}

function ksvalid(){

    if($('.register-part2-textinput').val() != 0){
        $('.register-part2-textinput').css('border', '0.5px solid #4d7520');
        $('.register-part2-textinput').css('transition', '0.3s ease-out');
        $('.notif.n2.ks').html("");
        return true;
    }else{
        $('.register-part2-textinput').css("border", "2px solid #B41E42");
        $('.register-part2-textinput').css("transition", "0.3s ease-out");
        $(".notif.n2.ks").html("*Kata Sandi Tidak Valid");
        return false;
    }
}

function kksvalid(){

    if($('.register-part2-textinput1').val() != 0 && $('.register-part2-textinput1').val() == $('.register-part2-textinput').val()){
        $('.register-part2-textinput1').css('border', '0.5px solid #4d7520');
        $('.register-part2-textinput1').css('transition', '0.3s ease-out');
        $('.notif.n2.kks').html("");
        return true;
    }else{
        $('.register-part2-textinput1').css("border", "2px solid #B41E42");
        $('.register-part2-textinput1').css("transition", "0.3s ease-out");
        $(".notif.n2.kks").html("*Konfirmasi Kata Sandi Tidak Valid");
        return false;
    }
}

function fpvalid(){

    if($('.register-part2-textinput2').val() != 0){
        $('.register-part2-textinput2').css('border', '0.5px solid #4d7520');
        $('.register-part2-textinput2').css('transition', '0.3s ease-out');
        $('.notif.n2.fp').html("");
        return true;
    }else{
        $('.register-part2-textinput2').css("border", "2px solid #B41E42");
        $('.register-part2-textinput2').css("transition", "0.3s ease-out");
        $(".notif.n2.fp").html("*Foto Profil Tidak Valid");
        return false;
    }
}




$(document).ready(function () {
    $(".register-part2-button.button").on("click", function(e) { 
       e.preventDefault();
       
       jkvalid();
       ksvalid();
       kksvalid();
       fpvalid();

       if(jkvalid()==true && ksvalid()==true && kksvalid()==true && fpvalid()==true){
           
       }
    });

    $(".register-part2-image2").on("click", function(e) { 
        e.preventDefault();
        window.location = "register-part1.html"; 
     });

    $(".register-part2-button").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.html"; 
     });

     $(".register-part2-text12").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.html"; 
     });

});