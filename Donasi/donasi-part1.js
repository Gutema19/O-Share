var id_period = location.search.replace('id=', '')[1];


function setdns(){
    $.ajax({
        type: "POST",
        url: "database/donasiview.php",
        data: {id: id_period},
        dataType: "JSON",
        success: function (response) {
            var count = response.length;

            for(var i = 0; i < count; i++) {
                $('.donasi-part1-text03').html(response[i].nama);
                $('.donasi-part1-image04').attr('src', 'data:image/jpeg;charset=utf-8;base64,'+response[i].pc+'');
                $('.donasi-part1-text04').html(response[i].sum);
                $('.donasi-part1-text05').html('Rp.'+response[i].pis);
                $('.donasi-part1-text11').html(response[i].nt);
            }
        }
    });
}

function back(){
    $('.bullet-menu.bck').click(function (e) { 
        e.preventDefault();
        window.location = "donasi.php";
    });
}

$(document).ready(function () {
    setdns();
    back();
});