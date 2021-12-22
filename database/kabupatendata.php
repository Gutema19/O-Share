<?php 

    require "osharedb.php";
    $result = array();


        $select = mysqli_query($connect, "SELECT*FROM tb_kabupaten");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $id_kb = $row['id_kabupaten'];
                $name_kb = $row['kabupaten'];
                
                $result[] = array(
                    "id" => $id_kb,
                    "npkb" => $name_kb);
            }
    
            
        }   
        echo json_encode($result);

?>