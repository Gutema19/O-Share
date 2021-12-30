<?php 
    session_start();

    $result = array(); 
    require "osharedb.php";
    
    $iddnt = $_POST['dnt'];
    
    $select = mysqli_query($connect, "DELETE FROM tb_donasi WHERE id_donasi = '$iddnt'");
    
     
    echo json_encode($result);
    
?>