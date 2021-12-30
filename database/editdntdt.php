<?php

    session_start();
     require "osharedb.php";
     $result = array();
    
    $iddnt = $_POST['id'];
    $dnt = $_POST['dn'];
    $ctg = $_POST['ctgn'];
    $ntd = $_POST['ntd'];
    $fp = $_POST['fp'];

    $target_directory = "Picture Donation/";
    $target_file = $target_directory.basename($_FILES["file"]["name"]);  
    $newfilename = $target_directory.$fp;


    if(move_uploaded_file($_FILES["file"]["tmp_name"],$newfilename)){

        $select = mysqli_query($connect, "CALL case_18_editdnt('$dnt','$ctg','$ntd','$newfilename','$iddnt')");
    
        $result['status'] = 1;       


    }
    echo json_encode($result);

?>