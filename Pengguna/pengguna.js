function fnvalid(){
    var valid = /^[a-zA-Z ]{1,}$/;

    if( $('.pengguna-textinput').val() != 0 && $('.pengguna-textinput').val().match(valid)){
        $('.pengguna-textinput').css('border', '0.5px solid #4d7520');
        $('.pengguna-textinput').css('transition', '0.3s ease-out');
        $('.notif.n2.fn').html("");
        return true;
    }else{
        $('.pengguna-textinput').css("border", "2px solid #B41E42");
        $('.pengguna-textinput').css("transition", "0.3s ease-out");
        $(".notif.n2.fn").html("*Nama lengkap Tidak Valid");
        return false;
    }
}

function cnvalid(){
    var valid = /^[a-zA-Z ]{1,}$/;

    if($('.pengguna-textinput1').val() != 0 && $('.pengguna-textinput1').val().match(valid) ){
        $('.pengguna-textinput1').css('border', '0.5px solid #4d7520');
        $('.pengguna-textinput1').css('transition', '0.3s ease-out');
        $('.notif.n2.cn').html("");
        return true;
    }else{
        $('.pengguna-textinput1').css("border", "2px solid #B41E42");
        $('.pengguna-part1-textinput1').css("transition", "0.3s ease-out");
        $(".notif.n2.cn").html("*Nama Panggilan Tidak Valid");
        return false;
    }
}

function snvalid(){

    if($('.pengguna-textinput3').val() != 0){
        $('.pengguna-textinput3').css('border', '0.5px solid #4d7520');
        $('.pengguna-textinput3').css('transition', '0.3s ease-out');
        $('.notif.n2.sn').html("");
        return true;
    }else{
        $('.pengguna-textinput3').css("border", "2px solid #B41E42");
        $('.pengguna-textinput3').css("transition", "0.3s ease-out");
        $(".notif.n2.sn").html("*Alamat Surel Tidak Valid");
        return false;
    }
}
function tnvalid(){

    if($('.pengguna-textinput5').val() != 0){
        $('.pengguna-textinput5').css('border', '0.5px solid #4d7520');
        $('.pengguna-textinput5').css('transition', '0.3s ease-out');
        $('.notif.n2.tn').html("");
        return true;
    }else{
        $('.pengguna-textinput5').css("border", "2px solid #B41E42");
        $('.pengguna-textinput5').css("transition", "0.3s ease-out");
        $(".notif.n2.tn").html("*No Telepon Tidak Valid");
        return false;
    }
}

function pnvalid(){

    if($('.pengguna-textinput2').val() != 0){
        $('.pengguna-textinput2').css('border', '0.5px solid #4d7520');
        $('.pengguna-textinput2').css('transition', '0.3s ease-out');
        $('.notif.n2.pn').html("");
        return true;
    }else{
        $('.pengguna-textinput2').css("border", "2px solid #B41E42");
        $('.pengguna-textinput2').css("transition", "0.3s ease-out");
        $(".notif.n2.pn").html("*Provinsi Tidak Valid");
        return false;
    }
}

function knvalid(){

    if($('.pengguna-textinput4').val() != 0){
        $('.pengguna-textinput4').css('border', '0.5px solid #4d7520');
        $('.pengguna-textinput4').css('transition', '0.3s ease-out');
        $('.notif.n2.kn').html("");
        return true;
    }else{
        $('.pengguna-textinput4').css("border", "2px solid #B41E42");
        $('.pengguna-textinput4').css("transition", "0.3s ease-out");
        $(".notif.n2.kn").html("*Kabupaten Tidak Valid");
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
 
                $(".pengguna-textinput2").append(prvdt);
            }
            kabdata();

        }
    });
}

function kabdata(){
    $('.pengguna-textinput2').change(function (e) { 
        $(".pengguna-textinput4").empty();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "database/kabdata.php",
            data: {id_prov: $(".pengguna-textinput2").val()},
            dataType: "JSON",
            success: function (response) {
                var count = response.length;
                
                for(var i=0; i<count; i++) {
                    var kbtdt = "<option value='"+response[i].id+"'>"+response[i].nkab+"</option>";
    
                    $(".pengguna-textinput4").append(kbtdt);
                }
            }
        });
    });
}

function kaball(){
    $.ajax({
        type: "GET",
        url: "database/kabupatendata.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            
            for(var i=0; i<count; i++) {
                var kbdt = "<option value='"+response[i].id+"'>"+response[i].npkb+"</option>";
 
                $(".pengguna-textinput4").append(kbdt);
            }

        }
    });   
}

function getbio(){
    kaball();
    provdt();
    
    $.ajax({
        type: "GET",
        url: "database/getform.php",
        dataType: "JSON",
        success: function (response) {
        var count = response.length;

            for(var i = 0; i < count; i++) {
                $('input:radio[name=radio]').filter('[value='+response[i].jk+']').prop('checked', true);
                $('.pengguna-textinput').attr('value', response[i].fn);
                $('.pengguna-textinput1').attr('value', response[i].cn);
                $('.pengguna-text02').html(''+response[i].cn);
                $('.pengguna-textinput3').attr('value', response[i].sn);
                $('.pengguna-textinput5').attr('value', response[i].tn);
                $(".pengguna-textinput2 option[value='"+response[i].pn+"']").prop('selected', true);
                $(".pengguna-textinput4 option[value='"+response[i].kn+"']").prop('selected', true);
                $('img.pengguna-container09').attr('src', 'database/'+response[i].fp);
            }           
        },
        error: function (response) {
            if(response.status == 0){
                alert("ERROR");
            }
        }
    });
}

function upbio(){
    $.ajax({
        type: "POST",
        url: "database/upbiodata.php",
        data:{
            fn: $('.pengguna-textinput').val(),
            cn: $('.pengguna-textinput1').val(),
            sn: $('.pengguna-textinput3').val(),
            tn: $('.pengguna-textinput5').val(),
            pn: $('.pengguna-textinput2').val(),
            kn: $('.pengguna-textinput4').val(),
            jk: $('input:radio[name=radio]:checked').val()
        },
        dataType: "JSON",
        success: function (response) {
            
        }
    });
}

function stsdata(){
    $.ajax({
        type: "GET",
        url: "database/showdnt.php",
        dataType: "JSON",
        success: function (response) {
        var count = response.length;
        
            for(var i = 0; i < count; i++) {
              var dtnsts = '<tr data-aos="fade-up" data-aos-delay="350">' +
                                '<th scope="row">'+response[i].num+'</th>' +
                                    '<td>'+response[i].ndtn+'</td>' +
                                    '<td>'+response[i].cdtn+'</td>' +
                                    '<td>'+response[i].sdtn+'</td>' +
                            '</tr>';
              $('.table.table-borderless.pt1 tbody').append(dtnsts);
            }           
        },
        error: function (response) {
            if(response.status == 0){
                alert("ERROR");
            }
        }
    });
}

$(document).ready(function () {
    stsdata();
    getbio();
    
    $('.pengguna-container05').click(function (e) { 
        e.preventDefault();
        window.location.href= "database/logout.php";
    });
    $(".pengguna-button1.button").on("click", function(e) { 
        
        var fn = fnvalid();
        var cn = cnvalid();
        var sn = snvalid();
        var tn = tnvalid();
        var pn = pnvalid();
        var kn = knvalid();
 
 
        if(fn==true && cn==true && sn==true && tn==true && pn==true && kn==true){
             //savedtpt1(); 
             upbio();
        }
    });
});