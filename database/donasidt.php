<?php 

    require "osharedb.php";
    $result = array();

    $idnt = $_POST['dnt'];

        $select = mysqli_query($connect, "SELECT*FROM tb_donasi WHERE id_donasi = '$idnt';");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum > 0){
            while($row = mysqli_fetch_assoc($select)){
                
                $dn = $row['nama_donasi'];
                $ctgn = $row['id_kategori'];
                $ntdn = $row['keterangan_donasi'];
                $fp = $row['gambar'];
                
                $result[] = array(
                    "dn" => $dn,
                    "ctgn" => $ctgn,
                    "ntdn" => $ntdn,
                    "fp" => $fp);
            }
    
            
        }   
        echo json_encode($result);

?>