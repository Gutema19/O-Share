<?php
   session_start();
   require "osharedb.php";

   $result = array();

        $username = htmlentities($_POST['userput']);
        $password = $_POST['passput'];

        $select = mysqli_query($connect, "CALL case_01_login('$username','$password')");
        $rowsum = mysqli_num_rows($select);

        if ($rowsum == 1){
           $result['status'] = 1;
           $_SESSION['login'] = true;

           while($row = mysqli_fetch_assoc($select)){
               $id = $row['id'];
           }
           if($id == 1){
             $result['role'] = 1;
           }else{
             $result['role'] = 2;
           }

           $_SESSION['id'] = $id;

        }else{
           $result['status'] = 0;
        }
    
        echo json_encode($result);
    
    
?>