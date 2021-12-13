function sortctg(){

    $('.donasi-button1.button').click(function (e) { 
        e.preventDefault();

        if($('.donasi-textinput1.input').val() != 0){
            $.ajax({
                type: "POST",
                url: "database/sortdns.php",
                data: {
                      ctg: $('.donasi-textinput1.input').val()
                },
                dataType: "JSON",
                success: function (response) {
                    var count = response.length;
                    $('.donasi-container20').empty();
                    var tm = 300;
                    for (var i = 0; i < count; i++) {
                        var card = '<div class="donasi-container21" data-aos="fade-up" data-aos-delay="'+tm+'">' +
                        '<div class="hcard">' +
                        '<img src="data:image/jpeg;charset=utf-8;base64,'+response[i].pc+' alt="pic">' +
                        '</div>' +
                        '<div class="ccard">' +
                            '<h2>'+response[i].nama+'</h2>' +
                            '<p>'+response[i].nt+'</p>' +
                        '<div class="bar">' +
                            '<div class="progressbar" style="width:'+response[i].ps+'%;"></div>' +
                        '</div>' +
                        '<div class="fcard">' +
                            '<p>Jumlah Donatur : '+response[i].sum+'</p>' +
                            '<button type="button"><a href="donasi-part1php?id='+response[i].id+'"><img src="Public/playground_assets/ic_round-read-more.svg" alt="read more"></button>' +
                        '</div>' + 
                        '</div>' +
                    '</div>';
                    tm+=50;
                    $('.donasi-container20').append(card);
            }
                    
                }
            });
        }else{
            $('.donasi-container20').empty();
            dnsdata();
        } 
    });
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

                $(".donasi-textinput1.input").append(ctgdb);
            }
        }
    });
}

function dnsdata(){
    $.ajax({
        type: "GET",
        url: "database/donasiprc.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            var tm = 300;
            for (var i = 0; i < count; i++) {
                var card = '<div class="donasi-container21" data-aos="fade-up" data-aos-delay="'+tm+'">' +
                '<div class="hcard">' +
                '<img src="data:image/jpeg;base64,'+response[i].pc+' alt="pic">' +
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
            tm+=50;
            $('.donasi-container20').append(card);
            }
        }
    });
}


$(document).ready(function () {
    dnsdata();
    ctgdata();
    sortctg();
});