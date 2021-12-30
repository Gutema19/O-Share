var id_period = location.search.replace('&id=', '')[1];
var iddnt = decodeURI(id_period);

function dnvalid(){
    var valid = /^[a-zA-Z ]{1,}$/;

    if( $('.admin-edit-donasi-textinput').val() != 0 && $('.admin-edit-donasi-textinput').val().match(valid)){
        $('.admin-edit-donasi-textinput').css('border', '0.5px solid #4d7520');
        $('.admin-edit-donasi-textinput').css('transition', '0.3s ease-out');
        $('.notif.fd').html("");
        return true;
    }else{
        $('.admin-edit-donasi-textinput').css("border", "2px solid #B41E42");
        $('.admin-edit-donasi-textinput').css("transition", "0.3s ease-out");
        $(".notif.fd").html("*Nama Donasi Tidak Valid");
        return false;
    }
}

function ctgdvalid(){

    if($('.admin-edit-donasi-textinput1').val() != 0){
        $('.admin-edit-donasi-textinput1').css('border', '0.5px solid #4d7520');
        $('.admin-edit-donasi-textinput1').css('transition', '0.3s ease-out');
        $('.notif.ctgd').html("");
        return true;
    }else{
        $('.admin-edit-donasi-textinput1').css("border", "2px solid #B41E42");
        $('.admin-edit-donasi-textinput1').css("transition", "0.3s ease-out");
        $(".notif.ctgd").html("*Kategori Donasi Tidak Valid");
        return false;
    }
}

function ntdvalid(){

    if($('.admin-edit-donasi-textarea').val() != 0){
        $('.admin-edit-donasi-textarea').css('border', '0.5px solid #4d7520');
        $('.admin-edit-donasi-textarea').css('transition', '0.3s ease-out');
        $('.notif.ntd').html("");
        return true;
    }else{
        $('.admin-edit-donasi-textarea').css("border", "2px solid #B41E42");
        $('.admin-edit-donasi-textarea').css("transition", "0.3s ease-out");
        $(".notif.ntd").html("*Keterangan Donasi Tidak Valid");
        return false;
    }
}
function fdntvalid(){

    if($('.admin-edit-donasi-textinput2').val() != 0){
        $('.admin-edit-donasi-textinput2').css('border', '0.5px solid #4d7520');
        $('.admin-edit-donasi-textinput2').css('transition', '0.3s ease-out');
        $('.notif.fdnt').html("");
        return true;
    }else{
        $('.admin-edit-donasi-textinput2').css("border", "2px solid #B41E42");
        $('.admin-edit-donasi-textinput2').css("transition", "0.3s ease-out");
        $(".notif.fdnt").html("*Foto Donasi Tidak Valid");
        return false;
    }
}

function ctgdata(){

    $.ajax({
        type: "GET",
        url: "database/ctgdns.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            
            for(var i=0; i<count; i++) {
                var ctgdb = "<option value='"+response[i].id+"'>"+response[i].nctg+"</option>";

                $(".admin-edit-donasi-textinput1").append(ctgdb);
            }
        }
    });
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

                $('.admin-edit-donasi-container15').attr('src', setfp);

                
            }
    });
}
function getdata(){
    $.ajax({
        type: "POST",
        url: "database/donasidt.php",
        data: {dnt: iddnt},
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            ctgdata();
            for(var i = 0; i < count; i++) {
             
               $('.admin-edit-donasi-textinput').attr('value', response[i].dn);
               $(".admin-edit-donasi-textinput1 option[value='"+response[i].ctgn+"']").prop('selected', true);
               $('.admin-edit-donasi-textarea').html(response[i].ntdn);
               $('.admin-edit-donasi-container15').attr('src', 'database/'+response[i].fp);
            }
        }
    });
}
function editdata(){
    var dn = $('.admin-edit-donasi-textinput').val();
    var ctgn = $('.admin-edit-donasi-textinput1').val();
    var ntd = $('.admin-edit-donasi-textarea').val();
    var fp =  document.querySelector('input[type=file]').files[0].name;
    var file_data = $('.admin-edit-donasi-textinput2').prop('files')[0]; 
    var form_data = new FormData();
    form_data.append('id', iddnt)
    form_data.append('dn', dn);
    form_data.append('ctgn', ctgn);
    form_data.append('ntd', ntd)
    form_data.append('fp', fp);
    form_data.append('file', file_data);
    
    $.ajax({
        type: "POST",
        url: "database/editdntdt.php",
        data: form_data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function (response) {
            if(response.status == 1){
                alert('Success');
            }   
        }
    });
}
function deldata(){
    $.ajax({
        type: "POST",
        url: "database/deldonasi.php",
        data: {dnt: iddnt},
        dataType: "JSON",
        success: function (response) {
           window.location = "admin-list-donasi.php";   
        }
    });
}

$(document).ready(function () {
    upfoto();
    ctgdata();
    getdata();
    $(".admin-edit-donasi-button3").click(function (e) { 
        e.preventDefault();
        dnvalid();
        ctgdvalid();
        ntdvalid();
        fdntvalid();

        if(dnvalid()==true && ctgdvalid()==true && ntdvalid()== true && fdntvalid()==true){
            editdata();
        }
    });
    $(".admin-edit-donasi-button2").click(function (e) { 
        e.preventDefault();
        deldata();
    });
    $(".admin-add-donasi-button").click(function (e) { 
        e.preventDefault();
        window.location = "admin-list-donasi.php";
    });
});