function ksvalid(){

    if($('.lupa-sandi-part1-textinput').val() != 0){
        $('.lupa-sandi-part1-textinput').css('border', '0.5px solid #4d7520');
        $('.lupa-sandi-part1-textinput').css('transition', '0.3s ease-out');
        $('.notif.n3.sn').html("");
        return true;
    }else{
        $('.lupa-sandi-part1-textinput').css("border", "2px solid #B41E42");
        $('.lupa-sandi-part1-textinput').css("transition", "0.3s ease-out");
        $(".notif.n3.sn").html("*Email Tidak Valid");
        return false;
    }
}

function passvalid(){
    $.ajax({
        type: "POST",
        url: "database/valpass.php",
        data: {surel: $('.lupa-sandi-part1-textinput').val()},
        dataType: "JSON",
        success: function (response) {
            if(response.status == 1){
                alert('Success');
                window.location = "lupa-sandi-part2.php";   
            }
        },
        error: function (response) {
            $('.lupa-sandi-part1-textinput').css("border", "2px solid #B41E42");
            $('.lupa-sandi-part1-textinput').css("transition", "0.3s ease-out");
            $(".notif.n3.sn").html("*Email Tidak Valid");
        }
    });
}

$(document).ready(function () {
    $(".lupa-sandi-part1-button").on("click", function(e) { 
        e.preventDefault();
        ksvalid();

        if(ksvalid()==true){
            passvalid();
        }
     });

     $(".lupa-sandi-part1-text1").on("click", function(e) { 
        e.preventDefault();
        window.location = "login.php";
     });
});