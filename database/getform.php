<?php

session_start();

require "osharedb.php";

$iduser =  $_SESSION['id'];

$select = mysqli_query($connect, "CALL case_08_userbio('$iduser')");
$rowsum = mysqli_num_rows($select);

if ($rowsum > 0){
    while($row = mysqli_fetch_assoc($select)){

        $fn = $row['nama lengkap'];
        $cn = $row['nama panggilan'];
        $sn = $row['alamat surel'];
        $tn = $row['telepon'];
        $pn = $row['provinsi'];
        $kn = $row['kabupaten'];
        $jk = $row['gender'];
        $fp = $row['foto'];
        
        $result[] = array(
            "fn" => $fn,
            "cn" => $cn,
            "sn" => $sn,
            "tn"  => $tn,
            "pn" => $pn,
            "kn" => $kn,
            "jk" => $jk,
            "fp" => $fp);
    }
}else{
    $result['status'] = 0;
}



echo json_encode($result);

?>