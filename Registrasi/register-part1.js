function fnvalid(){
    var valid = /^[a-zA-Z ]{1,}$/;

    if( $('.register-part1-textinput').val() != 0 && $('.register-part1-textinput').val().match(valid)){
        $('.register-part1-textinput').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput').css('transition', '0.3s ease-out');
        $('.notif.n1.fn').html("");
        return true;
    }else{
        $('.register-part1-textinput').css("border", "2px solid #B41E42");
        $('.register-part1-textinput').css("transition", "0.3s ease-out");
        $(".notif.n1.fn").html("*Nama lengkap Tidak Valid");
        return false;
    }
}

function cnvalid(){
    var valid = /^[a-zA-Z ]{1,}$/;

    if($('.register-part1-textinput1').val() != 0 && $('.register-part1-textinput1').val().match(valid) ){
        $('.register-part1-textinput1').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput1').css('transition', '0.3s ease-out');
        $('.notif.n1.cn').html("");
        return true;
    }else{
        $('.register-part1-textinput1').css("border", "2px solid #B41E42");
        $('.register-part1-textinput1').css("transition", "0.3s ease-out");
        $(".notif.n1.cn").html("*Nama Panggilan Tidak Valid");
        return false;
    }
}

function snvalid(){

    if($('.register-part1-textinput3').val() != 0){
        $('.register-part1-textinput3').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput3').css('transition', '0.3s ease-out');
        $('.notif.n1.sn').html("");
        return true;
    }else{
        $('.register-part1-textinput3').css("border", "2px solid #B41E42");
        $('.register-part1-textinput3').css("transition", "0.3s ease-out");
        $(".notif.n1.sn").html("*Alamat Surel Tidak Valid");
        return false;
    }
}

function tnvalid(){

    if($('.register-part1-textinput5').val() > 11){
        $('.register-part1-textinput5').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput5').css('transition', '0.3s ease-out');
        $('.notif.n1.sn').html("");
        return true;
    }else{
        $('.register-part1-textinput5').css("border", "2px solid #B41E42");
        $('.register-part1-textinput5').css("transition", "0.3s ease-out");
        $(".notif.n1.sn").html("*Alamat Surel Tidak Valid");
        return false;
    }
}

function tnvalid(){

    if($('.register-part1-textinput5').val() != 0){
        $('.register-part1-textinput5').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput5').css('transition', '0.3s ease-out');
        $('.notif.n1.tn').html("");
        return true;
    }else{
        $('.register-part1-textinput5').css("border", "2px solid #B41E42");
        $('.register-part1-textinput5').css("transition", "0.3s ease-out");
        $(".notif.n1.tn").html("*No Telepon Tidak Valid");
        return false;
    }
}

function pnvalid(){

    if($('.register-part1-textinput2').val() != 0){
        $('.register-part1-textinput2').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput2').css('transition', '0.3s ease-out');
        $('.notif.n1.pn').html("");
        return true;
    }else{
        $('.register-part1-textinput2').css("border", "2px solid #B41E42");
        $('.register-part1-textinput2').css("transition", "0.3s ease-out");
        $(".notif.n1.pn").html("*Provinsi Tidak Valid");
        return false;
    }
}

function knvalid(){

    if($('.register-part1-textinput4').val() != 0){
        $('.register-part1-textinput4').css('border', '0.5px solid #4d7520');
        $('.register-part1-textinput4').css('transition', '0.3s ease-out');
        $('.notif.n1.kn').html("");
        return true;
    }else{
        $('.register-part1-textinput4').css("border", "2px solid #B41E42");
        $('.register-part1-textinput4').css("transition", "0.3s ease-out");
        $(".notif.n1.kn").html("*Kabupaten Tidak Valid");
        return false;
    }
}


$(document).ready(function () {
    $(".register-part1-button.button").on("click", function(e) { 
       e.preventDefault();
       
       fnvalid();
       cnvalid();
       snvalid();
       tnvalid();
       pnvalid();
       knvalid();

       if(fnvalid()==true && cnvalid()==true && snvalid()==true && tnvalid()==true && pnvalid()==true && knvalid()==true){
           
       }
    });

    $(".register-part1-text10").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.html"; 
     });

     $(".register-part1-image2").on("click", function(e) { 
        e.preventDefault();
        window.location = "register-part2.html"; 
     });
});