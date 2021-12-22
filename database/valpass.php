<?php 
    session_start();
    require "osharedb.php";
    $result = array();

    $vsurel = $_POST['surel'];
    $select = mysqli_query($connect, "CALL case_03_forpass('$vsurel')");
    $rowsum = mysqli_num_rows($select);

    if ($rowsum > 0){
      $result['status'] = 1; 
      
      while($row = mysqli_fetch_assoc($select)){
        $iduser = $row['id'];
        }
        $_SESSION['iduser'] = $iduser;
    }   
    else{
      $result['status'] = 0;
    }
     
     echo json_encode($result);
     
?>