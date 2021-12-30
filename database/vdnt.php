<?php

session_start();

require "osharedb.php";
$vdntid = $_POST['dnt'];

$select = mysqli_query($connect, "CALL case_17_vdonasi('$vdntid')");
$rowsum = mysqli_num_rows($select);

if ($rowsum > 0){
    while($row = mysqli_fetch_assoc($select)){

        $fn = $row['nama'];
        $tn = $row['telp'];
        $dn = $row['donasi'];
        $ctg = $row['kategori'];
        $sts = $row['status'];
        $pic = $row['bukti'];
        
        $result[] = array(
            "fn" => $fn,
            "tn"  => $tn,
            "dn" => $dn,
            "ctg" => $ctg,
            "sts" => $sts,
            "pic" => $pic,);
    }
}else{
    $result['status'] = 0;
}



echo json_encode($result);

?>
