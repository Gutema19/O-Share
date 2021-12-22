<?php 

    require "osharedb.php";
    $result = array();

    $iddnt = $_POST['id_dnt'];

        $select = mysqli_query($connect, "CALL case_10_dntdt('$iddnt')");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $id_dnt = $row['id donasi'];
                $name_dnt = $row['nama donasi'];
                $id_ctg = $row['id kategori'];
                $name_ctg = $row['nama kategori'];
                
                $result[] = array(
                    "id" => $id_dnt,
                    "ndnt" => $name_dnt,
                    "id_ctg" => $id_ctg,
                    "nctg" => $name_ctg);
            }
    
            
        }   
        echo json_encode($result);

?>