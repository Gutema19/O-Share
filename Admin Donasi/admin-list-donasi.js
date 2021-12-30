function donasidata(){
    $.ajax({
        type: "GET",
        url: "database/showdonasi.php",
        dataType: "JSON",
        success: function (response) {
            var count = response.length;
            
            for(var i = 0; i < count; i++) {
              var dtnsts = '<tr>' + 
                   '<td scope="col">'+response[i].no+'</td>' +
                   '<td scope="col">'+response[i].dn+'</td>' +
                   '<td scope="col">'+response[i].ctg+'</td>' +
                   '<td scope="col"><a href="admin-edit-donasi.php?&id='+response[i].id+'"><img src="public/playground_assets/Icon Left.svg" alt="set" class="setmore"></td>' +
             '</tr>';
              $('.table.table-borderless.pt1 tbody').append(dtnsts);
            }           
        }
    });
}

$(document).ready(function () {
    donasidata();
    $(".admin-list-donasi-button").click(function (e) { 
        e.preventDefault();
        window.location = "admin-home.php";
    });
    $(".admin-list-donasi-button2").click(function (e) { 
        e.preventDefault();
        window.location = "admin-add-donasi.php";
    });
});