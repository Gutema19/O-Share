var id_period = location.search.replace('id=', '')[1];
var iddnt = decodeURI(id_period);

function fpvalid(){
    
    if($('.donasi-part2-textinput4').val() != 0){
        $('.donasi-part2-textinput4').css('border', '0.5px solid #4d7520');
        $('.donasi-part2-textinput4').css('transition', '0.3s ease-out');
        $('.notif.n3.fp').html("");
        return true;
    }else{
        $('.donasi-part2-textinput4').css("border", "2px solid #B41E42");
        $('.donasi-part2-textinput4').css("transition", "0.3s ease-out");
        $(".notif.n3.fp").html("*Foto Bukti Tidak Valid");
        return false;
    }
}

function getuser(){
    $.ajax({
        type: "GET",
        url: "database/getform.php",
        dataType: "JSON",
        success: function (response) {
        var count = response.length;

            for(var i = 0; i < count; i++) {
                $('.donasi-part2-textinput').attr('value', response[i].fn).attr('disabled', 'disabled');
                $('.donasi-part2-textinput2').attr('value', response[i].sn).attr('disabled', 'disabled');
                $('.donasi-part2-textinput3').attr('value', response[i].tn).attr('disabled', 'disabled');
            }           
        },
        error: function (response) {
            if(response.status == 0){
                alert("ERROR");
            }
        }
    });
}

function getdnt() {
    $.ajax({
        type: "POST",
        url: "database/getdnt.php",
        dataType: "JSON",
        data:{id_dnt: iddnt},
        success: function (response) {
        var count = response.length;

            for(var i = 0; i < count; i++) {
                $('.donasi-part2-textinput1').attr('value', response[i].ndnt).attr('disabled', 'disabled');
                $('.donasi-part2-textinput5').attr('value', response[i].nctg).attr('disabled', 'disabled');
            }           
        },
        error: function (response) {
            if(response.status == 0){
                alert("ERROR");
            }
        }
    });   
}

function upfoto(){
    var fp =  document.querySelector('input[type=file]').files[0].name;
    var file_data = $('.donasi-part2-textinput4').prop('files')[0]; 
    var form_data = new FormData();
    form_data.append('iddnt', iddnt);
    form_data.append('fp', fp);
    form_data.append('file', file_data);

    $.ajax({
        url : 'database/insregdata2.php',
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (response) {
            if(response.status == 1){
                alert('Success');
                window.location = "donasi.php"; 
            }
        },
        error: function (response) {
                alert('Error');
        }
    });
}

$(document).ready(function () {
    getuser();
    getdnt();
    $('.donasi-part2-button').click(function (e) { 
        fpvalid();

        if(fpvalid()==true){
            upfoto();
        }
        e.preventDefault();
    });
});