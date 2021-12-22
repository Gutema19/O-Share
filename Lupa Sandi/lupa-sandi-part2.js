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

function ksvalid(){

    if($('.lupa-sandi-part2-textinput').val() != 0){
        $('.lupa-sandi-part2-textinput').css('border', '0.5px solid #4d7520');
        $('.lupa-sandi-part2-textinput').css('transition', '0.3s ease-out');
        $('.notif.n3.ks').html("");
        return true;
    }else{
        $('.lupa-sandi-part2-textinput').css("border", "2px solid #B41E42");
        $('.lupa-sandi-part2-textinput').css("transition", "0.3s ease-out");
        $(".notif.n3.ks").html("*Kata Sandi Tidak Valid");
        return false;
    }
}

function kksvalid(){

    if($('.lupa-sandi-part2-textinput1').val() != 0 && $('.lupa-sandi-part2-textinput1').val() == $('.lupa-sandi-part2-textinput').val()){
        $('.lupa-sandi-part2-textinput1').css('border', '0.5px solid #4d7520');
        $('.lupa-sandi-part2-textinput1').css('transition', '0.3s ease-out');
        $('.notif.n3.kks').html("");
        return true;
    }else{
        $('.lupa-sandi-part2-textinput1').css("border", "2px solid #B41E42");
        $('.lupa-sandi-part2-textinput1').css("transition", "0.3s ease-out");
        $(".notif.n3.kks").html("*Konfirmasi Kata Sandi Tidak Valid");
        return false;
    }
}

function upnpass() {
    $.ajax({
        type: "POST",
        url: "database/newpass.php",
        data: {npass : $('.lupa-sandi-part2-textinput1').val()},
        dataType: "JSON",
        success: function (response) {
            if(response.status == 1){
                alert('Success');
                window.location = "login.php";
            }
        }
    });
}


$(document).ready(function () {
    $(".lupa-sandi-part2-button").on("click", function(e) { 
        e.preventDefault();
        kksvalid();
        ksvalid();

        if(ksvalid()==true && kksvalid()==true){
            upnpass(); 
        }
     });

     $(".lupa-sandi-part2-text6").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.html";
     });
});