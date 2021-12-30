function srcdnt(){
    $.ajax({
        type: "POST",
        url: "database/srcdata.php",
        data: {src: $('.src').val()},
        dataType: "JSON",
        success: function (response) {
            if(response.status == 1){
                window.location = 'hasil-cari.php';
            }
        }
    });
}

$(document).ready(function () {

    var tap = 0;
    var listmenu =  '<button class="bullet-menu pt1 home" type="button" data-aos="fade-down" data-aos-delay="400">' +
        '<img src="public/playground_assets/fluent_home-20-filled.svg" alt="Home Page">' +
        '</button><br>' +
        '<button class="bullet-menu pt1 dnt" type="button" data-aos="fade-down" data-aos-delay="500">' +
            '<img src="public/playground_assets/healthicons_child-care.svg" alt="Donate Page">' +
        '</button><br>' +
        '<button class="bullet-menu pt1 user" type="button" data-aos="fade-down" data-aos-delay="600">' +
            '<img src="public/playground_assets/fluent_inprivate-account-24-filled.svg" alt="User Page">' +
        '</button><br>' +
        '<button class="bullet-menu pt1 about" type="button" data-aos="fade-down" data-aos-delay="700">' +
        '<img src="public/playground_assets/cib_about-me.svg" alt="About Page">' +
        '</button><br>';

    $('.src-btn').click(function (e) { 
        e.preventDefault();
        if($('.src').val() != 0){
            srcdnt();
        }
    });

    $('button.bullet-menu').click(function (e) { 
        e.preventDefault();
        
        if (tap == 0){
            $('.list-menu').append(listmenu);
            tap = 1;
        }else{
            $('.list-menu').empty();
            tap = 0;
        }
        $('.bullet-menu.pt1.home').click(function (e) { 
            e.preventDefault();
            window.location = "rumah.php";
        });

        $('.bullet-menu.pt1.dnt').click(function (e) { 
            e.preventDefault();
            window.location = "donasi.php";
        });

        $('.bullet-menu.pt1.user').click(function (e) { 
            e.preventDefault();
            window.location = "pengguna.php";
        });

        $('.bullet-menu.pt1.about').click(function (e) { 
            e.preventDefault();
            window.location = "tentang.php";
        });
    });
   
});