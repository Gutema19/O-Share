function userdata(){
    $.ajax({
        type: "GET",
        url: "database/userdata.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            
            for(var i = 0; i < count; i++) {
              var dtnsts = '<tr>' + 
                   '<td scope="col">'+response[i].no+'</td>' +
                   '<td scope="col" class="cl1"><img src="database/'+response[i].fp+'" alt="fp" class="img-responsive"></td>' +
                   '<td scope="col">'+response[i].fn+'</td>' +
                   '<td scope="col">'+response[i].sn+'</td>' +
                   '<td scope="col">'+response[i].tn+'</td>' +
                   '<td scope="col">'+response[i].pn+'</td>' +
                   '<td scope="col">'+response[i].kn+'</td>' +
             '</tr>';
              $('.table.table-borderless.pt1 tbody').append(dtnsts);
            }           
        }
    });
}

$(document).ready(function () {
    userdata();
    $(".admin-pengguna-button").click(function (e) { 
        e.preventDefault();
        window.location = "admin-home.php";
    });
    $(".admin-pengguna-button1").click(function (e) { 
        e.preventDefault();
        window.location.href= "database/logout.php";
    });
});