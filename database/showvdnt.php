<?php

session_start();

require "osharedb.php";


$select = mysqli_query($connect, "CALL case_15_dntv()");
$rowsum = mysqli_num_rows($select);
$no = 1;

if ($rowsum > 0){
    while($row = mysqli_fetch_assoc($select)){

        $num = $no++;
        $id = $row['id'];
        $fn = $row['nama'];
        $tn = $row['telp'];
        $pn = $row['provinsi'];
        $kn = $row['kabupaten'];
        $dn = $row['donasi'];
        $ctg = $row['kategori'];
        
        $result[] = array(
            "no" => $num,
            "idd" => $id,
            "fn" => $fn,
            "tn"  => $tn,
            "pn" => $pn,
            "kn" => $kn,
            "dn" => $dn,
            "ctg" => $ctg);
    }
}else{
    $result['status'] = 0;
}



echo json_encode($result);

?>
