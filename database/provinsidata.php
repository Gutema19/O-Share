<?php 

    require "osharedb.php";
    $result = array();


        $select = mysqli_query($connect, "SELECT*FROM tb_provinsi");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $id_prv = $row['id_provinsi'];
                $name_prv = $row['provinsi'];
                
                $result[] = array(
                    "id" => $id_prv,
                    "nprv" => $name_prv);
            }
    
            
        }   
        echo json_encode($result);

?>