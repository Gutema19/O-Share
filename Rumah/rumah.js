function dnsdata(){
    $.ajax({
        type: "GET",
        url: "database/hdonasiprc.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            for (var i = 0; i < count; i++) {
                var card = '<div class="donasi-container21">' +
                '<div class="hcard">' +
                '<img src="database/'+response[i].pc+'" alt="pic">' +
                '</div>' +
                '<div class="ccard">' +
                    '<h2>'+response[i].nama+'</h2>' +
                    '<p>'+response[i].nt+'</p>' +
                '<div class="bar">' +
                    '<div class="progressbar" style="width:'+response[i].ps+'%;"></div>' +
                '</div>' +
                '<div class="fcard">' +
                    '<p>Jumlah Donatur : '+response[i].sum+'</p>' +
                    '<button type="button"><a href="donasi-part1.php?id='+response[i].id+'"><img src="Public/playground_assets/ic_round-read-more.svg" alt="read more"></button>' +
                '</div>' + 
                '</div>' +
            '</div>';
            $('.rumah-container26').append(card);
            }
        }
    });
}

$(document).ready(function() {
    dnsdata();

    $(".rumah-navlink.button").click(function (e) { 
        e.preventDefault();
       window.location = "donasi.php"; 
    });
    $(".rumah-navlink.button.pt1").click(function (e) { 
        e.preventDefault();
       window.location = "donasi.php"; 
    });
});