var id_period = location.search.replace('&id=', '')[1];
var iddnt = decodeURI(id_period);

function donasidata(){
    $.ajax({
        type: "POST",
        url: "database/vdnt.php",
        data: {dnt: iddnt},
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            
            for(var i = 0; i < count; i++) {
               var pic = "<img src='database/"+response[i].pic+"' alt='pic' class='admin-donasi-pt2-container07' />";

               $('.admin-donasi-pt2-textinput').attr('value', response[i].fn).attr('disabled', 'disabled');
               $(".admin-donasi-pt2-textinput2 option[value='"+response[i].sts+"']").prop('selected', true);
               $('.admin-donasi-pt2-textinput1').attr('value', response[i].dn).attr('disabled', 'disabled');
               $('.admin-donasi-pt2-textinput4').attr('value', response[i].pic).attr('disabled', 'disabled');
               $('.admin-donasi-pt2-textinput3').attr('value', response[i].tn).attr('disabled', 'disabled');
               $('.admin-donasi-pt2-textinput5').attr('value', response[i].ctg).attr('disabled', 'disabled');

               $(".admin-donasi-pt2-container08").append(pic);
            }           
        }
    });
}

function upstatus(){
    $(".admin-donasi-pt2-button2").click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "database/upsts.php",
            data: {dnt: iddnt,
                   sts: $('.admin-donasi-pt2-textinput2').val()},
            dataType: "JSON",
            success: function (response) {
                window.location = 'admin-donasi-pt1.php';
            }
        });
    });
}

$(document).ready(function () {
    donasidata();
    upstatus();
    $(".admin-donasi-pt2-button").click(function (e) { 
        e.preventDefault();
        window.location = "admin-donasi-pt1.php";
    });
});