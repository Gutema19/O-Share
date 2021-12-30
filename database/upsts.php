<?php

session_start();

$result = array();
require "osharedb.php";

$status = $_POST['sts'];
$iddnt = $_POST['dnt'];

$select = mysqli_query($connect, "UPDATE tb_transdonasi SET status_donasi ='$status' WHERE id_transaksi= '$iddnt'");


echo json_encode($result);

?>