<?php
     session_start();
     require "osharedb.php";
     $result = array();
     
    $id = $_SESSION['id'];

        $select = mysqli_query($connect, "CALL case_12_dntsts('$id');");
        $rowsum = mysqli_num_rows($select);
        $num = 1;

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $no = $num++;
                $ndtn = $row['nama donasi'];
                $cdtn = $row['kategori donasi'];
                $sdtn = $row['Status Donasi'];
        
                $result[] = array(
                    "num" => $no,
                    "ndtn" => $ndtn,
                    "cdtn" => $cdtn,
                    "sdtn" => $sdtn
                );     
            } 
        } 
        else{
            $result['status'] = 0;
        }
    
    echo json_encode($result);

?>