<?php
    session_start();
    require "osharedb.php";

    $result = array();

    $fn = $_POST['fname'];
    $cn = $_POST['cname'];
    $sn = $_POST['sname'];
    $tn = $_POST['tname'];
    $pn = $_POST['pname'];
    $kn = $_POST['kname'];

    $_SESSION['fn'] = $fn;
    $_SESSION['cn'] = $cn;
    $_SESSION['sn'] = $sn;
    $_SESSION['tn'] = $tn;
    $_SESSION['pn'] = $pn;
    $_SESSION['kn'] = $kn;
    
    $result['status'] = 1;
    echo json_encode($result);
?>