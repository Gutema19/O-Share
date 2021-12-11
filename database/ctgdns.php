<?php 

    require "osharedb.php";
    $result = array();


        $select = mysqli_query($connect, "SELECT*FROM tb_kategori");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $id_ctg = $row['id_kategori'];
                $name_ctg = $row['nama_kategori'];
                
                $result[] = array(
                    "id" => $id_ctg,
                    "nctg" => $name_ctg);
            }
    
            
        }   
        echo json_encode($result);

?>