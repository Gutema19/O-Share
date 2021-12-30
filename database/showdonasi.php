<?php

session_start();

require "osharedb.php";


$select = mysqli_query($connect, "CALL case_16_dntket()");
$rowsum = mysqli_num_rows($select);
$no = 1;

if ($rowsum > 0){
    while($row = mysqli_fetch_assoc($select)){

        $num = $no++;
        $dn = $row['donasi'];
        $ctg = $row['kategori'];
        
        $result[] = array(
            "no" => $num,
            "dn" => $dn,
            "ctg" => $ctg);
    }
}else{
    $result['status'] = 0;
}



echo json_encode($result);

?>
