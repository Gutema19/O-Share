<?php 
    session_start();
    require "osharedb.php";
    $result = array();

    $iduser =  $_SESSION['id'];
    $fn = $_POST['fn'];
    $cn = $_POST['cn'];
    $sn = $_POST['sn'];
    $tn = $_POST['tn'];
    $pn = $_POST['pn'];
    $kn = $_POST['kn'];
    $jk = $_POST['jk'];

    $select = mysqli_query($connect, "CALL case_09_upbio('$fn','$cn','$sn','$tn','$pn','$kn','$jk','$iduser')");
    $rowsum = mysqli_num_rows($select);

    if ($rowsum > 0){
      $result['status'] = 1; 
    }   
    else{
      $result['status'] = 0;
    }
     
     echo json_encode($result);
     
?>