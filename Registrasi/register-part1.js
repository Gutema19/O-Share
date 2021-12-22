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

function provdt(){
    $.ajax({
        type: "GET",
        url: "database/provinsidata.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            
            for(var i=0; i<count; i++) {
                var prvdt = "<option value='"+response[i].id+"' name='Pname' class='register-part1-'>"+response[i].nprv+"</option>";
 
                $(".register-part1-textinput2").append(prvdt);
            }
            kabdata();

        }
    });
}

function kabdata(){
    $('.register-part1-textinput2').change(function (e) { 
        $(".register-part1-textinput4").empty();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "database/kabdata.php",
            data: {id_prov: $(".register-part1-textinput2").val()},
            dataType: "JSON",
            success: function (response) {
                var count = response.length;
                
                for(var i=0; i<count; i++) {
                    var kbtdt = "<option value='"+response[i].id+"'>"+response[i].nkab+"</option>";
    
                    $(".register-part1-textinput4").append(kbtdt);
                }
            }
        });
    });
}

function savedtpt1(){
    $.ajax({
        type: "POST",
        url: "database/insregdata0.php",
        data:{
            fname: $('.register-part1-textinput').val(),
            cname: $('.register-part1-textinput1').val(),
            sname: $('.register-part1-textinput3').val(),
            tname: $('.register-part1-textinput5').val(),
            pname: $('.register-part1-textinput2').val(),
            kname: $('.register-part1-textinput4').val()
        },
        dataType: "JSON",
        success: function (response) {
            if(response.status==1){
                window.location = "register-part2.php"; 
            }
    },
        error: function (response) {
                alert('Error');
        }
    });
}

$(document).ready(function () {
    provdt();

    $(".register-part1-button.button").on("click", function(e) { 
       e.preventDefault();
       
       var fn = fnvalid();
       var cn = cnvalid();
       var sn = snvalid();
       var tn = tnvalid();
       var pn = pnvalid();
       var kn = knvalid();


       if(fn==true && cn==true && sn==true && tn==true && pn==true && kn==true){
            savedtpt1(); 
       }
    });

    $(".register-part1-text10").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.php"; 
     });


});