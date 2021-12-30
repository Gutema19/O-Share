<?php 

    require "osharedb.php";
    $result = array();
    $iddns = $_POST['ctg'];

        $select = mysqli_query($connect, "CALL case_05_sortctg('+$iddns+')");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $id_dns = $row['id'];
                $nama_dns = $row['nama'];
                $note = $row['keterangan'];
                $prs = $row['presentase'];
                $jml = $row['jumlah'];
                $pic = $row['foto'];
        
                $result[] = array(
                    "id" => $id_dns,
                    "nama" => $nama_dns,
                    "nt" => $note,
                    "ps" => $prs,
                    "sum" => $jml,
                    "pc" => $pic);
            }  
        }  
        echo json_encode($result);

?>