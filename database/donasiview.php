<?php 

    require "osharedb.php";
    $result = array();

    $dnsid = $_POST['id'];

    $select = mysqli_query($connect, "CALL case_06_showdns('$dnsid')");
    $rowsum = mysqli_num_rows($select);

    if ($rowsum > 0){
        while($row = mysqli_fetch_assoc($select)){
            
            $id_dns = $row['id'];
            $nama_dns = $row['nama'];
            $note = $row['keterangan'];
            $prs = $row['presentase'];
            $jml = $row['jumlah'];
            $pic = base64_encode($row['foto']);
            $mny = $row['uang'];
    
            $result[] = array(
                "id" => $id_dns,
                "nama" => $nama_dns,
                "nt" => $note,
                "ps" => $prs,
                "sum" => $jml,
                "pc" => $pic,
                "pis" => $mny);
        }  
   
    } 
    echo json_encode($result);

?>
