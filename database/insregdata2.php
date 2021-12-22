<?php
     session_start();
     require "osharedb.php";
     $result = array();
     
    $id = $_SESSION['id'];
    $iddnt = $_POST['iddnt'];
    $fp = $_POST['fp'];

    $target_directory = "Picture Donation/";
    $target_file = $target_directory.basename($_FILES["file"]["name"]);  
    $newfilename = $target_directory.$fp;


    if(move_uploaded_file($_FILES["file"]["tmp_name"],$newfilename)){

        $select = mysqli_query($connect, "CALL case_11_trsdnt('$id','$iddnt','$newfilename');");
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