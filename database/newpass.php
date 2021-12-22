<?php 
    session_start();
    require "osharedb.php";
    $result = array();

    $iduser =  $_SESSION['iduser'];
    $vpass = $_POST['npass'];

    $select = mysqli_query($connect, "CALL case_03_forpass1('$vpass','$iduser')");
    $rowsum = mysqli_num_rows($select);

    if ($rowsum > 0){
      $result['status'] = 1; 
    }   
    else{
      $result['status'] = 0;
    }
     
     echo json_encode($result);
     
?>