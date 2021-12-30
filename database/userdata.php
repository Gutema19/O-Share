<?php

session_start();

require "osharedb.php";

$select = mysqli_query($connect, "CALL case_14_userdata()");
$rowsum = mysqli_num_rows($select);
$no = 1;

if ($rowsum > 0){
    while($row = mysqli_fetch_assoc($select)){
        
        $num = $no++;
        $fn = $row['nama'];
        $sn = $row['surel'];
        $tn = $row['telp'];
        $pn = $row['provinsi'];
        $kn = $row['kabupaten'];
        $fp = $row['foto'];
        
        $result[] = array(
            "no" => $num,
            "fn" => $fn,
            "sn" => $sn,
            "tn"  => $tn,
            "pn" => $pn,
            "kn" => $kn,
            "fp" => $fp);
    }
}else{
    $result['status'] = 0;
}



echo json_encode($result);

?>