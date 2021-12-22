<?php 
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();

    header('Location: /O-Share/O-Share/login.php');

    exit;
?>