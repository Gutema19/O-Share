
/*var link = document.URL;
var fname = link.substring(link.lastIndexOf('/fname=')+1);
var cname = link.substring(link.lastIndexOf('/cname=')+1);
var sname = link.substring(link.lastIndexOf('/sname=')+1);
var tname = link.substring(link.lastIndexOf('/tname=')+1);
var pname = link.substring(link.lastIndexOf('/pname=')+1);
var kname = link.substring(link.lastIndexOf('/kname=')+1);*/


function showpass(){
    var pass = document.getElementsByTagName('input')[0];
    if (pass.type === "password") {
        pass.setAttribute('type','text');
        document.getElementsByTagName('img')[7].src="public/playground_assets/el_eye-open.svg";
    }else{
        pass.setAttribute('type','password');
        document.getElementsByTagName('img')[7].src="public/playground_assets/el_eye-close.svg";
    }
}

function showpass1(){
    var pass = document.getElementsByTagName('input')[1];
    if (pass.type === "password") {
        pass.setAttribute('type','text');
        document.getElementsByTagName('img')[8].src="public/playground_assets/el_eye-open.svg";
    }else{
        pass.setAttribute('type','password');
        document.getElementsByTagName('img')[8].src="public/playground_assets/el_eye-close.svg";
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

function upfoto(){
    $('input[type=file]').change(function (e) { 
        e.preventDefault();
        var file    = document.querySelector('input[type=file]').files[0];
        //var src = file.createObjectURL();
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(e) {
                // browser completed reading file - display it
                var setfp = e.target.result;

                $('.register-part2-container14').attr('src', setfp);

                
            }
    });
}

function insreg2(){

    var jkname = $('input[name=radio]:checked').val();
    var pass = $('.register-part2-textinput').val();
    var fp =  document.querySelector('input[type=file]').files[0].name;
    var file_data = $('.register-part2-textinput2').prop('files')[0]; 
    var form_data = new FormData();
    form_data.append('jkname', jkname);
    form_data.append('pass', pass);
    form_data.append('fp', fp);
    form_data.append('file', file_data);

    $.ajax({
        url : 'database/instregdata.php',
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (response) {
            if(response.status == 1){
                alert('Success');
                window.location = "login.php"; 
            }
        },
        error: function (response) {
                alert('Error');
        }
    });
}


$(document).ready(function () {

    upfoto();
    $(".register-part2-button.button").on("click", function(e) { 
       e.preventDefault();
       
       jkvalid();
       ksvalid();
       kksvalid();
       fpvalid();
       
       if(jkvalid()==true && ksvalid()==true && kksvalid()==true && fpvalid()==true){
          insreg2();
       }
    });

    $(".register-part2-image2").on("click", function(e) { 
        e.preventDefault();
        window.location = "register-part1.php"; 
     });

     $(".register-part2-text12").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.php"; 
     });

});