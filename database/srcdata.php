<?php 
    session_start();

    $result = array();

    $src = $_POST['src'];
    $_SESSION['src'] = $src;

    $result['status'] = 1;
    echo json_encode($result);
    
?>