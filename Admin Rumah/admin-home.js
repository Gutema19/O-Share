$(document).ready(function () {
    $(".admin-home-button1").click(function (e) { 
        e.preventDefault();
        window.location = "admin-pengguna.php";
    });
    $(".admin-home-button2").click(function (e) { 
        e.preventDefault();
        window.location = "admin-donasi-pt1.php";
    });
    $(".admin-home-button3").click(function (e) { 
        e.preventDefault();
        window.location = "admin-list-donasi.php";
    });
    $(".admin-home-button").click(function (e) { 
        e.preventDefault();
        window.location.href= "database/logout.php";
    });
});