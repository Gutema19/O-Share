<?php

    require "osharedb.php";
    $result = array();
    $idprv = $_POST['id_prov'];

        $select = mysqli_query($connect, "SELECT*FROM tb_kabupaten where id_provinsi ='$idprv'");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $id_kab = $row['id_kabupaten'];
                $name_kab = $row['kabupaten'];
                
                $result[] = array(
                    "id" => $id_kab,
                    "nkab" => $name_kab);
            }
    
            
        }   
        echo json_encode($result);

?>
