<?php 

    require "osharedb.php";
    $result = array();

    $select = mysqli_query($connect, "CALL case_04_donasi");
    $rowsum = mysqli_num_rows($select);
    $a = 0;

    if ($rowsum > 0){
        while($row = mysqli_fetch_assoc($select)){
            
            $id_dns = $row['id'];
            $nama_dns = $row['nama'];
            $note = $row['keterangan'];
            $prs = $row['presentase'];
            $jml = $row['jumlah'];
            $pic = base64_encode($row['foto']);
    
            $result[] = array(
                "id" => $id_dns,
                "nama" => $nama_dns,
                "nt" => $note,
                "ps" => $prs,
                "sum" => $jml,
                "pc" => $pic);
        }  
   
    }   

     else{
        $result['status'] = 0;
     }
     
     echo json_encode($result);
     
?>