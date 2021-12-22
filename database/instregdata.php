<?php
     session_start();
     require "osharedb.php";
     $result = array();
     
    $fn = $_SESSION['fn'];
    $cn = $_SESSION['cn'];
    $sn = $_SESSION['sn'];
    $tn = $_SESSION['tn'];
    $pn = $_SESSION['pn'];
    $kn = $_SESSION['kn'];
    $jk = $_POST['jkname'];
    $ps = $_POST['pass'];
    $fp = $_POST['fp'];

    $target_directory = "Picture/";
    $target_file = $target_directory.basename($_FILES["file"]["name"]);   //name is to get the file name of uploaded file
    //$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $newfilename = $target_directory.$fp;


    if(move_uploaded_file($_FILES["file"]["tmp_name"],$newfilename)){
        
        $select = mysqli_query($connect, "CALL case_02_insreg('$fn','$cn','$sn','$tn','$pn','$kn','$jk','$ps','$newfilename');");
        $rowsum = mysqli_num_rows($select);
    
        if ($rowsum > 0){
            $result['status'] = 1;
           
        }  
        else{
            $result['status'] = 0;
        }
    }
    echo json_encode($result);

?>